<?php session_start()  ?>


<html>
<head>
    <meta charset="UTF-8">
    <title>D.M.E</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
    integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>

    .imagemain{
        margin-left:30%;
        padding-top: 50px;
        
    
    }
    </style>

</head>



<body>


 <?php
if(isset($_SESSION['role'])){
     if ($_SESSION['role'] == "user"){
    require("usernavbar.php");
    }
    elseif($_SESSION['role'] == "admin"){
        // admin nav
    }
 }
 else{
      include("includes/header.php");
 }
 
 ?>



</div>
</div>



</body>

</html>