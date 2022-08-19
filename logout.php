<?php
session_start();
session_destroy();
{
	header('location:http://localhost/new_login/index.php');
}
?>