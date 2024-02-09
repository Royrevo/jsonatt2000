<?php
	// Get Config file
	require "../config/config.php";
	
	/* GET BY DATE */
	
	// Variable
	isset($_GET['id']) ? $id = intval($_GET['id']) : '';

	// Query to Get Data from Database
	if (isset($id)) {
		
		// DATA REQUEST BY ID
		
		$sql  = $dbh->prepare("SELECT CHECKINOUT.USERID,
									CHECKINOUT.CHECKTIME,
									USERINFO.Name,
									SchClass.schName as jamKerja,
									SchClass.StartTime as jadwalJamMasuk,
									SchClass.EndTime as jadwalJamPulang,
									SchClass.CheckInTime1 as checkInMulai,
									SchClass.CheckInTime2 as checkInAkhir,
									SchClass.CheckOutTime1 as checkOutMulai,
									SchClass.CheckOutTime2 as checkOutAkhir
								FROM (((CHECKINOUT 
									 INNER JOIN USERINFO ON CHECKINOUT.USERID = USERINFO.USERID)
									 INNER JOIN UserUsedSClasses ON CHECKINOUT.USERID = UserUsedSClasses.Userid)
									 INNER JOIN SchClass ON UserUsedSClasses.SchId = SchClass.schClassid)
								WHERE CHECKINOUT.USERID = " . $id . "
								ORDER BY CHECKINOUT.USERID , CHECKINOUT.CHECKTIME ASC
								
							");
		
		$sql->execute();
		
		// Fetch Data
		$rows = $sql->fetchAll(PDO::FETCH_ASSOC);

		if(!$rows) {
			echo json_encode("204 No Content");
			exit();
		}
	
	// DATA REQUEST BY DATE
	} else if(isset($_GET['date1']) AND !isset($_GET['date2'])) {
	
		$date1 = str_replace('-','/',$_GET['date1']);
	
		// Query to Database		
		$sql  = $dbh->prepare("SELECT CHECKINOUT.USERID,
									CHECKINOUT.CHECKTIME,
									USERINFO.Name,
									SchClass.schName as jamKerja,
									SchClass.StartTime as jadwalJamMasuk,
									SchClass.EndTime as jadwalJamPulang,
									SchClass.CheckInTime1 as checkInMulai,
									SchClass.CheckInTime2 as checkInAkhir,
									SchClass.CheckOutTime1 as checkOutMulai,
									SchClass.CheckOutTime2 as checkOutAkhir
								FROM (((CHECKINOUT 
									 INNER JOIN USERINFO ON CHECKINOUT.USERID = USERINFO.USERID)
									 INNER JOIN UserUsedSClasses ON CHECKINOUT.USERID = UserUsedSClasses.Userid)
									 INNER JOIN SchClass ON UserUsedSClasses.SchId = SchClass.schClassid)
								WHERE DATEVALUE([CHECKINOUT.CHECKTIME]) = DATEVALUE('$date1')
								ORDER BY CHECKINOUT.USERID , CHECKINOUT.CHECKTIME ASC
							");
		
		$sql->execute();
		
		// Fetch Data
		$rows = $sql->fetchAll(PDO::FETCH_ASSOC);

		if(!$rows) {
			echo json_encode("204 No Content");
			exit();
		}
	
	// DATA REQUEST BY BEETWEN DATE
	} else if(isset($_GET['date1']) AND isset($_GET['date2'])) {
	
		$date1 = str_replace('-','/',$_GET['date1']);
		$date2 = str_replace('-','/',$_GET['date2']);
		
		// Query to Database
		$sql  = $dbh->prepare("SELECT CHECKINOUT.USERID,
									CHECKINOUT.CHECKTIME,
									USERINFO.Name,
									SchClass.schName as jamKerja,
									SchClass.StartTime as jadwalJamMasuk,
									SchClass.EndTime as jadwalJamPulang,
									SchClass.CheckInTime1 as checkInMulai,
									SchClass.CheckInTime2 as checkInAkhir,
									SchClass.CheckOutTime1 as checkOutMulai,
									SchClass.CheckOutTime2 as checkOutAkhir
								FROM (((CHECKINOUT 
									 INNER JOIN USERINFO ON CHECKINOUT.USERID = USERINFO.USERID)
									 INNER JOIN UserUsedSClasses ON CHECKINOUT.USERID = UserUsedSClasses.Userid)
									 INNER JOIN SchClass ON UserUsedSClasses.SchId = SchClass.schClassid)
								WHERE DATEVALUE([CHECKINOUT.CHECKTIME]) >= DATEVALUE('$date1') AND DATEVALUE([CHECKINOUT.CHECKTIME]) <= DATEVALUE('$date2')
								ORDER BY CHECKINOUT.USERID , CHECKINOUT.CHECKTIME ASC
							");
		
		$sql->execute();
		
		// Fetch Data
		$rows = $sql->fetchAll(PDO::FETCH_ASSOC);

		if(!$rows) {
			echo json_encode("204 No Content");
			exit();
		}
	
	// ALL DATA REQUEST
	} else {
		
		// Query to Database
		$sql  = $dbh->prepare("
								SELECT CHECKINOUT.USERID,
									CHECKINOUT.CHECKTIME,
									CHECKINOUT.CHECKTYPE,
									USERINFO.Name,
									SchClass.schName as jamKerja,
									SchClass.StartTime as jadwalJamMasuk,
									SchClass.EndTime as jadwalJamPulang,
									SchClass.CheckInTime1 as checkInMulai,
									SchClass.CheckInTime2 as checkInAkhir,
									SchClass.CheckOutTime1 as checkOutMulai,
									SchClass.CheckOutTime2 as checkOutAkhir
									
								FROM (((CHECKINOUT 
									 INNER JOIN USERINFO ON CHECKINOUT.USERID = USERINFO.USERID)
									 INNER JOIN UserUsedSClasses ON CHECKINOUT.USERID = UserUsedSClasses.Userid)
									 INNER JOIN SchClass ON UserUsedSClasses.SchId = SchClass.schClassid)
								ORDER BY CHECKINOUT.USERID , CHECKINOUT.CHECKTIME ASC

							");
	
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