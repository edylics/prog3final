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
    <title>TRAIDEVS</title>
</head>
<body>
    <?php
        $buscar = $_POST['buscar'];
    ?>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container"><h1 class="logo">TRAIDEVS</h1></div>
            <div class="search-container">

            </div>
        </div>
    </div>
    <div class="sidebar">
        <a href="index.php"><i class="left-menu-icon fa-solid fa-house-chimney"></i></a>
        <a href="http://localhost/TraiDevs_final/login.php"><i class="left-menu-icon fa-solid fa-user"></i></a>
    </div>

    <div class="container">
    <div class="content-container">
    <div class="movie-list-container">

    <?php 
        
        $sql="SELECT * FROM trailer WHERE titulo LIKE '$buscar' '%' ORDER BY codigo DESC";
        $result = mysqli_query($conexion, $sql);  

    while($mostrar = mysqli_fetch_array($result)){

            
?>
        
           <div class="movie-list-wrapper">
               <div class="movie-list">
                   <div class="movie-list-item">
                        <input type="hidden" value="<?php echo $mostrar['codigo']?>" name="txt-codigo"readonly>
                        <span class="movie-list-item-title"><?php echo $mostrar['titulo']?></span>
                        <img src="<?php echo substr($mostrar['img'], 3) ?>" class="movie-list-item-img">
                        <a href="info.php?codigo_info=<?php echo $mostrar['codigo']?>" class="movie-list-item-button">Ver</a>
                    </div>
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