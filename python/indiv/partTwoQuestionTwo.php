<!DOCTYPE html> 
<html> 
  <head> 
  </head> 
  <body>  
      <h1 style="color:green;">Question Two</h1> 
      <h3>Which of the following would store the phrase 'orange is my favourite colour' in the variable 'favourite_colour'?</h3> 
      <form> 
          <input type="radio" name="Hello" id="w1"
              value="w1">favourite_colour = orange is my favourite colour<br> 
          <input type="radio" name="Hello" id="c1"
              value="c1">favourite_colour = "orange is my favourite colour"<br> 
          <input type="radio" name="Hello" id="w2"
              value="w2">favourite colour = "orange is my favourite colour"<br><br> 
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
                      var result = str.link("partTwoQuestionThree.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
              else if(document.getElementById('w2').checked) { 
                 var partOne = "Almost! Not quite correct, remember spelling is a key part in programming. The task was to store the phrase in the variable favourite_colour, favourite colour would be invalid because the variable has to be one phrase.";  
                 var str = "Next Question";
                      var result = str.link("partTwoQuestionThree.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result; 
              } 
              else if(document.getElementById('c1').checked) { 
                  var partOne = "This is correct! ";   
                  var str = "Next Question";
                      var result = str.link("partTwoQuestionThree.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
              else { 
                  var partOne = "The task was to store the phrase 'orange is my favourite colour' in the variable favourite_colour, so the best way to do that would be to select the second option - favourite_colour = 'orange is my favourite colour'"; 
                  var str = "Next Question";
                      var result = str.link("partTwoQuestionThree.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
          } 
      </script> 
  </html> 
