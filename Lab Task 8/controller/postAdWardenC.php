
<?php
session_start();
require_once '../controller/wardenInfoC.php';
require_once '../model/model.php';





if (isset($_POST['submit'])) {


  $yournameErr= $emailErr=$addpErr=$addpiErr=$addpaErr="";
 $name = $emailfromDB =  "";

 $flag=1;
 if(isset($_SESSION['username']))
 {
 $data = fetchWarden($_SESSION['username']);


   if($data!=NULL)
   {
     foreach ($data as $i => $warden):

          $name= $warden['Email'] ;
          $emailfromDB=$warden['Email'];
     endforeach;
   }
 }




  if (empty($_POST["yourname"])) {
    $yournameErr = "Name is required";
    $flag=0;
  } else {

       $yourname = test_input($_POST["yourname"]);



      if ($name!=$yourname) {
         $yournameErr = "Your name doesnot match";
         $flag=0;
       }

      else {
        $yourname = test_input($_POST["yourname"]);
      }
    }

  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
      $flag=0;
    }
    else {

      if ($emailfromDB!=$email) {
         $emailErr = "Your mail doesnot match";
         $flag=0;
       }
    }
  }

  if (empty($_POST["addpi"])) {
    $addpErr = "addpi is required";
    $flag=0;
  } else {

    $addpi=test_input($_POST["addpi"]);


    if(!is_numeric($addpi))
    {
      $addpErr="Please input Numeric Number";
      $flag=0;
    }
    else {

          if($addpi>10000 || $addpi<500)
          {
              $addpErr=" addpi must be between 500 to 10000";
              $flag=0;
          }

              }
          }




    if (empty($_POST["addp"])) {
      $addpiErr = "Course Name Name is required";
      $flag=0;
    }
    else {
     $addp = test_input($_POST["addp"]);

    }

    if(empty($_POST["addpa"]))
    {
      $addpaErr= "addpa is required";
      $flag=0;
    }
    else {
      $addpa=test_input($_POST["addpa"]);
      if(strlen($addpa)<20)
      {
        $addpaErr="addpa must not be less than eight (20) characters";
        $flag=0;
      }

      }




    if(isset($_POST["submit"]) && $flag==1)
    {
      $data['name']=$yourname;
      $data['email']=$email;
      $data['addp']=$addp;
      $data['addpi']=$addpi;
      $data['addpa']=$addpa;

      if (addPostAdInfo($data)) {
        header("location:../view/dashboardWardenView.php");
      }

      else {
        echo 'Could not add!!';
      }

     }



     if(isset($_POST["submit"]) && $flag==0)
     {
       $args = array(
        'yournameErr' => $yournameErr,
        'emailErr' => $emailErr,
        'addpErr' => $addpErr,
        'addpiErr' => $addpiErr,
        'addpaErr' => $addpaErr,

     );
          header("location:../view/postAdWardenView.php?" . http_build_query($args));
     }




} else {
   header("location:../view/dashboard.php");
 }



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>