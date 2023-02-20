<?php
ob_start();
  session_start();
  ob_end_clean(); 
  if(isset($_SESSION['id']))
  {
  }
  else
  {
    ob_start();
      header("location:home.php");
    ob_end_clean();
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
    <link rel="stylesheet" type="text/css" href="style1.css">
    <link rel="stylesheet" type="text/css" href="style5.css">
	<style>
	    
	    .dj
	    {
	        width:100%;
	        height:10%;
	        padding-left:100px;
	        padding-right:100px;
	    }
	    #culti
	    {
	        background-color:black;
	    }
	    .regi1
	    {
	        background:url(events.jpg);
	        background-repeat: no-repeat;
	        background-size: 100% 100%;
	        
	    }
	    .resi
	    {
	        background:url(events.jpg);
	        background-repeat: no-repeat;
	        background-size: 100% 100%;
	        
	    }
	    .card
	    {
	        height:94%;
	        
	    }
	    .card-img-top
	    {
	        height:70%;
	    }
	    h2
	    {
	        color:white;
	        margin-left:80px;
	        
	    }
	    .cult
	    {
	        color:white;
	        font-size:25px;
	        font-weight:400;
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
          <a class="nav-link active" aria-current="page" href="homes.php" style="color:white;">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="eventss.php" style="color:white;">EVENTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="workshops.php" style="color:white;">WORKSHOPS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php" style="color:white;">LOGOUT</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
</div>
</div>
<div class="regi1">
<h2>OUTDOOR:</h2>
<div class="row row-cols-1 row-cols-md-4 ">
    
  <div class="col">
    <div class="card">
      <img src="3922.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Circuit Debugging</h5>
        <div>
           <button id="myBtn1" class="btn btn-primary">Details</button>

<!-- The Modal -->
<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>Every device we use has a circuit at it's core and it is our responsibility as electronics engineers to make sure it runs smoothly without running into errors. This event challenges the participants to debug a circuit to make it error free.</p>
    
  <center><form action="eregistration.php" method="post">
  <div class="form-floating">
    <input type="hidden" class="form-control" id="name"  name='email' placeholder="name@emial.com" value="Circuit Debugging">
  </div>
  <button type="submit" class="btn btn-primary" id="sub">Register</button>
  <centre><button type="button" id="close" class="btn btn-danger close1">CLOSE</button>
 </centre>
 </centre>
</form>
</center>

  </div>
  
</div>
        </div>
      </div>
    </div>
  </div>
<div class="col">
    <div class="card">
      <img src="quiz competition.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Tech Buzz</h5>
        <div>
           <button id="myBtn2" class="btn btn-primary">Details</button>

<!-- The Modal -->
<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>Knowing something is one thing and testing your knowledge is a whole another thing which is why this event calls upon you to test your limits by challenging yourself with this beautifully designed quiz. 
</p>
  <center><form action="eregistration.php" method="post">
  <div class="form-floating">
    <input type="hidden" class="form-control" id="name"  name='email' placeholder="name@emial.com" value="Tech Buzz">
  </div>
  <button type="submit" class="btn btn-primary" id="sub">Register</button>
  <centre><button type="button" id="close" class="btn btn-danger close2">CLOSE</button>
 </centre>
 </centre>
</form>
</center>
  </div>
  
</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="seminar.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Seminar</h5>
        <div>
           <button id="myBtn3" class="btn btn-primary">Details</button>

<!-- The Modal -->
<div id="myModal3" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>Today, technology is entering new frontiers every day. Which is why we invite you to explore the technological advancements that are being made today to express your thoughts and educate your peers through a seminar.</p>
  <center><form action="eregistration.php" method="post">
  <div class="form-floating">
    <input type="hidden" class="form-control" id="name"  name='email' placeholder="name@emial.com" value="Seminar">
  </div>
  <button type="submit" class="btn btn-primary" id="sub">Register</button>
  <centre><button type="button" id="close" class="btn btn-danger close3">CLOSE</button>
 </centre>
 </centre>
</form>
</center>
  </div>
  
</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Pm.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Poster Making</h5>
        <div>
           <button id="myBtn4" class="btn btn-primary">Details</button>

<!-- The Modal -->
<div id="myModal4" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>A person's mind is a complex machine and the thoughts in it are even more complex. In order to understand them, one needs to present them in a simple and brief manner and what is a better form of representation than a poster? Hence, we challenge you to represent your ideas through your posters</p>
  <center><form action="eregistration.php" method="post">
  <div class="form-floating">
    <input type="hidden" class="form-control" id="name"  name='email' placeholder="name@emial.com" value="Poster Making">
  </div>
  <button type="submit" class="btn btn-primary" id="sub">Register</button>
  <centre><button type="button" id="close" class="btn btn-danger close4">CLOSE</button>
 </centre>
 </centre>
</form>
</center>
  </div>
  
</div>
        </div>
      </div>
    </div>
  </div>
    </div>
    <h2>INDOOR:</h2>
<div class="row row-cols-1 row-cols-md-4 ">
  <div class="col">
    <div class="card">
      <img src="short film.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Short Film</h5>
        <div>
           <button id="myBtn5" class="btn btn-primary">Details</button>

<!-- The Modal -->
<div id="myModal5" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>We invite all the potential movie makers to ponder upon this platform and indulge us into their world of cinema through short films.</p>
  <center><form action="eregistration.php" method="post">
  <div class="form-floating">
    <input type="hidden" class="form-control" id="name"  name='email' placeholder="name@emial.com" value="Short Film">
  </div>
  <button type="submit" class="btn btn-primary" id="sub">Register</button>
  <centre><button type="button" id="close" class="btn btn-danger close5">CLOSE</button>
 </centre>
 </centre>
</form>
</center>
  </div>
  
</div>
        </div>
      </div>
    </div>
  </div>
<div class="col">
    <div class="card">
      <img src="40125.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Chess Tournament</h5>
        <div>
           <button id="myBtn6" class="btn btn-primary">Details</button>

<!-- The Modal -->
<div id="myModal6" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>Become the master of chess master series.</p>
  <center><form action="eregistration.php" method="post">
  <div class="form-floating">
    <input type="hidden" class="form-control" id="name"  name='email' placeholder="name@emial.com" value="Chess Tournament">
  </div>
  <button type="submit" class="btn btn-primary" id="sub">Register</button>
  <centre><button type="button" id="close" class="btn btn-danger close6">CLOSE</button>
 </centre>
 </centre>
</form>
</center>
  </div>
  
</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="freefire competition.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">FreeFire Tournament</h5>
        <div>
           <button id="myBtn7" class="btn btn-primary">Details</button>
           <div id="myModal7" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>Let's indulge in gaming combat.</p>
  <center><form action="eregistration.php" method="post">
  <div class="form-floating">
    <input type="hidden" class="form-control" id="name"  name='email' placeholder="name@emial.com" value="FreeFire Tournament">
  </div>
  <button type="submit" class="btn btn-primary" id="sub">Register</button>
  <centre><button type="button" id="close" class="btn btn-danger close7">CLOSE</button>
 </centre>
 </centre>
</form>
</center>
  </div>
        </div>
      </div>
    </div>
  </div>
  </div>
    </div>

    <div id="culti">
        <center><p class="cult">Cultivo</p></center>
        <img src="dj night.jpg"class="dj" alt="">
        
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script >
var modal7 = document.getElementById("myModal7");

// Get the button that opens the modal
var btn7 = document.getElementById("myBtn7");

// Get the <span> element that closes the modal
var span7 = document.getElementsByClassName("close7")[0];

// When the user clicks on the button, open the modal
btn7.onclick = function() {
  modal7.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span7.onclick = function() {
  modal7.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal7) {
    modal7.style.display = "none";
  }
}
</script>
<script >
var modal1 = document.getElementById("myModal1");

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close1")[0];

// When the user clicks on the button, open the modal
btn1.onclick = function() {
  modal1.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
  modal1.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal1) {
    modal1.style.display = "none";
  }
}
</script>
<script >
var modal2 = document.getElementById("myModal2");

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks on the button, open the modal
btn2.onclick = function() {
  modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
  modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal2) {
    modal2.style.display = "none";
  }
}
</script>
<script >
var modal3 = document.getElementById("myModal3");

