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
    Question Two
    </h1> 
      
    <h3 style="font-family: 'Bubblegum Sans', cursive;font-size: 25px;"> 
    Which of the following would print out 'Hello, my name is Sara!'?
    </h3> 
      
    <form style="font-family: 'Bubblegum Sans', cursive;font-size: 25px;"> 
        <input type="radio" name="Hello" id="c1"
            value="c1">print('Hello, my name is Sara!')<br> 
          
        <input type="radio" name="Hello" id="w2"
            value="w2">print('Hello, my name is Sara!)<br> 
          
        <input type="radio" name="Hello" id="w1"
            value="w1">print(Hello, my name is Sara)<br><br> 
      
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
                var partOne = "Almost! Remember, you need to have quotation marks around the text.";
                    var str = "Next Question";
                    var result = str.link("partOneQuestionThree.php");
                    var total = partOne  + "      " + result;
                    document.getElementById("disp").innerHTML = total.fontcolor("red")
                
            } 
            else if(document.getElementById('w2').checked) { 
               var partOne = "Good try but this is incorrect. Remember, you need to have quotation marks around the text, not just at the beginning.";  
               var str = "Next Question";
                    var result = str.link("partOneQuestionThree.php");
                    var total = partOne  + "      " + result;
                    document.getElementById("disp").innerHTML = total.fontcolor("red")
            } 
            else if(document.getElementById('c1').checked) { 
                var partOne = "This is correct! Remember, you always have write - print('something')";   
                var str = "Next Question";
                    var result = str.link("partOneQuestionThree.php");
                    var total = partOne  + "      " + result;
                    document.getElementById("disp").innerHTML = total.fontcolor("green")
            } 
            else { 
                var partOne = "The task was to print out 'Hello, my name is Sara', so the best way to do that would be to select the third option - print('Hello, my name is Sara')"; 
                var str = "Next Question";
                    var result = str.link("partOneQuestionThree.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
            } 
        } 
    </script> 
</html> 
