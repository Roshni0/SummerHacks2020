<!DOCTYPE html> 
<html> 
  <head> 
  </head> 
  <body> 
      <h1 style="color:green;">Question Two</h1> 
      <h3> 
         Which of the following would print out 'Hello, my name is Bob!'?
      </h3> 
      <form> 
          <input type="radio" name="Hello" id="c1"
              value="c1">print('Hello, my name is Bob!')<br> 
          <input type="radio" name="Hello" id="w2"
              value="w2">print('Hello, my name is Bob!)<br> 
          <input type="radio" name="Hello" id="w1"
              value="w1">print(Hello, my name is Bob)<br><br> 
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
                  var partOne = "Good try but this is incorrect. Remember, you need to have quotation marks around the text, not just at the beginning.";
                      var str = "Next Question";
                      var result = str.link("partOneQuestionThree.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
              else if(document.getElementById('w2').checked) { 
                 var partOne = "Almost! Remember, you need to have quotation marks around the text.";  
                 var str = "Next Question";
                      var result = str.link("partOneQuestionThree.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result; 
              } 
              else if(document.getElementById('c1').checked) { 
                  var partOne = "This is correct! Remember, you always have write - print('something')";   
                  var str = "Next Question";
                      var result = str.link("partOneQuestionThree.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
              else { 
                  var partOne = "The task was to print out 'Hello, my name is Bob', so the best way to do that would be to select the third option - print('Hello, my name is Bob')"; 
                  var str = "Next Question";
                      var result = str.link("partOneQuestionThree.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
          } 
      </script> 
</html> 
