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
      		 	<label class="control-label col-sm-4">State</label>
      		 	<div class="col-sm-8">
      				<label class="radio-inline"><input type="radio" name="DiagB2" value="Yes" required>Regular</input></label>
      				<label class="radio-inline"><input type="radio" name="DiagB2" value="No" required>Irregular</input></label>
      			</div>
      		</div>
      		</div>
      			<hr>



      		<div class="form-group">
      			 <label class="control-label col-sm-4"> <!--C--><li>Blood pressure(seated)</li></label>
      			 <div class="col-sm-8">
      				<input type="text" class="form-control" placeholder="000/000" name="DiagC1" required>
      			 </div>
           </div>

             <div class="row">
           		<div class="col-md-6 col-md-offset-3">
           		   <input type="submit"  value="Save" class="btn btn-success btn-block" required/>
           	</div>
           	</div>
</ol>
</form>

    </div>
  </div>
</div>
</div>
