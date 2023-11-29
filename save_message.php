<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $message = $_POST['message'];

    // Voeg databaseconfiguratie toe
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'uitzendbureauxxl';

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO messages (username, message) VALUES ('$username', '$message')";
    $conn->query($sql);
    $conn->close();
}
?>
