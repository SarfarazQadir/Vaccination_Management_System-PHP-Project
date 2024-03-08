<?php
include "connection.php";

$ID = $_GET['id'];
$query = "DELETE FROM parent_details WHERE parent_id=$ID "; 
$result = mysqli_query($con,$query);
if($result){
    echo"<script>   
    alert('Delete Successful');
    window.location.href ='parents.php';
</script>";
}

?>