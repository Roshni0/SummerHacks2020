<!DOCTYPE html> 
<html> 
  <head> 
  </head> 
  <body>  
      <h1 style="color:green;">Question One</h1> 
      <h3>Which of the following would get the users input for their name?</h3> 
      <form> 
          <input type="radio" name="Hello" id="w1"
              value="w1">name==input()<br> 
          <input type="radio" name="Hello" id="w2"
              value="w2">name=input<br> 
          <input type="radio" name="Hello" id="c1"
              value="c1">name=input()<br><br> 
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
                  var partOne = "Good try but this is incorrect. For assignment, you only need one equals";
                      var str = "Next Question";
                      var result = str.link("partThreeQuestionTwo.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
              else if(document.getElementById('w2').checked) { 
                 var partOne = "Almost! Not quite correct, brackets are needed after the command input";  
                 var str = "Next Question";
                      var result = str.link("partThreeQuestionTwo.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result; 
              } 
              else if(document.getElementById('c1').checked) { 
                  var partOne = "This is correct! Remember, you always have write - variable=input()";   
                  var str = "Next Question";
                      var result = str.link("partThreeQuestionTwo.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
              else { 
                  var partOne = "The task was to get the users input for their name. So the correct answer would be the third option - name=input()"; 
                  var str = "Next Question";
                      var result = str.link("partThreeQuestionTwo.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
          } 
      </script> 
</html> 
