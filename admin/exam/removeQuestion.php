<?php
include("../config.php");

$sql = mysqli_query($con,"DELETE FROM `question` WHERE `id` = '".$_GET['id']."'");
if ($sql) {
	echo "1";
} else {
	echo "error";
}
?>
