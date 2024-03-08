<?php

include("connection.php");
session_start();

$ID = $_GET["id"];

$query = "UPDATE booking_details SET `b_status`='Reject' WHERE booking_id= $ID ";
$result = mysqli_query($con, $query);
echo "<script>window.location.href='bookings.php'</script>";
?>
<h1></h1>