<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
<?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $errors = [];
            if(empty($_POST["nombre"])){
                $errors["nombre"] =  "<b style='color:#f00'>No puedes dejar el campo NOMBRE en vacio</b>" . "<br>";
            }else{
                if(isset($_POST["nombre"])){
                    $nombre = $_POST["nombre"];
                    $nombrePost = "<b>Nombre: </b> $nombre" . "<br>";
                };
            };

            if(empty($_POST["fecha"])){
                $errors["fecha"] =  "<b style='color:#f00'>No puedes dejar el campo FECHA en vacio</b>" . "<br>";
            }else{
                if(isset($_POST["fecha"])){
                    $fecha = $_POST["fecha"];
                    $fechaPost =  "<b>Fecha: </b> $fecha" . "<br>";
                };
            };

            if(empty($_POST["url"])){
                $errors["url"] =  "<b style='color:#f00'>No puedes dejar el campo URL en vacio</b>" . "<br>";
            }else{
                if(isset($_POST["url"])){
                    $url = $_POST["url"];
                    $urlPost =  "<b>Url: </b> <a href='$url'>$url</a>" . "<br>";
                };
            };

            if(empty($_POST["propietario"])){
                $errors["propietario"] =  "<b style='color:#f00'>No puedes dejar el campo PROPIETARIO en vacio</b>" . "<br>";
            }else{
                if(isset($_POST["propietario"])){
                    $propietario = $_POST["propietario"];
                    $propietarioPost = "<b>Propietario del sitio: </b> $propietario" . "<br>";
                };
            };


            if(empty($_POST["sitio"])){
                $errors["sitio"] =  "<b style='color:#f00'>No puedes dejar el campo SITIO DEL CONCURSO en vacio</b>" . "<br>";
            }else{
                if(isset($_POST["sitio"])){
                    $sitio = $_POST["sitio"];
                    $sitioPost =  "<b>Sitio del concurso: </b> $sitio" . "<br>";
                };
            };

            if(empty($_POST["email"])){
                $errors["email"] =  "<b style='color:#f00'>No puedes dejar el campo EMAIL en vacio</b>" . "<br>";
            }else{
                if(isset($_POST["email"])){
                    $email = $_POST["email"];
                    $emailPost = "<b>Email: </b> $email" . "<br>";
                };
            };

            if(empty($_POST["motivo"])){
                $errors["motivo"] = "<b style='color:#f00'>No puedes dejar el campo MOTIVO en vacio</b>" . "<br>";
            }else{
                if(isset($_POST["motivo"])){
                    $motivo = $_POST["motivo"];
                    $motivoPost =  "<b>Motivo de tu mensaje: </b> $motivo" . "<br>";
                };
            };

            if(empty($_FILES["archivo"]["tmp_name"])){
                $errors["archivo"] =  "<b style='color:#f00'>No puedes dejar el campo ARCHIVO en vacio</b>" . "<br>";
            }else{
                if(isset($_FILES["archivo"])){
                    if(mime_content_type($_FILES["archivo"]["tmp_name"]) != "image/png" && mime_content_type($_FILES["archivo"]["tmp_name"]) != "image/jpeg" && mime_content_type($_FILES["archivo"]["tmp_name"]) != " image/jpeg" && mime_content_type($_FILES["archivo"]["tmp_name"]) != "application/pdf"){
                        $errors["archivoExtension"] =  "<b style='color:#f00'>No aceptamos este tipo de fichero, Solo aceptamos .png . jpeg. .pdf</b>" . "<br>";
                    };
                    
                    if(empty($errors)){
                        $carpeta = $_POST["nombre"] . "_" . $_POST["fecha"] . "_" . $_POST["email"];
                        if(!file_exists("archivo")){
                            if(!mkdir("$carpeta",0777)){
                                $errors["archivoCarpeta"] = "<h2 style='color:#f00'>Hubo un problema al crear la carpeta</h2>";
                            };
                        };

                        chmod("$carpeta",0777);

                        if(move_uploaded_file($_FILES["archivo"]["tmp_name"], "$carpeta/" . $_FILES["archivo"]["name"])){
                            $archivo = $_FILES["archivo"]["name"];
                            $archivoPost =  "<b>Archivo: </b> $archivo" . "<br>";
                            $imagenPost =  "<img src='$carpeta/$archivo'>";
                        };
                    }

                };
            };

            if(empty($errors)){
                echo $nombrePost;
                echo $fechaPost;
                echo $urlPost;
                echo $propietarioPost;
                echo $sitioPost;
                echo $emailPost;
                echo $motivoPost;
                echo $archivoPost;
                echo $imagenPost;
            }
        }
    ?>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Contactanos</h1>
        <div>
            <?php if(isset($errors["nombre"])) echo $errors["nombre"]?>
            <label for="nombre">Nombre del concurso: </label>
            <input type="text" name="nombre" id="nombre" placeholder="Tu nombre" value="<?php echo isset($_POST["nombre"]) ? $_POST["nombre"] : '' ?>">
        </div><br>

        <div>
            <?php if(isset($errors["fecha"])) echo $errors["fecha"]?>
            <label for="fecha">Fecha del concurso: </label>
            <input type="date" name="fecha" id="fecha" value="<?php echo isset($_POST["fecha"]) ? $_POST["fecha"] : ''; ?>">
        </div><br>

        <div>
            <?php if(isset($errors["url"])) echo $errors["url"]?>
            <label for="url">Url del concurso: </label>
            <input type="text" name="url" id="url" placeholder="Url" value="<?php echo isset($_POST["url"]) ? $_POST["url"] : ''; ?>">
        </div><br>

        <div>
            <?php if(isset($errors["propietario"])) echo $errors["propietario"]?>
            <label for="propietario">Propietario del concurso: </label>
            <input type="text" name="propietario" id="propietario" placeholder="Propietario del concurso" value="<?php echo isset($_POST["propietario"]) ? $_POST["propietario"] : ''; ?>">
        </div><br>

        <div>
            <?php if(isset($errors["sitio"])) echo $errors["sitio"]?>
            <label for="sitio">Sitio del concurso: </label>
            <input type="text" name="sitio" id="sitio" placeholder="Dirreción del concurso" value="<?php echo isset($_POST["sitio"]) ? $_POST["sitio"] : ''; ?>">
        </div><br>

        <div>
            <?php if(isset($errors["email"])) echo $errors["email"]?>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email" placeholder="Tu email" value="<?php echo isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
        </div><br>


        <div>
            <?php if(isset($errors["motivo"])) echo $errors["motivo"]?>
            <label for="motivo">Motivo de tu mensaje</label>
            <select name="motivo" id="motivo" value="<?php echo isset($_POST["motivo"]) ? $_POST["motivo"] : ''; ?>">
                <option value=""></option>
                <option value="consulta">Consulta general</option>
                <option value="Colaboracion">Colaboracion</option>
                <option value="inspiracion">Inspiracion o sugerencia</option>
                <option value="otro">Otro</option>
            </select>
        </div><br>

        <div>
            <?php if(isset($errors["archivo"])) echo $errors["archivo"]?>
            <?php if(isset($errors["archivoExtension"])) echo $errors["archivoExtension"]?>
            <?php if(isset($errors["archivoCarpeta"])) echo $errors["archivoCarpeta"]?>
            <label for="archivo">Archivo: </label>
            <input type="file" name="archivo" id="archivo">
        </div><br><br>
        <button type="submit">Enviar</button>
    </form><br>

</body>
</html>