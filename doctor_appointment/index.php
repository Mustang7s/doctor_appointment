<?php
require_once 'dbconnection.inc.php';
session_start();

if (!isset($_SESSION['Email']) && !isset($_SESSION['adminname'])) {
    header("Location: index.html");
}else{
  $email = $_SESSION['Email'];
  $query=mysqli_query($conn,"SELECT * FROM `admin` WHERE `Email_Address`='$email'")or die(mysqli_error());
  $row=mysqli_fetch_array($query);
}
?>

<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>DOCTOR APPOINTMENT SYSTEM - &amp; Homepage</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
  <script src="js/modernizr.js"></script>
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

    <style type="text/css">
        
          table{
    border: solid 1px black;
    align-items: center;
  }

   th, tr, td{
    border: solid 1px black;
    padding: 0px 0px;
  }
    </style>

            <script type="text/javascript">
function printData()
{
   var divToPrint=document.getElementById("printTable");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

            <script type="text/javascript">
function printData1()
{
   var divToPrint=document.getElementById("printTable1");
   newWin= window.open("");
   newWin.document.write(divToPrint.outerHTML);
   newWin.print();
   newWin.close();
}

$('button').on('click',function(){
printData();
})  
</script>

<body>
  
  <!-- ====================================================
  header section -->
  <header class="top-header">
    <div class="container">
      <div class="row">
        <div class="col-xs-5 header-logo">
          <br>
          <a href="index.php"><img src="img/logo.png" alt="" class="img-responsive logo"></a>
        </div>

        <div class="col-md-7">
          <nav class="navbar navbar-default">
            <div class="container-fluid nav-bar">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav navbar-right">
                  <li><a class="menu active" href="#home" >Home</a></li>
                  <li><a class="menu" href="#users">Users</a></li>
                  <li><a class="menu" href="#doctors">Doctors</a></li>
                  <li><a class="menu" href="#contact">contact us</a></li>
                  <li><a class="menu" href="#team">our team</a></li>
                  <li><a class="menu" href="logout.php">Logout</a></li>
                </ul>
              </div><!-- /navbar-collapse -->
            </div><!-- / .container-fluid -->
          </nav>
        </div>
      </div>
    </div>
  </header> <!-- end of header area -->

  <section class="slider" id="home">
    <div class="container-fluid">
      <div class="row">
          <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="header-backup"></div>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="img/1.jpg" alt="">
                      <div class="carousel-caption">
                        <h1>Welcome</h1>
                        <p><?php echo $row['Fullname']; ?></p>
                       <!--  <button> :) </button> -->
                      </div>
                  </div>
                  <div class="item">
                    <img src="img/2.jpg" alt="">
                      <div class="carousel-caption">
                        <h1>Welcome</h1>
                        <p><?php echo $row['Fullname']; ?></p>
                       <!--  <button>logout</button> -->
                      </div>
                  </div>
                  <div class="item">
                    <img src="img/3.jpg" alt="">
                      <div class="carousel-caption">
                        <h1>Welcome</h1>
                        <p><?php echo $row['Fullname']; ?></p>
                       <!-- <button href='logout.php'>logout</button> -->
                      </div>
                  </div>
                  <div class="item">
                    <img src="img/4.jpg" alt="">
                      <div class="carousel-caption">
                        <h1>Welcome</h1>
                        <p><?php echo $row['Fullname']; ?></p>
                        <!-- <button href='logout.php'>logout</button> -->
                      </div>
                  </div>
              </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>
    </div>
  </section><!-- end of slider section -->

  <!-- about section -->
  <section class="about text-center" id="users">
    <div class="container">
      <div class="row">
        <h2>List of Users</h2>
        <h4>Below are all the users registered under our system:</h4>
        <div class="col-md-4 col-sm-6">
          <table id="printTable">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">User ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
  <th style="text-align: left;
  padding: 8px;">Phone Number</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "doctor_appointment");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `User_ID`, `Fullname`, `Email_Address`, `Phone_Number` FROM `users`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["User_ID"] . "</td><td>" . $row["Fullname"] . "</td><td>" . $row["Email_Address"] . "</td><td>" . $row["Phone_Number"] . "</td></tr>";
}
echo "</table>";
} else { echo "No results"; }
$conn->close();
?>

</table>
<br>
<br> 
<br>
<br>
</div>
        <div>
<input class="submit-btn" type="submit" value="Print List of Users" onclick="printData()">
        </div>
        <br>
        <p>Click <a href="del_user.php">HERE</a> to Delete A User.</p>
      </div>
    </div>
  </div>
  </section><!-- end of about section -->


  <!-- service section starts here -->
  <section class="service text-center" id="doctors">
    <div class="container">
      <div class="row">
        <h2>List of Doctors</h2>
        <h4>Below are all the doctors registered under our system:</h4>
        <div class="col-md-4 col-sm-6">
          <table id="printTable1">
<tr style="text-align: left;
  padding: 8px;">
<th style="text-align: left;
  padding: 8px;">Doctors ID</th>
<th style="text-align: left;
  padding: 8px;">Fullname</th>
  <th style="text-align: left;
  padding: 8px;">Email Address</th>
  <th style="text-align: left;
  padding: 8px;">Phone Number</th>
   <th style="text-align: left;
  padding: 8px;">Speciality</th>
</tr>

