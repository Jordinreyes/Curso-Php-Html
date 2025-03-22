<?php 
    session_name("login");
    session_start();

    session_destroy();
    session_unset();

    echo "<h1>Session cerrada</h1>";
    echo "<button><a href='login.php'>Comprobacion</a></button>" . "<br>";
    echo "<button><a href='form.php'>Login</a></button>"
?>