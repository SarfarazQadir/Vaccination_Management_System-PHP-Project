<?php
include('connection.php');
$ID =$_GET['id'];

$query = "DELETE FROM vaccine_details where vaccine_id=$ID";
$result = mysqli_query($con,$query);
if($result){
    echo"<script>   
    alert('Delete Successful');
    window.location.href ='hospitalvaccines.php';
</script>";
}

?> 