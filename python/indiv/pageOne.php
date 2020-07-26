<html>
<title>TeachMe</title>
<head>
<link rel="shortcut icon" href="logo.JPG" type="image/x-icon">
</head>
<head>
</head>
<body>
<style>
body {
  background: #FFF;
  padding-top: 10px;
}
p {
  color: red;
  font-family: 'Bubblegum Sans', cursive;
  font-size: 28px;
  opacity: 0;
  animation: type 200s steps(60, end) forwards;
  -webkit-user-select: none;
  user-select: none;
  text-align:center;
}
div.outer { position: relative; height: 2px; }
div.outer img { position: fixed; right: 0; bottom: 0; }
p:nth-child(2) {
  animation-delay: 1.5s;
}
p:nth-child(3) {
  animation-delay: 3s;
}
p:nth-child(4) {
  animation-delay: 6s;
}
p:nth-child(5) {
  animation-delay: 8s;
}
p:nth-child(6) {
  animation-delay: 10s;
  margin-bottom: 25px;
}
p:nth-child(7) {
  animation-delay: 12s;
}
p:nth-child(8) {
  animation-delay: 14s;
}
p:nth-child(9) {
  animation-delay: 16s;
}
p:nth-child(10) {
  animation-delay: 18s;
}
@keyframes type {
  0% {
    opacity: 1;
  }
  100% {
    width: 30em;
    opacity: 1;
  }
}
@keyframes blink {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
::selection {
  background: black;
}
div.outer { position: relative; height: 2px; }
 div.outer img { position: fixed; right: 0; bottom: 0; }
</style>
<p>PRINTING AND OUTPUTTING </p>
<p>One of the most important things you need to be able to do is to display a message.</p>
<p>In python, this is called printing.</p>
<p>To do so, you would write -    print()</p>
<p>For example, if you wanted to print out Hello World, you would write</p>
<p>print('Hello World')</p>
<p>If you wanted to combine two phrases together, you would write</p>
<p>print('Hello '+'World')</p>
<p>click <a href="partOneQuestionOne.php"> here</a> to go to the next page</p>
<div class="outer">
    <img src="coder.gif" height="50">
 </div>
</body>
</html>
