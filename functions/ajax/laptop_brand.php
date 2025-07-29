<?php 
	session_start();
	$id = $_GET['id'];//echo $id;
	if (!in_array($id, $_SESSION['laptop_brand'])) {
		$_SESSION['laptop_brand'][] = $id;
		// echo implode('-', $_SESSION['brand']);
	} else {
		if (($key = array_search($id, $_SESSION['laptop_brand'])) !== false) {
		    unset($_SESSION['laptop_brand'][$key]);
		}
	}
?>