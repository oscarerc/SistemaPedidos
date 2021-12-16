<!-- RECEPCION DE DATOS PHP -->
<?php
session_start();

 if($_POST) { 
    // linea que sebe cambiar por una consulta en la bd
     if( ($_POST['usuario']=="oscar") && ($_POST['contrasenia']=="pipe") ){

        $_SESSION['usuario']="ok";
        $_SESSION['nombreusuario']="oscar";
        header("Location:inicio.php");
     }else{
         $mensaje="El usuario y o constrasenia son incorrectos";
     }
    }
// se puede hacer mmediante un busqueda ala bd
 ?>

<!doctype html>
<html lang="en">

  <head>
    <title>Loguin</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/estilosadmin.css" type="text/css">

    <link rel="stylesheet" href="../css/estilos.css">

    
</head>
  <body>

  <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-2"></div>
            <div class="col-lg-6 col-md-8 login-box">
                <div class="col-lg-12 login-title">
                    ADMIN PANEL
                </div>

                <div class="col-lg-12 login-form">
                    <div class="col-lg-12 login-form">

                        <form action="inicio.php" method="post">

                            <div class="form-group">
                                <label class="form-control-label">USUARIO</label>
                                <input type="text" class="form-control"name="usuario">
                            </div>

                            <div class="form-group">
                                <label class="form-control-label">CONTRASEÑA</label>
                                <input type="text" class="form-control" name="contrasenia" >
                            </div>

                         
                                <div class="col-lg-7 login-btm login-button">
                                    <button  type="submit" class="btn btn-outline-primary">LOGIN</button>
                                </div>
                            </div>
                        </form>
                 
                    </div>
                </div>
                <div class="col-lg-3 col-md-2"></div>
