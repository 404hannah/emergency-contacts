<?php
$host = "localhost";
$username = "root";
$password = "";
$dbname = "tarlac_emergency_contacts";

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error){
    die("Connection failed.");
} else {
    echo "Success!";
}