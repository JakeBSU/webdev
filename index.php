<?php include_once("index.html");
   session_start(); 
   echo "<li><a href='#'>Welcome ".$_SESSION['user_id']."!</a></li>";
?>
