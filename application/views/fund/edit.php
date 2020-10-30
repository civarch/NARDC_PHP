<?php echo form_open('fund/edit/'.$fund['Id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="UserId" class="col-md-4 control-label">UserId</label>
		<div class="col-md-8">
			<input type="text" name="UserId" value="<?php echo ($this->input->post('UserId') ? $this->input->post('UserId') : $fund['UserId']); ?>" class="form-control" id="UserId" />
		</div>
	</div>
	<div class="form-group">
		<label for="Invenstment" class="col-md-4 control-label">Invenstment</label>
		<div class="col-md-8">
			<input type="text" name="Invenstment" value="<?php echo ($this->input->post('Invenstment') ? $this->input->post('Invenstment') : $fund['Invenstment']); ?>" class="form-control" id="Invenstment" />
		</div>
	</div>
	<div class="form-group">
		<label for="Invenstment_Date" class="col-md-4 control-label">Invenstment Date</label>
		<div class="col-md-8">
			<input type="text" name="Invenstment_Date" value="<?php echo ($this->input->post('Invenstment_Date') ? $this->input->post('Invenstment_Date') : $fund['Invenstment_Date']); ?>" class="form-control" id="Invenstment_Date" />
		</div>
	</div>
	<div class="form-group">
		<label for="Invenstment_Status" class="col-md-4 control-label">Invenstment Status</label>
		<div class="col-md-8">
			<input type="text" name="Invenstment_Status" value="<?php echo ($this->input->post('Invenstment_Status') ? $this->input->post('Invenstment_Status') : $fund['Invenstment_Status']); ?>" class="form-control" id="Invenstment_Status" />
		</div>
	</div>
	<div class="form-group">
		<label for="Withdraw" class="col-md-4 control-label">Withdraw</label>
		<div class="col-md-8">
			<input type="text" name="Withdraw" value="<?php echo ($this->input->post('Withdraw') ? $this->input->post('Withdraw') : $fund['Withdraw']); ?>" class="form-control" id="Withdraw" />
		</div>
	</div>
	<div class="form-group">
		<label for="Withdraw_Date" class="col-md-4 control-label">Withdraw Date</label>
		<div class="col-md-8">
			<input type="text" name="Withdraw_Date" value="<?php echo ($this->input->post('Withdraw_Date') ? $this->input->post('Withdraw_Date') : $fund['Withdraw_Date']); ?>" class="form-control" id="Withdraw_Date" />
		</div>
	</div>
	<div class="form-group">
		<label for="Withdraw_Status" class="col-md-4 control-label">Withdraw Status</label>
		<div class="col-md-8">
			<input type="text" name="Withdraw_Status" value="<?php echo ($this->input->post('Withdraw_Status') ? $this->input->post('Withdraw_Status') : $fund['Withdraw_Status']); ?>" class="form-control" id="Withdraw_Status" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>