<?php
session_start();
if (!isset($_SESSION['usuario'])) {
  header("Location:../index.php");
}else{
  if ($_SESSION['usuario']=="ok") {
    $nombreusuario=$_SESSION["nombreusuario"];
  }
}

?>
<!doctype html>
<html lang="en">
  <head>
    <title>Panel Administrador</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <!-- direcciones mediante variable php -->
    <?php $url="http://".$_SERVER['HTTP_HOST']."/PROYECTOBD" ?>

  <nav class="navbar navbar-expand navbar-light bg-light">
      <div class="nav navbar-nav">
          <a class="nav-item nav-link active" href="<?php echo $url;?>/administrador/index.php">Panel de administrador <span class="sr-only">(current)</span></a>
         <!-- secciones -->
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/productos.php">Productos</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>">Sitio Web</a>
          <a class="nav-item nav-link" href="<?php echo $url;?>/administrador/seccion/cerrar.php">Cerrar seccion</a>
      </div>
  </nav>
    <div class="container">
    <br>
      <div class="row">
        