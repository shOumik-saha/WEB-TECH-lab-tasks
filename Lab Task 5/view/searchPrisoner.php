
<!DOCTYPE html>
<html>
  <body>
<?php 
    include "starter.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="../controller/findPrisonerController.php">
      <h1>SEARCH FOR PRISONERS</h1>
      <input type="text" name="prisoner_name" required/>
      <input type="submit" name="findPrisoner" value="Search"/>
    </form>
  </body>
</html>