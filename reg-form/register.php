<?php
session_start();
include"db.php";
$nameErr = $emailErr = $passwordErr ="";
$name = $email = $password ="";
if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
  if (empty($_POST["name"])) 
  {
    $nameErr = "Name is required";
  }
  else 
  {
    $name = get($_POST["name"]);
  }

   if (empty($_POST["email"])) 
  {
    $emailErr = "email is required";
  }
  else 
  {
    $email = get($_POST["email"]);
  }
   if (empty($_POST["password"])) 
  {
    $passwordErr = "Password is required";
  }
  else 
  {
    $password = get($_POST["password"]);
  }
}

    
    if ($name !="" &&  $email !="" && $password!="") 

if(isset($_POST['submit'])){
    if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']));

        $name =$_POST['name'];
        $email =$_POST['email'];
        $password =$_POST['password'];
 
        
        $query = "insert into users(name,email,password)values('$name','$email','$password')";
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

function get($sakthi) 
{
  $sakthi = trim($sakthi);
  $sakthi = stripslashes($sakthi);
  $sakthi = htmlspecialchars($sakthi);
  return $sakthi;
}

     

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    .error {color: #FF0000;}
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link href="/new_login/colorlib-regform-8/images/Trademark-removebg-preview.png" rel="icon">
    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form method="POST" id="signup-form" class="signup-form" autocomplete="off">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <label>Enter Your Name</label> <span class="error">*</span>
                            <input type="text" class="form-input" name="name" id="name"/>
                            <i class="fa fa-user" aria-hidden="true"></i>
                            <span class="error"><?php echo $nameErr;?></span>
                        </div>
                        <div class="form-group">
                             <label>Enter Your Email</label> <span class="error">*</span>
                            <input type="email" class="form-input" name="email" id="email"/>
                            <span class="error"><?php echo $emailErr;?></span>
                        </div>
                        <div class="form-group">
                             <label>Enter Your Password</label> <span class="error">*</span>
                            <input type="password" class="form-input" name="password" id="password"/>
                            <!-- <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span> -->
                            <span class="error"><?php echo $passwordErr;?></span>
                        </div>
                        
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in Terms of service</a></label>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="http://localhost/Employee-Management/index.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
