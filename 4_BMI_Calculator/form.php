<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="resultado.php" method="POST">
        <div>
            <label for="estatura">Estatura: </label>
            <input type="number" name="estatura" id="estatura">
        </div><br><br>

        <div>
            <label for="peso">Peso: </label>
            <input type="number" name="peso" id="peso">
        </div><br><br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>