<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <title>Document</title>
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
                      <li><a href="#">English</a></li>
                      <li><a href="#">Dutch</a></li>
                      <li><a href="#">German</a></li>
                  </ul>
              </li>
              <li><a href="#">File</a></li>
              <li><a href="#">Account</a></li>
              <li><a href="logout.php">Sign Out of Your Account</a></li>
              <li><a href="#"><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
              
          </ul>

        </div>
    </div>
</nav>


</body>
</html>