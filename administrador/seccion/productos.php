<?php include('../template/cabecera.php') ?>
<?php 
include('../config/db.php');
//  phpinfo();
// validar y asignar a variables mediante php
$txtid=(isset($_POST['txtid']))?$_POST['txtid']:"";
$txtnombre=(isset($_POST['txtnombre']))?$_POST['txtnombre']:"";
// imagen
$txtimg=(isset($_FILES['txtimg']['name']))?$_FILES['txtimg']['name']:"";
$accion=(isset($_POST['accion']))?$_POST['accion']:"";
// 3108557563


// probar boton con accion
switch($accion){

    case "agregar":
        echo "Presionado boton agregar";
        $sql = $conexion -> prepare("INSERT INTO producto(NOMBRE,IMAGEN) VALUES(:NOMBRE,:IMAGEN);");
        $sql -> bindParam(':NOMBRE',$txtnombre);
        $sql -> bindParam(':IMAGEN',$txtimg);
        $sql -> execute();
        break;

     case "modificar":
        echo "Presionado boton modificar";
         break;

     case "cancelar":
        echo "Presionado boton cancelar";
        break;
}
// mostrar todos los productos
    $sql =$conexion ->prepare ("SELECT * FROM producto");
    $sql -> execute();
    $listaproducto = $sql -> fetchAll(PDO::FETCH_ASSOC);


?>

<div class="container">
    <div class="row">
        <div class="col-md-5">

    <div class="card">
        <div class="card-header">
            Datos de Productos
        </div>

        <div class="card-body">
            <!-- enctype se usa para que acepte fotografias -->
        <form method="POST" enctype="multipart/form-data">

            <div class="form-group">
            <label for="txtid">ID</label>
            <input type="text" class="form-control" name="txtid" id="txtid"  placeholder="ID">
            </div>

            <div class="form-group">
            <label for="txtnombre">NOMBRE</label>
            <input type="text" class="form-control" name="txtnombre" id="txtnombre"  placeholder="nombre del producto">
            </div>

            <div class="form-group">
            <label for="txtimg">IMAGEN</label>
            <input type="file" class="form-control" name="txtimg" id="txtimg"  placeholder="ID">
            </div>

            <div class="btn-group" role="group" aria-label="">
                <button type="submit" name="accion" value="agregar" class="btn btn-success">Agregar</button>
                <button type="submit" name="accion" value="modificar" class="btn btn-warning">Modificar</button>
                <button type="submit" name="accion" value="cancelar" class="btn btn-info">Cancelar</button>
            </div>

            </form>

        </div>

    </div>

        </div>
        <div class="col-md-7">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>IMAGEN</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?PHP foreach($listaproducto as $producto){?>  
                  <tr>
                        <td><?php echo $producto['ID']; ?></td>
                        <td><?php echo $producto['NOMBRE']; ?></td>
                        <td><<?php echo $producto['IMAGEN']; ?>/td>
                        <td>SELECCIONAR | BORRAR</td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
            </div>
        
    </div>
</div>

<?php include('../template/pie.php') ?>