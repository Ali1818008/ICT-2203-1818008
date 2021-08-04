<?php
$host = 'localhost';
$username = 'root';
$password = '';
$connection = mysqli_connect($host,$username,$password);
$db_name ='login';
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
$email=$_POST['email'];
$password=$_POST['password'];
$sql="INSERT INTO  information(email,password) VALUES('$email','$password')";
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