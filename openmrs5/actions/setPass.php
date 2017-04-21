<?php
	$stat=isset($_GET['q'])?$_GET['q']:-1;
	switch($stat){
		case 1:
		$info ="<div class='alert alert-danger'>
  				<strong>Reset Failed!</strong> <br>Confirmation password different from new password.
				</div>";
		break;

		case 3:
		$info ="<div class='alert alert-danger'>
  				<strong>Reset Failed!</strong> <br>Wrong old password.
				</div>";
		break;

		case 2:
		$info ="<div class='alert alert-danger'>
  				<strong>Reset Failed!</strong> <br>Old password detected as new password.
				</div>";
		break;

		case -1:
		$info ="<div class='alert alert-info'>
  				<strong>Reset Password!</strong> Enter a new password.
				</div>";
		break;

		default:
		$info ="<div class='alert alert-info'>
  				<strong>Reset Password!</strong> Enter a new password.
				</div>";
		break;
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Set New Password</title>
	<meta charset="UTF-8">
 	<link rel="stylesheet" href="../css/lstyle.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="../css/bootstrap.min.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	<div class="container">
	<img src="../images/medfocuslogo.png" alt="medfocuslogo">
	 <div class="login-page">
  		<?php echo $info; ?>
	<div class="form">
		<form action="setAction.php" class="login-form" method="post">
			<input name="oldP" type="password" placeholder="Old Password">
			<input name="newP" type="password" placeholder="New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
			title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
			<input name="confP" type="password" placeholder="Confirm New Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"
			title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters">
			<button>Submit</button>
		</form>
	</div>
	</div>
	</div>
</body>
</html>
