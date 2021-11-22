
<?php
require_once "../model/model.php";

session_start();


if(isset($_POST['submit']))
{
  $usernameErr =$passwordErr="";


  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }

  $username=$password="";
  $flag=1;


  if (empty($_POST["username"])) {
    $usernameErr = "User Name is required";
    $flag=0;
  }
  else {
   $username = test_input($_POST["username"]);

  }


 if(empty($_POST["password"]))
 {
  $passwordErr ="Password is required";
   $flag=0;
 }
 else {
   $password=test_input($_POST["password"]);

   }



  if($flag==1)
  {
    try {

      $data = searchUsername($username);
      if($data!=NULL)
      {
        foreach ($data as $i => $user):

             $passwordFromDB= $user['Password'] ;
        endforeach;
        if($password==$passwordFromDB)
        {
          $_SESSION['username']=$username;

          header('Location: ../view/dashboardWardenView.php');
        }
        else {
          $passwordErr= "Incorrect Password";
          $args = array(
           'usernameErr' => $usernameErr,
           'passwordErr' => $passwordErr,
        );
          header("location:../view/loginWardenView.php?" . http_build_query($args));
        }
      }else {
        $usernameErr= "Username not found";
        $args = array(
         'usernameErr' => $usernameErr,
         'passwordErr' => $passwordErr,
      );
        header("location:../View/loginWardenView.php?" . http_build_query($args));
      }


    } catch (Exception $ex) {
      echo $ex->getMessage();
    }

  }
  else {
    $args = array(
     'usernameErr' => $usernameErr,
     'passwordErr' => $passwordErr,
  );
       header("location:../view/loginWardenView.php?" . http_build_query($args));
  }
}


else {
  header("location:../view/loginWardenView.php");
}




?>