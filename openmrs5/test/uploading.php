<?php
    $stats=isset($_GET['stat'])?$_GET['stat']:'-1';
    switch ($stats) {
      case '1':
        $display= "Successful upload";
        break;

      case '2':
        $display="Failed to upload file";
        break;

        default:
        $display="Select a file to upload";
        break;
    }
?>
<div class="panel panel-info">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Laboratary Tests</a>
    </h4>
  </div>
  <div id="collapse3" class="panel-collapse collapse">
    <div class="panel-body">

      <?php dispLab(); ?>

<form action="actions/uploadaction.php" method="post"  enctype="multipart/form-data" class="form-horizontal">
  <label class="control-label"><?php echo $display; ?></label>
  <div class="form-group">
  	<label id="upload" class="control-label col-sm-4">
	     Results for:</label>
  	<div class="col-sm-8">
      	<select name="test" class="form-control">
          <?php upload_list(); ?>
        </select>
  	</div>
    </div>
  <div class="form-group">
  	<label id="upload" class="control-label col-sm-4">
	     Select file to upload:</label>
  	<div class="col-sm-8">
      	<input type="file" id="upload"  name="upload"/>
  	</div>
    </div>
  <div>
    <input type="hidden"  name="pid" value="<?php echo $q; ?>"/>
    <input type="submit" name="submit" class="btn btn-primary" value="Upload" />
  </div>
</form>

</div>
</div>
</div>
</div>
