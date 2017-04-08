<div class="panel panel-info">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Health History</a>
    </h4>
  </div>
  <div id="collapse2" class="panel-collapse collapse ">
    <div class="panel-body">
      <?php include('forms1/part2.php'); ?>
    </div>
  </div>
</div>

<div class="panel panel-info">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Laboratory Tests</a>
    </h4>
  </div>
  <div id="collapse4" class="panel-collapse collapse ">
    <div class="panel-body">
      <?php include('forms1/loadlab.php');?>
    </div>
  </div>
</div>

    <?php if (!isset($_GET['sav'])) {?>
    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Current Health Status</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">
          <?php include('forms1/part3.php');?>
        </div>
      </div>
    </div>
    <?php }else{ ?>
      <div class="panel panel-info">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Current Health Status</a>
          </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
          <div class="panel-body">
            <?php include('forms1/part3b.php');?>
          </div>
        </div>
      </div>
      <?php } ?>

    <div class="panel panel-info">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Health Summary</a>
        </h4>
      </div>
      <div id="collapse5" class="panel-collapse collapse">
        <div class="panel-body">
          <?php include('forms1/part4.php');?>
        </div>
      </div>
    </div>
