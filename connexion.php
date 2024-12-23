<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mes";

$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("erreur");
}else{
    echo "connected";
}
?>