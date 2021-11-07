<?php  
require_once 'controller/prisonersInfo.php';

$prisoners = fetchAllPrisoners();


    include "starter.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Address</th>
			<th>Nationality</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($prisoners as $i => $prisoners): ?>
			<tr>
				<td><a href="showPrisoner.php?id=<?php echo $prisoners['id'] ?>"><?php echo $prisoners['Name'] ?></a></td>
				<td><?php echo $prisoners['Address'] ?></td>
				<td><?php echo $prisoners['Nationality'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $prisoners['image'] ?>" alt="<?php echo $prisoners['Name'] ?>"></td>
				<td>
					<a href="editPrisoner.php?id=<?php echo $prisoners['id'] ?>">Edit</a>
					&nbsp
					<a href="controller/deletePrisoner.php?id=<?php echo $prisoners['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a>
				</td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>