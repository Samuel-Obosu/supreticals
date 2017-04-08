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
  <div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="input-group">
          <span class="input-group-addon" id="basic-addon1"><i class="fa fa-search"></i></span>
          <input type="text" class="form-control" placeholder="Search By Name..."  onkeyup="showHint(this.value)" aria-describedby="basic-addon1">
          </div>
        <!--label id="info">Search:<input type="text"  onkeyup="showHint(this.value)"></label><br-->
    </div>

    <div class="col-md-3 iPhone-features">
      <div class="list-group">
          <span id="txtHint"></span>
        <div>
    </div>
  </div>
</div>
</div>
