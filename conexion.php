<?php

function conectar ()

{

$conexion = mysqli_connect( 'localhost', 'root','') or die (" no se peuede conectar".mysql_error());

mysqli_select_db($conexion,'citas_medicas');

 return $conexion;

}
