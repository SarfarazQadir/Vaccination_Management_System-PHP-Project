<?php

include("connection.php");


$ID = $_GET["id"];

//echo "<script>alert($ID)</script>";

$query = "UPDATE booking_details SET `B_status`= 'Approve' WHERE booking_id= $ID ";
$result = mysqli_query($con, $query);
echo "<script>window.location.href='bookings.php'</script>";
