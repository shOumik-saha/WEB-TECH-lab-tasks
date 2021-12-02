
<style>
#customers {
font-family: Arial, Helvetica, sans-serif;
border-collapse: collapse;
width: 100%;
}



#customers td, #customers th 
{
border: 1px solid #ddd;
padding: 8px;
}



#customers tr:nth-child(even){background-color:#6495ed;}



#customers tr:hover {background-color:#ddd;}



#customers th 
{
padding-top: 12px;
padding-bottom: 12px;
text-align: left;
background-color: #04AA6D;
color: white;
}
</style>

<?php
$connect = mysqli_connect("localhost", "root", "", "warden_db");
$output = '';
if(isset($_POST["query"]))
{
	$search = mysqli_real_escape_string($connect, $_POST["query"]);
	$query = "
	SELECT * FROM warden
	WHERE Name LIKE '%".$search."%'
    OR Email LIKE '%".$search."%'
	OR Username LIKE '%".$search."%'
	";
}
else
{
	$query = "
	SELECT * FROM warden ORDER BY Username";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
	$output .= '<div class="table-responsive">
					<table id="customers" class="table table bordered">
						<tr>
							<th>Name</th>
							<th>Email</th>
							<th>Birthday</th>
							<th>Username</th>
							<th>Password</th>
							<th>Gender</th>
							<th>Designation</th>
						</tr>';
	while($row = mysqli_fetch_array($result))
	{
		$output .= '
			<tr>
				<td>'.$row["Name"].'</td>
				<td>'.$row["Email"].'</td>
				<td>'.$row["Birthday"].'</td>
				<td>'.$row["Username"].'</td>
				<td>'.$row["Password"].'</td>
				<td>'.$row["Gender"].'</td>
				<td>'.$row["Designation"].'</td>
			</tr>
		';
	}
	echo $output;
}
else
{
	echo 'Data Not Found';
}
?>