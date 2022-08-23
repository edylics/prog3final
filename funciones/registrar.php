<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    include('db.php');

    if (isset($_REQUEST['btn-registrar'])){


        $nombre=$_POST['txt-nombre'];
        $usuario=$_POST['txt-usuario'];
        $clave=$_POST['txt-clave'];
    
        $consulta="INSERT INTO `usuario` (`nombre`, `usuario`, `clave`) VALUES ('$nombre', '$usuario', '$clave');";
    
        $resultado=mysqli_query($conexion, $consulta) or die("ERROR AL Registrar");

    
        mysqli_close($conexion);
        header("location:../login.php");


    }
    
 



?>