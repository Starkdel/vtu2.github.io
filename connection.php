<?php
$servername = "localhost";
$user = "root";
$pass = "";
$dbname = "vtu";

$conn = mysqli_connect($servername, $user, $pass, $dbname);
if(!$conn){
    die('database not connected');
}
?>