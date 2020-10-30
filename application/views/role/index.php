<div class="pull-right">
	<a href="<?php echo site_url('role/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>Role</th>
		<th>Actions</th>
    </tr>
	<?php foreach($roles as $r){ ?>
    <tr>
		<td><?php echo $r['Id']; ?></td>
		<td><?php echo $r['Role']; ?></td>
		<td>
            <a href="<?php echo site_url('role/edit/'.$r['Id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('role/remove/'.$r['Id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
