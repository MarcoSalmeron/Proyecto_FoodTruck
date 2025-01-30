<?php

$conexion = null;
//Conectar a mySQL Base de Datos
try {
    $engine = "mysql";
    $host="localhost";
    $db="food_truck";
    $charset = "utf8";
    $username="root";
    $password="MrFlippers16";

    $options =
    [
      PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $dsn = sprintf("%s:host=%s;dbname=%s;charset=%s", $engine, $host, $db, $charset);
    $conexion = new PDO($dsn, $username, $password, $options);

    return $conexion;

} catch (PDOException $e) {
    throw new Exception(sprintf("Hubo un error con la conexión a la base de datos: %s", $e->getMessage())); 
}