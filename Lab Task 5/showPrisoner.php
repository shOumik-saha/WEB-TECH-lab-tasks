<?php  
require_once 'controller/prisonersInfo.php';

$student = fetchStudent($_GET['id']);


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
		<td><a href="showStudent.php?id=<?php echo $prisoner['id'] ?>"><?php echo $prisoner['Name'] ?></a></td>
		<td><?php echo $prisoner['Address'] ?></td>
		<td><?php echo $prisoner['Nationality'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $prisoner['image'] ?>" alt="<?php echo $prisoner['Name'] ?>"></td>
	</tr>

</table>


</body>
</html>