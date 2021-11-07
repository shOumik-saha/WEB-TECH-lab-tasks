<?php

require_once '../model/model.php';

if (isset($_POST['findPrisoners'])) {
	
		echo $_POST['user_name'];

    try {
    	
    	$allSearchedPrisoners = searchPrisoner($_POST['user_name']);
    	require_once '../showSearchedPrisoner.php';

    } catch (Exception $ex) {
    	echo $ex->getMessage();
    }
}

