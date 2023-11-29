<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: chatlogin.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Room</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="chat-container">
        <div id="chat-output"></div>
        <input type="text" id="message" placeholder="Type your message">
        <button onclick="sendMessage()">Send</button>
        <a href="logout.php">Logout</a>
    </div>

    <script src="script.js"></script>
</body>
</html>
