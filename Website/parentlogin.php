<?php
include "connection.php";
session_start();

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Parent Registration</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Parent Registration</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<style>
    body{
	margin: 0;
	padding: 0;
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	font-family: 'Jost', sans-serif;
	background: rgb(4,99,250);
}
.main{
	width: 350px;
	height: 500px;
	background: red;
	overflow: hidden;
	background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
	border-radius: 10px;
	box-shadow: 5px 20px 50px #000;
}
#chk{
	display: none;
}
.signup{
	position: relative;
	width:100%;
	height: 100%;
}
label{
	color: #fff;
	font-size: 2.3em;
	justify-content: center;
	display: flex;
	margin: 60px;
	font-weight: bold;
	cursor: pointer;
	transition: .5s ease-in-out;
}
input{
	width: 60%;
	height: 20px;
	background: #e0dede;
	justify-content: center;
	display: flex;
	margin: 20px auto;
	padding: 10px;
	border: none;
	outline: none;
	border-radius: 5px;
}
.button{
	width: 60%;
	height: 40px;
	margin: 10px auto;
	justify-content: center;
	display: block;
	color: rgb(4,99,250);
	background: #fff;
	font-size: 1em;
	font-weight: bold;
	margin-top: 20px;
	outline: none;
	border: none;
	border-radius: 5px;
	transition: .2s ease-in;
	cursor: pointer;
}
.button:hover{
	background: rgb(4,99,250);
    color: #fff;
}
.login{
	height: 460px;
	background: #eee;
	border-radius: 60% / 10%;
	transform: translateY(-180px);
	transition: .8s ease-in-out;
}
.login label{
	color:rgb(4,99,250);
	transform: scale(.6);
}

#chk:checked ~ .login{
	transform: translateY(-500px);
}
#chk:checked ~ .login label{
	transform: scale(1);	
}
#chk:checked ~ .signup label{
	transform: scale(.6);
}
</style>
 <!-- Sweet Alert link --> <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script> 
 <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>
	<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form method="post" onsubmit="return validate()">
					<label for="chk" aria-hidden="true">Register</label>
					<input type="text" name="txtusername" id="uname" placeholder="User name" required="">
					<input type="email" name="txtemail" placeholder="Email" required="">
					<input type="password" name="txtpwd" id="pass"  placeholder="Password" required="">
					<input type="submit" class="button" name="btnregister" value="Register">
					
                    <?php
             include("connection.php");

             if(isset($_POST["btnregister"])){  
               $username = $_POST['txtusername']; 
               $password = $_POST['txtpwd'];
               $email = $_POST['txtemail'];
               

               $query =" INSERT INTO `parent_details`(`parent_username`, `parent_password`, `parent_email`) VALUES ('$username','$password','$email')";
               $result = mysqli_query($con,$query);
               if($result){
                echo"<script>
				alert('Register Successfull');
				window.location.href ='parentlogin.php';
			</script>";
				
				 
               }
               else{
                 echo "<script>alert('Register is not successfull')</script>";
               }
             }
            ?>
				</form>
			</div>

			<div class="login">
				<form method="post">
					<label for="chk" aria-hidden="true">Login</label>
					<input type="text" name="txtusername" placeholder="Username" required="">
					<input type="password" name="txtpwd" placeholder="Password" required="">
                    <input type="submit" class="button" name="btnlogin" value="Login">
                    <?php
            include("connection.php");
           if(isset($_POST["btnlogin"])){
             $username = $_POST['txtusername'];
             $password = $_POST['txtpwd'];

             $query = "SELECT * FROM parent_details where parent_username ='$username' AND parent_password ='$password' ";
        $result = mysqli_query($con,$query);
		if(mysqli_num_rows($result)){
			$row = mysqli_fetch_assoc($result);
			$_SESSION['parent_session'] = $row['parent_username'];
			$_SESSION['parent_session_id'] = $row['parent_id'];
			echo"<script>
			Swal.fire({
			  title: 'Login Successful!',
			  text: 'Clicked the button!',
			  icon: 'success'
});
			window.location.href ='index.php';
		</script>";
		}else{
				  echo"<script>alert('Username or Password is Incorrect!')</script>";
		}  
		   }
           
           ?>
				</form>
			</div>
	</div>
</body>
</html>
<!-- partial -->
  
</body>
</html>
