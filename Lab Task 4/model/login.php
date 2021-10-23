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
</head>

<body>
<?php include './resources/header.php';
    include './resources/footer.php';
    ?>
    <?php 
$userNameErr = $passErr = "";
$username = $password = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $userNameErr = "UserName is required";
  } else {
    $username = test_input($_POST["username"]);
    if (!preg_match("/^[a-zA-Z-._]*$/",$username)) {
      $userNameErr = "Only alpha numeric characters, period, dash or underscore allowed";
      $username ="";
    }
    else if (strlen($username)<2) {
      $userNameErr = "At least two charecters needed";
      $username ="";
    }
  }
  
  if (empty($_POST["Password"])) {
    $passErr = "Password is required";
  } else {
    $password = test_input($_POST["Password"]);
    if (strlen($password)<8) {
      $passErr = "Password must be 8 charecters";
      $password ="";
    }
    else if (!preg_match("/[@,#,$,%]/",$password)) {
      $passErr = "Password must contain at least one of the special characters (@, #, $,%)";
      $password ="";
    }
  }
  
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
    <br><br><br>
    <div class="log">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <fieldset>
                <legend><B>LOGIN</B></legend>
                User Name: <input type="text" name="username">
                <span class="error">* <?php echo $userNameErr;?></span>
                <br><br>
                Password: <input type="Password" name="Password">
                <span class="error">* <?php echo $passErr;?></span>
                <br><br>
                <a href="./homepage.php"><input type="submit" name="submit" value="Submit"></a>

                <a href="./forgotpassword.php">Forgot Password?</a>
            </fieldset>

        </form>

    </div>


</body>

</html>