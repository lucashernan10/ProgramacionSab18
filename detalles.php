<?php include 'funciones/funciones.php'; ?>

<?php 
if (isset($_GET['id'])) {
  $id=$_GET['id'];
}

$curso = getDetalleCurso($id);


?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo parametros()['empresa']; ?></title>	  
  	<meta name="description" content="Cursos de programacion y diseño en Ciudad del este- Paraguay">
    <meta name="keywords" content="programacion, Cursos, diseño, ciudad del este">
    <?php include 'includes/head.php'; ?>    
</head>
<body>
	  <!-- INICIO DEL HEADER -->
     <?php include 'includes/header.php'; ?>
    <!-- /.FIN DEL HEADER -->

    <!-- INICIO DEL CONTENIDO -->
    <main>
      <section class="main-header">
      <div class="container">
        <h1><?php echo $curso['nombre'] ?></h1> 
        <h2><?php echo $curso['descripcion_corta'] ?></h2>     
      </div>      
      </section>

      <section class="contenido">
        <div class="container">
          <div class="col-md-3">
            <h3>Detalles</h3>

            <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Precio</h4>
                <span><?php echo $curso['precio'] ?></span>                
              </div>
            </div>

            <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Duracion</h4>
                <span><?php echo $curso['duracion'] ?></span>                
              </div>
            </div>


            <div class="media">
              <div class="media-left">                
              </div>
              <div class="media-body">
                <h4 class="media-heading">Dias</h4>
                <span><?php echo $curso['dias'] ?></span>                
              </div>
            </div>

          </div> 

          <div class="col-md-9">
            <p>descripcion</p>
          </div>         
        </div>        
      </section>
    
    </main>
    <!-- /.FIN DEL CONTENIDO -->

    <!-- INICIO DEL FOOTER -->
     <?php include 'includes/footer.php'; ?>
    <!-- /.FIN DEL FOOTER -->
    <?php include 'includes/script.php'; ?>
</body>
</html>