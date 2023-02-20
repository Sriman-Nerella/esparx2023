<?php
$sel=$_POST['email'];
ob_start();
  session_start();
  ob_end_clean(); 
  if(isset($_SESSION['id']))
  {
  }
  else
  {
    echo"<script>alert('Please Login to continue.');";
    echo"window.location.href='login.php';</script>";
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Esparx 2023</title>
	<link rel='icon' href="LOGO.png"/>
	<script src="https://kit.fontawesome.com/5283fdf09a.js" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style4.css">
	<style>
	#divis
	{
	    background:url(sHEET.jpg);
	    display:block;
	    background-repeat: no-repeat;
	    background-size: 100% 100%;
	    height:800px;
	    
	}
	    .ep2
{
    width:430px;
    font-weight:500;
}
.row{
    margin-left:9em;
    margin-right:9em;
    margin-bottom:2em;
}
.card
{
    height:200px;
    background-color:black;
}
.card-body
{
    color:white;
}
#downl
{
    color:white;
}
#ess
{
    font-size:25px;
}
#follow
{
    background:black;
}
i
{
    font-size:30px;
}
#l5
{
    color:blue
    margin-right:20px;
    
}
#l2
{
    color:pink;
    margin-right:20px;
    margin-left:20px;
}
#l3
{
    color:red;
    margin-right:20px;
}
#l4
{
    color:cyan;
    margin-right:20px;
}
.new1
{
    background:black;
}
.navbar-toggler
{
    border-color:white;
    color:grey;
}
.navbar-brand
{
    color:white;
}
body
{
    background:url(events.jpg);
    
}
#reg
{
    height:100%;
    background:transparent;
    opacity:5;
}
.file
{
    color:white;
}
/*span*/
/*{*/
/*    color:black;*/
/*    background-color:white;*/
/*    font-size:15px;*/
/*    margin:auto;*/
/*}*/
	</style>
 
</head>
<body>
<div class="head">
    <div class="new1">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div><img src="LOGO.png" alt="Logo" width="100" height="20" class="d-inline-block align-text-top"><a class="navbar-brand"  href="home.php">Esparx 2023</a></div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" ></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php" style="color:white;">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="events.php" style="color:white;">EVENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="workshop.php" style="color:white;">WORKSHOPS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php" style="color:white;">LOGIN/SIGN UP</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
</div>
<div id="reg">
<h1 class="lab" >REGISTRATION:</h1>
<form action="eregistrationphp.php" method="post" enctype="multipart/form-data">
  <div class="form-floating">
    <input type="text" class="form-control" id="firstname"  name='collegename' placeholder="firstNAME" required>
    <label for="floatingInput">College Name:</label>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" id="lastname"  name='rollnumber' placeholder="lastNAME" required>
    <label for="floatingInput">Roll Number:</label>
  </div>
  <div class="form-floating" >
<select class="form-select" name="year" aria-label="Default select example">
  <option >Year</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select>
</div>
 <div class="form-floating" >
    <input type="text" class="form-control" id="lastname"  name='selected' placeholder="lastNAME" value="<?php echo $sel ?>" readonly>
    <label for="floatingInput">Event Selected:</label>
</div>
<div class="form-floating">
    <input type="text" class="form-control" id="upi"  name='upinumber' placeholder="lastNAME" required>
    <label for="floatingInput">UPI Phone Number:</label>
  </div>
<div class="file">
<label > Choose the payment proof to upload:</label> <input type="file" name="my_image" id="myFile" />
</div>
  </br>
  <input type="submit" class="subs btn btn-primary" id="sub" value="Submit"  >
  
</form>
</div>
</body>
</html>