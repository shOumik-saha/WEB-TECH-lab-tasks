<!DOCTYPE html>
<html>
  <head>
  <style type="text/css">
		.error
		{
			color: red;
		}
	</style>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
   $cpass=$newpass=$retypepass="";
   $cpassErr=$newpassErr=$retypepassErr="";

   if($_SERVER["REQUEST_METHOD"] == "POST")
   {
     if (empty($_POST["cpass"])) 
     {
       $cpassErr = "Current Password is required";
     }
     else 
    {
      $cpass = test_input($_POST["cpass"]);

       if (strcmp($cpass,"1111111@")) 
          {
          $cpassErr = "Incorrent Password";
          }
        else
          {
            $cpassErr = "correct";      
          }
    }

        if (empty($_POST["newpass"])) 
        {
          $newpassErr = "New Password is required";
        }
        else 
        {
         $newpass = test_input($_POST["newpass"]);

          if (!strcmp($newpass,"1111111@")) 
             {
             $newpassErr = "Current and New Password can not be same.";
             }
        }

           if (empty($_POST["retypepass"])) 
           {
             $retypepassErr = "re-confirm your new password";
           }
           else 
           {
            $retypepass = test_input($_POST["retypepass"]);

             if (strcmp($newpass,$retypepass)) 
              {
                $retypepassErr = "Retype password and New Password need to be same.";
              }

            }
     }





   function test_input($data) 
   {
     $data = trim($data);
     $data = stripslashes($data);
     $data = htmlspecialchars($data);
     return $data;
   }

     ?>
     
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset>
    <legend><h3>Change Password</h3></legend>
        Current Password: <input type="text" name="cpass" value="<?php echo $cpass;?>">
        <span class="error">* <?php echo $cpassErr;?></span>
        <br><br>
        <span style="color:green">New Password:</span>
        <input type="text" name="newpass" value="<?php echo $newpass;?>">
        <span class="error">* <?php echo $newpassErr;?></span>
        <br><br>
        <span style="color:Red">Retype New Password:</span>
        <input type="text" name="retypepass" value="<?php echo $retypepass;?>">
        <span class="error">* <?php echo $retypepassErr;?></span>
        <br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
    </fieldet>
    </form>
  </body>
</html>