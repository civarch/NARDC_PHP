<?php echo form_open('user_company/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="UserId" class="col-md-4 control-label">UserId</label>
		<div class="col-md-8">
			<input type="text" name="UserId" value="<?php echo $this->input->post('UserId'); ?>" class="form-control" id="UserId" />
		</div>
	</div>
	<div class="form-group">
		<label for="Name" class="col-md-4 control-label">Name</label>
		<div class="col-md-8">
			<input type="text" name="Name" value="<?php echo $this->input->post('Name'); ?>" class="form-control" id="Name" />
		</div>
	</div>
	<div class="form-group">
		<label for="VKNo" class="col-md-4 control-label">VKNo</label>
		<div class="col-md-8">
			<input type="text" name="VKNo" value="<?php echo $this->input->post('VKNo'); ?>" class="form-control" id="VKNo" />
		</div>
	</div>
	<div class="form-group">
		<label for="Password" class="col-md-4 control-label">Password</label>
		<div class="col-md-8">
			<input type="text" name="Password" value="<?php echo $this->input->post('Password'); ?>" class="form-control" id="Password" />
		</div>
	</div>
	<div class="form-group">
		<label for="Active" class="col-md-4 control-label">Active</label>
		<div class="col-md-8">
			<input type="text" name="Active" value="<?php echo $this->input->post('Active'); ?>" class="form-control" id="Active" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>