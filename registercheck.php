<?php
//CREATE TABLE `summer`.`userdetail` ( `id` INT(10) NOT NULL , `firstname` VARCHAR(50) NOT NULL , `surname` VARCHAR(50) NOT NULL , `username` VARCHAR(15) NOT NULL , `email` TEXT NOT NULL , `password` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;
//CREATE TABLE `summer`.`progressdetail` ( `id` INT(5) NOT NULL , `language` VARCHAR(200) NOT NULL , `level` INT(10) NOT NULL ) ENGINE = InnoDB;
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
    session_start();
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
                        mysql_ping($conn);
                        $conn=connection::getConn();
                        $id=$id+1;
                        $firstname="amy";
                        //echo $id;
                    $sql="INSERT INTO `userdetail`(`id`,`firstname`, `surname`, `username`, `email`, `password`) VALUES ('$id','$firstname','$surname','$username','$email','$phash')";
                    //echo "done";
                    //echo $sql;
                    $language = "none";
                    $level=0;
                        if ($conn->query($sql)===TRUE){
                            $sql="INSERT INTO `progressdetail`(`id`, `language`, `level`) VALUES ('$id','$language','$level')";
                            if ($conn->query($sql)===TRUE){
                                $_SESSION["userid"] = $id;
                                echo "WELCOME ".$firstname." ".$surname;
                                $goTo="Location:homepage.php";
                                header($goTo);
                            }else{
                                echo "connection error for progress details";
                            }
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
