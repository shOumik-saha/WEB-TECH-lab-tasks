<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "starter.php";

     ?>
   

 <form action="controller/createPrisoners.php" method="POST" enctype="multipart/form-data">
 <center>
  <label for="Name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="Address">Address:</label><br>
  <input type="text" id="surname" name="surname"><br>
  <label for="Nationality">Nationality:</label><br>
  <input type="text" id="username" name="username"><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "createPrisoners" value="Create">
  <input type="reset"> 
</center>
</form> 

</body>
</html>

