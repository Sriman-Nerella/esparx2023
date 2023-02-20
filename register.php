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
	<link rel="stylesheet" type="text/css" href="style4.css">
    <style>
        body
        {
            background:url(registration.jpg);
        }
        #reg
        {
            background:transparent;
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
<div id="reg">
<h1 class="lab" >REGISTER HERE:</h1>
<form action="regphp.php" method="post">
  <div class="form-floating">
    <input type="text" class="form-control" id="firstname"  name='firstname' placeholder="firstNAME" required>
    <label for="floatingInput">First Name:</label>
  </div>
  <div class="form-floating">
    <input type="text" class="form-control" id="lastname"  name='lastname' placeholder="lastNAME" required>
    <label for="floatingInput">Last Name:</label>
  </div>
  <div class="form-floating" >
    <input type="date" class="form-control" id="date"  name='date' placeholder="date" required>
    <label for="floatingInput" id="date">Date of Birth:</label>
  </div>
  <div class="form-floating mb" >
    <input type="email" class="form-control" id="floatingInput" name="email" placeholder="name@example.com" required>
   <label for="floatingInput">Email Address:</label>
  </div>
   <div class="form-floating" >
<select class="form-select" name='gender' aria-label="Default select example">
  <option >Gender</option>
  <option value="male">Male</option>
  <option value="female">Female</option>
</select>
</div>
  <div class="form-floating" id="phonex">
    <input type="text" class="form-control" id="phone"  name='phone' placeholder="Phone Number" required>
    <label for="floatingInput" id="phone">Phone Number:</label>
  </div>
  <div class="form-floating">
      <input type="text" class="pass form-control" id="password" name="password" placeholder="Password" required>
      <label for="floatingPassword">Create Password:</label>
  </div>
  <div class="form-floating" >
      <input type="text" class="plass form-control" id="pass1" name="pass1" placeholder="Confirm Password" required>
      <label for="floatingPassword">Confirm Password:</label>
  </div>
  <input type="submit" class="subs btn btn-primary" id="sub" value="Submit" onclick="this.form.target='_blank';" >
</form>
</div>
<script type="text/javascript">
  let su=document.getElementById("sub");
  su.addEventListener('click',()=>
  {
      var first=document.getElementById('password').value;
      var second=document.getElementById('pass1').value;
      if(first==second && first!='')
      {

        setTimeout(fune,10);


      }
      else
      {
        setTimeout(funes,10);

      }
      
  });
</script>
<script type="text/javascript">
  function funes() 
  {
          
          document.getElementById('password').value='';
          document.getElementById('pass1').value='';

  }
</script>
<script type="text/javascript">
  function fune()
  {
    window.close();
     
  }
</script>
</body>
</html>