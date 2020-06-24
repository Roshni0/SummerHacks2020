<?php
    require "connection.php";
    $conn = connection::getConn();
    session_start();
    $username=$_POST["uname"];
    $password=$_POST["psw"];
    $sql="SELECT 'id',`firstname`, `surname`, `username`, `email`, `password` FROM `userdetail` WHERE username='$username'";
    $result=$conn->query($sql);
    if ($result->num_rows>0){
        while ($row=$result->fetch_assoc()){
            if ($password == $row["password"]){
           // if (password_verify($password,$row["password"])){
                $_SESSION['userid']=$row["id"];
                header('Location:homepage.php');
            }else{
                echo "details entered are incorrect";
                echo "<br>";
                    echo "Please click "."<a href='home.php'>here</a>"." to try again";
            }
        }
    }
?>