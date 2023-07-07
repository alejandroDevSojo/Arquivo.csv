<?php
session_start();

$localhost = "localhost";
$user = "root";
$pass = "";
$banco = "leitor_csv";

$conecta = mysqli_connect($localhost, $user, $pass, $banco);
mysqli_set_charset($conecta, "utf8");

// Verificar la conexión
if (!$conecta) {
    echo "Error de conexión: " . mysqli_connect_error();
} else {
    echo "Conexión exitosa a la base de datos";
}

?>