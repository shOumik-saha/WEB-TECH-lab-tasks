
<?php

require_once '../controller/prisonerInfoController.php';
$prisoners = fetchPrisoner($_GET['id']);

 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
        include "starter.php";

     ?>

 <form action="../controller/deletePrisonerController.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $prisoners['Name'] ?>" type="text" id="name" name="name"><br>
  <label for="address">Address:</label><br>
  <input value="<?php echo $prisoners['Address'] ?>" type="text" id="address" name="address"><br>
  <label for="nationality">Nationality:</label><br>
  <input value="<?php echo $prisoners['Nationality'] ?>" type="text" id="nationality" name="nationality"><br>
  <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "deletePrisoner" value="Delete">
  <input type="reset">
</form>

</body>
</html>