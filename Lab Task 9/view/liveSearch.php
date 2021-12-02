
<?php
session_start();

if(isset($_SESSION['username']))
{

  ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		


  </head>
  <body style="background-color:CornflowerBlue">

    <ul>
      <li><a href="#about">About</a></li>
      <li><a href="#contact">Contact</a></li>
     
     <li><a href="../../homepage.php">Home</a></li>
    </ul>

<div style="margin-left:24%">

<div class="w3-container w3-dark-white" style="margin-top:50px">
  <div class="container">
  <br />
  <br />
  <br />
  <h2 align="center"></h2><br />
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-addon">Search</span>
      <input type="text" name="search_text" id="search_text" placeholder="Search by faculty name" class="form-control" />
    </div>
  </div>
  <br />
  <div id="result"></div>
</div>
<div style="clear:both"></div>
<br />

<br />
<br />
<br />
</div>



</div>



  </body>
</html>





<?php


}
 ?>

 <script>
 $(document).ready(function(){
 	load_data();
 	function load_data(query)
 	{
 		$.ajax({
 			url:"../model/liveSearchFetch.php",
 			method:"post",
 			data:{query:query},
 			success:function(data)
 			{
 				$('#result').html(data);
 			}
 		});
 	}

 	$('#search_text').keyup(function(){
 		var search = $(this).val();
 		if(search != '')
 		{
 			load_data(search);
 		}
 		else
 		{
 			load_data();
 		}
 	});
 });
 </script>