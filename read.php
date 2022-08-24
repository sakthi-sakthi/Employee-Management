<?php
include('db.php');
?>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Deatils</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<style>
body {
    color: #566787;
    background: #f5f5f5;
    font-family: 'Roboto', sans-serif;
}
.table-responsive {
    margin: 30px 0;

}
.table-wrapper {
    min-width: 1000px;
    background: #fff;
    padding: 20px;
    box-shadow: 0 1px 1px rgba(0,0,0,.05);
    
}
.table-title {
    font-size: 15px;
    padding-bottom: 10px;
    margin: 0 0 10px;
    min-height: 45px;
}
.table-title h2 {
    margin: 5px 0 0;
    font-size: 24px;
}


</style>
</head>
<body>
<div class="container-xl">
    <div class="table-responsive">
        <div class="table-wrapper">
                <div class="row">
                    <div class="col-sm-5">
                        <!-- <h2>Details</h2> -->
                    </div>
<?php
$id=$_GET['id'];
$ret=mysqli_query($conn,"select * from employee where ID =$id");

while ($row=mysqli_fetch_array($ret)) {

?>
</div>
<table class="display table table-bordered" id="hidden-table-info">
    <h1><b><?php  echo $row['emp_name'];?></b></h1><b>Details</b>        
<tbody>
  
    <tr>
    <th>Employee Id :</th>
    <td><?php  echo $row['emp_id'];?></td>
    </tr>

    <tr>
    <th>Employeer Name :</th>
    <td><?php  echo $row['employeer_name'];?></td>
    </tr>

    <tr>
    <th>Unit :</th>
    <td><?php  echo $row['unit'];?></td>
    </tr>

    <tr>
    <th>Date of Birth :</th>
    <td><?php  echo $row['dob'];?></td>
    </tr>

    <tr>
    <th>Email :</th>
    <td><?php  echo $row['email'];?></td>
    </tr>
    
<?php 
}
?>
         
</table>
<center>
      <td><a href="http://localhost/Employee-Management/display.php"  class="btn btn-danger">Back</a></td>
    </center>
    </div>
</div>     
</body>
</html>