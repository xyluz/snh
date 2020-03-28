<?php 

//Collecting the data

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$designation = $_POST['designation'];
$department = $_POST['department'];

$errorArray = [];

//Verifying the data, validation

if($first_name == "") {
    $errorArray = "First_name cannot be blank";
}


if($last_name == "") {
    $errorArray = "last_name cannot be blank";
}

print_r($errorArray);

//saving the data into the database (folder)

//return back to the page, with a status message