<?php 

require_once ('model/model.php');

function fetchAllPrisoners(){
	return showAllPrisoners();

}
function fetchPrisoners($id){
	return showPrisoners($id);

}
