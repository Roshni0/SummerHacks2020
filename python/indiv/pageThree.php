<html>
  <head>
  </head>
  <body>
    <style>
      body {
        background: #FFF;
        padding-top: 10px;
      }
      p {
        color: red;
        font-family: "Courier";
        font-size: 20px;
        opacity: 0;
        animation: type 90s steps(60, end) forwards;
        -webkit-user-select: none;
        user-select: none;
      }
      p:nth-child(2) {
        animation-delay: 0.5s;
      }
      p:nth-child(3) {
        animation-delay: 1.5s;
      }
      p:nth-child(4) {
        animation-delay: 2.5s;
      }
      p:nth-child(5) {
        animation-delay: 3.5s;
      }
      p:nth-child(6) {
        animation-delay: 4.5s;
        margin-bottom: 25px;
      }
      p:nth-child(7) {
        animation-delay: 5.5s;
      }
      p:nth-child(8) {
        animation-delay: 6.5s;
      }
      p:nth-child(9) {
        animation-delay: 7.5s;
      }
      p:nth-child(10) {
        animation-delay: 8.5s;
      }
      p:nth-child(11) {
        animation-delay: 9.5s;
      }
      p:nth-child(12) {
        animation-delay: 10.5s;
      }
      p:nth-child(13) {
        animation-delay: 11.5s;
      }
      @keyframes type {
        0% {
          opacity: 1;
        }
        100% {
          width: 30em;
          opacity: 1;
        }
      }
      @keyframes blink {
        from {
          opacity: 0;
        }
        to {
          opacity: 1;
        }
      }
      ::selection {
        background: black;
      }
    </style>
    <p>INPUTTING AND ENTERING DATA</p>
    <p>A key skill you need to be able to do in many programs is to be able to enter data</p>
    <p>The data is stored in variables.</p>
    <p>If you wanted to get the users input of their name, you would write:</p>
    <p>name=input()</p>
    <p>In order to level up, you could write the following in order to make it clear the user what you are asking for</p>
    <p>name=input("Please Enter your name")</p>
    <p>Alternatively, you could combine the print statement and input statement: </p>
    <p>print("Please enter your name")</p>
    <p>name=input()</p>
    <p>click <a href="partThreeQuestionOne.php"> here</a> to go to the next page</p>
  </body>
</html>
