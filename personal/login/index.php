<?php session_start(); ?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat HTML5/CSS3 Login Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="login-page">
  <div class="form">
    <form class="login-form" action="processing.php" method="post">
      <input type="text" name="uname" placeholder="username"/>
      <input type="password" name="pass" placeholder="password"/>
      <button ">login</button>
      </form>
      <?php 
          /*if(is_null($message)){
            $message=" ";
          }
          else{
            $message=$_SESSION['message'];
          } */ //Need a little help here

       ?>
  </div>
</div>

</body>
</html>
