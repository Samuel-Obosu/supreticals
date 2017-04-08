<?php
    $stats=isset($_GET['stat'])?$_GET['stat']:'-1';
    switch ($stats) {
      case '1':
        $display= "<label class='control-label  label label-success'>Successful upload</label>";
        break;

      case '2':
        $display="<label class='control-label label label-danger'>Failed to upload file. Invalid file format</label>";
        break;

        default:
        $display="<label class='control-label label label-info'>Select a file to upload</label>";
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
  <?php echo $display; ?>
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
      	<input type="file" id="uploader"  name="upload"/>
  	</div>
    </div>
  <div>
    <input type="hidden"  name="pid" value="<?php echo $q; ?>"/>
    <input type="button" name="submit" class="btn btn-primary" value="Upload" onclick="prompt();"  id="submit"/>
  </div>
</form>

</div>
</div>
</div>

  <script type="text/javascript">
    function prompt(){
      if(confirm("Confim upload of file: "+ document.getElementById('uploader').value)== true){
        document.getElementById('submit').type="submit";
      }
    }
  </script>
</div>
