<?php

$server_name = "127.0.0.1";
$user_name = "root";
$password = "";
$database = "driving_school";

$conn = new mysqli ($server_name, $user_name, $password, $database);

if ($conn->connect_error) {
    die ("connection failed: ".$conn->connect_error);
    
}


