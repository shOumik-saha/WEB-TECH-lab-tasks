
<?php

require_once ('../model/model.php');

function fetchAllPrisoners(){
	return showAllPrisoners();

}
function fetchPrisoner($id){
	return showPrisoner($id);

}
?>