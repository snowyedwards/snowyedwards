<?php session_start(); 

if (isset($_SESSION['user'])){
    unset($_SESSION['user']);
    unset($_SESSION['role']);
    header("Location: login.php");

}else if (isset($_SESSION['admin'])){
    unset($_SESSION['admin']);
    unset($_SESSION['role']);
    header("Location: login.php");
}




?>








<html>
<head>
    <meta charset="UTF-8">
    <title>UserHome</title>
    
</head>

<body>

<?php include("includes/connection.php"); ?>

<?php include("includes/header.php"); ?>

<h2>You are now Logged out, Have a Nice Day</h2>



</div>
</div>
</div>
</div>
</body>

</html>