<?php 

include("includes/connection.php");

$output = "";

if (isset($_POST['register'])) {
	
	$fname = $_POST['fname'];
	$sname = $_POST['sname'];
	$uname = $_POST['uname'];
	$email = $_POST['email'];
	$contact = $_POST['contact'];
	$role = $_POST['role'];
	$pass = $_POST['pass'];
	$c_pass = $_POST['c_pass'];

	$error = array();

	if (empty($fname)) {
		$error['error'] = "Firstname is Empty";
	}else if(empty($sname)){
		$error['error'] = "Surname is empty";
	}else if(empty($uname)){
		$error['error'] = "Username is empty";
	}else if(empty($email)){
		$error['error'] = "Enter Email";
	}else if(empty($contact)){
		$error['error'] = "Enter Contact";	
	}else if(empty($role)){
		$error['error'] = "Select role";
	}else if(empty($pass)){
		$error['error'] = "Enter Password";
	}else if(empty($c_pass)){
		$error['error'] = "Confirm Password";
	}else if($pass != $c_pass){
		$error['error'] = "Both password do not match";
	}



	if (isset($error['error'])) {
		$output .= $error['error'];
	}else{
		$output .= "";
	}


	if (count($error) < 1) {
		
	  $hashedpass = password_hash($pass, PASSWORD_DEFAULT);
		$query = "INSERT INTO users(firstname,surname,username,email,contact,role,password) VALUES('$fname','$sname','$uname','$email','$contact','$role','$hashedpass')";
		$res = mysqli_query($connect,$query);
      

		if ($res) {
			$output .= "You have successfully registered";
			header("Location:login.php");
		}else{
			$output .= "Failed to register";
		}
	}

	
}



 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Multilogin System</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

	<?php include("includes/header.php"); ?>


	<div class="container">
<div class="col-md-12">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 shadow-sm" style="margin-top:100px">
            <form method="post">
                <h3 class="text-center my-3">Register</h3>

                <div class="text-center"><?php echo $output; ?></div>

						<label>Firstname</label>
                <input type="text" name="fname" class = "form-control my-2" placeholder="Enter First Name" autocomplete="off">

                <label>Surname</label>
                <input type="text" name="sname" class = "form-control my-2" placeholder="Enter Surname" autocomplete="off">

                <label>Username</label>
                <input type="text" name="uname" class = "form-control my-2" placeholder="Create Username" autocomplete="off">

                <label>Email</label>
                <input type="text" name="email" class = "form-control my-2" placeholder="Enter Email" autocomplete="off">

                <label>Contact</label>
                <input type="text" name="contact" class = "form-control my-2" placeholder="Enter Contact Number" autocomplete="off">
                       
                         
                         <label>Select Role</label>
						<select name="role" class="form-control my-2">
							<option value="">Selete Role</option>
							<option value="User">User</option>
							
						</select>

						<label>Password</label>
						<input type="password" name="pass" class="form-control my-2" placeholder="Enter Password">

						<label>Confirm Password</label>
						<input type="password" name="c_pass" class="form-control my-2" placeholder="Enter Confirm Password">

						<input type="submit" name="register" class="btn btn-success" value="Register">
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="" style="margin-top: 30px;"></div>

</body>
</html>




