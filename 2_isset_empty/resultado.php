<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST"){

            if (empty($_POST["nombre"])){
                echo "<b>Necesitas escribir el nombre</b>" . "<br>";
            }else{
                if (isset($_POST["nombre"])){
                    $nombre = $_POST["nombre"];
                    echo "<b>Nombre: </b> $nombre" . "<br>";
                }
            };
            

            if(empty($_POST["contraseña"])){
                echo "<b>Necesitas escribir la contraseña</b>" . "<br>";
            }else{
                if (isset($_POST["contraseña"])){
                    $contraseña = $_POST["contraseña"];
                    $encriptarContraseña = password_hash($contraseña, PASSWORD_BCRYPT);
                    echo "<b>Contraseña: </b> $encriptarContraseña" . "<br>";
                }
            };
        };

        echo "<a href='isset_empty.php'>Volver</a>"
    ?>
</body>
</html>