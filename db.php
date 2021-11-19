<?php

//database
$dbhost = 'localhost'; //host name
$dbuser = 'root'; //Username host
$dbww = 'fendtvario1050'; //database password
$dbname = 'thomson'; //database name
$dbport = 3307;

//Connect to server and select database
$conn = mysqli_connect($dbhost, $dbuser, $dbww, $dbname, $dbport);

//Check connection

if (!$conn){
    die("connection failed: ". mysqli_connect_error());
}



?>