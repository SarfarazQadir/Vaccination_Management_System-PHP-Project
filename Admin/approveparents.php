<?php

include("connection.php");
$query = "UPDATE parent_details SET `status`='Approve' WHERE parent_id= $_GET[id]";
$result = mysqli_query($con,$query);
echo"<script>window.location.href='parents.php'</script>";

?>