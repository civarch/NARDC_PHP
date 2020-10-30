<div class="pull-right">
	<a href="<?php echo site_url('user_role/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>UserId</th>
		<th>RoleId</th>
		<th>Actions</th>
    </tr>
	<?php foreach($user_roles as $u){ ?>
    <tr>
		<td><?php echo $u['Id']; ?></td>
		<td><?php echo $u['UserId']; ?></td>
		<td><?php echo $u['RoleId']; ?></td>
		<td>
            <a href="<?php echo site_url('user_role/edit/'.$u['Id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user_role/remove/'.$u['Id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
