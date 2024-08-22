<?php

$USER_NAME = "root";
$PASSWORD = "root";
$Host_Name = "localhost"; 

// Establishing connection using MySQLi
$link = mysqli_connect($Host_Name, $USER_NAME, $PASSWORD );



if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}



// Check connection
if ( !$link ) {
    echo " this is fail" . mysqli_connect_error() ;
    die("Connection failed: " . mysqli_connect_error()) ;
}







$sql = 'CREATE DATABASE IF NOT EXISTS STUDENT';;
if (!mysqli_query($link, $sql)) {
    echo 'Error creating database: ' . mysqli_error() . "\n";
} 





// Select the database
if (!mysqli_select_db($link, "STUDENT")) {
    die("Error selecting database STUDENT: " . mysqli_error($link) . "\n");
} 




// Create the table
$sql_create_table = 'CREATE TABLE IF NOT EXISTS info_student (
          id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
          firstName VARCHAR(30) NOT NULL, 
          lastName VARCHAR(30) NOT NULL, 
          email VARCHAR(50) NOT NULL, 
          birthday DATE NOT NULL,
          reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
       )';

if (!mysqli_query($link, $sql_create_table)) {
    die("Error creating table info_student: " . mysqli_error($link) . "\n");
} 




?>
