<div class="pull-right">
	<a href="<?php echo site_url('fund/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>ID</th>
		<th>UserId</th>
		<th>Invenstment</th>
		<th>Invenstment Date</th>
		<th>Invenstment Status</th>
		<th>Withdraw</th>
		<th>Withdraw Date</th>
		<th>Withdraw Status</th>
		<th>Actions</th>
    </tr>
	<?php foreach($fund as $f){ ?>
    <tr>
		<td><?php echo $f['Id']; ?></td>
		<td><?php echo $f['UserId']; ?></td>
		<td><?php echo $f['Invenstment']; ?></td>
		<td><?php echo $f['Invenstment_Date']; ?></td>
		<td><?php echo $f['Invenstment_Status']; ?></td>
		<td><?php echo $f['Withdraw']; ?></td>
		<td><?php echo $f['Withdraw_Date']; ?></td>
		<td><?php echo $f['Withdraw_Status']; ?></td>
		<td>
            <a href="<?php echo site_url('fund/edit/'.$f['Id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('fund/remove/'.$f['Id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
