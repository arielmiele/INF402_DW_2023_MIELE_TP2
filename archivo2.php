<?php
session_start();

if (!isset($_SESSION["nombre"])) {
    // Si no hay un nombre en la sesión, redirigir de vuelta a archivo1.php
    header("Location: archivo1.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recuperar los datos del segundo formulario y mostrarlos
    echo "<h1>Información recibida:</h1>";
    foreach ($_POST as $key => $value) {
        echo "<p><strong>$key:</strong> $value</p>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Archivo 2</title>
    <!-- Agregar Bootstrap CDN para el maquetado -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <form method="POST" action="archivo2.php">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $_SESSION["nombre"]; ?>" readonly>
            </div>
            <!-- Agregar otros campos del formulario aquí (ejemplo) -->
            <div class="form-group">
                <label for="campo1">Campo 1:</label>
                <input type="text" class="form-control" name="campo1">
            </div>
            <div class="form-group">
                <label for="campo2">Campo 2:</label>
                <input type="text" class="form-control" name="campo2">
            </div>
            <div class="form-group">
                <label for="campo3">Campo 3:</label>
                <input type="text" class="form-control" name="campo3">
            </div>
            <div class="form-group">
                <label for="campo4">Campo 4:</label>
                <input type="text" class="form-control" name="campo4">
            </div>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</body>

</html>