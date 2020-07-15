<?php 
$con = mysqli_connect('localhost','balajiho_insight','Socialight_9999','balajiho_insights');

error_reporting(1);

session_start();

if($con){

 $user=$_POST['uname'];

 $password=$_POST['pwd'];
$mpwd=md5($password);
$query = "select url FROM clients WHERE client = '$user' AND password = '$mpwd' ";
  $result=mysqli_query($con, $query);
  if(mysqli_num_rows($result)){
  	$row = mysqli_fetch_row($result);
  	$_SESSION["user"] = $user;
  	echo $row[0];
}else{

	echo 'error';
}
  
}else{
	echo 'error';
}
?>