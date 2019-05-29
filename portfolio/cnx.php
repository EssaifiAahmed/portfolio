<?php 
$localName = 'localhost';
$dbname = 'portfolio';
$user = 'root';
$pwd = '';
try{
    $conn = new PDO('mysql:host='.$localName.';dbname='.$dbname,$user,$pwd);
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
}catch(Exception $e){
    echo('Impossible de conneceter à la base de donnee ');
    echo($e->getMessage());
    die;
}