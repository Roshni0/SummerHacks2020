<!DOCTYPE html> 
<html> 
  <head> 
  </head> 
  <body>  
      <h1 style="color:green;">Question Two</h1>   
      <h3>Which of the following would get the users input on their age?</h3>   
      <form> 
          <input type="radio" name="Hello" id="w1"
              value="w1">age=input(integer)<br> 
          <input type="radio" name="Hello" id="c1"
              value="c1">age=input()<br> 
          <input type="radio" name="Hello" id="w2"
              value="w2">age=input<br><br> 
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
                  var partOne = "Good try but this is incorrect. Remember, you do not need to have the data type in the brackets";
                      var str = "Next Question";
                      var result = str.link("partThreeQuestionThree.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
              else if(document.getElementById('w2').checked) { 
                 var partOne = "Almost! Not quite correct, remember the brackets";  
                 var str = "Next Question";
                      var result = str.link("partThreeQuestionThree.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result; 
              } 
              else if(document.getElementById('c1').checked) { 
                  var partOne = "This is correct! ";   
                  var str = "Next Question";
                      var result = str.link("partThreeQuestionThree.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
              else { 
                  var partOne = "The task was to get the users input for their age. So the correct answer would be the second option - age=input()"; 
                  var str = "Next Question";
                      var result = str.link("partThreeQuestionThree.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
          } 
      </script> 
</html> 
