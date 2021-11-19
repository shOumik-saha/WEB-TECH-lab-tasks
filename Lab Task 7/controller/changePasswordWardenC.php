<?php
require_once "../model/model.php";

session_start();


if(isset($_POST['submit']) && isset($_SESSION['username']))
{
  $currentPassword=$newPassword=$retypeNewPassword="";
  $currentPasswordErr=$newPasswordErr=$retypePasswordErr="";

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  $username=$password="";
  $flag=1;


  if (empty($_POST["currentPassword"])) {
       $currentPasswordErr= "Current Password is required";
       $flag=0;
     }
     else {
      $currentPassword = test_input($_POST["currentPassword"]);


        }


 if(empty($_POST["newPassword"]))
 {
   $newPasswordErr= "Password is required";
   $flag=0;
 }
 else {
   $newPassword=test_input($_POST["newPassword"]);
   if(strlen($newPassword)<8)
   {
     $newPasswordErr= "Password must not be less than eight (8) characters";
     $flag=0;
   }
   else {
     if(substr_count($newPassword,"@")<1 || substr_count($newPassword,"#")<1 || substr_count($newPassword,"%")<1 || substr_count($newPassword,"$")<1)
     {
       $newPasswordErr= "Password must contain at least one of the special characters (@, #, $,%)";
       $flag=0;
     }
   }
 }

 if(empty($_POST["retypeNewPassword"]))
 {
   $retypePasswordErr= "Password is required";
   $flag=0;
 }
 else {
   $retypeNewPassword=test_input($_POST["retypeNewPassword"]);
   if(strlen($retypeNewPassword)<8)
   {
     $retypePasswordErr= "Password must not be less than eight (8) characters";
     $flag=0;
   }
   else {
     if(substr_count($retypeNewPassword,"@")<1 || substr_count($retypeNewPassword,"#")<1 || substr_count($retypeNewPassword,"%")<1 || substr_count($retypeNewPassword,"$")<1)
     {
       $retypePasswordErr= "Password must contain at least one of the special characters (@, #, $,%)";
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

             $passwordFromDB= $user['PASSWORD'] ;
        endforeach;
        if($currentPassword==$passwordFromDB)
        {
          if($newPassword==$retypeNewPassword){
          if (updatePasswordStudent($_SESSION['username'], $newPassword)) {
            echo 'Successfully updated!!';
           session_destroy();
            header('Location: ../view/loginWardenView.php');
          }
          else {
            echo "Update unsuccessful!!";
          }
        }
        else {
          $retypePasswordErr= "New password and retype password is not same!!";
          $flag=0;
        }
        }
        else {
          $currentPasswordErr= "Incorrect Password";
          $flag=0;
        }
      }


    } catch (Exception $ex) {
      echo $ex->getMessage();
    }

  }
  if($flag==0) {
    $args = array(
     'currentPasswordErr' => $currentPasswordErr,
     'newPasswordErr' => $newPasswordErr,
     'retypePasswordErr' => $retypePasswordErr
  );
       header("location:../view/changePasswordWardenView.php?" . http_build_query($args));
  }
}

else {
  echo "You are not allowed to access this page";
}




?>