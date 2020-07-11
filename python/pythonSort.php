<?php
//get level
//take according to level 
    require "connection.php";
    $conn=connection::getConn();
    session_start();
    $id=$_SESSION["userid"];
    $word = "p";
    $sql="SELECT * FROM `progressdetail` WHERE id='$id'";
    $result=$conn->query($sql);
    if ($result->num_rows>0){
        while($row = $result->fetch_assoc()) {
            $level=$row["level"];
            $part=$row["part"];
        }
    }
    $levelScratch = $level[strpos($language,$word)-4];
    $partScratch = $level[strpos($language,$word)-4];
    $_SESSION["level"]=$levelScratch;
    $_SESSION["part"]=$partScratch;
    $_SESSION["part"]=$_SESSION["part"]+1;
    if ($_SESSION["part"]==1){
        $part=$_SESSION["part"];
        $sql= "UPDATE `progressdetail` SET `part`='$part' WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
        }
        //go to part 1
    }
    else if ($_SESSION["part"]==2){
        $part=$_SESSION["part"];
        $sql= "UPDATE `progressdetail` SET `part`='$part' WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
        }
        //go to part 2
    }
    else if ($_SESSION["part"]==3){
        $part=$_SESSION["part"];
        $sql= "UPDATE `progressdetail` SET `part`='$part' WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
        }
        //go to part 3
    }
    else if ($_SESSION["part"]==4){
        $part=$_SESSION["part"];
        $sql= "UPDATE `progressdetail` SET `part`='$part' WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
        }
        //go to part 4
    }
?>