
<?php

require_once 'connect.php';


function showAllPrisoners(){
	$conn = db_conn();
    $selectQuery = 'SELECT * FROM `prisoners` ';
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function showPrisoner($id){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `prisoners` where id = ?";

    try {
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    return $row;
}

function searchPrisoner($prisoner_name){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `prisoners` WHERE NAME LIKE '%$prisoner_name%'";


    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}


function addPrisoner($data){
	$conn = db_conn();
    $selectQuery = "INSERT into prisoners (Name, Address, Nationality)
VALUES (:name, :address, :nationality)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':name' => $data['name'],
        	':address' => $data['address'],
        	':nationality' => $data['nationality']
          ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}


function updatePrisoner($id, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE products set Name = ?, Address = ?, Nationality = ? where id = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['name'], $data['address'], $data['nationality'], $id
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    $conn = null;
    return true;
}

function deletePrisoner($id){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `prisoners` WHERE `id` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}