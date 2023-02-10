<?php

// define('DB_HOST', 'localhost');
// define('DB_NAME', 'db_admin');
// define('DB_USER', 'root');
// define('DB_PASS', '');

$DB_HOST = 'localhost';
$DB_NAME= 'db_admin';
$DB_USER = 'root';
$DB_PASS = '';



$conn = new mysqli($DB_HOST,$DB_USER,$DB_PASS,$DB_NAME);

if($conn->connect_error){
    die('Connection Failed');
}

// echo $feedback[0]['name'];           
               
 