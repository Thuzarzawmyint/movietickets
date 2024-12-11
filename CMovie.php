<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CineVerse</title>
  <link rel="stylesheet" href="style.css">
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
  background-color: transparent;
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
    
    <a href="index.php" >Home</a>
    <a href="CMovie.php" >Movies</a>
        <a href="CBook.php">Book Tickets</a>
        <a href="CFeedback.php">FeedBack</a>
        <a href="CAbout.php">About Us</a>
        <a href="CCOntact.php">Contact</a>
        <a href="login.php">Admin</a>
    </div>
    </nav>
</p>
</center>
<br>

<!-----------------------------------------------Movies---Movies---Movies---Movies---Movies-------------------------------------------------------------------------------------->
<h1 class="h1">Movies</h1>
  <br><br><br>
  

  <div class="entries">
<center>
  <?php
  $host = "localhost:3377";
  $user = "root";
  $passwd = "";
  $database = "movieticket";
  $table_name = "movies";
  $connect = mysqli_connect($host, $user, $passwd, $database) or die("could not load");

  $query = "Select * From movies";
  mysqli_select_db($connect, $database);
  $result = mysqli_query($connect, $query);

  echo "<div color = red class = entries>";
  

  if($result){
    print " <table class=booking-table>";
    print "
              <th>Title</th>
              <th>Genre</th>
              <th>Duration</th>
              <th>Rating</th>
              <th>Price</th>
              <th>Poster</th>";
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
      $title = $row['Title'];
      $genre = $row['Genre'];
      $duration = $row['Duration'];
      $rating = $row['Rating'];
      $price = $row['Pricing'];
      $poster = $row['Poster'];
  
      print "<tr>";
      print "<td>". $title . "</td>";
      print "<td>". $genre . "</td>";
      print "<td>". $duration . "</td>";
      print "<td>". $rating . "</td>";
      print "<td>". $price . "</td>";
      print "<td><img src='data:image/png;base64," . base64_encode($poster) . "' alt='Image' ></td>"; 
      print "</tr>";
  
    
    }
      print "</table>";
  }else{
    die ("Query = $query failed!");
  }
  echo "</div>";
  mysqli_close($connect);
  ?>

<footer>
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
</footer>

  <br><br><br>


</body>
</html>