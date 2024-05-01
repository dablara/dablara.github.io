<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foros Aranda-Peliculas </title>
    <!-- Bootstrap core CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos personalizados -->
    <style>
        /* Agrega tus estilos personalizados aquí */
    </style>
</head>
<body>
    <?php include 'Encabezado2.php'; ?>
    <main role="main">
        <div class="container">
            <h1 class="mt-5">Foros Aranda</h1>
            <p class="lead">¡Bienvenido a Peliculas,se respetuoso!</p>

            <!-- Formulario para agregar mensajes -->
            <form id="messageForm">
                <div class="form-group">
                    <label for="author">Tu nombre:</label>
                    <input type="text" class="form-control" id="author" required>
                </div>
                <div class="form-group">
                    <label for="title">Título del mensaje:</label>
                    <input type="text" class="form-control" id="title" required>
                </div>
                <div class="form-group">
                    <label for="message">Mensaje:</label>
                    <textarea class="form-control" id="message" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

            <!-- Área para mostrar los mensajes -->
            <div class="mt-5" id="messageArea">
                <!-- Aquí se mostrarán los mensajes -->
            </div>
        </div>
    </main>

    <footer class="text-muted py-5">
        <?php include 'footer.php'; ?>
    </footer>

    <!-- JavaScript de Bootstrap y dependencias -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Script para enviar mensajes -->
    <script>
        $(document).ready(function() {
            // Manejar el envío del formulario de mensaje
            $('#messageForm').submit(function(event) {
                event.preventDefault(); // Evitar el envío del formulario
                var author = $('#author').val();
                var title = $('#title').val();
                var message = $('#message').val();
                if (author && title && message) {
                    // Construir el nuevo mensaje con autor, título y mensaje
                    var newMessage = '<div class="card mb-3"><div class="card-body"><h5 class="card-title">' + title + '</h5><h6 class="card-subtitle mb-2 text-muted">' + author + '</h6><p class="card-text">' + message + '</p></div></div>';
                    // Agregar el nuevo mensaje al área de mensajes
                    $('#messageArea').prepend(newMessage);
                    // Limpiar el formulario
                    $('#author').val('');
                    $('#title').val('');
                    $('#message').val('');
                } else {
                    alert('Por favor, completa todos los campos.');
                }
            });
        });
    </script>
</body>
</html>
