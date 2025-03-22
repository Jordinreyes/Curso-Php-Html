<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>isset</title>
</head>
<body>
    <form action="resultado.php" method="POST">
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre">
        </div><br>

        <div>
            <label for="contraseña">Contraseña: </label>
            <input type="password" name="contraseña" id="contraseña">
        </div><br><br>

        <button type="submit">Login</button>
    </form>
</body>
</html>