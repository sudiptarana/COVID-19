<?php

$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
//establish the connection 

$host= "localhost";
$user="rana";
$password="";
$database="covid";

$con = new mysqli('localhost','root','','covid');

if ($con->connect_error){
	die('Cant connect'.$con->connect_error);
}else{
	$stmt= $con->prepare("insert into covid(name,email,subject,message)
						value(?,?,?,?)");
	$stmt->bind_param("ssss",$name , $email , $subject , $message);
	$stmt->execute();
	echo "registration succesfully...";
	$stmt->close();
	$con->close();
}
?>