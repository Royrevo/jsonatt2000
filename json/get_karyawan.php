<?php
	// Get Config file
	require "../config/config.php";
	
	// Variable
	isset($_GET['id']) ? $id = intval($_GET['id']) : '';
	
	$table	= "USERINFO";

	// Query to Get Data from Database
	if (isset($id)) {
		
		// Query to Database
		$sql  = $dbh->prepare("SELECT * FROM ". $table . " WHERE USERID = " . $id);
		$sql->execute();
		
		// Fetch Data
		$rows = $sql->fetch(PDO::FETCH_OBJ);

		if(!$rows) {
			echo json_encode("204 No Content");
			exit();
		}
		
	} else {
		
		// Query to Database
		$sql  = $dbh->prepare("SELECT * FROM " . $table . " ORDER BY USERID, Name ASC");
		$sql->execute();
		
		// Fetch Data
		$rows = $sql->fetchAll(PDO::FETCH_ASSOC);
		
		if(!$rows) {
			echo json_encode("204 No Content");
			exit();
		}

	}
	
	// View data with JSON format
	$json = json_encode($rows);
	echo $json;

	// Close Connection
	$sql = null;
	$dbh = null;

?>