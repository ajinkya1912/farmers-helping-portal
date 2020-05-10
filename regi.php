<?php

session_start();
header('location:login.php');

$con = mysqli_connect('localhost','root');
if ($con) {
	echo "Connection Successful";
	
}else{
	echo "No Connection";
}

mysqli_select_db($con , 'agri');

$name = $_POST['user'];
$pass = $_POST['password'];
$mob = $_POST['mobile'];
$mail = $_POST['email'];
$addr = $_POST['addr'];
$state = $_POST['state'];
$district = $_POST['district'];
$pin = $_POST['pin'];

$q = "select * from signin where name = '$name' && password = '$pass' ";

$result = mysqli_query($con , $q);

$num = mysqli_num_rows($result);

if ($num==1) {
	echo "Duplicate Data";
}else{

	$qy = "insert into signin(name,password,mobile,email,addr,state,district,pin) values ('$name','$pass','$mob','$mail','$addr','$state','$district','$pin')";

	mysqli_query($con,$qy);
}

?>