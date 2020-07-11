<?php
    require "connection.php";
    $conn=connection::getConn();
    session_start();
    $level=$_SESSION["level"];
    $questionNumber=$_SESSION["questionNumber"];
    //if question number = 1
    //get question id 1 // level 1
    // options are: output(hello world), echo (hello world), print(hello world), print("hello world")
    //if question number =2
    //get question id 2 // level 2
    //options are: output(my name is bob), echo (my name is bob) etc.
    //if question number = 3
    //get question id 3 //level 3
    //Today is very hot
?>