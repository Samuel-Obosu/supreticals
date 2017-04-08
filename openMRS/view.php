<?php session_start();
  if(!isset($_SESSION['recPid'])){
    header('location:index.php?q=1');
  }
    $q=isset($_GET['q'])?$_GET['q']:'';
    if($q!=''){
    $_SESSION['q']=$q;
  }
    $pType=$_SESSION['pType'];
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validation.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

    <script>
      $(document).ready(function() {
        $("#datepicker").datepicker();
      });
    </script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="findper.php"><span class="glyphicon glyphicon-user"></span>Find A Record</a></li>
            <li><a href="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
          </ul>
        </div>
      </div>
    </nav>
  <div class="container">
    <div class="jumbotron "  style="background:#5cb0de !important">
      <div class="row">
        <div class="col-sm-3">
      <img src="images/medfocuslogo.png" class="img-rounded" style="width:128px;height:128px;">
      </div>
      <div class="col-sm-9">
      <h1  style="text-align:center; vertical-align:center; color:SkyBlue">Medical Screening Questionnaire</h1>
      </div>
      </div>
    </div>


  <div class="panel-group" id="accordion">
  <?php  if($pType!="s1"){ ?>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
         <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Identification Information</a>
        </h4>
        </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">
          <?php include('forms1/part1.php'); ?>
        </div>
      </div>
    </div>
  <?php }
      $spage=$_SESSION['spage'];
      include("$spage");
    ?>
  </div>

  </div>

</body>
</html>
