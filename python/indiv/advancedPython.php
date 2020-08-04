<!DOCTYPE html>
<html>
<title>TeachMe</title>
<head>
<link rel="shortcut icon" href="logo.JPG" type="image/x-icon">
</head> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #ffcccb;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ADD8E6;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ffcccb;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ffcccb;
  border-top: none;
}
</style>
</head>
<body>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Home')" id="defaultOpen">Projects</button>
  <button class="tablinks" onclick="openCity(event, 'Learn')">Games</button>
</div>

<div id="Home" class="tabcontent">
  <h3>Projects</h3>
  <a href='guessthenumber.html'><button style="background-color:#ffcccb;">Guess the Number</button></a>
    <p>In this project you are going to get the opportunity to let your use guess the number. But first, can you figure out what is missing from line 5 so the user knows whether they have guessed correctly and can you try to complete it? Press play to see the game in action!</p>
    <br>
    <a href='olympicrings.html'><button style="background-color:#ADD8E6;">Olympic Rings</button></a>
    <p>In this project you are going to get the opportunity to draw the famous olympic rings. But first, can you figure out what is missing from line 50 so that it prints out "I can draw the Olympic Rings" so the user knows when it is complete? Press play to see the game in action!</p>
    <br>
    <a href='buildAHouse.html'><button style="background-color:#ffcccb;">Build a House</button></a>
    <p>In this project you are going to get to be an architect and build a house! Don't forget to look at lines 165, 169 and 173, and print out House, Tree and Sun in the right place. </p>
    <br>
    <a href='mysteryProjectOne.html'><button style="background-color:#ADD8E6;">Mystery Project One</button></a>
    <p>In this project you are going to see a piece of code that does a mystery thing. Make sure you fill out line 2, to print out what it does!</p>
    <br>
    <a href='mysteryProjectTwo.html'><button style="background-color:#ffcccb;">Mystery Project Two</button></a>
    <p>In this project you are going to see a piece of code that does a mystery thing. Don't forget to click run!</p>

  <p></p>
</div>

<div id="Learn" class="tabcontent">
  <h3>Games</h3>
  <a href='Hangman.html'><button style="background-color:#ffcccb;">Hangman</button></a>
    <p>Can you guess the word before hangman happens!</p>
    <br>
    <a href='Reflect.html'><button style="background-color:#ADD8E6;"> Reflect</button></a>
    <p>How far will you make it to?</p>
    <br>
    <a href='Snake.html'><button style="background-color:#ffcccb;">Snake</button></a>
    <p>How far can you get?</p>
    <br>
    <a href='TicTacToe.html'><button style="background-color:#ADD8E6;">Tic Tac Toe</button></a>
    <p>Play a fun game of Tic Tac Toe!</p>
    <br>
    <a href='TurtleWar.html'><button style="background-color:#ffcccb;">Turtle War</button></a>
    <p>Can you win?</p>
    <br>
</div>
<p>
  <br>
  <div style="text-align: center;">
  <img src="tenor.gif">
  </div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
document.getElementById("defaultOpen").click();
</script>
   
</body>
</html> 
