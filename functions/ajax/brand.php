<?php 
	session_start();
	$id = $_GET['id'];//echo $id;
	if (!in_array($id, $_SESSION['brand'])) {
		$_SESSION['brand'][] = $id;
		// echo implode('-', $_SESSION['brand']);
	} else {
		if (($key = array_search($id, $_SESSION['brand'])) !== false) {
		    unset($_SESSION['brand'][$key]);
		}
	}
?>