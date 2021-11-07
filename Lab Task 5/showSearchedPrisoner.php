
<!DOCTYPE html>
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
			<th>Prisoner_id</th>
			<th>Prisoner_name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedUsers as $i => $user): ?>
			<tr>
				<td><a href="../showPrisoner.php?id=<?php echo $user['id'] ?>"><?php echo $user['id'] ?></a></td>
				<td><?php echo $user['Username'] ?></td>
				<td><a href="../editPrisoner.php?id=<?php echo $user['id'] ?>">Edit</a>&nbsp<a href="deleteStudent.php?id=<?php echo $user['id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>