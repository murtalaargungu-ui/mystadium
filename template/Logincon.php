<?php

$connection = mysqli_connect('localhost','root','','template');

if(isset($_POST['submit'])){
	$Username = $_POST['Username'];
	$password = $_POST['Password'];
	$usertype = $_POST['usertype'];


	if($connection==true){
		echo"connection good";
	}
	else{
		echo "bad connection";}

		$query="select * from abbacreate where Username='$Username' and password='$password'";

	$rows = mysqli_query($connection,$query);



if( mysqli_num_rows($rows) == 1 && $usertype=="STUDENT") {

	while ($row = mysqli_fetch_assoc($rows)) {
		$Username=$row['Username'];
		$password=$row['Password'];
		session_start();
		$_session['Username']=$Username;
		$_session['Password']=$password;
	
	}



	echo "<script> alert('WELCOME TO ADMIN LOGIN YOU CAN ACCESS TO DATABASE')</script>";

	header('location:Student.php');

} 
else if( mysqli_num_rows($rows) == 1 && $usertype=="LECTURER") {

	while ($row = mysqli_fetch_assoc($rows)) {
		$Username=$row['Username'];
		$password=$row['Password'];
		session_start();
		$_session['Username']=$Username;
		$_session['Password']=$password;
	
	}



	echo "<script> alert('WELCOME TO ADMIN LOGIN YOU CAN ACCESS TO DATABASE')</script>";

	header('location:Lecturer.php');

}else if( mysqli_num_rows($rows) == 1 && $usertype=="ADMIN") {

	while ($row = mysqli_fetch_assoc($rows)) {
		$Username=$row['Username'];
		$password=$row['Password'];
		session_start();
		$_session['Username']=$Username;
		$_session['Password']=$password;
	}


header('location:Admin.php');

}
else

{
	echo '<script type="text/javascript">alert("YOU HAVE NOT RESGISTER OR INVALID USERNAME AND PASSWORD");window.location=\'index.html\';</script>';
	//echo "<script> alert('YOU HAVE NOT RESGISTER OR INVALID USERNAME AND PASSWORD'); window.location=\'index.html\';</script> ";

exit();
}

}

?>