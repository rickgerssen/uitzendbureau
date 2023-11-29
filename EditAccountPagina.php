<?php
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(!isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] != true){
    header("location: EditLogin");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="EditAccountStyleshet.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500&amp;display=swap" rel="stylesheet">
  <!-- Bootstrap plug-in  -->
  <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.2/font/bootstrap-icons.min.css" integrity="sha512-D1liES3uvDpPrgk7vXR/hR/sukGn7EtDWEyvpdLsyalQYq6v6YUsTUJmku7B4rcuQ21rf0UTksw2i/2Pdjbd3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-custom">
    <?php include 'navbar.php'; ?>
    <main class="bg-white">
        <div class="container p-4">
            <div class="row">
                <div class="col-md-5 pb-3">
                    <h1 class="text-dark custom-h1">Edit Account</h1>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <form>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Name</label>
                        <input type="email" class="form-control border-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Emailadress</label>
                        <input type="password" class="form-control border-3" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Password</label>
                        <input type="email" class="form-control border-3" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Re-type password</label>
                        <input type="password" class="form-control border-3" id="exampleInputPassword1">
                        </div>
                        <div class="upload-area">
                            <div class="mb-3">
                                <label for="fileUpload" class="upload-btn">
                                    <span>Choose file</span>
                                </label>
                                <span class="identifier">test</span>
                                <input type="file" id="fileUpload" name="filename" title="upload">
                            </div>
                            <div class="mb-3">
                                <label for="fileUpload2" class="upload-btn">
                                    <span>Choose video</span>
                                </label>
                                <span class="identifier">test</span>
                                <input type="file" id="fileUpload2" name="filename" title="upload">
                            </div>
                        </div>
                        <button type="button" class="th-btn fs-6">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </main>
    <?php include 'footer.php'; ?>
    <script src="EditAccountJS.js"></script>
</body>
</html>