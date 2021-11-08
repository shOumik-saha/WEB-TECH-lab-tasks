

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th
		{
			border:1px solid black;
		}
	</style>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Prisoner id</th>
      <th>Name</th>
			<th>Address</th>
      <th>Nationality</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedPrisoners as $i => $prisoners): ?>
			<tr>
				<td><a href="../showPrisoner.php?id=<?php echo $prisoners['id'] ?>"><?php echo $prisoners['id'] ?></a></td>
        <td><?php echo $prisoners['Name'] ?></td>
				<td><?php echo $prisoners['Address'] ?></td>
        <td><?php echo $prisoners['Nationality'] ?></td>
				<td><a href="../view/editPrisoner.php?id=<?php echo $prisoners['id'] ?>">Edit</a>&nbsp<a href="../view/deletePrisoner.php?id=<?php echo $prisoners['id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>


	</tbody>


</table>


</body>
</html>