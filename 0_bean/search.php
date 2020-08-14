<?php
	$conn = mysqli_connect("localhost","root","","backendproject_bemm");

	$search = $_POST["search"];
	// $search = isset($_POST["search"]) ? $_POST["search"] : "null"

    $sql = "SELECT * FROM events WHERE events.eventName LIKE '$search%'
    OR events.eventDescription LIKE '$search%'
    OR events.eventDescription LIKE '$search%'

    ";

	$result = mysqli_query($conn, $sql);

	if($result->num_rows == 0){
		echo "No result
	}elseif($result->num_rows == 1){
		$row = $result->fetch_assoc();
		echo $row["eventName"];
	}else {
		$rows = $result->fetch_all(MYSQLI_ASSOC);
		foreach ($rows as $row) {
			echo $row["eventName"] . "<br>";
		}
	}

?>