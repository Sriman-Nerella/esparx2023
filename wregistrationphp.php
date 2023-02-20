<?php
ob_start();
  session_start();
  ob_end_clean(); 
  if(isset($_SESSION['id']))
  {
      session_start();
$con = mysqli_connect('localhost','sudheer','sudheer');
mysqli_select_db($con,'esparx');

$clg=$_POST['collegename'];
$roll=$_POST['rollnumber'];
$year=$_POST['year'];
$selec=$_POST['selected'];
$upi=$_POST['upinumber'];
$id=$_SESSION['id'];
$img_name = $_FILES['my_image']['name'];
$img_size = $_FILES['my_image']['size'];
$tmp_name = $_FILES['my_image']['tmp_name'];
$error = $_FILES['my_image']['error'];
$the=$_SESSION['email'].'-'.$_SESSION['phone'].'-'.$_SESSION['id'];
if ($error === 0) {
	
		$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
 		$img_ex_lc = strtolower($img_ex);
		$allowed_exs = array("jpg", "jpeg", "png"); 
 		if (in_array($img_ex_lc, $allowed_exs)) {
 			$new_img_name = uniqid("$the", true).'.'.$img_ex_lc;
 			$img_upload_path = 'workshop_payments/'.$new_img_name;
 			move_uploaded_file($tmp_name, $img_upload_path);
			
		}else {
 			$em = "You can't upload files of this type";
 			echo"<script>alert('You can't upload files of this type');";
 echo"window.location.href='wregistration.php';</script>";
 		}
	
}else {
 	$em = "unknown error occurred!";
 	echo"<script>alert('unknown error occurred');";
 echo"window.location.href='wregistration.php';</script>";
 }
 $reg="INSERT INTO `workshop` ( `college name`, `unique id`, `year`, `workshop name`, `upi number`,`image`) VALUES ('$clg','$id','$year','$selec','$upi','$the')";
 mysqli_query($con,$reg);
 echo"<script>alert('Registration Successful.');";
 echo"window.location.href='workshops.php';</script>";
  }
  else
  {
      echo"<script>alert('Please Login to continue.');";
    echo"window.location.href='login.php';</script>";
  }



?>