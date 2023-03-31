<?php
include("config.php");

   ob_start();
   session_start();
     session_destroy();
  header('location:../index.html');
  ob_end_flush();
?>