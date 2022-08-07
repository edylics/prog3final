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
    <title>TraiDevs: Registrar</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container"><h1 class="logo">TRAIDEVS</h1></div>
 
        </div>
    </div>
    <div class="sidebar">
        <a href="index.php"><i class="left-menu-icon fa-solid fa-house-chimney"></i></a>

    </div>

    <div class="container">
    <div class="content-container">

        
            <form class="form" action="funciones/registrar.php" method="Post" enctype="multipart/form-data">
                <h1>Registrar Usuarios</h1>
                <p>Nombre</p>
                <input type="text" name="txt-nombre" id="" required>
                <p>Usuario</p>
                <input type="text" name="txt-usuario" id="" required>
                <p>Clave</p>
                <input type="text" name="txt-clave" id="" required> <br> <br>
                <button class="button" type="submit" name="btn-registrar">Registrar</button>
            </form>
    </div>
    </div>
    </body>
</html>
