<?php
//get level
//take according to level 
// CREATE TABLE `summer`.`questionbank` ( `question` TEXT NOT NULL , `questionID` INT(10) NOT NULL , `language` VARCHAR(5) NOT NULL , `part` INT(10) NOT NULL , `level` INT(10) NOT NULL , PRIMARY KEY (`questionID`)) ENGINE = InnoDB;
//CREATE TABLE `summer`.`scorebook` ( `scoreBookID` INT(10) NOT NULL , `studentID` INT(10) NOT NULL , `questionID` INT(10) NOT NULL , `score` INT(2) NOT NULL , PRIMARY KEY (`scoreBookID`)) ENGINE = InnoDB;
    require "connection.php";
    $conn=connection::getConn();
    session_start();
    if ($_SESSION["userid"]){
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
        $_SESSION["questionNumber"]=$_SESSION["questionNumber"]+1;
        if ($_SESSION["questionNumber"]<6){
            //goto question page
        }else{
            //go back to python sort
        }
    }else{
        echo "invalid. please log in"
    }
    
    
?>