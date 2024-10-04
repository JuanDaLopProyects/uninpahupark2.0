<!DOCTYPE html>
<html lang="en">
<head>
    
    <link rel="stylesheet" type="text/css" href="diseform.css">
</head>
<body>
    <div class="container" style="background-color:orange"  >
        <a href="pagprincipal.html" class="botton"><b> <center> Entrar </center></b></a>
    </div>
<?php
    /*Creacion del post para el login*/
  $u1=$_POST["usuario"];
  $c1=$_POST["pswd"];

  $conexion=mysqli_connect("localhost","root","","UninpahuParkXperience");
  $login="insert into login(Usuario,Contraseña)values ('$u1','$c1')";
  mysqli_query($conexion,$login);
  

  

?>

</body>
</html>
