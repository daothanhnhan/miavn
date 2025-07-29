<?php 
	session_start();
	$id = $_GET['id'];//echo $id;
	if (!in_array($id, $_SESSION['size_brand'])) {
		$_SESSION['size_brand'][] = $id;
		// echo implode('-', $_SESSION['brand']);
	} else {
		if (($key = array_search($id, $_SESSION['size_brand'])) !== false) {
		    unset($_SESSION['size_brand'][$key]);
		}
	}
?>