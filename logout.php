<?php
session_start();
if(!isset($_SERVER['HTTP_REFERER']))
{    
    header('location:/Employee-Management/index.php');
    exit;
}
session_destroy();
{
	header('location:http://localhost/Employee-Management/index.php');
}
?>
