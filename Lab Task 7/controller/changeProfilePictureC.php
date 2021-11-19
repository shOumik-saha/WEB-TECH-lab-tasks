


<?php
require_once "../model/model.php";

session_start();


if(isset($_POST['submit']) && isset($_SESSION['username']))
{


       $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));
       if(updateProfilePictureWarden($_SESSION['username'],$file))
       {
         header("location: ../view/dashboardWardenView.php");
       }
       else {
         echo "Couldnot update";
       }

}

else {
  echo "You are not allowed to access this page";
}




?>