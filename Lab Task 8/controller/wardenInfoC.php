
<?php

require_once ('../model/model.php');

function fetchAllWardens(){
	return showAllWardens();

}
function fetchWarden($username){
	return showWarden($username);

}
?>