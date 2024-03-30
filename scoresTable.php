<?php
$servername="localhost";
$username= "root";
$password= "";
$dbname = "Quizdb";


// create connection
$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error) {
     die("Connection failed: ". $conn->connect_error);
}


// sql to create table
$sql = "CREATE TABLE scores (
     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
     username VARCHAR(30) NOT NULL,
     score INT(255) NOT NULL
)";

if($conn->query($sql) === TRUE) {
     echo "Table Scores created successfully";
}else{
     echo "Error in creating table: ". $conm->error;
}
$conn->close();
?>
