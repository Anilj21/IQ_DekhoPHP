<?php
$servername="localhost";
$username= "root";
$password= "";


// create connection
$conn = new mysqli($servername, $username, $password);

if($conn->connect_error) {
     die("Connection failed: ". $conn->connect_error);
}

// create database
$sql ="CREATE DATABASE Quizdb";
if($conn->query($sql) === TRUE){
echo "DATABASE CREATED SUCCESSFULLY";
} else {
echo "Error creating database: ".$conn->error;
}

$conn->close();
?>