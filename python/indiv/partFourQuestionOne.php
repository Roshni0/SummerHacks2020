<!DOCTYPE html> 
<html> 
  
<head> 
</head> 
  
<body>  
      
    <h1 style="color:green;"> 
    Question One
    </h1> 
      
    <h3> 
       Which of the following would store the result of the addition of 10+5?
    </h3> 
      
    <form> 
        <input type="radio" name="Hello" id="w1"
            value="w1">result=10 + "add" + 5<br> 
          
        <input type="radio" name="Hello" id="w2"
            value="w2">result=10*5<br> 
          
        <input type="radio" name="Hello" id="c1"
            value="c1">result=10+5<br><br> 
      
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
                var partOne = "Good try but this is incorrect. Remember, you need to have the first number followed by + followed by second number";
                    var str = "Next Question";
                    var result = str.link("partFourQuestionTwo.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
            } 
            else if(document.getElementById('w2').checked) { 
               var partOne = "Almost! Not quite correct, the task was to add not multiply";  
               var str = "Next Question";
                    var result = str.link("partFourQuestionTwo.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result; 
            } 
            else if(document.getElementById('c1').checked) { 
                var partOne = "This is correct! ";   
                var str = "Next Question";
                    var result = str.link("partFourQuestionTwo.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
            } 
            else { 
                var partOne = "The task was to store the result of the calculation of 10+5, so the third option was the correct answer - result=10+5"; 
                var str = "Next Question";
                    var result = str.link("partFourQuestionTwo.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
            } 
        } 
    </script> 
</html> 
