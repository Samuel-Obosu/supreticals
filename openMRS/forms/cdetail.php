<?php displDet($detailId) { ?>
	<input type="text" name="dDiagNo"  value="<?php echo $detailId; ?>" hidden="true">
		 		<div class="form-group">
		 			<label class="control-label col-sm-4">Description</label>
					<div class="col-sm-8">
						<textarea  class="form-control" name="Desc" placeholder="Description"></textarea>
		 			</div>
				</div>
<?php } ?>