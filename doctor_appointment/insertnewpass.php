 <?php

     session_start();
      if(isset($_POST['submit'])){
        $password = $_POST['password'];
        $passwordconfirm = $_POST['cpassword'];

require_once 'dbconnection.inc.php';

$email = $_SESSION['Email'];

if (empty($password)){
  echo "Kindly input a Password.";
} else if (empty($passwordconfirm)){
  echo "Kindly input Confirm Password.";
} 
else if($password == $passwordconfirm){

 $sql = "SELECT * FROM `admin` WHERE `Email_Address`='$email'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){

$sql1 = "UPDATE `admin` SET `Password`=md5('$password') WHERE `Email_Address`= '$email'";

         $query = mysqli_query($conn,$sql1);
       // var_dump($sql);
        if ($conn->query($sql1) === TRUE) {
  echo "New Password Recorded Successfully";
   header("Location: index.html");
   session_destroy();
 }
 else {
  echo "Error updating record: " . $conn->error;
}
}
}else{
  echo "Passwords do not match.";
}
}
?>
     
