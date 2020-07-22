<!DOCTYPE html> 
<html> 
  
<head> 
</head> 
  
<body>  
      
    <h1 style="color:green;"> 
    Question One
    </h1> 
      
    <h3> 
       Which of the following would store the word yellow in the variable 'colour'?
    </h3> 
      
    <form> 
        <input type="radio" name="Hello" id="w1"
            value="w1">colour=yellow<br> 
          
        <input type="radio" name="Hello" id="c1"
            value="c1">colour = "yellow"<br> 
          
        <input type="radio" name="Hello" id="w2"
            value="w2">color = "yellow"<br><br> 
      
        <button type="button" onclick="display()"> 
            Submit 
        </button> 
    </form> 
    <br> 
    <div id="disp" style= 
        "color:green; font-size:18px; font-weight:bold;"> 
    </div>  
</body>  
    <script> 
        function display() {  
            if(document.getElementById('w1').checked) { 
                var partOne = "Good try but this is incorrect. Remember, you need to have quotation marks around the text.";
                    var str = "Next Question";
                    var result = str.link("partTwoQuestionTwo.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
                
            } 
            else if(document.getElementById('w2').checked) { 
               var partOne = "Almost! Not quite correct, remember spelling is a key part in programming.";  
               var str = "Next Question";
                    var result = str.link("partTwoQuestionTwo.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result; 
            } 
            else if(document.getElementById('c1').checked) { 
                var partOne = "This is correct! ";   
                var str = "Next Question";
                    var result = str.link("partTwoQuestionTwo.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
            } 
            else { 
                var partOne = "The task was to store yellow in the variable colour, so the best way to do that would be to select the second option - colour = 'yellow'"; 
                var str = "Next Question";
                    var result = str.link("partTwoQuestionTwo.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
            } 
        } 
    </script> 
</html> 
