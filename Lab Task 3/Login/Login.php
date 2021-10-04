<!DOCTYPE html>
<html lang="en">
<head>
<style type="text/css">
		.error
		{
			color: red;
		}
	</style>

    <meta charset="UTF-8">
    
    <h1>Log In</h1>
</head>

<body>
    <?php 
    $nameErr = $passwordErr = "" ;
    $password = $name = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
        if (empty($_POST["name"]))
        {
          $nameErr = "Name is required";
        } 
        else 
		{
            $name = test_input($_POST["name"]);
            if (!preg_match("/^[a-zA-Z-.' ]*$/",$name)) 
			{
              $nameErr = "Only letters white space, period & dash allowed";
              $name ="";
            }
            else if (strlen($name)<2) 
			{
              $nameErr = "At least two words needed";
              $name ="";
            }
            else if (strlen($name)>2) 
			{
               $nameErr = "perfect";
               
            }
        }

          if (empty($_POST["password"])) 
		  {
            $passwordErr = "password is required";
          } 
		  else 
		    {
            $password = test_input($_POST["password"]);
            if (strlen($password)<8)
              {
              $passwordErr = "must not be less than eight (8) characters";
              $password ="";
              }
            else if (!preg_match("/[@,#,$,%]/",$password)) 
			  {
              $passErr = "Password must contain at least one of the special characters (@, #, $,%)";
              $password ="";
              }
			  else
			  {
				  $passwordErr="perfect";	  
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
        <div class="login">

            <fieldset>
                <legend>Login</legend>
                <div class="username">
                    <div class="name">

                        Name: <input type="text" name="name" value="<?php echo $name;?>">
                        <span class="error">* <?php echo $nameErr;?></span>
                        <br><br>

                    </div>
                    <div class="password">

                        password: <input type="text" name="password" value="<?php echo $password;?>">
                        <span class="error">* <?php echo $passwordErr;?></span>
                        <br><br>
                    </div>
                    <hr>
                    <input type="checkbox" name="Remember_me"> Remember me <br>

                    <input type="submit" name="submit" value="Submit"> <a href="http://">Forgot password?</a>

                </div>
            </fieldset>
    </form>
	<?php 
	if (isset($_POST['submit'])) 
	{
		echo "<h1>Your Input</h1>";

		echo $name . "<br>";
		echo $password . "<br>";
	}

	 ?>   






</body>

</html>