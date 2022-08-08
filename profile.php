<?php 
require('main.php');    
if(! is_loggedin()){
    header('location:login.php');
}

echo '<h1> welcome to my profile </h1>';

echo "<a href='logout.php'>Logout</a>";
    
?>