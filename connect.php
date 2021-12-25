<?php

$server = "localhost";
$name = "root";
$pass = "";
$dbname= "crudn";

try{
    $con = new mysqli($server,$name,$pass,$dbname);
}catch(Exception $e){
    die($e);
}


?>