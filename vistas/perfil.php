<?php
session_start();
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion = '') {
    header("location:Inicio_sesión.php");
    die();
  }

include('PHP/con_bd.php');
$consulta2 = "SELECT * FROM  usuarios WHERE name_user = '".$_SESSION['usuario']."'";
$resultado2 = mysqli_query($conex,$consulta2);
$row = mysqli_fetch_assoc($resultado2);
$name = $row['nombre'];
$apellidopa = $row['apellido_paterno'];
$apellidoma = $row['apellido_materno'];
$mail = $row['correo'];
$tel = $row['telefono'];
$puesto = $row['puesto_de_trabajo'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style-usuario.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="IMG/logo_expro_col_600_215-bicubic.png">
    <title>Perfil</title>
</head>
<body>
    
    <header>
        <img src="IMG/logo_expro_col_600_215-bicubic.png">
    </header>

    <nav>
        <ul class="menu-horizontal">
            <li><a href="index.php">Home</a></li>
            <li><a href="proove.php">Suppliers</a></li>
            <li><a href="clientes.php">Customers</a></li>
            <li>
                <a href="new_inform.php">New report</a>
            </li>
            
            <li>
                <a href="perfil.php">Profile</a>
                <ul class="menu-vertical">
                    <li><a href="PHP/cerrar_sesion.php">Sign off</a></li>
                    <li><a href="perfil.php">Show Profile</a></li>
                </ul>
            </li>
        </ul>
    </nav>

    <div class="informacion">
        
        <ul>
            <li><b>Name </b> <br> <?php echo $name; ?></li>
            <li><b>Last Name </b> <br> <?php echo $apellidopa . " "; echo $apellidoma; ?></li>
            <!-- <li><b>Apellido materno </b> <br> <?php //echo $apellidoma; ?></li> -->
            <li><b>Email </b> <br> <?php echo $mail; ?></li>
            <li><b>Phone number </b> <br> <?php echo $tel ?></li>
            <li><b>Job </b> <br> <?php echo $puesto ?></li>
        </ul>
    </div>
    <footer>
        <img src="IMG/logo_expro_col_600_215-bicubic.png" alt="Logo de la empresa">
        <p class="copyright">&copy Copyright EXPRO - 2023</p>
    </footer>
</body>
</html>