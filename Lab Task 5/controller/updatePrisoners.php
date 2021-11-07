<?php  
require_once '../model/model.php';


if (isset($_POST['updatePrisoner'])) {
	$data['Name'] = $_POST['Name'];
	$data['Address'] = $_POST['Address'];
	$data['Nationality'] = $_POST['Nationality'];
	$data['image'] = basename($_FILES["image"]["Name"]);

	$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["Name"]);


  if (updateStudent($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showPrisoner.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>