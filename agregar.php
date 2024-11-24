<?php
$conex = mysqli_connect("localhost", "root", "", "mensaje");

if(isset($_POST['send'])) {
    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['phone']) >= 1 &&
        strlen($_POST['message']) >= 1
    ){

        $name = trim($_POST['name']);
        $phone = trim('+591'+ $_POST['email']);
        $email = trim($_POST['phone']);
        $message = trim($_POST['message']);
        $consulta = "INSERT INTO datos_mensaje(nombre, correo, telefono, mensaje)
        VALUES ('$name', '$email', '$phone', '$message')";
        $resultado = mysqli_query($conex, $consulta);

        echo "<p>Registro agregado</p>";
    }
    else{
        echo "<p>Fallo al agregar registro</p>";
    }
    
}
else{
    echo '<p>por favor, complete el <a href="index.php">formulario</a></p>';
}
?>