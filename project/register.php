<?php 
$pageTitle = "Register"; ?>
<?php include $_SERVER ["DOCUMENT_ROOT"] . '/project/inc/head.php'; ?>
<?php include $_SERVER ["DOCUMENT_ROOT"] . '/project/inc/menu.php'; ?>
<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" type="text/css" href="/css/style.css"> 

</head>
<body>
<div class="=body-content">
<div class="module">
<h1>Supreticals:Register With Us</h1>
<form class="form" action="form.php" method="post" enctype="multipart/form-data" autocomplete="off">
<div class="alert alert-error"></div>
<input type="text" placeholder="User Name" name="username" required />
<input type="text" placeholder="Email" name="email" required />
<input type="password" placeholder="Password" name="password" autocomplete="new password" required />
<input type="password" placeholder="Confirm Password" name="confirm password" autocomplete="new password" required />
<input type="submit" value="Register" name="register" class="btn btn-block btn-primary" />
<a href="login.php">Log In</a>
</form>
</div>
</div>
 