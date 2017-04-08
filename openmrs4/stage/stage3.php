<div class="panel panel-info">
  <div class="panel-heading">
    <h4 class="panel-title">
      <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Current Health Status</a>
    </h4>
  </div>
  <div id="collapse3" class="panel-collapse collapse">
    <div class="panel-body">

      <form class="form-horizontal" method="post" action="actions/s3Action.php">
      		<ol type="A">
      		<!-- A -->
      		<div class="form-group">
      			<label  class="control-label col-sm-4" ><li> Height:</li></label>
      			<div class="col-sm-8">
      				<input type="number" class="form-control" name="DiagA1" placeholder ="(m)" required>
      			</div>
      		</div>

      		<div class="form-group">
      		 <label class="control-label col-sm-4" >Weight:</label>
      		 	<div class="col-sm-8">
      				<input type="number" class="form-control" name="DiagA2" placeholder="(kg)" required>
      			</div>
      		</div>


      		<hr>

      		<div class="form-group">
      		 <label class="control-label col-sm-4"><!--B--><li>Pulse</li></label>
      		 	<div class="col-sm-8">
      				<input type="number"  class="form-control" name="DiagB1" placeholder="per minute" required>
      			</div>
      		</div>


      		<div class="form-group">
      		 	<label class="control-label col-sm-4"></label>
      		 	<div class="col-sm-8">
      				<label class="radio-inline"><input type="radio" name="DiagB2" value="Regular" required>Regular</input></label>
      				<label class="radio-inline"><input type="radio" name="DiagB2" value="Irregular" required>Irregular</input></label>
      			</div>
      		</div>

      		<!--div class="form-group">
      		 <label class="control-label col-sm-4"></label>
      		 <div class="col-sm-8">
      			<label class="radio-inline"><input type="radio" name="DiagB3" value="Yes" required>Yes</input>
      			</label>
      			<label class="radio-inline"><input type="radio" name="DiagB3" value="No" required>No</input>
      			</label>
      			</div>
      		</div-->
      			<hr>



      		<div class="form-group">
      			 <label class="control-label col-sm-4"> <!--C--><li>Blood pressure(seated)</li></label>
      			 <div class="col-sm-3">
      				<input type="number" class="form-control"  placeholder="systolic" name="DiagC1A" required>
            </div>
            <div class="col-sm-3">
              <input type="number"  class="form-control" placeholder="diastolic" name="DiagC1B" required>
      			 </div>
           </div>

             <div class="row">
           		<div class="col-md-3 col-md-offset-3">
           		   <input type="button"  id="record" onclick="prompt();"  value="Save"
                 class="btn btn-success btn-block" required/>
           	</div>
            <div class="col-md-3">
               <input type="reset"  value="Reset" class="btn btn-info btn-block" required/>
           </div>
           	</div>
</ol>
</form>

    </div>
  </div>
</div>
</div>
