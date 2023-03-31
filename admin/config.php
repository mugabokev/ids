
<?php
/* Attempt MySQL server connection. running MySQL
server with default setting (user 'root' with no password) */
$con = mysqli_connect("localhost", "root", "","ids");

// Check connection
if ($con === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 ?>
