<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sticky</title>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Toppings</legend>
                <?php 
                    $toppings = [
                        "Red Sauce" => "Red Sauce",
                        "White Sauce" => "White Sauce",
                        "Mozarella Cheese" => "Mozarella Cheese",
                        "Pepperoni" => "Pepperoni",
                        "Mushrooms" => "Mushrooms",
                        "Peppers" => "Peppers",
                        "Anchovies" => "Anchovies"
                    ];

                    foreach($toppings as $value => $key){
                        $sticky = "";
                        if(isset($_POST["toppings"])){
                            foreach($_POST["toppings"] as $datos){
                                if($datos == $value){
                                    $sticky = "checked";
                                };
                            };
                        };
                        echo "<div>";
                            echo "<input type=\"checkbox\" name=\"toppings[]\" value=\"$value\" $sticky>";
                            echo "<label>$key</label>";
                        echo "</div>";
                    };
                ?>
        </fieldset><br>
        <button type="submit">Enviar</button>
    </form><br>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_POST["toppings"])){
                echo "<h2 style='color:#f00'>Tienes que elegir al menos 1 toppins</h2>";
            }else{
                if(isset($_POST["toppings"])){
                    echo "<h1 style='color:#48e'>Your toppings</h1>";
                    foreach($_POST["toppings"] as $value){
                        echo "<li>$value</li>";
                    }
                }
            }
        }
    ?>
</body>
</html>