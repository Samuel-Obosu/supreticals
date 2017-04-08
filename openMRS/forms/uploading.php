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
        $display="Select a file";
        break;
    }
?>
<form action="actions/uploadAction.php" method="post"  enctype="multipart/form-data" class="form-horizontal">
  
  <label class="control-label"><?php echo $display; ?></label> 
  <div class="form-group">
  	<label id="upload" class="control-label col-sm-4">
	Select file to upload:</label>
	<div class="col-sm-8"> 
    	<input type="file" id="upload"  name="upload"/>
	</div>
    </div> 
  <div> 
    <input type="hidden" name="action" value="upload"/> 
    <input type="submit" name="submit" class="btn btn-primary" value="Upload" /> 
  </div> 
</form>