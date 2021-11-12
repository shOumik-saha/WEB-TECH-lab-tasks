
<?php

session_start();
require_once '../controller/wardenInfoC.php';
$data = fetchWarden($_SESSION['username']);
if($data!=NULL)
{
  foreach ($data as $i => $warden):

       $name= $warden['Name'] ;
       $email=$warden['Email'];
       $birth=$warden['Birthday'];
       $gender= $warden['Gender'] ;
       $designation= $warden['Designation'] ;
 
  endforeach;
$birth=str_replace('/','', $birth );
$birthDate=$birth[0].$birth[1];
$birthMonth=$birth[2].$birth[3];
$birthYear=$birth[4].$birth[5].$birth[6].$birth[7];


}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="../controller/updateWardenC.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $name ?>" type="text" id="name" name="name"><br>
  <label for="email">Email:</label><br>
  <input value="<?php echo $email ?>" type="text" id="email" name="email"><br>
  Date of Birth: <input type="text" size="1" placeholder="dd" name="birthDate" value="<?php echo $birthDate ?>"> /
  <input type="text" size="1" placeholder="mm" name="birthMonth" value="<?php echo $birthMonth ?>"> /
  <input type="text" size="2" placeholder="yyyy" name="birthYear" value="<?php echo $birthYear ?>"> <br />
  <input type="submit" name = "updateWarden" value="Update">
  <input type="reset">
</form>

</body>
</html>