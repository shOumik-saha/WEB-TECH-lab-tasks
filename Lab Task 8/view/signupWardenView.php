
<!DOCTYPE HTML>
<?php require_once "../javascript/signup.php";
include("../model/header.php"); ?>
<html>
<head>
<link rel="stylesheet" href="../css/signup.css">
</head>
<body>
<form class="loginbox" onclick="return validation()" method="post" action="../controller/signupWardenC.php">
  <h2>Sign Up</h2>

  <p>Name:</p> <input type="text" onkeypress="checkName()" onblur="checkName()" name="name" id="name" placeholder="Enter Name">
  <br><br>
  <span class="error" id="nameErr">* <?php if(!empty($_GET['nameErr'])){echo $_GET['nameErr'];} ?></span>
  <br>
   <p>E-mail:</p> <input type="text" onkeypress="checkEmail()" onblur="checkEmail()" name="email" id="email" placeholder="Enter Email">
  <br><br>
  <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
  <br>
  <p>Username:</p> <input type="text" onkeypress="checkUsername()" onblur="checkUsername()" name="username" id="username" placeholder="Enter Username">
  <br><br>
  <span class="error" id="usernameErr">* <?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span>
  <br>
  <p>Password:</p> <input type="password"  onkeydown="checkPassword()" onblur="checkPassword()" name="password" id="password" placeholder="Enter Password" >
  <br><br>
  <span class="error" id="passwordErr">* <?php if(!empty($_GET['passwordErr'])){echo $_GET['passwordErr'];} ?></span>
  <br>

  <p>Comfirm Password:</p> <input type="password" onkeypress="checkConfirmPassword()" onblur="checkConfirmPassword()" name="confirmpassword" id="confirmpassword" placeholder="Enter Password">
  <br><br>
  <span class="error" id="confirmpasswordErr">* <?php if(!empty($_GET['$confirmpasswordErr'])){echo $_GET['confirmpasswordErr'];} ?></span>
  <br>

  <p>Date of Birth:</p><input type="date"  size="1" onkeyup="checkBirth()"  onkeypress="checkBirth()" onblur="checkBirth()"  name="birth" id="birth"  >

  <br><br>
  <span class="error" id="birthErr">* <?php if(!empty($_GET['birthErr'])){echo $_GET['birthErr'];} ?></span>
  <br>
  <p>Gender:</p>

  <div id="radio"  onclick="checkGender()" onblur="checkGender()">
  <br>
  <input type="radio" name="gender" id="female" value="female">
  <label for="female">Female</label>
  <input type="radio" name="gender" id="male" value="male">
  <label for="male">Male</label>
  <input type="radio" name="gender" id="other"  value="other">
  <label for="other">Other</label>
  </div>
  <br><br>
  <span class="error" id="genderErr">* <?php if(!empty($_GET['genderErr'])){echo $_GET['genderErr'];} ?></span>
  <br>
  <p>Designation:</p> <input type="text" onkeypress="checkDesignation()" onblur="checkDesignation()" name="designation" id="designation" placeholder="Enter designation">
  <br><br>
  <span class="error" id="designationErr">* <?php if(!empty($_GET['designationErr'])){echo $_GET['designationErr'];} ?></span>
  <br>
  <input type="submit" name="submit" value="Submit">
</form>
<br><br><br>
</body>
</html>