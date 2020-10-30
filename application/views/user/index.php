<div class="pull-right">
	<a href="<?php echo site_url('user/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>UserType</th>
		<th>EntryDate</th>
		<th>ExitDate</th>
		<th>Actions</th>
    </tr>
	<?php foreach($users as $u){ ?>
    <tr>
		<td><?php echo $u['Id']; ?></td>
		<td><?php echo $u['UserType']; ?></td>
		<td><?php echo $u['EntryDate']; ?></td>
		<td><?php echo $u['ExitDate']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$u['Id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('user/remove/'.$u['Id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
