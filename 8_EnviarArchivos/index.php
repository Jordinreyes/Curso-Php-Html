<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <h1>Formulario</h1>
        <div>
            <label for="archivos">Archivos: </label>
            <input type="file" name="archivos">
        </div><br>
        <button type="submit">Enviar</button>
    </form><br><br>

    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            if(empty($_FILES["archivos"]["name"])){
                echo "<h2 style='color:#f00'>Tienes que subir al menos 1 archivo</h2>";
            }else{
                if(isset($_FILES["archivos"])){
                    if(mime_content_type($_FILES["archivos"]["tmp_name"]) != "image/png" && mime_content_type($_FILES["archivos"]["tmp_name"]) != "image/jpeg" && mime_content_type($_FILES["archivos"]["tmp_name"]) != "application/pd"){
                        echo "<h2 style='color:#f00'>No aceptamos este tipo de fichero</h2>";
                        exit();
                    };

                    if(!file_exists("archivos")){
                        if(!mkdir("archivos", 0777)){
                            echo "<h2 style='color:#f00'>Hubo problemas al crear la carpeta</h2>";
                            exit();
                        };
                    };
                    chmod("archivos", 0777);

                    if(move_uploaded_file($_FILES["archivos"]["tmp_name"],"archivos/" . $_FILES["archivos"]["name"])){
                        echo "<h2 style='color:green'>Files Upload succesfully</h2>";
     
                    }else{
                        echo "<h2 style='color:#f00'>Hubo un problema al subir el archivo</h2>";
                    }
                };
            };
        };
    ?>
</body>
</html>