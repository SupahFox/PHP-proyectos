<!DOCTYPE html>
<html>

<head>
<title>ARREGLOS</title>
<link rel = "stylesheet" href = "css/style.css">
</head>

<body>

<ul>
<?php
$paises=["Paraguay", "Chile", "Bolivia"];

foreach($paises as $p){
    echo "<li>".$p."</li>";
}
?>
</ul>

</body>
</html>