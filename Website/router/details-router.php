<?php
include '../includes/connect.php';
$user_id = $_SESSION['user_id'];


$name = htmlspecialchars($_POST['name']);
$username = htmlspecialchars($_POST['username']);
if(!empty($_POST['password'])){
$password =  htmlspecialchars(password_hash($_POST['password'], PASSWORD_DEFAULT));
$password = ", `password` = '{$password}'";
}
$phone = $_POST['phone'];
$email = htmlspecialchars($_POST['email']);
$address = htmlspecialchars($_POST['address']);
$sql = "UPDATE users SET name = '$name', username = '$username', contact=$phone, email='$email', address='$address' {$password} WHERE id = $user_id;";
if($con->query($sql)==true){
	$_SESSION['name'] = $name;
}
header("location: ../details.php");
?>