<?php
$conn = mysqli_connect("localhost", "root", "", "doctor_appointment");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT `Doctor_ID`, `Fullname`, `Email_Address`, `Phone_Number`, `Speciality` FROM `doctors`";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["Doctor_ID"] . "</td><td>" . $row["Fullname"] . "</td><td>" . $row["Email_Address"] . "</td><td>" . $row["Phone_Number"] . "</td><td>" . $row["Speciality"] . "</td></tr>";
}
echo "</table>";
} else { echo "No results"; }
$conn->close();
?>

</table>
<br>
<br> 
<br>
<br>
</div>
        <div>
<input class="submit-btn" type="submit" value="Print List of Doctors" onclick="printData1()">
        </div>
          <br>
        <p>Click <a href="reg_doctor.php">HERE</a> to Add A Doctor.</p>
         <br>
        <p>Click <a href="del_doctor.php">HERE</a> to Delete A Doctor.</p>
      </div>
    </div>
  </section><!-- end of service section -->


  <!-- team section -->
  <section class="team" id="team">
    <div class="container">
      <div class="row">
        <div class="team-heading text-center">
          <h2>our team</h2>
          <h4>Our current team includes:</h4>
        </div>
        <div class="col-md-2 single-member col-sm-4">
          <div class="person">
            <img class="img-responsive" src="img/mem.png" alt="member-1">
          </div>
          <div class="person-detail">
            <div class="arrow-bottom"></div>
            <h3>Rutto malik, (139691)</h3>
            <p>malik is the sole creator and developer of this ground breaking system, striving for a safer and more efficient future for data handling specifically in the medical sector.</p>
          </div>
        </div>
  <!--      <div class="col-md-2 single-member col-sm-4">
          <div class="person-detail">
            <div class="arrow-top"></div>
            <h3>Dr. Danielle, M.D.</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
          </div>
          <div class="person">
            <img class="img-responsive" src="img/member2.jpg" alt="member-2">
          </div>
        </div>
        <div class="col-md-2 single-member col-sm-4">
          <div class="person">
            <img class="img-responsive" src="img/member3.jpg" alt="member-3">
          </div>
          <div class="person-detail">
            <div class="arrow-bottom"></div>
            <h3>Dr. Caitlin, M.D.</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
          </div>
        </div>
        <div class="col-md-2 single-member col-sm-4">
          <div class="person-detail">
            <div class="arrow-top"></div>
            <h3>Dr. Joseph, M.D.</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
          </div>
          <div class="person">
            <img class="img-responsive" src="img/member4.jpg" alt="member-4">
          </div>
        </div>
        <div class="col-md-2 single-member col-sm-4">
          <div class="person">
            <img class="img-responsive" src="img/member5.jpg" alt="member-5">
          </div>
          <div class="person-detail">
            <div class="arrow-bottom"></div>
            <h3>Dr. Michael, M.D.</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
          </div>
        </div>
        <div class="col-md-2 single-member col-sm-4">
          <div class="person-detail">
            <div class="arrow-top"></div>
            <h3>Dr. Hasina, M.D.</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, </p>
          </div>
          <div class="person">
            <img class="img-responsive" src="img/member6.jpg" alt="member-5">
          </div>
        </div> -->
      </div>
    </div>
  </section><!-- end of team section -->

  <!-- map section -->
  <!-- <div class="api-map" id="contact">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 map" id="map"></div>
      </div>
    </div>
  </div> --><!-- end of map section -->
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <!-- contact section starts here -->
  <section class="contact" id="contact">
    <div class="container">
      <div class="row">
        <div class="contact-caption clearfix">
          <div class="contact-heading text-center">
            <h2>contact us</h2>
          </div>
          <div class="col-md-5 contact-info text-left">
            <h3>contact information</h3>
            <div class="info-detail">
              <ul><li><i class="fa fa-calendar"></i><span>Monday - Friday:</span> 8:00 AM to 9:00 PM</li></ul>
              <ul><li><i class="fa fa-map-marker"></i><span>Address:</span> Nairobi, Kenya.</li></ul>
              <ul><li><i class="fa fa-phone"></i><span>Phone:</span> 0789432873</li></ul>
              <ul><li><i class="fa fa-envelope"></i><span>Email:</span> <a href="mailto:malikjoof212535@daystar.ac.ke">malikjoof212535@daystar.ac.ke</a></li></ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section><!-- end of contact section -->

  <!-- footer starts here -->
  <footer class="footer clearfix">
    <div class="container">
      <div class="row">
        <div class="col-xs-6 footer-para">
          <p>&copy; All right reserved</p>
        </div>
<!--        <div class="col-xs-6 text-right">
          <a href=""><i class="fa fa-facebook"></i></a>
          <a href=""><i class="fa fa-twitter"></i></a>
          <a href=""><i class="fa fa-skype"></i></a>
        </div> -->
      </div>
    </div>
  </footer>

  <!-- script tags
  ============================================================= -->
  <script src="js/jquery-2.1.1.js"></script>
  <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="js/gmaps.js"></script>
  <script src="js/smoothscroll.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/custom.js"></script>

      <script type="text/javascript">
      
             function myFunction() {
          var x =
          document.getElementById('pass');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }

                   function myFunction1() {
          var x =
          document.getElementById('pass1');
            if (x.type === "password"){
              x.type = "text";
            } else {
              x.type = "password";
            }
        }

    </script>

</body>
</html>