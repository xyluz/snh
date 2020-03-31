<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to SNG : Hospital for the ignorant</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="css/styles.css">
    <script src="js/scripts.js"></script>
</head>
<body>
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
        <h5 class="my-0 mr-md-auto font-weight-normal"><a href="index.php">StartNG Hospital</a></h5>
        <nav class="my-2 my-md-0 mr-md-3">
            <a class="p-2 text-dark" href="index.php">Home</a>
            <?php if(!isset($_SESSION['loggedIn'])){ ?>
        
                <a class="p-2 text-dark" href="login.php">Login</a> 
                <a class="btn btn-primary" href="register.php">Register</a> 
                <!-- <a class="p-2 text-dark" href="forgot.php">Forgot Password</a> -->
            <?php }else{ ?>
                
                <a class="p-2 text-dark" href="dashboard.php">Dashboard</a>                
                <a class="p-2 text-dark" href="reset.php">Reset Password</a>
                <a class="p-2 text-dark" href="logout.php">Logout</a>
            <?php } ?>
          
        </nav>
       
    </div>