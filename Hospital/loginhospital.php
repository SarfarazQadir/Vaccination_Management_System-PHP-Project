
<?php
include("connection.php");
session_start();

?><!DOCTYPE html>
<html lang="en">
<!-- login23:11-->
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
         ul li{
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
 <!-- Sweet Alert link --> <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
			<div class="account-center">
				<div class="account-box">
                    <form method="post" class="form-signin">
						<div class="account-logo">
                            <a href="index-2.html"><img src="assets/img/logo-dark.png" alt=""></a>
                        </div>
                        <h2 style="font-family: 'Rubik', sans-serif; align-items: center; text-align:center;justify-content:center;" >Hospital Login</h2><br><br>
                        <div class="form-group">
                            <label>Username or Email</label>
                            <input type="text" autofocus="" name="txtusername" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="txtpwd" class="form-control">
                        </div>
                        <!-- <div class="form-group text-right">
                            <a href="forgot-password.html">Forgot your password?</a>
                        </div> -->
                        <div class="form-group text-center">
                            <button type="submit" value="Login" name="btnlogin"  class="btn btn-primary account-btn">Login</button>    
                        </div>
                        <ul>
                            <li style="--clr:#2483ff;">
                                <a href="hospitalregister.php">
                                    <i class="fa fa-user-md"></i>
                                <span>Hospital Register</span>
                            </a>
                        </li>
                        </ul>
                        <!-- <ul>
                            <li style="--clr:#2483ff;">
                                <a href="login.php">
                                    <i  class="fa fa-dashboard"></i>
                                <span>Admin Login</span>
                            </a>
                        </li>
                        </ul> -->
                        <?php
            include("connection.php");
           if(isset($_POST["btnlogin"])){
             $username = $_POST['txtusername'];
             $password = $_POST['txtpwd'];

            $query ="SELECT * FROM `hospital_details` where hospital_username = '$username' AND hospital_password = '$password' AND status = 'Approve' ";
             $result = mysqli_query($con,$query);
            
                foreach($result as $row)
                {
                    $username1 = $row["hospital_username"];
                    $hid = $row["hospital_id"];
                }

                $count = mysqli_num_rows($result);

                if($count == 1)
                {
                    $_SESSION["username"] = $username1;
                    $_SESSION["id"] = $hid;
                    echo"<script>window.location.href ='hospitaldashboard.php';</script>";

                
                }           
           else
           {
            echo"Incorrect Username or Password";
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


<!-- login23:12-->
</html>