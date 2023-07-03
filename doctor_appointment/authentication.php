<?php
require_once "dbconnection.inc.php";

session_start();

if(isset($_POST['login'])){

    $id = $_POST['email'];
    $password = $_POST['password'];
    $module = $_POST['mod'];    
    $a = 0;
    $d = 1;
    $u = 2;

if ($module == $a){
         $sql = "SELECT * FROM `admin` WHERE `Email_Address`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];

if(md5($password) == $pass){

                $_SESSION['adminname'] = $row['Administrator_ID'];
                $_SESSION['Email'] = $row['Email_Address'];
                echo "Login Succesful.";
                header("Location: index.php");
            }else{
                echo "Incorrect Password.";
            }
        }else{
            echo "Administrator does not exist.";
        }
}else if ($module == $d){
         $sql = "SELECT * FROM `doctors` WHERE `Email_Address`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];

if(md5($password) == $pass){

                $_SESSION['docname'] = $row['Doctor_ID'];
                $_SESSION['Email1'] = $row['Email_Address'];
                echo "Login Succesful.";
                header("Location: index1.php");
            }else{
                echo "Incorrect Password.";
            }
        }else{
            echo "Doctor does not exist.";
        }
}else if ($module == $u){
         $sql = "SELECT * FROM `users` WHERE `Email_Address`='$id'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $pass = $row['Password'];

if(md5($password) == $pass){

                $_SESSION['username'] = $row['User_ID'];
                $_SESSION['Email2'] = $row['Email_Address'];
                echo "Login Succesful.";
                header("Location: index2.php");
            }else{
                echo "Incorrect Password.";
            }
        }else{
            echo "User does not exist.";
        }
}else{
    echo "An error occured.";
}
            }

           
?>
