<!DOCTYPE html>
<html>

<head>
    <title>Uploded Profile Picture</title>
</head>

<body>


<?php
require_once "../model/model.php";

session_start();

$target_dir = "file/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$flag = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
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
$propic=$_FILES["fileToUpload"]["name"];
?>
 <div class="photo">
        <fieldset>
            <legend><B>PROFILE PICTURE</B></legend> <br>
            <br><img src="file/<?php echo $propic?>" alt="Profile Picture">
        </fieldset>
    </div>
    </body>

</html>