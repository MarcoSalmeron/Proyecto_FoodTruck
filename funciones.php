<?php
include 'data_base.php';
/**
 * Crea una conexión a la base de datos
 *
 * @return PDO
 */
function conectar()
{
  $conexion = require "data_base.php";

  return $conexion;
}