// Get the button that opens the modal
var btn3 = document.getElementById("myBtn3");

// Get the <span> element that closes the modal
var span3 = document.getElementsByClassName("close3")[0];

// When the user clicks on the button, open the modal
btn3.onclick = function() {
  modal3.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span3.onclick = function() {
  modal3.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal3) {
    modal3.style.display = "none";
  }
}
</script>
<script >
var modal4 = document.getElementById("myModal4");

// Get the button that opens the modal
var btn4 = document.getElementById("myBtn4");

// Get the <span> element that closes the modal
var span4 = document.getElementsByClassName("close4")[0];

// When the user clicks on the button, open the modal
btn4.onclick = function() {
  modal4.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span4.onclick = function() {
  modal4.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal4) {
    modal4.style.display = "none";
  }
}
</script>
<script >
var modal5 = document.getElementById("myModal5");

// Get the button that opens the modal
var btn5 = document.getElementById("myBtn5");

// Get the <span> element that closes the modal
var span5 = document.getElementsByClassName("close5")[0];

// When the user clicks on the button, open the modal
btn5.onclick = function() {
  modal5.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span5.onclick = function() {
  modal5.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal5) {
    modal5.style.display = "none";
  }
}
</script>
<script >
var modal6 = document.getElementById("myModal6");

// Get the button that opens the modal
var btn6 = document.getElementById("myBtn6");

// Get the <span> element that closes the modal
var span6 = document.getElementsByClassName("close6")[0];

// When the user clicks on the button, open the modal
btn6.onclick = function() {
  modal6.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span6.onclick = function() {
  modal6.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal6) {
    modal6.style.display = "none";
  }
}
</script>
</body>
</html>

    