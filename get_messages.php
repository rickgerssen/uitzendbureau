<?php
session_start();

if (isset($_SESSION['loggedin'])) {
    // Voeg databaseconfiguratie toe
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $database = 'uitzendbureauxxl';

    $conn = new mysqli($host, $user, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $userId = $_SESSION['loggedin'];

    // Hier aanpassen: Haal het chat-ID van de huidige gebruiker op
    $chatId = getChatId($conn, $userId);

    $sql = "SELECT messages.message, users.username FROM messages JOIN users ON messages.user_id = users.id WHERE messages.chat_id = ? ORDER BY messages.timestamp DESC";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $chatId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<strong>' . $row['username'] . ':</strong> ' . $row['message'] . '<br>';
        }
    } else {
        echo 'No messages yet.';
    }

    $stmt->close();
    $conn->close();
}

function getChatId($conn, $userId) {
    $sql = "SELECT chat_id FROM messages WHERE user_id = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->bind_result($chatId);
    $stmt->fetch();
    $stmt->close();

    return $chatId;
}
?>
