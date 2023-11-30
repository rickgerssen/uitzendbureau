<?php
// Establish a connection to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uitzendbureauxxl";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Process the form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $search_term = $_POST["search"];

  // Perform a search in the database
  $sql = "SELECT * FROM users WHERE username LIKE '%$search_term%'";
  $result = $conn->query($sql);

  // Display the search results
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      echo "username: " . $row["username"] . "<br>";
    }
  } else {
    echo "No results found";
  }
}

// Close the connection
$conn->close();
?>