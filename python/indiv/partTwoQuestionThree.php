<!DOCTYPE html> 
<html> 
  
<head> 
</head> 
  
<body>  
      
    <h1 style="color:green;"> 
    Question Three
    </h1> 
      
    <h3> 
       Which of the following would store the number 2007 in the variable 'dob'?
    </h3> 
      
    <form> 
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
</body>  
    <script> 
        function display() {  
            if(document.getElementById('w1').checked) { 
                var partOne = "Good try but this is incorrect. Numbers do not need to have the quotation marks around it.";
                    var str = "Next Part";
                    var result = str.link("pageThree.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
                
            } 
            else if(document.getElementById('w2').checked) { 
               var partOne = "Almost! Not quite correct. There should be no space between the d and the ob, it is one phrase";  
               var str = "Next Part";
                    var result = str.link("pageThree.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result; 
            } 
            else if(document.getElementById('c1').checked) { 
                var partOne = "This is correct! ";   
                var str = "Next Part";
                    var result = str.link("pageThree.php");
                    document.getElementById("disp").innerHTML = partOne  + "      " + result;
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
