
<?php

require_once '../model/model.php';





if (isset($_POST['submit'])) 
{

  $birthDate = $birthMonth = $birthYear = $name = $email = $gender = $comment = $website = $birth= $designation= "";
  $username=$password="";
 $confirmPassword="";
 $flag=1;
 function test_input($data) 
 {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

 if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
    $flag=0;
  } else {
    $name = test_input($_POST["name"]);
    if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) 
    {
      $nameErr = "Only letters white space, period & dash allowed";
      $name ="";
      $flag=0;
    }
    else if (strlen($name)<2)
     {
      $nameErr = "At least two words needed";
      $name ="";
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
  if (empty($_POST["birthDate"]) || empty($_POST["birthMonth"]) || empty($_POST["birthYear"])) 
  {
    echo "Date Month and Year is required";
    $flag=0;
  } else 
  {

    $birthDate=test_input($_POST["birthDate"]);
    $birthMonth=test_input($_POST["birthMonth"]);
    $birthYear=test_input($_POST["birthYear"]);

    if(!is_numeric($birthDate))
    {
      echo "Please input Numeric Date";
      $flag=0;
    }
    else 
    {

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
                  else 
                  {
                  $birth =$birthDate."/".$birthMonth."/".$birthYear;
                  }
              }
          }

        }
      }
    }
  }



    if (empty($_POST["username"])) 
    {
      echo "User Name is required";
      $flag=0;
    }
    else {
     $username = test_input($_POST["username"]);

      if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
         echo "Only letters and white space allowed";
         $flag=0;
       }
       else {
         if(strlen($username)<2)
         {
            echo "Name must contains at least two character ";
            $flag=0;
         }

       }
    }

    if(empty($_POST["password"]))
    {
      echo "Password is required";
      $flag=0;
    }
    else {
      $password=test_input($_POST["password"]);
      if(strlen($password)<5)
      {
        echo "Password must not be less than eight (8) characters";
        $flag=0;
      }
    }

    if(empty($_POST["confirmpassword"]))
    {
      echo "Confirm Password is required";
      $flag=0;
    }
    else {
      if(empty($_POST["password"]))
      {
        echo "Password is required";
        $flag=0;
      }
      else {
        $confirmpassword=test_input($_POST["confirmpassword"]);

        if(strcmp($password,$confirmpassword))
        {
          echo "Password and confirm password have to be same";
          $flag=0;
        }
      }
    }
    if (empty($_POST["gender"])) 
    {
      echo "Gender is required";
      $flag=0;
    } else {
      $gender = test_input($_POST["gender"]);
    }
    if (empty($_POST["designation"])) 
    {
        echo "designation is required";
        $flag=0;
      } else
       {
        $designation = test_input($_POST["designation"]);
      }
    }

if($flag==1)
{
  $data['name']=$name;
  $data['email']=$email;
  $data['birth']=$birth;
  $data['username']=$username;
  $data['password']=$password;
  $data['gender']=$gender;
  $data['designation']=$designation;

  if (addSignupInfo($data)) 
  {
    echo 'Successfully added!!';
  }

  else 
  {
    echo 'Could not add!!';
  }
}


else 
{
  echo "You can not access this page!!";
}






?>