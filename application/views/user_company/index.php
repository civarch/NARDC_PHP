<div class="pull-right">
	<a href="<?php echo site_url('user_company/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>UserId</th>
		<th>Name</th>
		<th>VKNo</th>
		<th>Password</th>
		<th>Active</th>
		<th>Actions</th>
    </tr>
	<?php foreach($user_company as $u){ ?>
    <tr>
		<td><?php echo $u['Id']; ?></td>
		<td><?php echo $u['UserId']; ?></td>
		<td><?php echo $u['Name']; ?></td>
		<td><?php echo $u['VKNo']; ?></td>
		<td><?php echo $u['Password']; ?></td>
		<td><?php echo $u['Active']; ?></td>
		<td>
            <a href="<?php echo site_url('user_company/edit/'.$u['Id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user_company/remove/'.$u['Id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
