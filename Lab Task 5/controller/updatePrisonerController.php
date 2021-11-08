
<?php
require_once '../model/model.php';


if (isset($_POST['updateProduct'])) {

  $name=$address=$nationality="";

  $flag=1;

  function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
  }


   if (empty($_POST["name"])) {
    echo "Name is required";
     $flag=0;
   }
   else {
    $name = test_input($_POST["name"]);

     if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) 
     {
        echo "Only letters and white space allowed";
         $flag=0;
      }

   }

   if(empty($_POST["address"]))
   {
     echo "Address is required";
      $flag=0;
   }

   if(empty($_POST["nationality"]))
   {
     echo "Nationality is required";
      $flag=0;
   }



  if(isset($_POST['updatePrisoner']) && $flag==1)
  {
    $data['name'] = $_POST['name'];
    $data['address'] = $_POST['address'];
    $data['nationality'] = $_POST['nationality'];
    $data['image'] = $_POST['image'];


    if (updateProduct($_POST['id'], $data)) 
    {
      echo 'Successfully updated!!';
      //redirect to showStudent
      header('Location: ../view/showPrisoner.php?id=' . $_POST["id"]);
    }
    else 
    {
      echo "Update unsuccessful!!";
    }
  }




} else 
{
	echo 'You are not allowed to access this page.';
}


?>