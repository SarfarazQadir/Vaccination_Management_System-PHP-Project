<?php

$ID =$_GET['id'];
include('connection.php');
$query = "DELETE FROM booking_details where booking_id=$ID";
$result = mysqli_query($con,$query);
if($result){
    echo"<script>   
    alert('Delete Successful');
    window.location.href ='viewappointment.php';
</script>";
}

?> 