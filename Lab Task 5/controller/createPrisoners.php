<?php  
require_once '../model/model.php';


if (isset($_POST['createPrisoners'])) {
	$data['id'] = $_POST['id'];
	$data['Name'] = $_POST['Name'];
	$data['Address'] = $_POST['Address'];
	$data['Nationality'] = $_POST['Nationality'];
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["Name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["Name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addStudent($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.';
}

?>