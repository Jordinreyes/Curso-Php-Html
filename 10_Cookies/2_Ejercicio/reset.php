<?php 
    setcookie("number2guess", "", time() - 3600, "/");
    setcookie("attemptCounter", "", time() - 3600, "/");
    echo "<a href='form.php'>Volver a jugar</a>"
?>