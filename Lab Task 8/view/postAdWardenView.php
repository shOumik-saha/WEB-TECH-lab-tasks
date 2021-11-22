
<!DOCTYPE html>
<?php include("../model/header.php");
require_once "../javascript/postadWarden.php";
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/signup.css">
  </head>
  <body>

    <form class="loginbox" onsubmit="return validation()" method="post" action="../controller/postAdWardenC.php">
      <br>
     <h2>Warden's Activity</h2>
      <br><br>
      Your Name: <input type="text" name="pname" id="pname" onkeyup="checkpname()" onblur="checkpname()" ><br><br>
      <span class="error" id="pnameErr">*<?php if(!empty($_GET['pnameErr'])){echo $_GET['pnameErr'];} ?></span>
      <br><br>
       E-mail: <input type="text" name="email" id="email" onkeyup="checkEmail()" onblur="checkEmail()"><br><br>
      <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
      <br><br>
      Add Prisoner <input type="text" name="addp" id="addp" onkeyup="checkaddp()" onblur="checkaddp()"><br><br>
      <span class="error" id="addpErr">* <?php if(!empty($_GET['addpErr'])){echo $_GET['addpErr'];} ?></span>
      <br><br>
      Add Prisoner NID <input type="text" name="addpi" id="addpi" onkeyup="checkaddpi()" onblur="checkaddpi()" ><br><br>
      <span class="error" id="addpiErr">* <?php if(!empty($_GET['addpiErr'])){echo $_GET['addpiErr'];} ?></span>
      <br><br>

      Add Prisoner's Address <input type="text" name="addpa" size="75" id="addpa" onkeyup="checkaddpa()" onblur="checkaddpa()"><br><br>
      <span class="error" id="addpaErr">* <?php if(!empty($_GET['addpaErr'])){echo $_GET['addpaErr'];} ?></span>
      <br><br>


      <input type="submit" name="submit" value="Submit">
    </form>

  </body>
</html>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php include("../model/footer.php"); ?>