
<!DOCTYPE html>
<?php include("../model/header.php");
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/signup.css">
  </head>
  <body>

    <form class="loginbox"  method="post" action="../controller/postAdWardenC.php">
      <br>
     <h2>Post ad</h2>
      <br><br>
      Your Name: <input type="text" name="yourname" id="yourname" ><br><br>
      <span class="error" id="yournameErr">*<?php if(!empty($_GET['yournameErr'])){echo $_GET['yournameErr'];} ?></span>
      <br><br>
       E-mail: <input type="text" name="email" id="email" ><br><br>
      <span class="error" id="emailErr">* <?php if(!empty($_GET['emailErr'])){echo $_GET['emailErr'];} ?></span>
      <br><br>
      Add Prisoner <input type="text" name="addp" id="addp"><br><br>
      <span class="error" id="addpErr">* <?php if(!empty($_GET['addpErr'])){echo $_GET['addpErr'];} ?></span>
      <br><br>
      Add Prisoner NID <input type="text" name="addpi" id="addpi" ><br><br>
      <span class="error" id="addpiErr">* <?php if(!empty($_GET['addpiErr'])){echo $_GET['addpiErr'];} ?></span>
      <br><br>

      Add Prisoner's Address <input type="text" name="addpa" size="75" id="addpa"><br><br>
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