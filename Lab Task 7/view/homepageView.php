<meta charset="utf-8">
<link rel="stylesheet" href="../css/homepage.css">


<header>
  <?php include("../model/header.php") ?>
</header>

 <?php
 require_once '../controller/adInfoC.php';


 $data = fetchAllAd();



   if($data!=NULL)
   {
     foreach ($data as $i => $ad):

          $name= $ad['Name'] ;
          $email=$ad['Email'];
          $addp= $ad['AddP'] ;
          $addpi=$ad['AddPI'];
          $addpa= $ad['AddPA'] ;
          $imagedata=fetchImage($name);
          if($imagedata!=NULL)
          {
            foreach ($imagedata as $j => $warden):
                 $image=$warden['Image'];
            endforeach;

            echo "<br />";
              echo '
                             <img src="data:image/jpeg;base64,'.base64_encode($image ).'" height="200" width="200" class="img-thumnail" />
              ';
          }

      ?>


  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <title></title>
    </head>
    <body>

    <p ><?php echo "$name"; ?></p>
    <p ><?php echo "$email"; ?></p>
    <p ><?php echo "$addp"; ?></p>
    <p ><?php echo "$addpi"; ?></p>
    <p ><?php echo "$addpa"; ?></p>

      <?php

     endforeach;

   }

  ?>
</body>

  <?php include("../model/footer.php"); ?>

</html>