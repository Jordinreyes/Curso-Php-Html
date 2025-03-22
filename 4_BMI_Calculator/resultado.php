<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado: </h1>
    <img src="datos.png" alt=""><br><br>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["estatura"]) && empty($_POST["peso"])){
                echo "<b style='color:#f00'>No puedes dejar los campos vacio</b>" . "<br>";
            }else{
                if(isset($_POST["estatura"]) && isset($_POST["peso"])){
                    $estatura = $_POST["estatura"];
                    $peso = $_POST["peso"];
                    $pasarCentimetro = $estatura / 100;
                    $masa = $peso / $pasarCentimetro ** 2;
                    $extraer3numeros = substr($masa,0,4);

                    if ($masa < 18.5){
                        echo "<p>Peso inferior al normal</p>" . "<br>";
                        echo "<b>Tu peso es: </b> $extraer3numeros" . "<br>";
                    }else if ($masa >= 18.5 && $masa < 24.9){
                        echo "<p>Normal</p>" . "<br>";
                        echo "<b>Tu peso es: </b> $extraer3numeros" . "<br>";
                    }else if ($masa >= 25 && $masa < 29.9){
                        echo "<p>Peso superior al normal</p>" . "<br>";
                        echo "<b>Tu peso es: </b> $extraer3numeros" . "<br>";
                    }else if ($masa > 30){
                        echo "<p>Obesidad</p>" . "<br>";
                        echo "<b>Tu peso es: </b> $extraer3numeros" . "<br>";
                    }else{
                        echo "Error 404";
                    };
                };
            };
        };
    ?>
    <br><br>
    <button><a href="form.php">Volver</a></button>
</body>
</html>