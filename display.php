<?php
session_start();
include 'db.php';
$sql="SELECT * FROM employee";
$result=$conn->query($sql);
$result = mysqli_query($conn,"SELECT *FROM employee");


if (isset($_GET['id'])) 
{
    $id = $_GET['id'];
    $sql = "DELETE FROM `employee` WHERE `id`='$id'";
     $result = $conn->query($sql);
     if ($result == TRUE) 
     {
        echo "Record deleted successfully.";
        header('location:http://localhost/new_login/display.php');
    }
    else
    {
        echo "Error:" . $sql . "<br>" . $conn->error;
          }
} 
session_destroy();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .right{
              justify-content: right;
              align-items: center;
              display: flex;
              
                }
        .left{
              justify-content: left;
              align-items: center;
              display: flex;
              
                }
    </style>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Data Table </title>
    <meta content="" name="description">
    <meta content="Author" name="MJ Maraz">
    <link href="assets/images/img-02.png" rel="icon">
    <link href="assets/images/img-02.png" rel="apple-touch-icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <!-- ========================================================= -->


    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/datatables.min.css">
    <link rel="stylesheet" href="assets/css/style.css">


    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/pdfmake.min.js"></script>
    <script src="assets/js/vfs_fonts.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    



</head>
<!-- =============== Design & Develop By = MJ MARAZ   ====================== -->

<body>
    
    <header class="header_part" style="background-color:MidnightBlue;">
        <img src="assets/images/img-02.png" width="50px" alt="" class="img-fluid">
        <h4 style="font-family: Times new roman; color:; font-size: 37px;"><b>Employee Registration Details</b></h4>
    </header>
    <!-- =======  Data-Table  = Start  ========================== -->
<br>
    <div class="container">
        <div class="row">
            <div class="col-12">
              <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show " role="alert">
                          <strong>Hey ! </strong> <?php echo $_SESSION['status'];?>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                        
                        unset($_SESSION['status']);
                    }
              ?>
               <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                        <div class="alert alert-danger alert-dismissible fade show " role="alert">
                          <strong>Hey ! </strong> <?php echo $_SESSION['status'];?>
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <?php
                        
                        unset($_SESSION['status']);
                    }
              ?>    
                <div class="data_table">
                     <div class="left">
                        <td><a href="http://localhost/new_login/new-reg.php" class="btn btn-primary">Add User</a></td>
                        <div class="right">
                <td><a href="http://localhost/new_login/index.php" class="btn btn-danger">Logout</a></td>
                </div>
            </div>
            
                    <table id="example" class="table table-striped table-bordered">
                        <thead class="table-dark">
                            <tr>
                                <th>S.No</th>
                                <th>Employee Name</th>
                                <th>Employee ID</th>
                                <th>Employeer Name</th>
                                <th>Unit</th>
                                <th>Date of Birth</th>
                                <th>Email Address</th>
                                <th>View</th>
                                <th>Update</th>
                                <th>Delete</th>
                            </tr>
                        </thead>

                        <tbody>
                            <?php
                              while ($row=$result->fetch_assoc()){ ?>
                    <tr id="<?php echo $row['id'] ?>">
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['emp_name']; ?></td>
                    <td><?php echo $row['emp_id']; ?></td>
                    <td><?php echo $row['employeer_name']; ?></td>
                    <td><?php echo $row['unit']; ?></td>
                    <td><?php echo $row['dob']; ?></td>
                    <td><?php echo $row['email']; ?></td>

                    <td><a href="http://localhost/new_login/read.php?id=<?php echo$row["id"];?>" class="btn btn-primary">View</a></td> 
                   <td><a href="http://localhost/new_login/signup/update.php?id=<?php echo$row["id"];?>" class="btn btn-success">Update</a></td> 
                    <td><input type="button"  name="delete" value="Delete" class="del btn btn-danger"></td>
      
                     <script type="text/javascript">
        $(document).ready(function() {
        $(".del").click(function(){
         swal({
            title: "Are you sure!",
            text: "Do you really want to delete record!",
            icon: "warning",
            buttons: true,
            dangerMode: true,
        }).then((willDelete) => {
            if (willDelete) {

                var id = $(this).parents("tr").attr("id");

                window.location.href="http://localhost/new_login/delete.php?id="+id+"";
                swal("Yaa! Record successfully deleted!", {
                    icon: "success",
                });
            } else {
                swal("Your record is safe!", {
                    icon: "success",
                });
            }
        });
         });
    });
</script>

                                  
                            </tr>
                         <?php
                            }?>
                        </tr>
                               
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- =======  Data-Table  = End  ===================== -->
    <!-- ============ Java Script Files  ================== -->


    
</body>
</html>
