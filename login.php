<?php
session_start();

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

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<style>
	    .form-floating
	    {
	        margin:4px;
	    }
	    #sub
	    {
	        margin-top:-30px;
	    }
	    .divi
	    {
	        background:transparent;
	        opacity:7;
	    }
	    body
	    {
	        background:url(login.jpg);
	    }
	    .hide
	    {
	        margin-left:13px;
	    }
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
<div class="divi">
<centre>
<h1 class="lab" >LOGIN HERE:</h1>
<div class="redf">
<form action="loginphp.php" method="post">
  <div class="form-floating">
    <input type="email" class="form-control" id="name"  name='email' placeholder="name@emial.com">
    <label for="floatingInput" >Email</label>
  </div>
  <div class="form-floating">
      <input type="password" class="pass form-control" id="floatingPassword" name="password" placeholder="Password">
      <label for="floatingPassword">Password</label>
      <i class="show far fa-eye" id="show"></i>
      <i class="hide far fa-eye-slash" id="hide"></i>

  </div>
  <button type="submit" class="btn btn-primary" id="sub">Submit</button>
 </centre>
 <p class="lab">Don't have an account?<a href="register.php">create account</a></p>
</form>
</div>
</div>
<script src="https://kit.fontawesome.com/5283fdf09a.js" crossorigin="anonymous"></script>
<script>
  var paa=document.querySelector('.pass');
  var ey=document.querySelector('.show');
  var eye=document.querySelector('.hide');
  ey.onclick=function()
  {
    paa.setAttribute("type","test");
    eye.style.visibility="visible";
  }
  eye.onclick=function()
  {
    paa.setAttribute("type","password");
    ey.style.visibility="visible";
    eye.style.visibility="hidden";
  }
</script>
<script>
    if(window.history.replaceState)
    {
        window.history.replaceState(null,null,window.location.href)
    }
</script>
</body>
</html>