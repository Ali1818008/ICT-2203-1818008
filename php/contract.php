<?php
$host = 'localhost';
$username = 'root';
$password = '';
$connection = mysqli_connect($host,$username,$password);
$db_name ='contract';
if($connection){
$db_select = mysqli_select_db($connection,$db_name);
if($db_select){
//echo "ok";
}else{
die('No database selected!'.mysqli_error($connection));
}
}else{
die('Database connection failed!'.mysqli_error($connection));
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$subject=$_POST['subject'];
$message=$_POST['message'];
$sql="INSERT INTO  info(name,email,phone,subject,message) VALUES('$name','$email','$phone','$subject','$message')";
if(!mysqli_query($connection,$sql))
{
	echo "Data not Inserted!";
}
else
{
	echo "Submitted";
include("index.html");
}
?>