<?php
session_start();
$varsesion = $_SESSION['usuario'];
if($varsesion == null || $varsesion = '') {
    header("location:Inicio_sesión.php");
    die();
  }
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="CSS/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="CSS/style_proove.css">
  <link rel="icon" href="IMG/logo_expro_col_600_215-bicubic.png">
  <title>Proveedores</title>
  <script>
    function confirmar(){
      return confirm('¿Estás seguro?, se eliminará el registro');
    }
  </script>
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

  <div class="soledad">
    <a href="nuevo_proveedor.php" class="titulo">New Supplier</a>
  </div>

  <div class="outer-wrapper">
    <div class="table-wrapper">
      <table>
        <thead>
          <tr>
            <th>Enterprise</th>
            <th>Service</th>
            <th>Contact</th>
            <th>Logo</th>
            <th>Options</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $inc = include("PHP/con_bd.php");
          if($inc){
            $consulta = "SELECT * FROM proveedores";
            $resultado = mysqli_query($conex,$consulta);
            
            while($row = mysqli_fetch_assoc($resultado)){
              ?>
              <tr>
                <td class="solo"><?php echo $row['nombre']; ?></td>
                <td class="solo"><?php echo $row['servicio']; ?></td>
                <td class="solo"><?php echo $row['contacto']; ?></td>
                <td class="logos"><img src="data:image/jpg;base64,<?php echo base64_encode($row['logo']) ; ?>" alt="Company logo"></td>
                <td class="renglon">
                <?php echo "<a href='modificar_prove.php?id_proveedor=".$row['id_proveedor']."' class='uno'>Modify</a>"; ?>
                <?php echo "<a href='PHP/eliminar_prove.php?id_proveedor=".$row['id_proveedor']."' class='dos' onclick='return confirmar()'>Eliminate</a>"; ?>
                </td>
              </tr>
              <?php
            }
            
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>

  <footer>
    <img src="IMG/logo_expro_col_600_215-bicubic.png" alt="Logo de la empresa">
    <p class="copyright">&copy Copyright EXPRO - 2023</p>
  </footer>
</body>
</html>