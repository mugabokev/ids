<?php
	include 'admin/config.php';
	// Attempt select query execution
	$sql = "SELECT * FROM question";
	$result = mysqli_query($con, $sql);
	$d  = mysqli_num_rows($result) > 0;

	if ($result && $d) {
	//create an array
	$questionArray = array();
	while ($row =mysqli_fetch_assoc($result)) {
		$questionArray[] = $row;
	}

	 echo json_encode($questionArray);
	} else {
		echo"error". mysqli_error($connection);
	}
?>