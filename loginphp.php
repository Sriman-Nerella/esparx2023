<?php
 ob_start();
  session_start();
  ob_end_clean(); 
  if(isset($_POST['email']))
  {
  }
  else
  {
    ob_start();
      header("location:home.php");
    ob_end_clean();
  }
  
$con = mysqli_connect('localhost','sudheer','sudheer');
mysqli_select_db($con,'esparx');
$name=$_POST['email'];
$pass=$_POST['password'];
$s="select * from `jntuk` where email='$name' && password='$pass' ";
$result=mysqli_query($con,$s);
$num=mysqli_num_rows($result);
if($num==1)
{
	$hg="select * from `jntuk` where email ='$name' && password='$pass' ";
	$re=mysqli_query($con,$hg);
	$r=mysqli_fetch_array($re);
	$_SESSION['email']=$name;
	$_SESSION['password']=$pass;
	$_SESSION['first name']=$r["first name"];
	$_SESSION['last name']=$r["last name"];
	$_SESSION['gender']=$r["gender"];
	$_SESSION['id']=$r['uniques'];
	$_SESSION['phone']=$r['phone number'];
	header('location:homes.php');
} 
else
{
	echo"<script>alert('login failed.please enter vailed username and password.');";
	echo"window.location.href='login.php';</script>";
}
?>


