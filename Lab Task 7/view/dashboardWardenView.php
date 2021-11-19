
<?php
include("../model/header.php");
session_start();

if(isset($_SESSION['username']))
{
  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/dashboardWarden.css">


  </head>
  <body>
    <?php include("viewProfileWardenView.php") ?>
 <div class='side'>
    <br><a href='dashboardWardenView.php'>Dashboard</a>
    <br><a href='viewProfileWardenView.php'>View Profile</a>
    <br><a href='editProfileWardenView.php'>Edit Profile</a>
    <br><a href='changeProfilePictureView.php'>Change Profile Picture</a>
   <br><a href='changePasswordWardenView.php'>Change Password</a>
   <br><a href='postAdWardenView.php'>Activity</a>
     <br><a href ='../controller/logoutWardenC.php'>Logout </a>
   </div >

     </div>
  </body>
</html>

<?php include("../model/footer.php");  ?>



<?php

}
else {
header("location:../view/loginWardenView.php");
}
 ?>