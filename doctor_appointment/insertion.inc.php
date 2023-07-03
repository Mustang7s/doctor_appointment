<?php 

//Register User
if (isset($_POST['addu'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $question = $_POST['rq'];
 $answer = $_POST['ra'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {
   $sql = "INSERT INTO `users`(`Fullname`, `Email_Address`, `Phone_Number`, `Recovery_Question`, `Recovery_Answer`, `Password`) VALUES ('$fname','$email','$phone','$question','$answer',md5('$password'))";
     mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index.html?userregistration=success");
 }else{
  echo "Passwords do not match.";
 }
}

//ADMINISTRATOR Section
//Delete Doctor  
if (isset($_POST['deleted'])) {
  $id = $_POST['did'];

require_once 'dbconnection.inc.php';

  $sql = "DELETE FROM `doctors` WHERE `Doctor_ID` = '$id'";

  mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index.php?delete=success");
}

//Delete User  
if (isset($_POST['deleteu'])) {
  $uid = $_POST['uid'];

require_once 'dbconnection.inc.php';

  $sql = "DELETE FROM `users` WHERE `User_ID` = '$uid'";

  mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index.php?delete=success");
}

//Add a Doctor
if (isset($_POST['addd'])) {
 $fname = $_POST['fname'];
 $email = $_POST['email'];
 $phone = $_POST['phone'];
 $question = $_POST['rq'];
 $answer = $_POST['ra'];
 $spec = $_POST['spec'];
 $password = $_POST['password'];
 $passwordconfirm = $_POST['cpassword'];

 require_once 'dbconnection.inc.php';

 if ($password == $passwordconfirm) {
   $sql = "INSERT INTO `doctors`(`Fullname`, `Email_Address`, `Phone_Number`, `Speciality`, `Recovery_Question`, `Recovery_Answer`, `Password`) VALUES ('$fname','$email','$phone','$spec','$question','$answer',md5('$password'))";
     mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index.php?doctorregistration=success");
 }else{
  echo "Passwords do not match.";
 }
}

//DOCTOR Section
//Update an Appointment
if (isset($_POST['upa'])) {

 $aid = $_POST['aid'];
  $stat = $_POST['stat'];
  $a = "Completed";

require_once 'dbconnection.inc.php';

  if ($stat == $a) {
             $sql = "SELECT * FROM `appointments` WHERE `Appointment_ID`='$aid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $user = $row['User_ID'];

        $sql1 = "SELECT * FROM `users` WHERE `User_ID`='$user'";

        $query1 = mysqli_query($conn,$sql1);

        if(mysqli_num_rows($query1) > 0){
            $row1 = mysqli_fetch_assoc($query1);

            $name = $row1['Fullname'];
            $email = $row1['Email_Address'];
            $phone = $row1['Phone_Number'];

$sql2 = "UPDATE `appointments` SET `Status`='Appointment has been completed.', `Billing` = 'kshs 12,000 has been paid.' WHERE `Appointment_ID`='$aid'";

  mysqli_query($conn, $sql2);
   // var_dump($sql);
   // die();
  //header("Location: index1.php?update=success");
  echo "<p>Thank you for completing Appointment " . $aid . " with Patient " . $name . " . This has been recorded.</p>
    <br>
    <br>
    <p>Click <a href='index1.php?update=success'>HERE</a> to return Home.</p>";
}else{
  echo "Appointment does not exist.";
}
}else{
  echo "Appointment does not exist.";
}
  }else{
             $sql = "SELECT * FROM `appointments` WHERE `Appointment_ID`='$aid'";

        $query = mysqli_query($conn,$sql);

        if(mysqli_num_rows($query) > 0){
            $row = mysqli_fetch_assoc($query);

            $user = $row['User_ID'];

        $sql1 = "SELECT * FROM `users` WHERE `User_ID`='$user'";

        $query1 = mysqli_query($conn,$sql1);

        if(mysqli_num_rows($query1) > 0){
            $row1 = mysqli_fetch_assoc($query1);

            $name = $row1['Fullname'];
            $email = $row1['Email_Address'];
            $phone = $row1['Phone_Number'];

$sql2 = "UPDATE `appointments` SET `Status`='$stat' WHERE `Appointment_ID`='$aid'";

  mysqli_query($conn, $sql2);
   // var_dump($sql);
   // die();
  //header("Location: index1.php?update=success");
  echo "<p>Thank you for responding to Appointment " . $aid . " . Kindly reach out to Patient " . $name . " using their email <a href='mailto:". $email ."'> " . $email . " </a> or phone number " . $phone . " respectively.</p>
    <br>
    <br>
    <p>Click <a href='index1.php?update=success'>HERE</a> to return Home.</p>";
}else{
  echo "Appointment does not exist.";
}
}else{
  echo "Appointment does not exist.";
}
  }
}

 //USER Section
 //Add an Appointment
 if (isset($_POST['seta'])) {
 $did = $_POST['did'];
 $date = $_POST['date'];
 $date1 = $_POST['leo'];
 $time = $_POST['time'];
 $uid = $_POST['uid'];
 $info = $_POST['info'];

$datestamp = strtotime($date);
$datestamp1 = strtotime($date1);

 require_once 'dbconnection.inc.php';

if ($datestamp1 > $datestamp) {
  echo "Ensure that the Appointment Date is after Today's Date.";
}else{

$sql = "INSERT INTO `appointments`(`Doctor_ID`, `User_ID`, `Date`, `Time`, `Additional_Information`, `Billing`, `Status`) VALUES ('$did','$uid','$date','$time','$info', 'kshs 12,000 to be Paid.','Pending...')";
     mysqli_query($conn, $sql);
   // var_dump($sql);
   // die();
  header("Location: index2.php?setappointment=success");
}
 }

 //Cancel Appointment
 if (isset($_POST['cana'])) {
   $aid = $_POST['aid'];
   require_once 'dbconnection.inc.php';
   $sql = "UPDATE `appointments` SET `Status` = 'Cancelled',`Billing` = 'kshs 0.00' WHERE `Appointment_ID` = '$aid'";
  mysqli_query($conn, $sql); 
    //var_dump($sql);
   // die();
  header("Location: index2.php?cancel=success");
 }
 ?>