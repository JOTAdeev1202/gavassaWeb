<?php
session_start();

// Define tu contraseÃ±a aquÃ­
$claveCorrecta = "890200408-9";

// Si se enviÃ³ el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if ($_POST["password"] === $claveCorrecta) {
        $_SESSION["acceso_autorizado"] = true;
        header("Location: empleados.php");
        exit();
    } else {
        $error = "ContraseÃ±a incorrecta";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Acceso Empleados - Gavassa</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
  html, body {
    height: 100%;
  }

  .centro-login {
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
  }
</style>
</head>
<body class="centro-login text-center" style="background-color: #f9f9f9;">
    
<header class="site-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.html">
            <img src="img/logo.png" alt="Logo de Pastas Gavassa" height="50">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="nosotros.html">Nuestra Compañía</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarProductos" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Productos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarProductos">
                        <a class="dropdown-item" href="gavassa.html">Gavassa</a>
                        <a class="dropdown-item" href="catalogo.html">Catálogo</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="recetas.html">Recetas</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarServicios" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Servicios
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarServicios">
                        <a class="dropdown-item brochure-cat" href="img/brochure1.jpg">Maquila</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="cambiaton.html">Cambiatón</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarContacto" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Contáctenos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarContacto">
                        <a class="dropdown-item" href="trabajo.html">Trabaje con nosotros</a>
                        <a class="dropdown-item" href="proveedor.html">Quiere ser nuestro proveedor?</a>
                        <a class="dropdown-item" href="pqr.html">Formato peticiones quejas y reclamos</a>
                        <a class="dropdown-item" href="compras.html">Quiere comprar nuestro producto?</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link link-blanco" href="login.php"><i class="fa fa-lock"></i> Acceso empleados</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://www.psepagos.co/PSEHostingUI/DatabaseTicketOffice.aspx?ID=10078" target="_blank" rel="noopener noreferrer">
                        <img src="img/logo-pse.png" height="40" alt="Logo de PSE">
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<h2 class="mb-4">🔒 Acceso restringido para empleados Gavassa</h2>

<form method="post" style="max-width: 300px; width: 100%;">
  <input class="form-control mb-2" type="password" name="password" placeholder="Ingrese la contraseña" required>
  <button class="btn btn-danger btn-block" type="submit">Entrar</button>
 
  <?php if (!empty($error)) echo "<p class='text-danger mt-2'>$error</p>"; ?>
</form>




	


</body>
</html>