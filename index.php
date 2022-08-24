<?php
session_start();
include "db.php";


if(isset($_POST['email']) && isset($_POST['password']))
{
  function validate($form)
  {
    $form =trim($form);
    $form =stripslashes($form);
    $form =htmlspecialchars($form);
    return $form;
  }

  $email=validate($_POST['email']);
  $password=validate($_POST['password']);

  if (empty($email))
  {

    header("location:index.php?error=Username is required !");
    exit(); 
    
  }
  elseif (empty($password))
  {
    
    header("location:index.php?error=Password is required !");
    exit(); 

  }
  else
  {
    $sql="SELECT * FROM  users  WHERE email='$email' AND password='$password'";

    $result =mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) === 1)
    {
        $row = mysqli_fetch_assoc($result);

      if ($row['email']===$email && $row['password']===$password)
      {
        header("location:http://localhost/Employee-Management/display.php");
      }
      else
      {
      header("location:index.php?error=Incorrect username or password");
      exit(); 
       }

    }
    else
    {
      header("location:index.php?error=Incorrect username or password");
      exit(); 

    }
  }
}
?>
<html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">
     <link href="images/img-03.png" rel="icon">
    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">


    <title>Login</title>
  </head>
  <body>

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('Images/img_4.jpg');"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7">
            <h3><strong>LOGIN</strong></h3>

            <form action="" method="post" autocomplete="">
              

              <div class="form-group first">
                <label for="username">Username <span class="errors">*</span></label>
                <input type="email" class="form-control" placeholder="Username" name="email" id="email">
              </div>

              <div class="form-group last mb-3">
                <label for="password">Password <span class="errors">*</span></label>
                <input type="password" class="form-control" placeholder="Password" name="password" id="password">

              </div>
               <?php if (isset($_GET['error'])) {?>
                <p class="error"><?php echo $_GET['error'];?></p>
              <?php }?>
              <div class="d-flex mb-5 align-items-center">
                <label class="control control--checkbox mb-0"><span class="caption">Remember me</span>
                <input type="checkbox" name="rem" />
                <div class="control__indicator"></div>
              </label>
              
             </div>
                <div class="container">
            <label> Don't Have an account ?</label> <a style="text-decoration: none; color: darkblue;" href="http://localhost/Employee-Management/reg-form/register.php">Register Here</a>
      </br></br>
              <input type="submit" value="login" class="btn btn-block btn-danger" name="login" style="border-radius:10px;">

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- script -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
 </body>
</html>
