<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="resultado.php" method="POST">
        <fieldset>
            <legend>Black Goose Bistro | Pizza-on-Demand</legend>
            <p>Your Information</p>
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre">
                </div><br>

                <div>
                    <label for="address">Address:</label>
                    <input type="text" id="address" name="address">
                </div><br>

                <div>
                    <label for="numeromobile">Telephone Number:</label>
                    <input type="text" id="numeromobile" name="numeromobile">
                </div><br>

                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div><br>

                <div>
                    <label for="instructions">Delivery Instructions:</label><br>
                    <textarea name="instructions" rows="4" cols="60" maxlength="400" id="form-story" placeholder="No more than 400 characters long"></textarea>
                </div>
        </fieldset><br><br>
        
        <fieldset>
            <legend>Design Your Dream Pizza</legend>
            <p>Pizza specs</p>
            <?php 
                $pizza = [
                    "Classic White" => "Classic White",
                    "Multigrain" => "Multigrain",
                    "Cheese-Stuffed Crust" => "Cheese-Stuffed Crust",
                    "Gluten-Free" => "Gluten-Free" 
                ];

                foreach ($pizza as $value => $key){
                    echo "<div>";
                        echo "<input type=\"radio\" name=\"pizza\" value=\"$value\">";
                        echo "<label>$key</label>";
                    echo "</div>";
                }
            ?>
        </fieldset><br><br>

        <fieldset>
            <legend>Toppings (Choose as many you want)</legend>
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
                    echo "<div>";
                        echo "<input type=\"checkbox\" name=\"toppings[]\" value=\"$value\">";
                        echo "<label>$key</label>";
                    echo "</div>";
                }
            ?>
        </fieldset><br><br>

        <fieldset>
            <legend>Number</legend>
            <p>How many pizza you want
                <select name="numeros" id="numeros">
                    <?php 
                        $range = range(0,10);
                        foreach ($range as $value){
                            echo "<option>$value</option>";
                        };
                    ?>
                </select>
            </p>
        </fieldset><br><br>

        <button type="submit">Bring me a pizza!</button><br><br>
    </form>
</body>
</html>