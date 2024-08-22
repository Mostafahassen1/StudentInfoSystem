<?php
 
include "conn.php";


$firstName = $_POST['firstName'] ;

$lastName = $_POST['lastName'] ;

$email = $_POST['email'] ;

$birthday = $_POST['birthday'] ;


if (empty($firstName) || empty($lastName) || empty($email)  || empty($birthday)) {
    die('Please fill all the fields.');
}



$quarey = "INSERT INTO `info_student` (firstName, lastName, email, birthday) 
VALUES('$firstName', '$lastName', '$email',  '$birthday')";



if (mysqli_query($link, $quarey)) {
 
    header('Location: index.php');
    exit(); 
} else {
   
    echo 'Error: ' . mysqli_error($link);
}




?>
