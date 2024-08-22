<?php

include "conn.php" ;



$id = $_POST['id'] ;

if( empty($id))
die("Error: ID label is required and cannot be empty.");


$quarey = "DELETE FROM info_student WHERE id = $id " ;


if (mysqli_query($link, $quarey)) {
   echo " delete id $id" ;
    header('Location: index.php');
    exit(); 
} 
else 
   echo 'Error: ' . mysqli_error($link);



?>