<?php 
//OBTENER LISTADO DE PARAMETROS
function parametros(){
	include 'conexion/conexion.php';
	$sql = "SELECT * FROM parametros where id = 1";
	$query = $connection->prepare($sql);
	$query->execute();

	if(!$query->rowCount() > 0) {
		$sql = "INSERT INTO parametro (id) values (1)";
		$query2 = $connection->prepare($sql);
		$query2->execute();
	}
	//$query->execute();
	return $query->fetch();
}


function getCursos($cantidad)
{
	include 'conexion/conexion.php';
	$sql = "SELECT * FROM cursos WHERE activo = 1 LIMIT " . $cantidad;
	$query = $connection->prepare($sql);
	$query->execute();

	return $query->fetchAll();
}

function getDetalleCurso($id){
	include 'conexion/conexion.php';
	$sql = "SELECT * FROM cursos WHERE id = " . $id;
	$query = $connection->prepare($sql);
	$query->execute();

if ($query->rowCount() > 0) {
	return $query->fetch();
 }
 return 0;
}


//GUARDAR MENSAJE DE FORMULARIO DE CONTACTO
function registrar_mensaje($post){

	include 'conexion/conexion.php';


	try {
		$sql = "INSERT INTO mensajes (nombre, email, asunto, telefono, mensaje) values (:nombre, :email, :asunto, :telefono, :mensaje)";
			//Definiendo una variable $data con los valores a guardarse en la consulta sql
		$data = array(
			'nombre' => $post ['nombre'],
			'email' => $post ['email'],
			'asunto' => $post ['asunto'],
			'telefono' => $post ['telefono'],
			'mensaje' => $post ['mensaje'],
			);
			$query = $connection->prepare($sql);

			if ( $query->execute($data)) {
				return "mensaje enviado";
				// return enviar_email($post);
			}

			return 'No se pudo insertar en la Base de Datos';


}	catch (PDOException $e) {
		//si sale mal devuelve el error con el motivo
	return
	'Error>>>'.$e;

	}

}

function enviar_email($post){
	$headers = "From: ". $post['email'];
	if(mail('sac@capacit.com.py', $post['asunto'], $post['mensaje'], $headers)){
		return '<div class="alert alert-success" role="alert">EXITO: Mensaje Enviado Exitosamente!<br>En Breve nos contactaremos contigo :) </div)';

	}

	return 'No se pudo enviar el mensaje';

}


?>


