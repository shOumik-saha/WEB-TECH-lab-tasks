<?php 

require_once '../model/model.php';

if (deleteStudent($_GET['id'])) {
    header('Location: ../showAllStudents.php');
}

 ?>