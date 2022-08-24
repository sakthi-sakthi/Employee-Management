<?php
session_start();
session_destroy();
{
	header('location:http://localhost/Employee-Management/index.php');
}
?>