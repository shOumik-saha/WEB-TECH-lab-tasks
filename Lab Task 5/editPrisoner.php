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

 <form action="controller/updatePrisoner.php" method="POST" enctype="multipart/form-data">
  <label for="Name">Name:</label><br>
  <input value="<?php echo $prisoner['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="Address">Address:</label><br>
  <input value="<?php echo $prisoner['Address'] ?>" type="text" id="Address" name="Address"><br>
  <label for="Nationality">Nationality:</label><br>
  <input value="<?php echo $prisoner['Nationality'] ?>" type="text" id="Nationality" name="Nationality"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updatePrisoner" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

