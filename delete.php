<?php
session_start();
if(!isset($_SERVER['HTTP_REFERER']))
{    
    header('location:/Employee-Management/index.php');
    exit;
}
include 'db.php';
$result = mysqli_query($conn,"SELECT * FROM employee");

if (isset($_GET['id'])) 
{
    $id = $_GET['id'];
    $sql = "DELETE FROM `employee` WHERE `id`='$id'";
     $result = $conn->query($sql);
     if ($result == TRUE) 
     { 
        header('location:http://localhost/Employee-Management/display.php');
    }
    else
    {
        echo "Error:" . $sql . "<br>" . $conn->error;
          }
} 
?>

