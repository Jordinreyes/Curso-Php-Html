<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <!--  
        Crea una página que compruebe si existe una cookie llamada "nombre".
        Si no existe, muestra un formulario solicitando el nombre del usuario. Una vez enviado el formulario, se debe crear la cookie con una fecha de caducidad de un mes.
        Si la cookie existe, muestra el mensaje "Bienvenido NOMBRE", donde NOMBRE es el nombre almacenado en la cookie.
        Escribe también un archivo reset.php que, al cargarse, elimine la cookie por completo.
    -->
        <form action="login.php" method="POST">
        <h1>Formulario</h1>
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre">
        </div><br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>