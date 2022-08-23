
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
    <title>TraiDevs: Iniciar Sesion</title>
</head>
<body>
    <div class="navbar">
        <div class="navbar-container">
            <div class="logo-container"><h1 class="logo">TRAIDEVS</h1></div>
        </div>
    </div>
    <div class="sidebar">
        <a href="http://localhost/TraiDevs/login.php"><i class="left-menu-icon fa-solid fa-user"></i></a>
                <a href="registro.php"><i class="left-menu-icon fa-solid fa-address-book"></i></a>
    </div>
    <div class="container">
    <div class="content-container">

    <form class="form" action="funciones/validar.php" method="post">
    <h1>Sistema de Administrador</h1>
    <p>Usuario </p>
    <input type="text" placeholder="Ingrese su usuario" name="usuario" class="input-login"> 
    <p>Clave </p>
    <input type="password" placeholder="Ingrese su clave" name="clave"class="input-login"> 
    <input type="submit" value="Ingresar" class="input-submit">


    </form> 
    </div>
    </div>
</body>
</html>