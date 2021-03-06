
<?php
session_start();
require_once '../model/model.php';


if (isset($_POST['updateWarden']) && isset($_SESSION['username'])) {

  $birthDate = $birthMonth = $birthYear = $name = $email = $gender = $comment = $website = $birth= $designation= "";

 $flag=1;
 function test_input($data) 
 {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

  if (empty($_POST["name"])) 
  {
    echo "Name is required";
    $flag=0;
  } else 
  {

       $name = test_input($_POST["name"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) 
      {
         echo "Only letters and white space allowed";
         $flag=0;
       }
  }

  if (empty($_POST["email"])) {
    echo "Email is required";
    $flag=0;
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      echo "Invalid email format";
      $flag=0;
    }
  }

  if (empty($_POST["birthDate"]) || empty($_POST["birthMonth"]) || empty($_POST["birthYear"])) {
    echo "Date Month and Year is required";
    $flag=0;
  } else {

    $birthDate=test_input($_POST["birthDate"]);
    $birthMonth=test_input($_POST["birthMonth"]);
    $birthYear=test_input($_POST["birthYear"]);

    if(!is_numeric($birthDate))
    {
      echo "Please input Numeric Date";
      $flag=0;
    }
    else {

      if(!is_numeric($birthMonth))
      {
          echo "Please input Numeric month";
          $flag=0;
      }
      else {
        if(!is_numeric($birthYear))
        {
          echo "Please input Numeric Year";
          $flag=0;
        }
        else {
          if($birthDate>31 || $birthDate<1)
          {
              echo " Input Date between 1 to 31";
              $flag=0;
          }
          else {
              if($birthMonth>12 || $birthMonth<1)
              {
                  echo  "Input Month between 1 to 12";
                  $flag=0;
              }
              else {
                  $birth =$birthDate."/".$birthMonth."/".$birthYear;
                  }
              }
          }

        }
      }
    }
  }




if($flag==1)
{
  $data['name']=$name;
  $data['email']=$email;
  $data['birth']=$birth;


  if (updateWarden($_SESSION['username'],$data)) 
  {
    echo 'Successfully updated!!';
  }

  else 
  {
    echo 'Could not add!!';
  }
}
 else 
{
	echo 'You are not allowed to access this page.';
}


?>