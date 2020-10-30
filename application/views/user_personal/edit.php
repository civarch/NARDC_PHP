<?php echo form_open('user_personal/edit/'.$user_personal['Id'],array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="UserId" class="col-md-4 control-label">UserId</label>
		<div class="col-md-8">
			<input type="text" name="UserId" value="<?php echo ($this->input->post('UserId') ? $this->input->post('UserId') : $user_personal['UserId']); ?>" class="form-control" id="UserId" />
		</div>
	</div>
	<div class="form-group">
		<label for="Name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="Name" value="<?php echo ($this->input->post('Name') ? $this->input->post('Name') : $user_personal['Name']); ?>" class="form-control" id="Name" />
		</div>
	</div>
	<div class="form-group">
		<label for="TCNo" class="col-md-4 control-label">TCNo</label>
		<div class="col-md-8">
			<input type="text" name="TCNo" value="<?php echo ($this->input->post('TCNo') ? $this->input->post('TCNo') : $user_personal['TCNo']); ?>" class="form-control" id="TCNo" />
		</div>
	</div>
	<div class="form-group">
		<label for="Password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="text" name="Password" value="<?php echo ($this->input->post('Password') ? $this->input->post('Password') : $user_personal['Password']); ?>" class="form-control" id="Password" />
		</div>
	</div>
	<div class="form-group">
		<label for="Active" class="col-md-4 control-label">Active</label>
		<div class="col-md-8">
			<input type="text" name="Active" value="<?php echo ($this->input->post('Active') ? $this->input->post('Active') : $user_personal['Active']); ?>" class="form-control" id="Active" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>
	
<?php echo form_close(); ?>