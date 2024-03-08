<?php

include("connection.php");
$query = "UPDATE hospital_details SET status='Approve' WHERE hospital_id= $_GET[id]";
$result = mysqli_query($con,$query);
echo"<script>window.location.href='doctors.php'</script>";

?>