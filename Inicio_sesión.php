<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./public/assets/css/style.css">
    <link rel="stylesheet" href="./public/assets/css/style-sesion.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet"> 
    <link rel="icon" href="./public/assets/images/logo_expro_col_600_215-bicubic.png">
    <title>Iniciar sesión</title>
</head>
<body>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    
    <header>
        <div class="encabezado">
            <img src="./public/assets/images/logo_expro_col_600_215-bicubic.png" alt="Logo de la empresa">
        </div>
    </header>

    <div id="contenedor">
        <div id="central">
            <div id="login">
                <div class="titulo">
                    Welcome!
                </div>
                <form id="loginform" method="post" action="PHP/inicio_ses.php">
                    <input type="text" name="usuario" placeholder="User" required>
                    <input type="password" placeholder="Password" name="password" required>
                    <button type="submit" title="Ingresar" name="Ingresar">Enter</button>
                </form>
                <div class="pie-form">
                    <a href="">Lost your password?</a>
                    <a href="./regitrarse.php">You do not have an account? Sign up</a>
                </div>
            </div>
        </div>
    </div>

    
    <footer>
        <img src="./public/assets/images/logo_expro_col_600_215-bicubic.png" alt="Logo de la empresa">
        <p class="copyright">&copy Copyright EXPRO - 2023</p>
    </footer>
</body>
</html>