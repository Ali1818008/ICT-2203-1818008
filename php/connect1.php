<?php
$host = 'localhost';
$username = 'root';
$password = '';
$connection = mysqli_connect($host,$username,$password);
$db_name ='booking_details';
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
$from=$_POST['from'];
$to=$_POST['to'];
$how=$_POST['how'];
$date=$_POST['date'];
$sql="INSERT INTO pop (city1,city2,how,depart) VALUES('$from','$to','$how','$date')";
if(!mysqli_query($connection,$sql))
{
echo "Data not Inserted!";
}
else
{
	echo "Submitted";
include("../index.html");
}
?>