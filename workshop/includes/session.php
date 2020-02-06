<?php

  session_start();

   if(!(isset($_SESSION['admin_id']) && $_SESSION['admin_id'] == "yo"))
   {
     header("location: logout_login.php");
   }
?>
