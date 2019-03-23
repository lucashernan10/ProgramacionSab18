<?php
session_start();
if (!isset($_SESSION['logueado'])) {
  header('Location: login.php');
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

        <script>
    function subir_imagen(input, carpeta)
        {
          self.name = 'opener';
          var name = document.getElementsByName("logo")[0].value;
          remote = open('libs/subir_imagen.php?name='+name+'&input='+input+'&carpeta='+carpeta ,'remote', 'align=center,width=600,height=300,resizable=yes,status=yes');
          remote.focus();
        }

</script>

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <?php include 'includes/header.php'; ?>

  <?php

      

        //Actualizar datos del Usuario
        if(isset($_POST)){
          if(isset($_POST['Actualizar']) && $_POST['Actualizar'] == 'Actualizar'  && $_POST['id'] > 0){

              $sql = "UPDATE parametros set empresa = :empresa, logo =:logo, favicon=:favicon, telefono =:telefono, whatsApp =:whatsApp, direccion =:direccion, email =:email, twitter =:twitter, youtube = :youtube, google_maps =:google_maps, descripcion =:descripcion, fecha_update=NOW() WHERE id = " . $_POST['id'];

              $data = array(
                'empresa' => $_POST['empresa'],
                'logo' => $_POST['logo'],
                'favicon' => $_POST['favicon'],
                'telefono' => $_POST['telefono'],
                'whatsApp' => $_POST['whatsApp'],
                'direccion' => $_POST['direccion'],
                'email' => $_POST['email'],
                'twitter' => $_POST['twitter'],
                'youtube' => $_POST['youtube'],
                'google_maps' => $_POST['google_maps'],
                'descripcion' => $_POST['descripcion']


              );

              $query = $connection->prepare($sql);

              try{

                $query->execute($data);

              } catch(Exeption $e){

            }

          }
      }

        $total = 0;

       
              $sql = "SELECT * FROM parametros WHERE id = 1";
              $query = $connection->prepare($sql);
              $query->execute();
              $total = $query->rowCount();  


          

  ?>
  
  <!-- Left side column. contains the logo and sidebar -->
  
  <?php include 'includes/aside.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Lista de parametros  <a href="parametros.php" class="btn btn-sucess">+ Agregar</a>
      </h1>
      
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>

    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <!-- FORMULARIO -->
      <div class="col-sm-12">
        <div class="panel row">

         <?php include 'includes/mensajes.php'; ?>


      
       <div class="col-md-12">
        <div class="panel row">
         
         <?php if($total > 0) {
          $parametro = $query->fetch();
          //var_dump($usuario0);

          ?>

          <form action="" method="POST" name="form">
            <div class="form-group col-m-d-6">
            
              <label>Empresa</label>
              <input type="text" name="empresa" class="form-control" value="<?php echo $parametro['empresa'] ?>" required>

              

              <label>Logo</label>
             <input type="text" name="logo"  class="form-control" id="logo" value="<?php echo $parametro['logo'] ?>" onclick="subir_imagen('logo', 'pagina')">

              <label>Favicon</label>
              <input type="imagen" name="favicon" value="<?php echo $parametro['favicon'] ?>" class="form-control" required>

              <label>Telefono</label>
              <input type="precio" name="telefono" value="<?php echo $parametro['telefono'] ?>" class="form-control" required>
              
             

              <label>WhatsApp</label>
              <input type="text" name="whatsApp" class="form-control" value="<?php echo $parametro['whatsApp'] ?>" required>

              <label>Direccion</label>
              <input type="text" name="direccion" class="form-control" value="<?php echo $parametro['direccion'] ?>" required>

              <label>Email</label>
              <input type="text" name="email" class="form-control" value="<?php echo $parametro['email'] ?>" required>

              <label>Twitter</label>
              <input type="text" name="twitter" class="form-control" value="<?php echo $parametro['twitter'] ?>" required>

              <label>Youtube</label>
              <input type="text" name="youtube" class="form-control" value="<?php echo $parametro['youtube'] ?>" required>

              <label>Google_maps</label>
              <input type="text" name="google_maps" class="form-control" value="<?php echo $parametro['google_maps'] ?>" required>

              <label>Descripcion</label>
              <input type="text" name="descripcion" class="form-control" value="<?php echo $parametro['descripcion'] ?>" required>

               <input type="text" name="id" class="form-control" value="<?php echo $parametro['id'] ?>" required>

              <br>
              <input type="submit" class="btn btn-success" name="Actualizar" value="Actualizar">

            </div>
          </form>

          <?php } ?>
        
        </div>
      </div>

      
      <!-- /FIN DE LISTADO DE DATOS -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include 'includes/footer.php'; ?>  
 
 </div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>