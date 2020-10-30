<?php echo form_open('user/edit/'.$user['Id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="UserType" class="col-md-4 control-label">UserType</label>
		<div class="col-md-8">
			<input type="text" name="UserType" value="<?php echo ($this->input->post('UserType') ? $this->input->post('UserType') : $user['UserType']); ?>" class="form-control" id="UserType" />
		</div>
	</div>
	<div class="form-group">
		<label for="EntryDate" class="col-md-4 control-label">EntryDate</label>
		<div class="col-md-8">
			<input type="text" name="EntryDate" value="<?php echo ($this->input->post('EntryDate') ? $this->input->post('EntryDate') : $user['EntryDate']); ?>" class="form-control" id="EntryDate" />
		</div>
	</div>
	<div class="form-group">
		<label for="ExitDate" class="col-md-4 control-label">ExitDate</label>
		<div class="col-md-8">
			<input type="text" name="ExitDate" value="<?php echo ($this->input->post('ExitDate') ? $this->input->post('ExitDate') : $user['ExitDate']); ?>" class="form-control" id="ExitDate" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>