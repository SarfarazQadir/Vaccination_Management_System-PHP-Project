<?php

include("connection.php");
$query = "UPDATE vaccine_details SET vaccine_availability='Reject' WHERE vaccine_id= $_GET[id]";
$result = mysqli_query($con,$query);
echo"<script>window.location.href='vaccines.php'</script>";

?>