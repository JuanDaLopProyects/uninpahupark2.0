<html>
<head>
  <link rel="stylesheet" type="text/css" href="diseform.css">
</head>
<body>
  <div class="container">
    <h1>Bienvenid@</h1>
    <p><?php echo isset($_POST["nombre"]) ? $_POST["nombre"] : ''; ?></p>
    <h1>Identificado con numero de C.C:</h1>
    <p><?php echo isset($_POST["cedula"]) ? $_POST["cedula"] : ''; ?></p>
    <h1>Numero de Celular:</h1>
    <p><?php echo isset($_POST["celular"]) ? $_POST["celular"] : ''; ?></p>
    <h1>Identificado con carnet estudiantil:</h1>
    <p><?php echo isset($_POST["carnet"]) ? $_POST["carnet"] : ''; ?></p>
  </div>


  <?php
  /*Creacion del post de cada registro*/
  $cedula=$_POST["cedula"];
  $contrasena=$_POST["psw"];
  $nombre=$_POST["nombre"];
  $apellido=$_POST["apellido"];
  $celular=$_POST["celular"];
  $carnet=$_POST["carnet"];
  /*Conexion a la base de datos*/
  $conexion=mysqli_connect("localhost","root","","uninpahuparkxperience");
  $ingreso="insert into usuario (Cedula,Contrasena,Nombre,Apellido,Telefono,Codigo) values($cedula,'$contrasena','$nombre','$apellido',$celular,$carnet)";
  $eliminar="delete from usuario where Nombre = '1'";
  $actualizar="update usuario set Nombre='nombre editado',Apellido='apellido editado',Telefono=21212,Codigo=121212 where Cedula=102030";
  mysqli_query($conexion,$ingreso);
  ?>
</body>

<div class="container" style="background-color:#f1f1f1">
<a href="login.html" class="cancelbtn"><b> <center>Iniciar Sesion </center></b></a>
</div>

</html>
