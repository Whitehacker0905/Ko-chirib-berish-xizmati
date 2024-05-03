<?php
$servername="localhost";
$username="root";
$password="";
$database="kochirib_berish";

$ulanish=mysqli_connect($servername,$username,$password,$database);

if(!$ulanish){
    die("Ulanmadi".mysqli_connect_error());
}

// echo "aaa";