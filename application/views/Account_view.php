<table>
<tr>
	<th>ACC_No</th>
	<th>ACC_Name</th>
	<th>ACC_Surname</th>
	<th>DateOp</th>
	<th>Balance</th>
</tr>
<?php 
foreach ($account as $row ){
?>
<tr>
	<td><?= $row['ACC_No'] ?></td>
	<td><?= $row['ACC_Name'] ?></td>
	<td><?= $row['ACC_No'] ?></td>
	<td><?= $row['ACC_DateOp'] ?></td>
	<td><?= $row['Balance'] ?></td>
</tr>
<?php } ?>
</table>

