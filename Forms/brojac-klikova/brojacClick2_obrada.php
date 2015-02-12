<?php
   session_start();

   if(isset($_POST['next'])){
       $_SESSION['cnt']++;
     } 
   if(isset($_POST['clear'])) {
	   $_SESSION['cnt'] = 0;
     }
	
	header('Location:brojacClick2.php');
?>