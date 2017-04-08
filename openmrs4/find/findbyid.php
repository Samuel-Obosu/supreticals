<div class="jumbotron vertical-center">
<div class="container text-center">
  <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <img src="images/medfocuslogo.png" class="img-rounded" style="width:128px;height:128px;">
      </div>
  </div>

  <h1>Find A Record</h1>
  <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <?php echo $disp; ?>
      </div>
  </div>
  <form method="post" action="actions/loadId.php">
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i></span>
          <input type="text" class="form-control" placeholder="Search By Id" name="mfiId"aria-describedby="basic-addon1" required>
          </div>
    </div>

    <div class="col-md-3 iPhone-features">
      <!--div class="list-group">
          <span id="txtHint"></span>
        <div-->
    </div>
  </div>

  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <input type="submit" value="Search" class="btn btn-success btn-block" required>
    </div>
  </div>
</form>
</div>
</div>
