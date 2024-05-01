<?php
// Incluir el archivo de conexión a la base de datos
include 'conexion.php';

// Inicializar la sesión si no está iniciada
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener los valores del formulario
    $usuario = $_POST['usuario'];
    $clave = $_POST['clave'];

    // Consulta SQL para verificar si el usuario existe
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$clave'";
    $resultado = mysqli_query($conn, $sql);

    // Verificar si se encontró algún usuario
    if (mysqli_num_rows($resultado) ) { //echo 'entra';
        // Usuario encontrado, redirigir a la página indexforo.php
        $_SESSION['usuario_autenticado'] = true; // Marcar al usuario como autenticado
        header('Location: indexforo.php');
        //echo "Redirigiendo a indexforo.php..."; // Mensaje de depuración
        exit(); // Salir del script después de redirigir
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="Imagenes/viajes.jpg">

  <title>Acceso a Viajes por el Mundo</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

  <!-- Bootstrap core CSS -->
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>

  <!-- Custom styles for this template -->
  <link href="CSS/signin.css" rel="stylesheet">
</head>

<body class="text-center">
  <form class="form-signin" method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <img class="mb-4" src="Imagenes/foro.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Login </h1>
    <label for="inputEmail" class="sr-only">Usuario</label>
    <input type="text" id="inputEmail" class="form-control" placeholder="Nombre de Usuario" required autofocus name="usuario">
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="clave">
    <div class="checkbox mb-3">
      <label>
       <p> Si no tienes cuenta </p> <a href='registrousuario.php'>Registrate </a>
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="Enviar">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2023-2024</p>
  </form>
</body>
</html>
