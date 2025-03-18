<?php
$servername="localhost";
$username="root";
$password="";
$dbname="UltimateParesSilog";

$conn=new mysqli($servername,$username,$password,$dbname);

if($conn){
}
else{
    die("Connection failed because ".mysqli_connect_error());
}
?>