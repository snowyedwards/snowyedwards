<?php
session_start();
  include("includes/connection.php");


   $output = "";

  if (isset($_POST['login'])) {

  	   $uname = $_POST['uname'];
  	   $role = $_POST['role'];
  	   $pass = $_POST['pass'];

  	   if (empty($uname)) {

  	   }else if(empty($role)){

  	   }else if(empty($pass)){

  	   }else{

         $query = "SELECT * FROM users WHERE username='$uname' AND role='$role'";
         $res = mysqli_query($connect,$query);

         if (mysqli_num_rows($res) == 1) {
         while($row =$res->fetch_assoc()){

         if (password_verify($pass, $row["password"])){

         $_SESSION['role']=$role;
          if ($role == "user") {

         	  	$_SESSION['user'] = $uname;
         	  	header("Location: userhome.php");

         	  }else if($role == "admin"){

                $_SESSION['admin'] = $uname;
                header("Location: adminhome.php");

         }
         }



         	  }
         	 $output .= "you have logged-In";
         }else{
             $output .= "Failed to login";
         }

  	   }
  }




 ?>



<html>
<head>
    <meta charset="UTF-8">
    <title>D.M.E</title>
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
                <h3 class="text-center my-3">Login</h3>
                <div class="text-center"><?php echo $output ?></div>
                <label>Username</label>
                <input type="text" name="uname" class = "form-control my-2" placeholder="Enter Username" autocomplete="off">
                <label>Select role</label>
                <select name="role" class="form-control my-2">
                <option value="">Select Role</option>
                <option value="admin">Admin</option>
                <option value="user">User</option>
</select>


                <label>Password</label>
                <input type="password" name="pass" class="form-control my-2" placeholder="Enter Password">

                <input type="submit" name="login" class="btn btn-success" value="Login">


</form>
</div>
</div>
</div>
</div>
</body>

</html>
