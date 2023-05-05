<?php

$servername = "db"; 
$username = "lamp-user";
$password = "mypassword";
$dbname = "lamp-db";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM users";
$result = $conn->query($query);


if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . ", Name: " . $row["name"] . ", Email: " . $row["email"] . ", Password: " . $row["password"] . "<br>";
    }
} else {
    echo "0 results";
}


$conn->close();
?>
