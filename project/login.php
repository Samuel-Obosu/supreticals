<?php 
$pageTitle = "Login"; ?>
<?php include $_SERVER ["DOCUMENT_ROOT"] . '/project/inc/head.php'; ?>
<?php include $_SERVER ["DOCUMENT_ROOT"] . '/project/inc/menu.php'; ?>
<?php include $_SERVER ["DOCUMENT_ROOT"] . '/project/inc/connection.php'?>;
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="/css/style.css"> 

</head>
<body>
<center>
<div class="login container">
<form action="validate.php" method="post">
     <center><h1>Login Form</h1></center>
     <div class="form-input">
       <input type="text" name="username" placeholder="Enter Username" required="" >
     </div>
    <div class="form-input">
      <input type="password" name="password" placeholder="Enter Password" required="">
    </div>
    <input type="submit" name="submit" value="LOGIN" class="btn-login"><br>
    <a href="#">Forget Password?</a>
    <a href="register.php">Retailer</a>
    <a href="register.php">Supplier</a>
</form>
</div>
</center>
</body>
</html>
<?php include $_SERVER ["DOCUMENT_ROOT"] . '/project/inc/footer.php'; ?>