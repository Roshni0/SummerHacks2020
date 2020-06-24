<?php
    require "connection.php";
    $conn=connection::getConn();
    session_start();
    $id=$_SESSION["userid"];
    $sql="SELECT * FROM `progressdetail` WHERE id='$id'";
    $result=$conn->query($sql);
    if ($result->num_rows>0){
      while($row = $result->fetch_assoc()) {
        $language=$row["language"];
      }
    }
    $word = "h";
    if(strpos($language,$word) !== false){
        $sql="SELECT * FROM `progressdetail` WHERE id='$id'";
        $result=$conn->query($sql);
        if ($result->num_rows>0){
            while($row = $result->fetch_assoc()) {
                $level=$row["level"];
            }
        }
        $levelScratch = $level[strpos($language,$word)-4];
    } else{
        $sql="SELECT * FROM `progressdetail` WHERE id='$id'";
        $result=$conn->query($sql);
        if ($result->num_rows>0){
            while($row = $result->fetch_assoc()) {
                $level=$row["level"];
            }
        }
        $newLevel='0';
        $language=$language.$word;
        $level=$level.$newLevel;
        $sql= "UPDATE `progressdetail` SET `language`='$language' WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "welcome";
          } else {
            echo "no";
        }
        $sql= "UPDATE `progressdetail` SET `level`='$level' WHERE id='$id'";
        if ($conn->query($sql) === TRUE) {
            echo "welcome";
          } else {
            echo "no";
        }
    }
    echo "html";
?>