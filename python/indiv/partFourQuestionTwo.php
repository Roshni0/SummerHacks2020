<!DOCTYPE html> 
<html> 
  
<head> 
</head> 
  
<body>  
      
    <h1 style="color:green;"> 
    Question Two
    </h1> 
      
    <h3> 
       Which of the following would store the result of 5+5/5?
    </h3> 
      
    <form> 
        <input type="radio" name="Hello" id="w1"
            value="w1">5+5/5<br> 
          
        <input type="radio" name="Hello" id="w2"
            value="w2">5/5/5<br> 
          
        <input type="radio" name="Hello" id="c1"
            value="c1">result=5+5/5<br><br> 
      
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
                var partOne = "Good try but this is incorrect. Remember, you need to store the result in a variable.";
                    var str = "Next Question";
                    var result = str.link("partFourQuestionThree.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
                
            } 
            else if(document.getElementById('w2').checked) { 
               var partOne = "Not Quite! Remember, you need to store the result in a variable, and check that the operations are correct";  
               var str = "Next Question";
                    var result = str.link("partFourQuestionThree.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result; 
            } 
            else if(document.getElementById('c1').checked) { 
                var partOne = "This is correct!";   
                var str = "Next Question";
                    var result = str.link("partFourQuestionThree.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
            } 
            else { 
                var partOne = "The task was to store the result of the calculation of 5+5/5, so the third option was the correct answer - result=5+5/5"; 
                var str = "Next Question";
                    var result = str.link("partFourQuestionThree.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
            } 
        } 
    </script> 
</html> 
