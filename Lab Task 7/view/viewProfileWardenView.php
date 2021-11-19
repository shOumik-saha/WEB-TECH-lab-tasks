

<link rel="stylesheet" href="../css/viewProfileWarden.css">

<script type="text/javascript">



  function showDetails(str) {

    xhttp = new XMLHttpRequest();

    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHint").innerHTML = this.responseText;
      }
    };
    xhttp.send();
}

</script>

<?php

require_once '../controller/wardenInfoC.php';



if(isset($_SESSION['username']))
{
$data = fetchWarden($_SESSION['username']);


  if($data!=NULL)
  {
    foreach ($data as $i => $warden):

         $name= $warden['Name'] ;
         $email=$warden['Email'];
         $username= $warden['Username'];
         $birth=$warden['Birthday'];
         $gender= $warden['Gender'] ;
         $designation= $warden['Designation'] ;
    endforeach;

    echo "</div>";
   echo "<div class='profile'>";
    echo ('
    <tr>
             
         </tr>
         
    ');
    include("changeProfilePictureView.php");

    echo "<br /><p>NAME: &nbsp; $name</p>";
    echo "<br /><p>EMAIL: &nbsp;$email</p>";
    echo "<br /><p>USERNAME: &nbsp;$username</p>";
    echo "<br /><p>BIRTH: &nbsp;$birth</p>";
    echo "<br /><p>GENDER: &nbsp;$gender</p>";
    echo "<br /><p>Designation: &nbsp;$designation</p>";

    ?>
    <br>
    <button type="button"  <?php echo ('onclick="showDetails(\'' . $username . '\')"');  ?> > View Details</button>

    <div id="txtHint" ></div>
  </div>

     </div>
    <?php


  }
}

else {
  echo "You cannot access this page!!";
}
 ?>