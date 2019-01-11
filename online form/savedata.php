<?php 

	$homePage = "http://curesearch.tk";
	
	if (!isset($_POST["jsonData"]) || empty($_POST["jsonData"])) { 
		echo '
				<h2 id="title">Sorry!</h2>
				<p>
					Something went wrong in your browser. Important data is missing. Please try again.
					<br>
					<a href="'.$homePage.'">Do it again</a>
				</p>
		';
		die();
	}	
	
	require_once("include/dbConnection.php");
	
	$sql = "INSERT INTO data(jsonObj) VALUES(?)";
    $query = $handler -> prepare($sql);
    $result = $query -> execute([$_POST["jsonData"]]);
      
	if (($query -> rowCount()) == 1) {
	    $handler = null;
		echo '
				<h2 id="title">Thank You so much!</h2>
				<p>
					You have been an excellent person. We really appreciate your every opinion on various tourist spot of Bangladesh. Thank you for your invaluable time.
				</p>
				<h2>A little gift for YOU!</h2>
				<img id="gift" src="image/gift.jpg" alt="a little gift from us!" title=";)">
				<span id="goodbye">Good Bye</span>
		';
	} else {
		echo '
				<h2 id="title">Sorry!</h2>
				<p>
					Data insertion failed! Something went wrong at server side. We are sorry for this inconvenience. Please try submitting the form again.
					<br>
					<a href="'.$homePage.'">Do it again</a>
				</p>
		';
	}