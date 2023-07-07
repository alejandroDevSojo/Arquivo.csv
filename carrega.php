<?php

require "conexion.php";

$filename = '/home/tomas/Downloads/Slice-teste-dev-integrador.csv';
if (file_exists($filename)) {
    $query = "LOAD DATA INFILE '$filename'
    INTO TABLE csv
    FIELDS TERMINATED BY ','
    LINES TERMINATED BY '\n'
    IGNORE 1 ROWS";

    if (mysqli_query($conecta, $query)) {
        echo "Carga de datos exitosa.";
    } else {
        echo "Error en la carga de datos: " . mysqli_error($conecta);
    }
} else {
    echo "El archivo no existe!";
}

?>
