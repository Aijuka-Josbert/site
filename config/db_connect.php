<?php
$host="localhost";
$user="Josbert";
$password="josbert003.";
$database="register";
$conn=new mysqli($host,$user,$password,$database);
if($conn -> connect_error){
    echo "failed to connect Db" .$conn->connect_error;
}
?>