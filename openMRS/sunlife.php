<?php include('pageLoader.php'); ?>
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Screening</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validation.js" type="text/javascript"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 </head>
<body>
    <!--p>Bootstrap is the most popular HTML, CSS, and JS framework for developing responsive, mobi style="float:left" le-first projects  style="float:left" on the web.</p-->
  <!--/div-->
	<div class="jumbotron" style="background:#33cc33 !important">
	 <div class="row">
    	<img src="medfocuslogo.png" class="col-sm-4" style="width:80px;height:80px;">
    	<h1  text-color="blue" class="col-sm-8">Medfocus International Screening</h1>  
      </div>
    </div>
	
	<div class="container">
	
    <ul class="nav nav-tabs">
    <li class="<?php echo $class0; ?>"><!--a data-toggle="tab"--><a href="?page=home">Home</a></li>
    <li class="<?php echo $class1; ?>"><a href="?page=pid">Person Identification</a></li>
    <li class="<?php echo $class2; ?>"><a href="?page=phh">Person's Health History</a></li>
    <li class="<?php echo $class3; ?>"><a href="?page=chs">Current Health Status</a></li>
    <li class="<?php echo $class4; ?>"><a href="?page=upf">Upload File</a></li>
  </ul>
	
	<div class="tab-content">
    <div id="home" class="tab-pane fade in active">
     
    <!--/div>
    <div id="menu1" class="tab-pane fade">
      <br>
      <br>
      <?php //include('forms/part1.php'); ?>
    </div>
    <div id="menu2" class="tab-pane fade">
      <br>
      <br>
      <?php //include('forms/part2.php'); ?>
    </div>
    <div id="menu3" class="tab-pane fade">
      <br>
      <br>
      <?php //include('forms/part3.php'); ?>
      <?php //include('forms/uploading.php'); ?>
    </div>
    <div id="menu4" class="tab-pane fade"-->
      <br>
      <br>
       <?php include($view); ?>
    </div>
  </div>

	</div>
</body>
</html>