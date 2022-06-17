<!DOCTYPE html>
<html>

<head>
<title>FORMULARIO</title>
<link rel = "stylesheet" href = "css/style.css">
</head>

<body>

    <form method="GET" action= "listen/listen.php">
         <label>Nombre</label><br>
         <input type="text" name="nombre"><br>
         <label>Apellido</label><br>
         <input type="text" name="apellido"><br>
         <label>Edad</label><br>
         <input type="text" name="edad"><br>
         <input type="submit" value="Verficar">
     </form>

    <form method="POST" action= "listen/listen.php">
         <label>Nombre</label><br>
         <input type="text" name="nombre"><br>
         <label>Apellido</label><br>
         <input type="text" name="apellido"><br>
         <label>Edad</label><br>
         <input type="text" name="edad"><br>
         <input type="submit" value="Verficar">
     </form>

</body>
</html>