<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="patient_style.css">
<title>Document</title>

</head>
<body>
<nav>
<div class="left-links">
   
  
    <body>
    
    <div id="mySidenav" class="sidenav">
      <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <a href="#">Dashboard</a>
      <a href="bookappt.php">Book appointment</a>
      <a href="appHistory.php">Appointment History</a>
      <a href="medical-history.html">Medical History</a>
    </div> 
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>    
</div>
<div class="right-links">
  <!-- for navbar -->
  <table>
    <tr>

      <td><a class="hms">Telemedicine services</a></td>
      <td><a class="links" href="index.php">Back</a></td>
      <td><img id="user" src="images/doctor.png" alt=""></td>
      <td>

        <?php
        $con = mysqli_connect('localhost', 'root', '');
        mysqli_select_db($con, 'medcare');
        $query = mysqli_query(
            $con,
            "select username from login where username='" .
                $_SESSION['uname'] .
                "';"
        );
        while ($row = mysqli_fetch_array($query)) {
            echo $row['username'];
        }
        ?>
        </td>
    </tr>
    
  </table>
  <!-- end of navbar -->
</div>
</nav>

<div class="dashboard">
  <div class="box" id="row1">
       <a href="bookappt.php">NEW APPOINTMENT</a>
  </div>
  <div class="box" id="row2">
       <a href="appHistory.php">YOUR APPOINTMENTS</a>
  </div>
  <div class="box" id="row2">
       <a href="medical-history.html">RECORDS</a>
  </div>
</div>


<script src="index_patient.js"></script>
</body>
</html>