<?php
   ob_start();
   session_start();
   $msg = '';

   if (isset($_POST['email']) && !empty($_POST['password'])) {
    $con = mysqli_connect("localhost", "root", "","ids");

    // Check connection
    if ($con === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
// Attempt select query execution
$email = htmlspecialchars(strip_tags($_POST['email']));
$password =  htmlspecialchars(strip_tags($_POST['password']));
$sql = "SELECT * FROM user WHERE email = '$email' and password = '$password'";
 if ($result = mysqli_query($con, $sql)) {
  if (mysqli_num_rows($result) > 0) {
   $res = mysqli_fetch_array($result);
    $_SESSION['valid'] = true;

    //set the current session to the user's email and password
    $_SESSION['password'] = $res['password'];
    $_SESSION['email'] = $res['email'];
	$_SESSION['names'] = $res['names'];
    $_SESSION['user_id'] = $res['userId'];
      header('location:admin/index.php');
   }
  }
  else{
     echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
  }?>
<script>
  alert("invalid credentials,Try Again");
</script>
<?php
   echo "<META http-equiv=refresh content=0;url=login.html>";
}
?>
