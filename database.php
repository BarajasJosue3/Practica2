<?php
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'login2';

try{
    $conn = new PDO("mysql:host=$server;dbname=$database;",$username,$password);
} catch (PDOException $e) {
die('Conexion fallida: '.$e->getMessage());
}

?>