<?php
    class connection //this class allows pages to connect to the db
    {public static function getConn(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "summer";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error){
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
        }
    }
?>