<!DOCTYPE html> 
<html> 
<title>TeachMe</title>
<head>
<link rel="shortcut icon" href="logo.JPG" type="image/x-icon">
</head>
  
<body>  
<style>
div.a {
  border: 1px solid black;
}
div.outer { position: relative; height: 2px; }
div.outer img { position: fixed; right: 0; bottom: 0; }
</style>
<br>
<br>
<br>
<br>
<div class="a" style="max-width:800px;margin:auto;vertical-align: middle;padding:10px;">
    <h1 style="color:green;font-family: 'Bubblegum Sans', cursive; font-size: 30px;"> 
    Question Three
    </h1> 
      
    <h3 style="font-family: 'Bubblegum Sans', cursive;font-size: 25px;"> 
    Which of the following would store the number 2007 in the variable 'dob'?
    </h3> 
      
    <form style="font-family: 'Bubblegum Sans', cursive;font-size: 25px;"> 
    <input type="radio" name="Hello" id="c1"
            value="c1">dob=2007<br> 
          
        <input type="radio" name="Hello" id="w2"
            value="w2">d ob=2007<br> 
          
        <input type="radio" name="Hello" id="w1"
            value="w1">dob="2007"<br><br> 
      
        <button type="button" onclick="display()"> 
            Submit 
        </button>  
    </form> 
    <br> 
    <div id="disp" style= 
        "color:green; font-size:18px; font-weight:bold;"> 
    </div>  
</div>
<div class="outer">
    <img src="coding.gif" height="100">
 </div>
</body>  
    <script> 
        function display() {  
            if(document.getElementById('w1').checked) { 
                var partOne = "Good try but this is incorrect. Numbers do not need to have the quotation marks around it.";
                    var str = "Next Part";
                    var result = str.link("pageThree.php");
                    var total = partOne  + "      " + result;
                    document.getElementById("disp").innerHTML = total.fontcolor("red")
                
            } 
            else if(document.getElementById('w2').checked) { 
               var partOne = "Almost! Not quite correct. There should be no space between the d and the ob, it is one phrase";  
               var str = "Next Part";
                    var result = str.link("pageThree.php");
                    var total = partOne  + "      " + result;
                    document.getElementById("disp").innerHTML = total.fontcolor("red") 
            } 
            else if(document.getElementById('c1').checked) { 
                var partOne = "This is correct! ";   
                var str = "Next Part";
                    var result = str.link("pageThree.php");
                    var total = partOne  + "      " + result;
                    document.getElementById("disp").innerHTML = total.fontcolor("green")
            } 
            else { 
                var partOne = "The task was to store 2007 in the variable 'dob', so the best way to do that would be to select the first option - dob=2007"; 
                var str = "Next Part";
                    var result = str.link("pageThree.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
            } 
        } 
    </script> 
</html>
