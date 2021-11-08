
<?php

require_once '../model/model.php';

if (deletePrisoner($_POST['id'])) 
{
    header('Location: ../view/showAllPrisoners.php');

}

 ?>