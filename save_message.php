<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];
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

    // Hier aanpassen: Genereer een uniek chat-ID voor de huidige chat
    $chatId = generateChatId($conn, $userId);

    $sql = "INSERT INTO messages (user_id, message, chat_id) VALUES (?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isi", $userId, $message, $chatId);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}

function generateChatId($conn, $userId) {
    $sql = "SELECT chat_id FROM messages WHERE user_id = ? LIMIT 1";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $stmt->bind_result($chatId);
    $stmt->fetch();
    $stmt->close();

    // Als de gebruiker al een chat heeft, retourneer dat chat-ID
    if ($chatId) {
        return $chatId;
    }

    // Als de gebruiker geen chat heeft, genereer en retourneer een nieuw chat-ID
    $newChatId = mt_rand(100000, 999999); // Genereer een willekeurig getal als chat-ID
    $sql = "UPDATE messages SET chat_id = ? WHERE user_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $newChatId, $userId);
    $stmt->execute();
    $stmt->close();

    return $newChatId;
}
?>
