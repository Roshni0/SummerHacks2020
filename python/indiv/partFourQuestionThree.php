<!DOCTYPE html> 
<html> 
  
<head> 
</head> 
  
<body>  
      
    <h1 style="color:green;"> 
    Question Three
    </h1> 
      
    <h3> 
       Which of the following would print the result of 5+5/5*55?
    </h3> 
      
    <form> 
        <input type="radio" name="Hello" id="w1"
            value="c1">print(5+5/5*5)<br> 
          
        <input type="radio" name="Hello" id="c1"
            value="c1">print(5+5/5*55)<br> 
          
        <input type="radio" name="Hello" id="w2"
            value="w2">result=5+5/5<br><br> 
      
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
                var partOne = "Good try but this is incorrect. Remember to check what calculation needs to be done.";
                    var str = "Next Question";
                    var result = str.link("finished.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
                
            } 
            else if(document.getElementById('w2').checked) { 
               var partOne = "Not Quite! Remember,the task is to print out the result, not store the result.";  
               var str = "Next Question";
                    var result = str.link("finished.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result; 
            } 
            else if(document.getElementById('c1').checked) { 
                var partOne = "This is correct!";   
                var str = "Next Question";
                    var result = str.link("finished.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
            } 
            else { 
                var partOne = "The task was to print the result of the calculation of 5+5/5*55, so the second option was the correct answer - print(5+5/5*55)"; 
                var str = "Next Question";
                    var result = str.link("finished.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
            } 
        } 
    </script> 
</html> 
