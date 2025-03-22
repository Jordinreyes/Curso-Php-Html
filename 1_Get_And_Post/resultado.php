<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado del form:</h1>
    <?php 
        $nombre = $_POST["nombre"];
        $asignatura = $_POST["asignatura"];

        echo "<b>Nombre: </b> $nombre" . "<br>";
        echo "<b>Asignatura: </b> $asignatura" . "<br>";
        echo "<a href='index.php'>Volver</a>"
    ?>
</body>
</html>