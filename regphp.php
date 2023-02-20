<?php
$con = mysqli_connect('localhost','sudheer','sudheer');
mysqli_select_db($con,'esparx');

$tok=$_POST['firstname'];
$token=$_POST['lastname'];
$name=$_POST['date'];
$pass=$_POST['password'];
$email=$_POST['email'];
$pin=$_POST['gender'];
$phone=$_POST['phone'];
$conf=$_POST['pass1'];
if($pass==$conf)
{
	$reg="INSERT INTO `jntuk` (`first name`, `last name`, `gender`, `date of birth`, `email`, `password`, `phone number`) VALUES ('$tok','$token','$pin','$name','$email','$pass','$phone')";
	mysqli_query($con,$reg);
	echo"<script>alert('Registration Successful.You may Login now.');";
	echo"window.location.href='login.php';</script>";
}
else
{
	echo"<script>alert('Registration Unsuccessful.Password not Matching.Please try again.');";
	echo"window.close();</script>";
}

?>