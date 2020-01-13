<?php
session_start();


$con = mysqli_connect('localhost','root');
	if($con){
		echo"connection";
	}

	mysqli_select_db($con,'quizdbase');


	$username = $_POST['user'];
	$password = $_POST['pass'];

$q = " select * from signin where name = '$username' && password='$password' ";

$result = mysqli_query($con,$q);

$row = mysqli_num_rows($result);

if($row == 1){
	$_SESSION['username'] = $username;

	$userquery = " insert into name(username) values ('$username')";
	$userresult = mysqli_query($con,$userquery) ;

	header('location:home_new.php');	
}else{
	header('location:index.php');
}

?>