
<?php

require_once '../model/model.php';

if (isset($_POST['findPrisoner'])) {

		echo $_POST['prisoner_name'];

    try {

    	$allSearchedPrisoners = searchPrisoner($_POST['prisoner_name']);
    	require_once '../view/searchAllPrisoners.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}