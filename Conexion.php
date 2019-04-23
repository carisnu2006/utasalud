<?php
/**
 * Created by PhpStorm.
 * User: Orlando
 * Date: 6/7/2018
 * Time: 19:52
 */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utasalud";
$conn = mysqli_connect($servername, $username, $password, $dbname);

$mysqli = new mysqli($servername,$username,$password,$dbname);
if (!$mysqli) {
    die("Error en la Conexion: " . mysqli_connect_error());
}
function utf8_converter($array ){
    array_walk_recursive($array, function(&$item){
        $item = utf8_encode( $item );
    });
    return json_encode( $array );
}
