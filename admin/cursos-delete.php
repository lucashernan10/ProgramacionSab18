<?php 

require '../conexion/conexion.php';

$total = 0; //Iniciamos variable total en cero

if(isset($_GET['id']) ){ //verificamos si hay un id en la url
	if ($_GET['id'] > 0 ) { //verificamos si el id es mayor a cero

		$sql = "SELECT * FROM cursos WHERE id = " . $_GET['id'];
		$query = $connection->prepare($sql);
		$query->execute();
		$total = $query->rowCount();
	}
}

if($total > 0 ) {
   $sql = "DELETE FROM cursos WHERE id = " . $_GET['id'];
   $query = $connection->prepare($sql);
   // $query->execute();

   try{
   	  $query->execute();
   	  echo '<script> window.location = "mensajes.php"; </script>';
   	  $curso = '<p class="alert alert-success">Mensaje Eliminado con exito</p>';

   	} catch (PDOExeption $e) {
   		$curso = '<p class=alert alert-warning">Error al eliminar el registro '. $e ->getMessage().' </p>'; 
   	}


   }


 ?>