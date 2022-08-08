<?php
include 'user.php'; 
   session_start();
function is_loggedin()
   {
       return  isset( $_SESSION['auth_user'] );
   }
?>