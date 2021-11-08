<?php  
require_once '../controller/prisonerInfoController.php';

$student = fetchPrisoner($_GET['id']);


    include "starter.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Address</th>
		<th>Nationality</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showPrisoner.php?id=<?php echo $prisoners['id'] ?>"><?php echo $prisoners['Name'] ?></a></td>
		<td><?php echo $prisoners['Address'] ?></td>
		<td><?php echo $prisoners['Nationality'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $prisoner['image'] ?>" alt="<?php echo $prisoner['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>