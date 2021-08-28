<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "nitt_login";

if(!$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname)){
    header("Location: index.html");
    die;
}