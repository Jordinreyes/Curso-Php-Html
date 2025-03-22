<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convesor</title>
</head>
<body>
    <h1>Conversor</h1>
    <form action="" method="POST">
        <div>
            <label for="decimal">Decimal: </label>
            <input type="number" name="decimal" id="decimal">
        </div><br><br>

        <div>
            <label for="binario">Binario: </label>
            <input type="number" name="binario" id="binario">
        </div><br><br>

        <button type="submit">Convertir</button>
    </form><br><br>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if (empty($_POST["decimal"]) && empty($_POST["binario"])){
                echo "<b style='color:#f00'>No puedes dejar los campos vacios</b>" . "<br>";
            }else{
                if (empty($_POST["decimal"])){
                    echo "";
                }else{
                    if(isset($_POST["decimal"])){
                        $decimal = $_POST["decimal"];
                        $convertToBinario = decbin($decimal);
                        echo "El numero decimal <b>$decimal</b>, En binario es $convertToBinario" . "<br>";
                    };
                };

                if (empty($_POST["binario"])){
                    echo "";
                }else{
                    if (isset($_POST["binario"])){
                        $binario = $_POST["binario"];
                        $convertToDecimal = bindec($binario);
                        echo "El numero binario <b>$binario</b>, En decimal es <b>$convertToDecimal</b>". "<br>";
                    };
                };
            };
        };
    ?>
</body>
</html>