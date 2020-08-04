<!DOCTYPE html>
<html lang="en">
<title>TeachMe</title>
<head>
<link rel="shortcut icon" href="logo.JPG" type="image/x-icon">
</head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 40%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top" style="background:red;">
  <div class="w3-bar w3-black w3-card"style="background:red;">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <button onclick="document.getElementById('login').style.display='block'" style="width:auto;text-color:white;float: right;" class="w3-bar-item w3-button w3-padding-large">LOGIN</button>
    <button onclick="document.getElementById('register').style.display='block'" style="width:auto;text-color:white;float: right" class="w3-bar-item w3-button w3-padding-large">REGISTER</button>
    
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#whatwedo" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">BAND</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">CONTACT</a>
  <button onclick="document.getElementById('login').style.display='block'" style="width:auto;text-color:white;float: right" class="w3-bar-item w3-button w3-padding-large">LOGIN</button>
  <button onclick="document.getElementById('register').style.display='block'" style="width:auto;text-color:white;float: right" class="w3-bar-item w3-button w3-padding-large">REGISTER</button>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px;background-image: url('bg.jpg');">s
  <!-- The What we do Section -->
  <div style="text-align:center;">
  
  <p>
  <p>
  <p>
  <p>
  <br>
  <a href="https://fontmeme.com/fonts/opti-futura-font/"><img src="https://fontmeme.com/permalink/200804/dd1f334c5b58d7030a22c08cbefe9af0.png" alt="opti-futura-font" border="0"></a>
  <p>
  <p>
  <br>
  <p>
  <p>
  <a href="https://fontmeme.com/fonts/opti-futura-font/"><img src="https://fontmeme.com/permalink/200804/69b0cda07ffc17ba8217b522a9e37f23.png" alt="opti-futura-font" border="0"></a>
  <p>
  <br>
  <p>
  <p>
  <p>
  <a href="https://fontmeme.com/fonts/opti-futura-font/"><img src="https://fontmeme.com/permalink/200804/6a1a70d462b5e30eea1b3deac6e4dabe.png" alt="opti-futura-font" border="0"></a>
  <p>
  <p>
  <p>
  <br>
  <p>YOU can learn the basics of lots of popular PROGRAMMING languages from Scratch to HTML to Python to PHP! We want to give YOU the option to try different languages before deciding on one to learn!</p>
  <p>
  <p>
  <p>
  <br>
  <img src="tenor.gif">
  </div>
  <!-- The Contact Section -->
  
  <div id="login" class="modal">
  <form class="modal-content animate" action="logincheck.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('login').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar.png" alt="Avatar" style="height:100px;">
    </div>
    <div class="container" style="text-align:center;">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <p></p>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>
      <p></p>
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>
    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('login').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="forgotPassword.php">password?</a></span>
    </div>
  </form>
</div>
<div id="register" class="modal">
  <form class="modal-content animate" action="registercheck.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('register').style.display='none'" class="close" title="Close Modal">&times;</span>
      <img src="avatar.png" alt="Avatar" style="height:100px;">
    </div>
    <div class="container" style="text-align:center;">
        <label for="fname"><b>First name</b></label>
      <input type="text" placeholder="Enter First Name" name="fname" required>
      <p></p>
      <label for="sname"><b>Surname</b></label>
      <input type="text" placeholder="Enter Last Name" name="sname" required>
      <p></p>
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <p></p>
      <label for="uname"><b>Email Address</b></label>
      <input type="text" placeholder="Enter Email Address" name="email" required>
      <p></p>
      <label for="ps"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="pw" required>
      <p></p>
      <label for="ps"><b>Re-enter Password</b></label>
      <input type="password" placeholder="Enter Password" name="confirmpw" required>
      <p></p>
      <button type="submit">Sign Up</button>
    </div>
  </form>
</div>
<!-- End Page Content -->
</div>



<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
// Get the modal
var modal = document.getElementById('login');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
// Get the modal
var modal = document.getElementById('register');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

</script>

</body>
</html>
