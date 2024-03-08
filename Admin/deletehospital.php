<?php

$ID =$_GET['id'];
include('connection.php');
$query = "DELETE FROM hospital_details where hospital_id=$ID";
$result = mysqli_query($con,$query);
if($result){
    echo"<script>   
    alert('Delete Successful');
    window.location.href ='doctors.php';
</script>";
}

?> 