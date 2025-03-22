<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
</head>
<body>
    <form action="" method="POST">
        <h1>Conversor</h1>
        <div>
            <label for="decimal">Decimal: </label>
            <input type="number" name="decimal" value="<?php echo isset($_POST["decimal"]) ? $_POST["decimal"] : ''; ?>">
        </div><br>
        
        <div>
            <label for="binario">Binario: </label>
            <input type="number" name="binario" value="<?php echo isset($_POST["binario"]) ? $_POST["binario"] : ''; ?>">
        </div><br>

        <button type="submit">Convertir</button>
    </form><br><br>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["decimal"]) && empty($_POST["binario"])){
                echo "<h2 style='color:#f00'>No puedes dejar los campos en vacio</h2>";
            }else{
                if(empty($_POST["decimal"])){
                    echo "";
                }else{
                    if(isset($_POST["decimal"])){
                        $decimal = $_POST["decimal"];
                        $convertToBinary = decbin($decimal);
                        echo "El numero decimal <b>($decimal)</b>, En binario es <b>$convertToBinary</b>" . "<br>";
                    };
                };

                if(empty($_POST["binario"])){
                    echo "";
                }else{
                    if(isset($_POST["binario"])){
                        $binario = $_POST["binario"];
                        $convertToDecimal = bindec($binario);
                        echo "El numero binario <b>($binario)</b>, En decimal es <b>$convertToDecimal</b>";   
                    };
                };
            };
        };
    ?>
</body>
</html>