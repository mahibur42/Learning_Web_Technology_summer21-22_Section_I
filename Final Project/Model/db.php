<?php 
$host = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "onlineshop";

function getConnection(){
    global $host;
    global $dbname;
    global $dbpass;
    global $dbuser;

    $con = mysqli_connect($host, $dbuser, $dbpass, $dbname);
    if (!$con){
        die("Connection failed: " . mysqli_connect_error());
    }
    return $con;
}


?>