<?php
if($_GET){
    if($_GET['edad']>=18){
        echo 'Bienvenido';
        echo "<h1>".$_GET['nombre']."</h1>";
        echo "<h1>".$_GET['apellido']."</h1>";
        echo "<h1>".$_GET['edad']."</h1>";
        var_dump($_GET);
    }else{
        echo '<img src = "../img/aifon.jpg">';
    }
}

if($_POST){
    if($_POST['edad']>=18){
        echo 'Bienvenido';
        echo "<h1>".$_POST['nombre']."</h1>";
        echo "<h1>".$_POST['apellido']."</h1>";
        echo "<h1>".$_POST['edad']."</h1>";
        var_dump($_POST);
    }else{
        echo '<img src = "../img/aifon.jpg">';
    }
}
?>