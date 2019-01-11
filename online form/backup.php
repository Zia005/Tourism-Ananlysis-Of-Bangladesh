<?php

	if (!isset($_GET["key"]) && $_GET["key"] != "ahadCUjoty")
		die("Unauthorized access denied");


	require_once("include/dbConnection.php");

	$query = $handler -> prepare("SELECT * FROM data");
	$query -> execute();

	if ($query -> rowCount() == 0) {
		die("No JSON Object");
	} else {			
		$file = fopen("data.json", "w+");
		fwrite($file, "[");
		$count = 1;
		
		$objects = $query -> fetchAll(PDO::FETCH_OBJ);
		foreach ($objects as $object) {
			fwrite($file, $object -> jsonObj . "\n");
			if ($count < $query -> rowCount()) {
			    fwrite($file, ",");
			    $count ++;
			}
		}
		fwrite($file, "]");
		fclose($file);
		$handler = null;
		
        // header('Content-Type: application/json');
        // header('Content-Disposition: attachment; filename=data.json');
        // header('Pragma: no-cache');
        // readfile($file);
		header("Location: http://curesearch.tk/data.json");
	}