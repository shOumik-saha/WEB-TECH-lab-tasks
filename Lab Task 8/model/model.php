
<?php

require_once 'connect.php';

function showImage($name)
{
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `warden` where Name = '$name'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}
function addPostAdInfo($data){
	$conn = db_conn();
    $selectQuery = "INSERT into wardeninfo (Name, Email, AddP,AddPI,AddPA)
VALUES (:name, :email, :addp, :addpi, :addpa)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':coursename' => $data['addp'],
					':salary' => $data['addpi'],
					':comment' => $data['addpa']

          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function showAllAd(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `wardeninfo` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function updateProfilePictureWarden($username, $file){
    $conn = db_conn();
    $selectQuery = "UPDATE warden set Image = '$file' where Username = '$username'";
    try{
          $stmt = $conn->query($selectQuery);

    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function showWarden($username){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `warden` where Username = '$username'";

    try {
      $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}

function searchUsername($username){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `warden` WHERE Username = '$username'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addSignupInfo($data){
	$conn = db_conn();
    $selectQuery = "INSERT into warden (Name, Email, Birthday,Username,Password,Gender,Designation)
VALUES (:name, :email, :birth, :username, :password, :gender, :designation)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':email' => $data['email'],
        	':birth' => $data['birth'],
					':username' => $data['username'],
					':password' => $data['password'],
					':gender' => $data['gender'],
                    ':designation' => $data['designation']
          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function updateWarden($username, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE warden set Name = ?, Email = ?, Birthday = ? where Username = '$username'";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['email'], $data['birth']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}
function updatePasswordWarden($username, $password){
    $conn = db_conn();
    $selectQuery = "UPDATE warden set Password = '$password' where Username = '$username'";
    try{
          $stmt = $conn->query($selectQuery);
      
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}