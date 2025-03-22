<?php 
    session_name("login");
    session_start();

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if($_POST["usuario"] === "Jordin" && $_POST["contraseña"] === "1234"){
            $_SESSION["Nombre"] = "Jordin";
            echo "<h1 style='color:green'>Login successfull</h1>";
            echo "<h1>Bienvenido " . $_SESSION["Nombre"] . "</h1>";
            echo "<button><a href='cerrar.php'>Cerrar session</a></button>";
        }else{
            echo "<h1 style='color:#f00'>Login Incorrecto</h1>";
            echo "<button><a href='form.php'>Volver</a></button>";
        };
    }else{
        if(isset($_SESSION["Nombre"])){
            echo "<h1>Bienvenido " . $_SESSION["Nombre"] . "</h1>";
            echo "<button><a href='cerrar.php'>Cerrar session</a></button>";
        }else{
            echo "<h1 style='color:#f00'>Tienes que hacer login primero</h1>";
            echo "<button><a href='form.php'>Login</a></button>";
        }
    }
?>