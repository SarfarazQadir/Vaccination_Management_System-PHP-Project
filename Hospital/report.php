<?php
include("connection.php");

$id =$_GET['id'];
$cid =$_GET['cid'];
$hid =$_GET['hid'];
$time =$_GET['time'];
$date =$_GET['date'];
$vid =$_GET['vid'];
$report =$_GET['report'];

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<!-- appointments23:19-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
    <style>
        table th {
            background-color: rgb(0, 158, 251);
            color: #fff;
        }
    </style>
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a href="hospitaldashboard.php" class="logo">
                    <img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Preclinic</span>
                </a>
            </div>
            <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span>Notifications</span>
                        </div>
                        <div class="drop-scroll">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">
                                                <img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
                                            </span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">V</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">L</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">G</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media">
                                            <span class="avatar">V</span>
                                            <div class="media-body">
                                                <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-sm-block">
                    <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
                </li>
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
                            <span class="status online"></span>
                        </span>
                        <span>Hospital</span>
                    </a>
                    <div class="dropdown-menu">
                        <!-- <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a> -->
                        <a class="dropdown-item" href="hospitallogout.php">Logout</a>
                    </div>
                </li>
            </ul>
            <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <!-- <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a> -->
                    <a class="dropdown-item" href="hospitallogout.php">Logout</a>
                </div>
            </div>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Vaccination System</li>
                        <li>
                            <a href="hospitaldashboard.php"><i class="fa fa-dashboard"></i> <span><?php echo $_SESSION['username']; ?></span></a>
                        </li>
                        <!-- <li>
                            <a href="doctors.php"><i class="fa fa-user-md"></i> <span>HOSPITALS</span></a>
                        </li> -->
                        <li>
                            <a href="hospitalvaccines.php"><i class="fa fa-wheelchair"></i> <span>VACCINES</span></a>
                        </li>
                        <li class="active">
                            <a href="javascript:void(0);"><i class="fa fa-calendar"></i> <span>BOOKINGS</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ALL HOPITAL DETAILS -->
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title"></h4>
                    </div>
                    
                </div>
<div class="content">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 style="text-align: center; font-size: 30px; " class="card-title">Reports</h4>
                            <form action="#" method="post" >
                                <h4 class="card-title"></h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Booking Id</label>
                                            <input type="number" readonly value="<?php echo$id ?>" name="bid" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Child Id</label>
                                            <input type="number" readonly value="<?php echo$cid ?>" name="cid" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Hospital Id</label>
                                            <input type="number" readonly name="hid" value="<?php echo$hid ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Time</label>
                                            <input type="text" readonly name="time" value="<?php echo$time ?>" class="form-control">
                                        </div>
                                         <div class="form-group">
                                      
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Date</label>
                                            <input type="date" readonly value="<?php echo$date ?>" name="date" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Vaccine Id</label>
                                            <input type="number" readonly value="<?php echo$vid ?>" class="form-control" name="vid" >
                                        </div>

                                        <div class="form-group">
                                            <label>Report</label>
                                            <input type="text"  value="<?php echo$report ?>" placeholder="Positive Or Negative"  name="report" class="form-control">
                                        </div>
                                      
                                    </div>
                                    <div class="text-right">
                                    <input style="text-align: center;justify-content: center;align-items: center; " type="submit" class="btn btn-primary" name="btnupdate" value="Add Report" ></input>
                                </div>
                                </div>
                                <!-- <h4 class="card-title">Postal Address</h4> -->
                                <div class="row">
                                    
                                    </div>
                                </div>
                                <?php
             include("connection.php");

             if(isset($_POST["btnupdate"])){
               
               $cid = $_POST['cid']; 
               $hid = $_POST['hid'];
               $time = $_POST['time'];
               $date = $_POST['date'];
               $vid = $_POST['vid'];
               $report = $_POST['report'];

                $query ="UPDATE `booking_details` SET `child_id`=$cid,`hospital_id`=$hid,`booking_time`='$time',`booking_date`='$date',`vaccine_id`=$vid,`Report`='$report' WHERE `booking_id`='$id'";
               $result = mysqli_query($con,$query);
               if($result == true){
                 echo "<script>alert('Report Added successfull');
                 window.location.href='hospitalbookings.php'</script>";
               }
               else{
                 echo "<script>alert('Report is not added successfull')</script>";
               }
             }

             
            ?>
                            </form>
                        </div>
                    </div>
                </div>
               
            </div>
            </div>
            