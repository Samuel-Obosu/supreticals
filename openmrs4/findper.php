<?php session_start();
	if(!isset($_SESSION['recPid'])){
    header('location:index.php?q=1');
  }
	$name=$_SESSION['fullName'];
	$q=isset($_GET['q'])?$_GET['q']:0;
	$pg=(int)!empty($_GET['pg'])?$_GET['pg']:1;
	switch ($q) {
		case 1:
			$disp= "<div class='alert alert-success'>
								<strong>Entry successfully saved</strong>
							</div>";
			break;

			case 2:
				$disp= "<div class='alert alert-danger'>
									<strong>No record selected, Select a record</strong>
								</div>";
				break;

		default:
			$disp= "<div class='alert alert-info'>
							<strong>Welcome $name </strong>, Enter a name to find record.
						</div>";
			break;
	}
	if ($pg==2) {
		$page='find/findbyid.php';
	}elseif ($pg==1) {
		$page='find/findbyper.php';
	}else{
		$page='find/findbyper.php';
	}

?>
<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
    <!--meta http-equiv="X-UA-Compatible" content="IE=edge"-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Screening</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validation.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
          body {
      display: table;
      position: absolute;
      height: 100%;
      width: 100%;
      }

      .jumbotron {
       display: table-cell;
       vertical-align: middle;
      }
    </style>
 </head>
<body >
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
       <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
          <a class="navbar-brand" href="#"> MedFocus</a>
      </div>
<div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li ><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
					<li class="active" class="dropdown">
					    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
					      <span class="glyphicon glyphicon-user"></span>Find A Record</a>
					  <ul class="dropdown-menu">
					    <li><a href="findper.php?pg=1">Find By Name</a></li>
					    <li><a href="findper.php?pg=2">Find By Id</a></li>
					    <!--li><a href="#">Desserts</a></li>
					    <li><a href="#">Drinks</a></li-->
					  </ul>
					</li>

          <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <?php include("{$page}"); ?>
</body>
</html>
