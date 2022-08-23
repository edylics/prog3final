<?php
include('funciones/db.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link 
        href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&family=Sen:wght@400;700;800&display=swap" 
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Trailer</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container"><h1 class="logo">TRAIDEVS</h1></div>
        </div>
    </div>
    <div class="sidebar">
        <a href="index.php"><i class="left-menu-icon fa-solid fa-house-chimney"></i></a>
        <a href="funciones/cerrar.php" alt="cerrar sesion"><i class="left-menu-icon fa-solid fa-rectangle-xmark"></i></a>
    </div>

    <div class="container">
    <div class="content-container">
        <div class="tabla">

<?php 
    $codigo_info= $_GET['codigo_info'];
    $sql="SELECT * FROM trailer WHERE codigo = '$codigo_info'";
    $result = mysqli_query($conexion, $sql);  

    while($mostrar = mysqli_fetch_array($result)){

            
?>
    <div class="seleccionada">
        <div class="imagen">
            <img src="<?php echo substr($mostrar['img'], 3) ?>" class="movie-list-item-img">
        </div>
        <div class="texto">
            <h2><?php echo $mostrar['titulo']?></h2><br>
            <p> <h3>Reseña: </h3><br><?php echo $mostrar['reseña']?></p><br>
            <p> <h3>Actores: </h3><br><?php echo $mostrar['actores']?></p><br>
            <p> <h3>Año: </h3> <br><?php echo $mostrar['año']?></p>
        </div>
        <div class="video">
            <iframe width="500" height="300" src="<?php echo $mostrar['enlace']?>" target="_blank" 
            title="YouTube video player" frameborder="0" allow="accelerometer; 
            autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen></iframe>
        </div>


    </div>

                
                

<?php 
    }
?>
                

        </div>
    </div>
    </div> 
</body>
</html>