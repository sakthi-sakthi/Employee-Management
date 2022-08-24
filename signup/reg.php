<?php
session_start();
if(!isset($_SERVER['HTTP_REFERER']))
{    
    header('location:/Employee-Management/index.php');
    exit;
}
include"db.php";
if(isset($_POST['submit'])){
    if(!empty($_POST['emp_name']) && !empty($_POST['emp_id']) && !empty($_POST['employeer_name']) && !empty($_POST['unit']) && !empty($_POST['dob']) && !empty($_POST['email']));

        $emp_name =$_POST['emp_name'];
        $emp_id =$_POST['emp_id'];
        $employeer_name =$_POST['employeer_name'];
        $unit =$_POST['unit'];
        $dob =$_POST['dob'];
        $email =$_POST['email'];
      
        
        $query = "insert into employee(emp_name,emp_id,employeer_name,unit,dob,email)values('$emp_name',$emp_id','$employeer_name','$unit','$dob','$email')";
        $run = mysqli_query($conn,$query) or die(mysqli_error());


        if($run){

        		header('location:http://localhost/Employee-Management/index.php');
           
        }
        else{
            echo"Forms are not submitted";
        }

		}
		else{
   
			}

     

?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>SignUp</title>
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
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-02.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="" method="POST" autocomplete="">
					<span class="login100-form-title">
						Employee Registration
						<p>Welcome to BoscoSoft Technologies</p>
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Employee Name is required">
						<input class="input100" type="text" name="emp_name" placeholder="Employee Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Employee ID is required">
						<input class="input100" type="text" name="emp_id" placeholder="Employee Id">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Employeer Name is required">
						<input class="input100" type="text" name="employeer_name" placeholder="Employeer Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>


					<div class="wrap-input100 validate-input" data-validate = "Unit is required">
						<input class="input100" type="text" name="unit" placeholder="Enter Your Unit Name">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input"data-validate = "Date of Birth is required">
						<input class="input100" type="date" name="dob" placeholder="Date of Birth">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-calendar" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="email" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

		
					<div class="container-login100-form-btn">
					<button class="login100-form-btn" name="submit">SignUp</button>
					</div>
					<div class="container-login100-form-btn">
						<a href="http://localhost/Employee-Management/index.php">Already Have an account?</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
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
	 	 <script>
	 	$(document).ready(function() {
	 		swal({
				  title: "Thank You!",
				  text: "You successfully registered!",
				  icon: "success",
				  button: "Done!!"
}).then(function(){
	window.location ="http://localhost/new_login/index.php";
});
	 	})
	 </script>

 -->
	
</body>
</html>
