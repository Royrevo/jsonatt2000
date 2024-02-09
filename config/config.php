<?php
	$db_username = ''; //username
	$db_password = ''; //password

	// path to database file
	// Sesuaikan dengan koneksi Database di Software Attendance
	$database_path = "C:\Program Files (x86)\Attendance Management\att2000.mdb";

	//check file exist before we proceed
	if (!file_exists($database_path)) {
		die("Access database file not found !");
	}

	//PDO object
	try {
		$dbh = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$database_path; Uid=$db_username; Pwd=$db_password;");
		$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	} catch (PDOException $e) {
		echo $e->getMessage()."\n";
	}
?>