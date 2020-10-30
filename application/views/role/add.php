<?php echo form_open('role/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="Role" class="col-md-4 control-label">Role</label>
		<div class="col-md-8">
			<input type="text" name="Role" value="<?php echo $this->input->post('Role'); ?>" class="form-control" id="Role" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>