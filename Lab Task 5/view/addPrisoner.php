<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
        include "starter.php";

     ?>
   

   <h2>Add Prisoner</h2>
   <center>
<form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" method="POST" enctype="multipart/form-data"  action="../controller/addPrisonerController.php">
    Name: <input type="text" name="name" >
    <!-- <span class="error">* <?php echo $nameErr;?></span> -->
    <br><br>
    Address: <input type="text" name="address" >
    <!-- <span class="error">* <?php echo $addressErr;?></span> -->
    <br><br>
    <br>
    Nationality: <input type="text" name="nationality"  />
    <!-- <span class="error">* <?php echo $nationalityErr;?></span> -->
     <br><br>
     <input type="submit" name="addPrisoner" value="Save">

</form>
</center>
</body>
</html>

