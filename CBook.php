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




<!--------------------------------------------Book-Movies---Book-Movies---Book-Movies---Book-Movies---Book-Movies------------------------------------>
<h1 class="h1" id="ticket">Book Your Movie Tickets</h1> 
<h3 class="h3">Experience cinemetic magic at your convenience</h3>
<br><br><br>
<div class="Row">
    <div class="Column">
      <h1>Feel the Magic of Cinema</h1>
      <p>Our ticket management system is designed with you in mind. Enjoy the convenience of selecting your preferred movie, date, and seats without any hassle. The online booking platform is intuitive, ensuring a swift and easy purchasing process. Plus, our flexible cancellation policies offer you the peace of mind that should your plans change, you are covered.</p>
    </div>
    <div class="Column1">
      <br><br>
      <form action="#ticket" method="post" onsubmit="showSuccessTicketMessage(event)">
        <select name="movie" id="movie">
          <option value="">Select Movie</option>
          <option value="Uranus 2324">Uranus 2324</option>
          <option value="Barfi!">Barfi!</option>
          <option value="Geeta Govindam">Geeta Govindam</option>
          <option value="Long Live Love">Long Live Love</option>
          <option value="Bajrangi Bhaijaan">Bajrangi Bhaijaan</option>
          <option value="Brother of the Year">Brother of the Year</option>
          <option value="Hello">Hello</option>
          <option value="RRR">RRR</option>
        </select><br><br>

        <select name="cinema" id="cinema">
          <option value="">Select Cinema</option>
          <option value="ICON Cineconic - IconSiam">ICON Cineconic - IconSiam</option>
          <option value="SF World - Central World">SF World - Central World</option>
          <option value="Major Cineplex - Siam Paragon">Major Cineplex - Siam Paragon</option>
          <option value="SF Cinema - MBK Center">SF Cinema - MBK Center</option>
          <option value="Paragon Cineplex - Siam Paragon">Paragon Cineplex - Siam Paragon</option>
        </select><br><br>

        <input type="date" name="date" id="date" value="date"><br><br>

        <select name="time" id="time">
          <option value="">Select ShowTime</option>
          <option value="2:20 PM">2:20 PM</option>
          <option value="3:00 PM">3:00 PM</option>
          <option value="3:30 PM">3:30 PM</option>
          <option value="4:40 PM">4:50 PM</option>
          <option value="5:30 PM">5:30 PM</option>
          <option value="6:00 PM">6:00 PM</option>
          <option value="7:20 PM">7:20 PM</option>
          <option value="8:00 PM">8:00 PM</option>
        </select><br><br>

        <input type="number" name="number" id="number" value="number" placeholder="Number of Tickets"><br><br>
        <input type="text" name="name" id="name" placeholder="Your Name" required> <br><br>
        <input type="text" name="email" id="email" placeholder="Email Address" required><br><br>
        
        <input  type="submit" class="submit" id="submit" name="submit" value="Book">
        <input  type="reset" class="submit" id="submit" name="submit" value="Reset">
      </form>
    
    </div>
    <?php
  if(isset($_POST['submit'])){
    $host = "localhost:3377";
    $user = "root";
    $passwd = "";
    $database = "movieticket";
    $table_name = "booking";
    $connect = mysqli_connect($host, $user, $passwd, $database) or die("could not connect to database"); 
  
      $sql=" INSERT INTO booking (MName, Cinema, Date, Time, Number, Name, Email)VALUES('$_POST[movie]' ,' $_POST[cinema]','$_POST[date]' ,'$_POST[time]','$_POST[number]','$_POST[name]','$_POST[email]')";
      if(!mysqli_query($connect,$sql)){
          die(' Error: '.mysqli_error($connect));
      }
      /* else {
        echo "<center><p color=white> Movie Successfully Booked!!<p></center>'";
    }*/
      mysqli_close($connect);
  }
  ?>

    </div>
  <hr> <br><br><br><br>

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