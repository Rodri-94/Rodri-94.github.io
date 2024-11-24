<?php

include("conexion.php");
if(isset($_POST['send'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['date']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['message']) >= 1
    ){

        $name = trim($_POST['name']);
        $date = trim($_POST['date']);
        $phone = trim($_POST['phone']);
        $email = trim($_POST['email']);
        $message = trim($_POST['message']);
        $consulta = "INSERT INTO datos(nombre, datos, telefono, email, mensaje)
        VALUES ('$name', '$date', '$phone', '$email', '$message')";
        $resultado = mysqli_query($conex, $consulta);

    }
}

?>