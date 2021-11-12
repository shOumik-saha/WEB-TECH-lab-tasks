
<?php
session_start();

if(isset($_SESSION['username']))
{


  echo "<h1 align='right'> Welcome ".$_SESSION['username']."</h1>";
  echo "<br><a href='dashboardWardenView.php'>Dashboard</a>";
  echo "<br><a href='viewProfileWardenView.php'>View Profile</a>";
  echo "<br><a href='editProfileWardenView.php'>Edit Profile</a>";
   echo "<br><a href='profilepicture.php'>Change Profile Picture</a>";
   echo "<br><a href='changePasswordWardenView.php'>Change Password</a>";
   echo "<br><a href ='../controller/logoutWardenC.php'>Logout </a>";



}
else {
  echo "You can not access the page.";
}
 ?>