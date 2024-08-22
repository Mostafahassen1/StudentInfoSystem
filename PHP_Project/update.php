<?php
 
include "conn.php";

$id = $_POST['id'] ;


$firstName = $_POST['firstName'] ;

$lastName = $_POST['lastName'] ;

$email = $_POST['email'] ;

$birthday = $_POST['birthday'] ;


if (empty($firstName) || empty($lastName) || empty($email)  || empty($birthday) || empty($id)) {
    die('Please fill all the fields.');
}


 $quarey = "UPDATE `info_student`  SET
    firstName = '$firstName', 
    lastName = '$lastName', 
    email = '$email',  
    birthday = '$birthday' 
WHERE id = $id;";



if (mysqli_query($link, $quarey)) {
 
    header('Location: index.php');
    exit(); 
} else {
   
    echo 'Error: ' . mysqli_error($link);
}




?>
