<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "ork_uzice";

$conn = new mysqli($host,$user,$password,$dbname);

if($conn->connect_error){
    die("Greška: " . $conn->connect_error);
}

?>
