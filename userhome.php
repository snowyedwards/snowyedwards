<?php session_start(); ?>



<html>
<head>
    <meta charset="UTF-8">
    <title>UserHome</title>
    
    
<?php
if ($_SESSION['role'] == "user"){
require("usernavbar.php");
}

?>

</head>

<body>

<?php include("includes/connection.php"); ?>






<h2>Welcome User</h2>



</div>
</div>
</div>
</div>
</body>

</html>
</html>