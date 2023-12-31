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
    <title>admin pagina</title>
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
              <li><a href="login">Log in</a></li>
          </ul>
          
        </div>
    </div>
</nav>
<center>
<h1>admin pagina</h1>
<form method="post" action="search.php">
  <input type="text" name="search" placeholder="Search all or type name">
  <button type="submit">Search</button>
</form>
</center>
<footer>
        <div class="footer-top col-lg-6">
        <h3>
            Contact
        </h3>
        <a href="mailto:example@gmail.com">example@gmail.com</a>
        <a href="Tel:0651036882">06-51036882</a>
    </div>
    <div class="footer-bottom col-lg-6">
        <h3>
            Links
        </h3>
        <a href="index.html">Home Page</a>
</div>  
    </footer>
</body>
</html>