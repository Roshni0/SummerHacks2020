<?php
//CREATE TABLE `summer`.`userdetail` ( `id` INT(10) NOT NULL , `firstname` VARCHAR(50) NOT NULL , `surname` VARCHAR(50) NOT NULL , `username` VARCHAR(15) NOT NULL , `email` TEXT NOT NULL , `password` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
//CREATE TABLE `teach`.`userdetail` ( `id` INT NOT NULL AUTO_INCREMENT , `firstname` VARCHAR(50) NOT NULL , `surname` VARCHAR(50) NOT NULL , `username` VARCHAR(50) NOT NULL , `email` VARCHAR(100) NOT NULL , `password` VARCHAR(200) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB; 
function password_strength_check($password, $min_len = 6, $max_len = 9, $req_digit = 1, $req_lower = 1, $req_upper = 1, $req_symbol = 1) {
        $regex = '/^';
        if ($req_digit == 1) { $regex .= '(?=.*\d)'; } // Match at least 1 digit
        if ($req_lower == 1) { $regex .= '(?=.*[a-z])'; } // Match at least 1 lowercase letter
        if ($req_upper == 1) { $regex .= '(?=.*[A-Z])'; } // Match at least 1 uppercase letter
        if ($req_symbol == 1) { $regex .= '(?=.*[^a-zA-Z\d])'; } // Match at least 1 character that is none of the above
        $regex .= '.{' . $min_len . ',' . $max_len . '}$/';
        if(preg_match($regex, $password)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    require "connection.php";
    $conn=connection::getConn();
    $username = $_POST["uname"];
    $sql="SELECT * FROM `userdetail` WHERE username='$username'";
    $result=$conn->query($sql);
    if ($result->num_rows>0){
        echo "username already exists";
        echo "<br>";
        echo "Please click "."<a href='home.php'>here</a>"." to be redirected to the register page";
    }else{
        $email = $_POST["email"];
        $sql="SELECT * FROM `userdetail` WHERE email='$email'";
        $result=$conn->query($sql);
        if ($result->num_rows>0){
            echo "email address is already used";
            echo "<br>";
            echo "Please click "."<a href='home.php'>here</a>"." to be redirected to the register page";
        }else{
            if ($_POST["pw"]==$_POST["confirmpw"]){
                if (password_strength_check($_POST["pw"]) == TRUE ){
                    $firstname=$_POST["fname"];
                    $surname=$_POST["sname"];
                    $username=$_POST["uname"];
                    $email=$_POST["email"];
                    $password=$_POST["pw"];
                    $phash=password_hash($password,PASSWORD_DEFAULT);
                    // echo $firstname;
                    // echo $surname;
                    // echo $username;
                    // echo $email;
                    // echo $password;
                    // echo $phash;
                    if (password_Verify($password, $phash)){
                        $sql="SELECT MAX(id) as max from userdetail";
                        $result=$conn->query($sql);
                        if ($result->num_rows >0){
                            while ($row=$result->fetch_assoc()){
                                $id=$row["max"];
                            }
                        }
                        $id=$id+1;
                        $firstname="amy";
                        //echo $id;
                    $sql="INSERT INTO `userdetail`(`id`,`firstname`, `surname`, `username`, `email`, `password`) VALUES ('$id','$firstname','$surname','$username','$email','$phash')";
                    //echo "done";
                    //echo $sql;
                        if ($conn->query($sql)===TRUE){
                            echo "WELCOME ".$firstname." ".$surname;
                            //go to the home page
                        }else{
                            echo "connection error for entry";
                        }
                        
                    }else{
                        echo "connection error for password verify";
                    }
                }else{
                    echo "Password too weak. Must have a digit, a lowercase letter, uppercase letter, special character and between 6 to 9 characters.";
                    echo "<br>";
                    echo "Please click "."<a href='home.php'>here</a>"." to be redirected to the register page";
                }
            }else{
                echo "Different passwords entered";
                echo "<br>";
                echo "Please click "."<a href='home.php'>here</a>"." to be redirected to the register page";
            }
        }
    }
    $conn->close();
?>