<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="diseform.css">
  <title>Vehiculo Registrado</title>
</head>
<body>
<div class="container">
    <center><h1>Datos principales</h1></center>
    <h1>Placa:</h1>
    <p><?php echo isset($_POST["placa"]) ? $_POST["placa"] : ''; ?></p>
    <h1>Cedula:</h1>
    <p><?php echo isset($_POST["cedula"]) ? $_POST["cedula"] : ''; ?></p>
    <h1>Descripcion:</h1>
    <p><?php echo isset($_POST["descripcion"]) ? $_POST["descripcion"] : ''; ?></p>
    <center><h1>Datos del vehiculo</h1></center>
    <h1>Marca:</h1>
    <p><?php echo isset($_POST["marca"]) ? $_POST["marca"] : ''; ?></p>
    <h1>Referencia:</h1>
    <p><?php echo isset($_POST["referencia"]) ? $_POST["referencia"] : ''; ?></p>
    <h1>Modelo:</h1>
    <p><?php echo isset($_POST["modelo"]) ? $_POST["modelo"] : ''; ?></p>
    <h1>Cilindraje:</h1>
    <p><?php echo isset($_POST["cilindraje"]) ? $_POST["cilindraje"] : ''; ?></p>  
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <a href="pagprincipal.html" class="cancelbtn"><b> <center>Volver</center></b></a>
  </div>
</body>
</html>
  
  
  <?php
  /*Creacion del post de cada registro*/
  $placa=$_POST["placa"];
  $descripcion=$_POST["descripcion"];
  $cedula=$_POST["cedula"];

  $marca=$_POST["marca"];
  $referencia=$_POST["referencia"];
  $modelo=$_POST["modelo"];
  $cilindraje=$_POST["cilindraje"];

  /*Conexion a la base de datos*/
  $conexion=mysqli_connect("localhost","root","","UninpahuParkXperience");
  $ingreso1="insert into Vehiculo (placa,descripcion) values('$placa','$descripcion')";
  $ingreso2="insert into Marca (marca,referencia,modelo,cilindraje, descripcion,placa)values('$marca','$referencia',$modelo, $cilindraje,'$descripcion','$placa')";
  $eliminar="delete from Usuario where Cedula=333";
  $actualizar="update Usuario set placa='placa editada',descripcion='descripcion editada',cedula=21212";
  mysqli_query($conexion,$ingreso1);
  mysqli_query($conexion,$ingreso2);

  
  ?>


