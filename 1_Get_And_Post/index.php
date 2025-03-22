<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
</head>
<body>
    <form action="resultado.php" method="POST">
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre">
            
        </div><br>

        <label for="asignatura">Asignatura: </label>
        <select name="asignatura" id="asignatura">
            <option value="ingles">Ingles</option>
            <option value="matematicas">Matematicas</option>
            <option value="quimica">Quimica</option>
            <option value="algebra">Algebra</option>
        </select><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>