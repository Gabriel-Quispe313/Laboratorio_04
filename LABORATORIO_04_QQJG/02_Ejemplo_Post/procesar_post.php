<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        //Validacion cimulada (en un caso real verificaria en una base de datos)
        if ($email == "admin@example.com" && $password == "123456") {
            echo "<h1>¡Bienvenido, Admin!</h1>";
        } else {
            echo "<h1>Error: Credenciales incorectas</h1>";
        }
    }
?>