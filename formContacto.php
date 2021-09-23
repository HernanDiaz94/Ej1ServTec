<?php

    include 'conexion.php';

    extract($_POST);
    echo '<br>';
    echo $_POST['nombre'].'<br>';
    echo $_POST['email'].'<br>';
    echo $_POST['consulta'].'<br>';

?>
