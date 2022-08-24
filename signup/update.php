<?php
session_start();
include"db.php";

if(isset($_GET['id']))
{
    $query="select * from employee where id='".$_GET['id']."'";

    $run=mysqli_query($conn,$query);
}

if(isset($_POST['submit'])){
    if(!empty($_POST['emp_name']) && !empty($_POST['emp_id']) && !empty($_POST['employeer_name']) && !empty($_POST['unit']) && !empty($_POST['dob']) && !empty($_POST['email']));

        $emp_name =$_POST['emp_name'];
        $emp_id =$_POST['emp_id'];
        $employeer_name =$_POST['employeer_name'];
        $unit =$_POST['unit'];
        $dob =$_POST['dob'];
        $email =$_POST['email'];


        

        if ($emp_name !="" && $emp_id !="" && $employeer_name !="" && $unit !="" && $dob !="" && $email !="") 
    {
      $query="UPDATE employee set emp_name='$emp_name',emp_id='$emp_id',employeer_name='$employeer_name',unit='$unit',dob='$dob',email='$email'where id='".$_GET['id']."'";

   $run1=mysqli_query($conn,$query);
        if($run1)
        {
        		$_SESSION['status'] = "Data Updated Successfully";

        		header('location:http://localhost/Employee-Management/display.php');
           
        }
        else{
            echo"Forms are not submitted";
        	}

		}
		
}	
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Update</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>	
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!--  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	 <script type="text/javascript">
        $(document).ready(function() {
        $(".update").click(function(){
			swal({
				  title: "Update Success!",
				  text: "Your record updated successfully !",
				  icon: "success",
				});

        });
    });
</script> -->
</head>
<body>

	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-02.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="POST" autocomplete="off">
					<span class="login100-form-title">
						Employee Update Form
						<p>Welcome to BoscoSoft Technologies</p>
					</span>
					 <?php
                            while ($row = $run->fetch_assoc())
                            { ?>
					<div class="wrap-input100 validate-input" data-validate = "Employee Name is required">
						<input class="input100" type="text" name="emp_name" placeholder="Employee Name" value="<?php echo $row['emp_name']; ?>" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Employee Id is required">
						<input class="input100" type="text" name="emp_id" placeholder="Employee Id" value="<?php echo $row['emp_id']; ?>" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Employeer Name is required">
						<input class="input100" type="text" name="employeer_name" placeholder="Employeer Name" value="<?php echo $row['employeer_name']; ?>" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Unit is required">
						<input class="input100" type="text" name="unit" placeholder="Enter Your Unit Name" value="<?php echo $row['unit']; ?>" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input"data-validate = "Date of Birth is required">
						<input class="input100" type="date" name="dob" placeholder="Date of Birth" value="<?php echo $row['dob']; ?>" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>
					
						<?php  } ?> 
					<div class="container-login100-form-btn">
					<button class="update login100-form-btn" name="submit">Update</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	


</body>
</html>