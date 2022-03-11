<?php
//Comentario de una linea 
/*
Comentarios de varias lineas 
*/
$nombre = "Luis";
echo "Bienvenidos" . $nombre;
//evaluar
if (isset($_POST["enviar"])){
    $seleccion = $_POST["seleccion"];
    echo $seleccion;
    INCLUDE $seleccion . ".php";

} else{
    INCLUDE "es.php";
}

?>

<!DOCTYPE html>
<html lang= "en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Viewport" content = "width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <select name="seleccion" id="">
            <option value="en">English</option>
            <option value="es">Español</option>
        </select>
        <input type="submit" name="enviar" value="seleccion"/>
    </form>
    <h1><?php echo TITLE; ?></h1>
    <h2><?php echo SUBTITLE; ?></h2>
</body>
</html>
