<?php
// Voeg databaseconfiguratie toe
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'uitzendbureauxxl';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM messages ORDER BY timestamp DESC";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<strong>' . $row['username'] . ':</strong> ' . $row['message'] . '<br>';
    }
} else {
    echo 'No messages yet.';
}

$conn->close();
?>
