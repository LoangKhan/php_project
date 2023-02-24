<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "login_register";

$conn = mysqli_connect($servername, $username, $password, $db_name);
if(!$conn){
    die("Something went wrong");
}

?>