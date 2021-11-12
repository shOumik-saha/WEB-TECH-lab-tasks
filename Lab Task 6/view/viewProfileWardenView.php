
<?php
session_start();
require_once '../controller/wardenInfoC.php';



if(isset($_SESSION['username']))
{
$data = fetchWarden($_SESSION['username']);


  if($data!=NULL)
  {
    foreach ($data as $i => $warden):

         $name= $warden['Name'] ;
         $email=$warden['Email'];
         $username= $warden['Username'] ;
         $birth=$warden['Birthday'];
         $gender= $warden['Gender'] ;
         $designation= $warden['Designation'] ;
        endforeach;

    echo "<br />$name";
    echo "<br />$email";
    echo "<br />$username";
    echo "<br />$birth";
    echo "<br />$gender";
    echo "<br />$designation";

}
}

else {
  echo "You cannot access this page!!";
}
 ?>