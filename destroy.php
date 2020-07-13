<?php
//check for an existing session or start a new one
session_start(); 
// destroy the sessionwhen user presses forget me
session_destroy(); 
// be sure that the information is removed 
$_SESSION['name'] = null; 
//returns back to index.php
header('location:index.php'); 
?>