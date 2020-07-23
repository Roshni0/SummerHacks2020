<!DOCTYPE html> 
<html> 
  <head> 
  </head> 
  <body>  
      <h1 style="color:green;">Question Three</h1> 
      <h3>Which of the following would store the users input of their age?</h3>
      <form> 
          <input type="radio" name="Hello" id="w1"
              value="w1">print("please enter your name")<br>  name=input()<br>
          <input type="radio" name="Hello" id="w2"
              value="w2">print("please enter your age")<br>   age=input<br>
          <input type="radio" name="Hello" id="c1"
              value="c1">print("please enter your age")<br>   age=input()<br><br>
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
                  var partOne = "Good try but this is incorrect. The task was to store the age not the name.";
                      var str = "Next Part";
                      var result = str.link("pageFour.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
              else if(document.getElementById('w2').checked) { 
                 var partOne = "Almost! Not quite correct, remember the brackets after the command term input";  
                 var str = "Next Part";
                      var result = str.link("pageFour.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result; 
              } 
              else if(document.getElementById('c1').checked) { 
                  var partOne = "This is correct! ";   
                  var str = "Next Part";
                      var result = str.link("pageFour.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
              else { 
                  var partOne = "The task was to get the users input for their age. So the correct answer would be the third option - print('please enter your age')  age=input()"; 
                  var str = "Next Part";
                      var result = str.link("pageFour.php");
                      document.getElementById("disp").innerHTML = partOne  + "      " + result;
              } 
          } 
      </script> 
</html> 
