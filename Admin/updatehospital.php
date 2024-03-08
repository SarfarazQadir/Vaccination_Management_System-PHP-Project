<?php
include("connection.php");

$id = $_GET['id'];
$name = $_GET['name'];  
$username = $_GET['username']; 
$password = $_GET['password'];
$email = $_GET['email'];
$contact = $_GET['contact'];
$address = $_GET['address'];
$location = $_GET['location'];

// $query = "SELECT * FROM hospital_details where id=$_GET[id]";
// $result = mysqli_query($con,$query);
// $row = mysqli_fetch_assoc($result);

?>
<?php
include ("header.php");
?>
<?php

include("connection.php");

?>

<div class="content">
                
                <div class="row">
                    <div class="col-md-12">
                        <div class="card-box">
                            <h4 style="text-align: center; font-size: 30px; " class="card-title">Update Hospitals</h4>
                            <form action="#" method="post" >
                                <h4 class="card-title">Personal Information</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="txtname" value="<?php echo$name ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="txtpwd" value="<?php echo$password ?>"  class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Contact</label>
                                            <input type="number" name="txtcontact" value="<?php echo$contact ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" name="txtlocation"  value="<?php echo$location ?>" class="form-control">
                                        </div>
                                         <div class="form-group">
                                        <!--    <label>Blood Group</label>
                                            <select class="select select2-hidden-accessible" tabindex="-1" aria-hidden="true">
                                                <option>Select</option>
                                                <option value="1">A+</option>
                                                <option value="2">O+</option>
                                                <option value="3">B+</option>
                                                <option value="4">AB+</option>
                                            </select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-k8z7-container"><span class="select2-selection__rendered" id="select2-k8z7-container" title="Select">Select</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                        </div>
                                        <div class="form-group">
                                            <label class="display-block">Gender:</label>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="gender" id="gender_male" value="option1">
												<label class="form-check-label" for="gender_male">Male</label>
											</div>
											<div class="form-check form-check-inline">
												<input class="form-check-input" type="radio" name="gender" id="gender_female" value="option2">
												<label class="form-check-label" for="gender_female">Female</label>
											</div> -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text"  name="txtusername" value="<?php echo$username ?>" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="em" value="<?php echo$email ?>" class="form-control" name="txtemail" >
                                        </div>

                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" name="txtaddress" value="<?php echo$address ?>" class="form-control">
                                        </div>
                                        <!-- <div class="form-group">
                                            <label>Repeat Password</label>
                                            <input type="text" class="form-control">
                                        </div> -->
                                    </div>
                                    <div class="text-right">
                                    <input style="text-align: center;justify-content: center;align-items: center; " type="submit" class="btn btn-primary" name="btnupdate" value="Update Hospital" ></input>
                                </div>
                                </div>
                                </div>
                                
             <?php
             include("connection.php");

             if(isset($_POST["btnupdate"])){
               $name = $_POST['txtname'];  
               $username = $_POST['txtusername']; 
               $password = $_POST['txtpwd'];
               $email = $_POST['txtemail'];
               $contact = $_POST['txtcontact'];
               $address = $_POST['txtaddress'];
               $location = $_POST['txtlocation'];

               $query =" UPDATE `hospital_details` SET `hospital_name`='$name', `hospital_username`='$username',`hospital_password`='$password', `hospital_email`='$email', hospital_contact= $contact, `hospital_address`='$address', `hospital_location`='$location' WHERE hospital_id= $id";
               $result = mysqli_query($con,$query);
               if($result == true){
                 echo "<script>alert('Update successfull');
                 window.location.href='doctors.php'</script>";
               }
               else{
                 echo "<script>alert('Update is not successfull')</script>";
               }
             }
            ?>
                            </form>
                        </div>
                    </div>
                </div>
               
</div>
            </div>
<?php
include "footer.php";
?>
