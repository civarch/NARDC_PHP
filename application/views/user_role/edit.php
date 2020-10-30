<?php echo form_open('user_role/edit/'.$user_role['Id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="UserId" class="col-md-4 control-label">UserId</label>
		<div class="col-md-8">
			<input type="text" name="UserId" value="<?php echo ($this->input->post('UserId') ? $this->input->post('UserId') : $user_role['UserId']); ?>" class="form-control" id="UserId" />
		</div>
	</div>
	<div class="form-group">
		<label for="RoleId" class="col-md-4 control-label">RoleId</label>
		<div class="col-md-8">
			<input type="text" name="RoleId" value="<?php echo ($this->input->post('RoleId') ? $this->input->post('RoleId') : $user_role['RoleId']); ?>" class="form-control" id="RoleId" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>