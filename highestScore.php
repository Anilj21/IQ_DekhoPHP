<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Quizdb";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT * FROM scores ORDER BY score DESC LIMIT 10"; // Change the table name if needed
$result = $conn->query($sql);


if ($result === false) {
    // Handle SQL error
    echo "Error executing SQL query: " . $conn->error;
} elseif ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Name: " . $row["name"] . " - Score: " . $row["score"] . "<br>";
    }
} else {
    echo "No high scores found.";
}

// Close connection
$conn->close();
?>
