<?php

$ID =$_GET['id'];
include('connection.php');
$query = "DELETE FROM child_details where child_id=$ID";
$result = mysqli_query($con,$query);
if($result){
    echo"<script>   
    alert('Delete Successful');
    window.location.href ='child.php';
</script>";
}

?> 