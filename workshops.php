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
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style5.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
	
	<style>
	    .modal-content
	    {
	        color:black;
	    }
	    #model
	    {
	        background:transparent;
	        
	    }
	    body
	    {
	        background:url(workshops.jpg);
	        overflow-x:hidden;
	        background-size:100% 100%;
	        background-position:center;
	        background-repeat: no-repeat;
            background-attachment: fixed;
	    }
	    .card
	    {
	        height:95%;
	        margin:5px;
	    }
	    .card-img-top
	    {
	        height:70%;
	    }
	    #wreg
	    {
	        background:transparent;
	        height:100%;
	    }
	    #wrega
	    {
	        height:60%;
	        margin:7px;
	        margin-bottom:20px;
	    }
	    
	</style>
    
    
</head>
<body>
<div class="head">
     <div class="new1">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <div><img src="LOGO.png" alt="Logo" width="100" height="20" class="d-inline-block align-text-top"><a class="navbar-brand"  href="homes.php">Esparx 2023</a></div>
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
<div class="resi">
<center>
    </br>
<div class="row row-cols-1 row-cols-md-3 g-7" id="model">
  <div class="col">
    <div class="card">
      <img src="iot.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Hands on IOT</h5>
        <div>
           <button id="myBtn7" class="btn btn-primary">Details</button>

<!-- The Modal -->
<div id="myModal7" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>This workshop deals with the Iot applications using Arduino from scratch, beginning with basic concepts to making complex projects...</p>
  <centre><button type="button" id="close" class="btn btn-danger close7">CLOSE</button></centre>
  </div>
  
</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="AI.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Artificial Intelligence</h5>
        <div>
           <button id="myBtn1" class="btn btn-primary">Details</button>

<!-- The Modal -->
<div id="myModal1" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>The AI workshop deals with the face detection and recognition,making it simpler to understand the eminance of AI in the present world.</p>
  <centre><button type="button" id="close" class="btn btn-danger close1">CLOSE</button></centre>
  </div>
  
</div>
        </div>
      </div>
    </div>
  </div>
  </br>
  <div class="col">
    <div class="card">
      <img src="VLSI.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">VLSI Design</h5>
        <div>
           <button id="myBtn2" class="btn btn-primary">Details</button>

<!-- The Modal -->
<div id="myModal2" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>This workshop covers the basics of VLSI design using Verilog which is a booming industry in the market. It includes the design of microprocessors and cryptography using verilog.</p>
  <centre><button type="button" id="close" class="btn btn-danger close2">CLOSE</button></centre>
  </div>
  
</div>
        </div>
      </div>
    </div>
  </div>
  </br>
  <div class="col">
    <div class="card">
      <img src="esw.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Embedded Systems</h5>
        <div>
           <button id="myBtn3" class="btn btn-primary">Details</button>

<!-- The Modal -->
<div id="myModal3" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>This workshops explores on Embedded systems which are computer systems that have a dedicated function.</p>
  <centre><button type="button" id="close" class="btn btn-danger close3">CLOSE</button></centre>
  </div>
  
</div>
        </div>
      </div>
    </div>
  </div>
<div class="col">
    <div class="card">
      <img src="5g.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Beyond 5G</h5>
        <div>
           <button id="myBtn4" class="btn btn-primary">Details</button>

<!-- The Modal -->
<div id="myModal4" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>Every mobile network today is being converted into 5G. This workshop explores about the mechanism through which 5G functions</p>
  <centre><button type="button" id="close" class="btn btn-danger close4">CLOSE</button></centre>
  </div>
  
</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="gr.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Gesture Controlled Robot</h5>
        <div>
           <button id="myBtn5" class="btn btn-primary">Details</button>

<!-- The Modal -->
<div id="myModal5" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <p>This workshop deals with making robots that can be controlled with just a gesture of your hand</p>
  <centre><button type="button" id="close" class="btn btn-danger close5">CLOSE</button></centre>
  </div>
  
</div>
        </div>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="Dsp.png" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Data Science using Python</h5>
        <div>
           <button id="myBtn6" class="btn btn-primary">Details</button>

<!-- The Modal -->
<centre>
<div id="myModal6" class="modal" id="model6">

  <!-- Modal content -->
  <div class="modal-content">
    <p>Nowadays, irrespective of the domain, python is being integrated into every field of work. This workshop deals with the basics of python and implementation of data science projects using python</p>
  <centre><button type="button" id="close" class="btn btn-danger close6">CLOSE</button></centre>
  </div>
  
</div>
</centre>
        </div>
      </div>
    </div>
  </div>
    </div>

<div id="wreg">
<centre><a  href="wregistration.php"><button type="button" id="wrega" class="btn btn-danger">Register</button></a></centre>
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

    