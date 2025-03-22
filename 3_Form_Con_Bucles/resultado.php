<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta</title>
</head>
<body>
    <h1>Pedido</h1>
    <fieldset>
        <legend>Your information</legend>
            <?php 
                if($_SERVER["REQUEST_METHOD"] == "POST"){

                    if(empty($_POST["nombre"])){
                        echo "<li style='color:#f00'>Tienes que escribir el nombre</li>" . "<br>";
                    }else{
                        if(isset($_POST["nombre"])){
                            $nombre = $_POST["nombre"];
                            echo "<li><b>Nombre:</b>  $nombre</li>" . "<br>";
                        };
                    };

                    if (empty($_POST["address"])){
                        echo "<li style='color:#f00'>Tienes que escribir la dirrecion</li>" . "<br>";
                    }else{
                        if(isset($_POST["address"])){
                            $dirrecion = $_POST["address"];
                            echo "<li><b>Direccion:</b> $dirrecion</li> " . "<br>";
                        };
                    };

                    
                    if (empty($_POST["numeromobile"])){
                        echo "<li style='color:#f00'>Tienes que escribir el numero movil</li>" . "<br>";
                    }else{
                        if(isset($_POST["numeromobile"])){
                            $movil = $_POST["numeromobile"];
                            echo "<li><b>Numero Movil:</b> $movil </li>" . "<br>";
                        };
                    };

                    if (empty($_POST["email"])){
                        echo "<li style='color:#f00'>Tienes que escribir el correo electronico</li>" . "<br>";
                    }else{
                        if(isset($_POST["email"])){
                            $email = $_POST["email"];
                            echo "<li><b>Email:</b> $email </li>" . "<br>";
                        };
                    };

                    if (empty($_POST["instructions"])){
                        echo "<li style='color:#f00'>Tienes que escribir la instrucciones</li>" . "<br>";
                    }else{
                        if(isset($_POST["instructions"])){
                            $instructions = $_POST["instructions"];
                            echo "<li><b>Intrucciones:</b> $instructions </li>" . "<br>";
                        };
                    };
                };
            ?>
    </fieldset><br><br>

    <fieldset>
        <legend>Your pizza</legend>
            <?php 
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if(empty($_POST["pizza"])){
                        echo "<li style='color:#f00'>Tienes que elegir tu pizza</li>" . "<br>";
                    }else{
                        if(isset($_POST["pizza"])){
                            $pizza = $_POST["pizza"];
                            echo "<li><b>Pizza: </b> $pizza</li>" . "<br>";
                        };
                    };
                };
            ?>
    </fieldset><br><br>


    <fieldset>
        <legend>Your Toppings</legend>
            <?php 
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if(empty($_POST["toppings"])){
                        echo "<li style='color:#f00'>Tienes que elegir tus toppings</li>" . "<br>";
                    }else{
                        if(isset($_POST["toppings"])){
                            foreach($_POST["toppings"] as $value){
                                echo "<li>$value</li>";
                            };
                        };
                    };
                };
            ?>
    </fieldset><br><br>

    <fieldset>
        <legend>Number of pizza</legend>
        <li><strong>Numero:</strong> 
            <?php 
                if($_SERVER["REQUEST_METHOD"] == "POST"){
                    if(empty($_POST["numeros"])){
                        echo "<li style='color:#f00'>Tienes que elegir cuantas pizza quieres</li>" . "<br>";
                    }else{
                        if(isset($_POST["numeros"])){
                            $numeros = $_POST["numeros"];
                            echo $numeros;
                        };
                    };
                };
            ?>
        </li>
    </fieldset>
    <button><a href="form.php">Volver</a></button>
</body>
</html>