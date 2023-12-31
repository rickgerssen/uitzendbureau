<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
 <!DOCTYPE html>
<html lang="en">
<head>
<script src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'nl',
                includedLanguages: 'en,es,nl,fr', // Add the languages you want, separated by commas
                layout: google.translate.TranslateElement.InlineLayout.SIMPLE
            }, 'google_translate_element');
        }
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
      
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
            <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" width="30" height="30" class="">
        </a>
    </div>
    
        <div class="collapse navbar-collapse" id="navbar-collapse">
          <ul class="nav navbar-nav navbar-right">
          <li><a href="chat">Chat</a></li>
              <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                      Language <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu">
                  <li><div id="google_translate_element"></div></li>
                  </ul>
              </li>
              <li><a href="#">File</a></li>
              <li><a href="editaccountpagina">Account</a></li>
              <li><a href="logout.php">Sign Out of Your Account</a></li>
              <li><a><b><?php echo htmlspecialchars($_SESSION["username"]); ?><b></a></li>
              
          </ul>

        </div>
    </div>
</nav>


    <div class="welkom-title col-xs-offset-1 col-xs-10 col-sm-8 col-sm-offset-3 col-md-6 col-lg-6">
        <h1>
            Welkom
        </h1>
        <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            <br> 
            Ullam atque, asperiores pariatur deserunt cum facere accusantium voluptatibus odio. 
            <br>
            <br>
            beatae laboriosam tenetur quas tempora laudantium quo,
            <br> 
            dolorem repellendus consequatur suscipit aperiam!
        </p>
    </div>
    <?php include 'footer.php';?>
</body>
</html>