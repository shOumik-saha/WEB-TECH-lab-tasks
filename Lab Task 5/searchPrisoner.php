
<!DOCTYPE html>
<html>
  <body>
<?php 
    include "starter.php";

?>
    <!-- [SEARCH FORM] -->
    <form method="post" action="controller/findPrisoners.php">
      <h1>SEARCH FOR USERS</h1>
      <input type="text" name="user_name" />
      <input type="submit" name="findPrisoners" value="Search"/>
    </form>


 
  </body>
</html>