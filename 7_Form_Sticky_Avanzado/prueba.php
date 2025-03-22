<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="POST">
        <fieldset>
            <legend>Toppings</legend>
                <?php 
                    $arrayCheckboxMultiple = [
                        "Red Sauce" => "Red Sauce",
                        "White Sauce" => "White Sauce",
                        "Mozarella Cheese" => "Mozarella Cheese",
                        "Pepperoni" => "Pepperoni",
                        "Mushrooms" => "Mushrooms",
                        "Peppers" => "Peppers",
                        "Anchovies" => "Anchovies"
                    ];

                    foreach ($arrayCheckboxMultiple as $key => $value){
                        $sticky = "";
                        if(isset($_POST["toppings"])){
                            foreach($_POST["toppings"] as $final){
                                if ($final == $key){
                                    $sticky = "checked";
                                };
                            };
                        };

                        echo "<div>
                                <input type=\"checkbox\" name=\"toppings[]\" value=\"$key\" $sticky>
                                <label>$value</label>
                             </div>";
                    };
                ?>
        </fieldset>
        <br>
        <button type="submit">Enviar</button>
    </form>
        <?php 
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $separadoComas = implode(", " , $_POST["toppings"]);
                echo $separadoComas;
            };
        ?>
</body>
</html>