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
        <style>
        body {
            padding-top: 70px;
        }
    </style>
    
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      
      <div class="navbar-header">
        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-fixed">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">
            <img src="images/logo.png" width="30" height="30" class="">
        </a>
    </div>
    
        <div class="collapse navbar-collapse" id="navbar-collapse-fixed">
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
              <li><a href="editaccountpagina.php">Account</a></li>
              <li><a href="logout.php">Sign Out of Your Account</a></li>
              <li><a href="#"><?php echo htmlspecialchars($_SESSION["username"]); ?></a></li>
              
          </ul>

        </div>
    </div>
    </nav>  

