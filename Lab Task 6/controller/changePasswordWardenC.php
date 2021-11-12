<?php
require_once "../model/model.php";

session_start();
if(isset($_POST['submit']) && isset($_SESSION['username']))
{
  $currentPassword=$newPassword=$retypeNewPassword="";

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  $username=$password="";
  $flag=1;


  if (empty($_POST["currentPassword"])) 
  {
       echo "Current Password is required";
       $flag=0;
     }
     else 
     {
      $currentPassword = test_input($_POST["currentPassword"]);

     }


 if(empty($_POST["newPassword"]))
 {
   echo "New Password is required";
   $flag=0;
 }
 else {
   $newPassword=test_input($_POST["newPassword"]);
   if(strlen($newPassword)<8)
   {
     echo "Password must not be less than eight (8) characters";
     $flag=0;
   }
   else {
     if(substr_count($newPassword,"@")<1 || substr_count($newPassword,"#")<1 || substr_count($newPassword,"%")<1 || substr_count($newPassword,"$")<1)
     {
       echo "Password must contain at least one of the special characters (@, #, $,%)";
       $flag=0;
     }
   }
 }

 if(empty($_POST["retypeNewPassword"]))
 {
   echo "Please Re-Type";
   $flag=0;
 }
 else {
   $retypeNewPassword=test_input($_POST["retypeNewPassword"]);
   if(strlen($retypeNewPassword)<8)
   {
     echo "Password must not be less than eight (8) characters";
     $flag=0;
   }
   else {
     if(substr_count($retypeNewPassword,"@")<1 || substr_count($retypeNewPassword,"#")<1 || substr_count($retypeNewPassword,"%")<1 || substr_count($retypeNewPassword,"$")<1)
     {
       echo "Password must contain at least one of the special characters (@, #, $,%)";
       $flag=0;
     }
   }
 }



  if($flag==1)
  {
    try {

      $data = searchUsername($_SESSION['username']);
      if($data!=NULL)
      {
        foreach ($data as $i => $user):

             $passwordFromDB= $user['Password'] ;
        endforeach;
        if($currentPassword==$passwordFromDB)
        {
          if($newPassword==$retypeNewPassword){
          if (updatePasswordWarden($_SESSION['username'], $npassword)) {
            echo 'Successfully updated!!';
           session_destroy();
            header('Location: ../view/loginWardenView.php');
          }
          else {
            echo "Update unsuccessful!!";
          }
        }
        else {
          echo "New password and retype password is not same!!";
        }
        }
        else {
          echo "Incorrect Password";
        }
      }else {
        echo "Username not found";
      }


    } catch (Exception $ex) {
      echo $ex->getMessage();
    }

  }
}

else {
  echo "You are not allowed to access this page";
}




?>