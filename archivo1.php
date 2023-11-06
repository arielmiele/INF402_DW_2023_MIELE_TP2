<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombre"])) {
    // Validar y almacenar el nombre en la sesión
    $nombre = $_POST["nombre"];
    $_SESSION["nombre"] = $nombre;

    // Redireccionar a archivo2.php
    header("Location: archivo2.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Archivo 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form method="POST" action="archivo1.php">
            <div class="form-group">
                <label for="nombre">Introducir nombre:</label>
                <input type="text" class="form-control" name="nombre" required>
            </div><br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>

</html>