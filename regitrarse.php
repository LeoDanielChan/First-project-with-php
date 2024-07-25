<?php 

include("PHP/regis_sesion.php");

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style_registrarse.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
    <link rel="icon" href="IMG/logo_expro_col_600_215-bicubic.png">
    <title>Registrate</title>
</head>
<body>
    
    <header>
        <div class="encabezado">
            <img src="IMG/logo_expro_col_600_215-bicubic.png" alt="Logo de la empresa">
        </div>
    </header>

    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Sign up
                </div>
                <form id="loginform" method="POST" action="">
                    <input type="text" name="nombre" placeholder="Name" required>
                    <input type="text" name="apellido_pa" placeholder="Last name" required>
                    <input type="text" name="user_name" placeholder="Username" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="tel" name="tel" placeholder="Phone number" required>
                    <input type="text" name="puesto" placeholder="Job" required>
                    <div class="select">
                        <select name="area" required>
                            <option selected disabled>Select the work area</option>
                            <option value="1">Administration</option>
                            <option value="2">Accounting</option>
                            <option value="3">Management</option>
                            <option value="4">Finance</option>
                            <option value="5">Gestión</option>
                            <option value="6">Producción y operaciones</option>
                            <option value="7">Recursos humanos</option>
                            <option value="8">Ventas y mercadeo</option>
                        </select>
                    </div>
                    <div class="select">
                        <select name="tipo_user" required>
                            <option selected disabled>Select the type of user</option>
                            <option value="1">Administrativo</option>
                            <option value="2">Empleado</option>
                        </select>
                    </div>
                    <input type="password" placeholder="Crea una contraseña" name="password" required>
                    <button type="submit" title="Registrarse" name="registrarse">Sign up</button>
                </form>
            </div>
        </div>
    </div>

    
    <footer>
        <img src="IMG/logo_expro_col_600_215-bicubic.png" alt="Logo de la empresa">
        <p class="copyright">&copy Copyright EXPRO - 2023</p>
    </footer>
</body>
</html>