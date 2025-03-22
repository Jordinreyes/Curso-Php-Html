


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="login.php" method="POST">
        <h1>Formulario</h1>
        <div>
            <label for="usuario">Usuario</label>
            <input type="text" name="usuario" id="usuario">
        </div><br>

        <div>
            <label for="contraseña">Contraseña: </label>
            <input type="password" name="contraseña" id="contraseña">
        </div><br>

        <button type="submit">Login</button>
    </form>

</body>
</html>