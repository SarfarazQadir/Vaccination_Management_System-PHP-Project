<?php
include("connection.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<!-- register24:03-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
    <style>
        ul li {
            position: relative;
            list-style: none;
            /* width: 5px;
            height: 5px; */
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            transition: 0.5s;
        }
    </style>
</head>

<body>
    <div class="main-wrapper  account-wrapper">
        <div class="account-page">
            <div class="account-center">
                <div class="account-box">
                    <form method="post" class="form-signin">
                        <div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <h2 style="font-family: 'Rubik', sans-serif; align-items: center; text-align:center;justify-content:center;">Hospital Registeration</h2><br><br>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="txtname" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" name="txtusername" class="form-control">
                            <span style="color:red; display:none" id="error">Username Already Exist❌❌
                            </span>
                        </div>
                        <div class=" form-group">
                            <label>Email Address</label>
                            <input type="email" name="txtemail" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="txtpwd" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Contact Number</label>
                            <input type="number" name="txtcontact" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="txtaddress" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" name="txtlocation" class="form-control">
                        </div>
                        <div class="form-group checkbox">
                            <label>
                                <input type="checkbox"> I have read and agree the Terms & Conditions
                            </label>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary account-btn" name="btnregister" type="submit">Register</button>
                        </div>
                        <!-- <div class="text-center login-link">
                            Already have an account? <a href="login.php">Login</a>
                        </div> -->
                        <ul>
                            <li style="--clr:#2483ff;">
                                <a href="loginhospital.php">
                                    <i class="fa fa-user-md"></i>
                                    <span>Hospital Login</span>
                                </a>
                            </li>
                        </ul>
                        <!-- <ul>
                            <li style="--clr:#2483ff;">
                                <a href="login.php">
                                    <i class="fa fa-dashboard"></i>
                                    <span>Admin Login</span>
                                </a>
                            </li>
                        </ul> -->
                        <?php
                        include("connection.php");

                        if (isset($_POST["btnregister"])) {
                            $name = $_POST['txtname'];
                            $username = $_POST['txtusername'];
                            $password = $_POST['txtpwd'];
                            $email = $_POST['txtemail'];
                            $contact = $_POST['txtcontact'];
                            $address = $_POST['txtaddress'];
                            $location = $_POST['txtlocation'];

                            $query1 = "SELECT hospital_username FROM hospital_details WHERE hospital_username= '$username' ";
                            $result1 = mysqli_query($con, $query1);

                            if (mysqli_num_rows($result1) == 1) {
                                echo "<script>document.getElementById('error').style.display = 'initial'
                                </script>";
                            } else {

                                $query = " INSERT INTO `hospital_details`(`hospital_name`, `hospital_username`, `hospital_password`, `hospital_email`, `hospital_contact`, `hospital_address`, `hospital_location`) VALUES ('$name','$username','$password','$email','$contact','$address','$location')";
                                $result = mysqli_query($con, $query);
                                if ($result) {
                                    echo "<script>alert('Register successfull')</script>";
                                } else {
                                    echo "<script>alert('Register is not successfull')</script>";
                                }
                            }
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- register24:03-->

</html>