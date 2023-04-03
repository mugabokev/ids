<?php
    include("../config.php");
    if ($_POST["isQuestionPhoto"] == '1') {
        $questionPhoto =  uploadImage($_FILES["question-photo"]);
	} else {
		$questionPhoto = 'NULL';
	}


	$question = htmlentities($_POST['question-text']);

	$sql = "UPDATE `question` SET
	`questionText` = '$question', `questionPhoto` = '$questionPhoto'
	WHERE `question`.`id` = ".$_POST['question-id']."";

	 if ($res = mysqli_query($con, $sql)) {
		echo "1";
	} else {
		echo "error".mysqli_error($con);
		echo "<div class='alert alert-danger' role='alert'>
		There are was a problem performing the operation!
	  </div>";
	 }


	function uploadImage($image) {
		$target_dir = "../uploads/";
		$target_file = $target_dir . basename($image["name"]);
		$imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		// Check if file already exists
		if (file_exists($target_file)) {
			return $target_file;
		}
			if (move_uploaded_file($image["tmp_name"], $target_file)) {
				$question = $image["name"];
			} else {
				echo "error uploadError";
			}

		return $question;
	}
?>