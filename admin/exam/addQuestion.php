<?php
    include("../config.php");
    if ($_POST["isQuestionPhoto"] == '1') {
        $questionPhoto =  uploadImage($_FILES["question-photo"]);
	}else{
		$questionPhoto = 'NULL';
	}

    if ($_POST["areAnswersImages"] == '1') {
		$choice1 = uploadImage($_FILES["choice1"]);
		$choice2 = uploadImage($_FILES["choice2"]);
		$choice3 = uploadImage($_FILES["choice3"]);
		$choice4 = uploadImage($_FILES["choice4"]);
	} else {
		$choice1 = $_POST['choice1'];
		$choice2 = $_POST['choice2'];
		$choice3 = $_POST['choice3'];
		$choice4 = $_POST['choice4'];
	}

	$correctChoice = $_POST['correct-choice'];
	$question = $_POST['question-text'];

	$sql = "INSERT INTO
	`question` (`id`, `questionText`, `choice1`, `choice2`, `choice3`, `choice4`, `correctChoice`, `questionPhoto`)
	VALUES
	 (NULL, '$question', '$choice1', '$choice2', '$choice3', '$choice4', '$correctChoice', '$questionPhoto')";

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