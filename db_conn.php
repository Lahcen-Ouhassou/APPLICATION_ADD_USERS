<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "addusers";


$conn = mysqli_connect($servername,$username,$password,$dbname);

// hna kat2kad bli connection mziana mea database
if(!$conn){
    die("Connection faildes" . mysqli_connect_error());
    
}



?>