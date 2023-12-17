<?php 

$server  = "localhost";
$user ="root";
$pass = "";
$db = "dbphp7";

$cone = new mysqli($server, $user, $pass, $db);
mysqli_set_charset($cone, "utf8");

if($cone->connect_error){
    echo "Error: " . $cone->connect_error;
}
?>