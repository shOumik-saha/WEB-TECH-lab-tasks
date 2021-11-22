
<?php
require_once '../model/connect.php';
$mysqli = new mysqli("localhost", "root", "", "waren_db");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT DETAILS  FROM `warden` WHERE Username = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result( $details);
$stmt->fetch();
$stmt->close();

echo "$details";
?>