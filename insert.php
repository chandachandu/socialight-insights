<?php
$con = mysqli_connect('localhost','balajiho_insight','Socialight_9999','balajiho_insights');
error_reporting(1);
session_start();
$user=$_SESSION['user'];

if($con){
	if($user == 'Socialight'){

		$clienturl=$_POST['clienturl'];
		$clientpassword=$_POST['clientpassword'];
		$mdcp=md5($clientpassword);
		$clientname=$_POST['clientname'];

		$sql = "INSERT INTO clients ( `client`, `password`, `url`)
		VALUES ('$clientname', '$mdcp', '$clienturl')";
		  $result=mysqli_query($con, $sql);
		  if($result == TRUE){
		  	echo "New record created successfully";
		  }else{
		  	 echo "error";
		  }

	}else{
		echo 'notadmin';
	}


}


?>