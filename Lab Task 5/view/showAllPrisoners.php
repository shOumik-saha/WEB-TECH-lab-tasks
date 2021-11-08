
<!DOCTYPE html>
<?php
require_once '../controller/prisonerInfoController.php';

$prisoners = fetchAllPrisoners();

?>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php 
    include "starter.php";

?>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Nationality</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($prisoners as $i => $prisoners): ?>
			<tr>
				<td><a href="../showPrisoner.php?id=<?php echo $prisoners['id'] ?>"><?php echo $prisoners['Name'] ?></a></td>
				<td><?php echo $prisoners['Address'] ?></td>
				<td><?php echo $prisoners['Nationality'] ?></td>
				<td><a href="editPrisoner.php?id=<?php echo $prisoners['id'] ?>">Edit</a>&nbsp<a href="deletePrisoner.php?id=<?php echo $prisoners['id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>
</body>
</html>