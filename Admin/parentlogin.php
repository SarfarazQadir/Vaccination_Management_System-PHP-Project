<?php
include("connection.php");

session_start();
?>
<!DOCTYPE html>
<html lang="en">
<!-- doctors23:12-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->

    <style>
        table th{
      background-color:rgb(0,158,251); 
      color: #fff;
    }
    .reject{
      background-color: red;
      color: #fff;
      border-radius: 6px;
      padding: 5px;
      text-decoration: none;
    }
    .delete{
      background-color: red;
      color: #fff;
      border-radius: 6px;
      padding: 5px;
      text-decoration: none;
    }
    .approve{
      background-color: rgb(0,158,251);
      color: #fff;
      border-radius: 6px;
      padding: 5px;
      text-decoration: none;
    }
    </style>
</head>

<body>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                
<div class="content">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 style="text-align: center; font-size: 30px; " class="card-title">Parent Registration Or Login  </h4>
                            <form method="post" >
                                <h4 class="card-title"></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="txtname" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="txtpwd" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input type="number" name="txtcontact" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" name="txtlocation" class="form-control">
                                        </div>
                                         <div class="form-group">
                                       
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text"  name="txtusername" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="txtemail" >
                                        </div>    </div>
                                    <div class="text-right">
                                    <input style="text-align: center;justify-content: center;align-items: center; " type="submit" class="btn btn-primary" name="btnregister" value="Registration" ></input>
                                </div>
                                </div>
                                <!-- <h4 class="card-title">Postal Address</h4> -->
                                <div class="row">
                                 
                                    </div>
                                </div>
                                <?php
             include("connection.php");

             if(isset($_POST["btnregister"])){
               $name = $_POST['txtname'];  
               $username = $_POST['txtusername']; 
               $password = $_POST['txtpwd'];
               $email = $_POST['txtemail'];
               $contact = $_POST['txtcontact'];        
               $location = $_POST['txtlocation'];

               $query =" INSERT INTO `parent_details`( `parent_name`, `parent_username`, `parent_password`, `parent_email`, `parent_contact`, `parent_city`) VALUES ('$name','$username','$password','$email','$contact','$location')";
               $result = mysqli_query($con,$query);
               if($result){
                 echo "<script>alert('Register successfull');
                 window.location.href='parentlogin.php'</script>";
               }
               else{
                 echo "<script>alert('Register is not successfull')</script>";
               }
             }
            ?>
                            </form>
                        </div>
                    </div>
                </div>
               
</div>
            </div>
<?php
include "footer.php";
?>
