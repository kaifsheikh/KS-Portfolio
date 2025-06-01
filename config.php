<?php 

$host = "localhost";
$username = "root";
$password = "";
$database = "users_db";

$conn = mysqli_connect($host , $username , $password , $database);

if(!$conn){ // false per yeah return karayga
    die("Connection Falied" . mysqli_connect_error());

}else{
    echo "Connection Successfully Connected";
}


?>