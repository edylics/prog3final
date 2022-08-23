<?php
include('db.php');
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
session_start();
$_SESSION['usuario']=$usuario;


$consulta="SELECT * FROM usuario WHERE usuario = '$usuario' AND clave = '$clave'";
$resultado=mysqli_query($conexion,$consulta);

$filas= mysqli_num_rows($resultado);

if($filas){

    header("location: ../index.php");

}
else{

  echo '<script language="javascript">alert("Nombre de Usuario o Clave Incorrecto"); window.location.href="../login.php" </script>';

    
}
mysqli_free_result($resultado);
mysqli_close($conexion);

?>