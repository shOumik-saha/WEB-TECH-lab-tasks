


<!DOCTYPE html>
<html>
     <head>
       <script>
       $(document).ready(function(){
            $('#insert').click(function(){
                 var image_name = $('#image').val();
                 if(image_name == '')
                 {
                      alert("Please Select Image");
                      return false;
                 }
                 else
                 {
                      var extension = $('#image').val().split('.').pop().toLowerCase();
                      if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)
                      {
                           alert('Invalid Image File');
                           $('#image').val('');
                           return false;
                      }
                 }
            });
       });
       </script>
  <link rel="stylesheet" href="../css/viewProfileWarden.css">
     </head>
     <body>
          <br /><br />
          <div class="container" >
               <br />
               <form method="post" action="../controller/changeProfilePictureC.php" enctype="multipart/form-data">
                    <input  type="file" name="image" id="image" />
                    <br /><br>
                    <input type="submit" name="submit" id="submit" />
               </form>
               <br />
               <br />
          </div>
     </body>
</html>