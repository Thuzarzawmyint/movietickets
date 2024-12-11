<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CineVerse</title>
  <link rel="stylesheet" href="admin.css">
</head>
<body>
<style>
    .booking-section {
  padding: 20px;
  border-radius: 8px;
}

.booking-table {
  width: 90%;
  border-collapse: collapse;
  margin-top: 20px;
}

.booking-table th,
.booking-table td {
  padding: 15px;
  text-align: center;
  border-bottom: 1px solid #ddd;
}

.booking-table td{
  color: white;
}
.booking-table th {
  background-color: #fdda0d;
  color: black;
}



img{
  width: 180px;
  height: 230px;
}
  </style>
</head>
<body>
  <center>
    <p>
      <br>
    <nav>
    <div class="topnav" id="myTopnav">
        <a href="VMovie.php" >View Movies</a>
        <a href="VAdd.php">Add Movies</a>
        <a href="VEdit.php">Edit Movies</a>
        <a href="VDelete.php">Delete Movies</a>
        <a href="VBooking.php">View Bookings</a>
        <a href="VFeedback.php">View FeedBacks</a>
        <a href="index.php">Logout</a>
    
    </div>
    </nav>
</p>
</center>
<br>

<!-----------------------------------------------Bookings---Bookings---Bookings---Bookings---Bookings-------------------------------------------------------------------------------------->
<h1 class="h1">Bookings</h1>
<br><br><br>


<div class="entries">
<center>
<?php
$host = "localhost:3377";
$user = "root";
$passwd = "";
$database = "movieticket";
$table_name = "booking";
$connect = mysqli_connect($host, $user, $passwd, $database) or die("could not load");

$query = "Select * From booking";
mysqli_select_db($connect, $database);
$result = mysqli_query($connect, $query);

echo "<div color = red class = entries>";


if($result){
  print " <table class=booking-table>";
  print "<th>ID</th>
            <th>Title</th>
            <th>Cinema</th>
            <th>Date</th>
            <th>Show Time</th>
            <th>Number of Tickets</th>
            <th>Customer Name</th>
            <th>Email</th>";
  while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    $bid = $row['Id'];
    $mname = $row['MName'];
    $cinema = $row['Cinema'];
    $date = $row['Date'];
    $time = $row['Time'];
    $number = $row['Number'];
    $name = $row['Name'];
    $email = $row['Email'];

    print "<tr>";
    print "<td>". $bid . "</td>";
    print "<td>". $mname . "</td>";
    print "<td>". $cinema . "</td>";
    print "<td>". $date . "</td>";
    print "<td>". $time . "</td>";
    print "<td>". $number . "</td>";
    print "<td>". $name . "</td>";
    print "<td>". $email . "</td>";
    print "</tr>";

  
  }
    print "</table>";
}else{
  die ("Query = $query failed!");
}
echo "</div>";
mysqli_close($connect);
?>
<!--<footer>
<div class="footer-container">
    <div class="footer-column">
        <h3>Quick Links</h3>
        <p><a href="CMovie.php">Movies</a></p>
        <p><a href="CAbout.php">About Us</a></p>
        <p><a href="CContact.php">Contact Us</a></p>
    </div>
    <div class="footer-column">
        <h3>Follow Us on Socials</h3>
        <ul>
            <p><li>FaceBook</li></p>
            <p><li>Instagram</li></p>
            <p><li>Twitter</li></p>
        </ul>
    </div>
    <div class="footer-column">
        <h3>Contact</h3>
        <p>Email: thuzar@gmail.com</p>
        <p>Phone: (123) 456-7890</p>
    </div>
</div>
</footer>--->

  <br><br><br>

</body>
</html>