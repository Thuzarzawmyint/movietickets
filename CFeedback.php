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

 <!------------------------------------------------------------FeedBack---FeedBack---FeedBack----------------------------------------------------------------------------->
 <h1 class="h1" id="feedback">Share Your Experience!!</h1> 
    <h3 class="h3">Experience cinemetic magic at your convenience</h3>
    <br><br><br>
    <div class="row3">
        <div class="column11">   
          <br><br><br>
          <form action="#feedback" method="post" onsubmit="showSuccessMessage(event)">
            <input type="text" value="" id="name" name="name" placeholder="Tell us your name"> <br><br>
            <input type="text" name="email" value="" id="email" placeholder="Email Address"><br><br>
            <select name="movie" id="movie">
              <option value="">Your watched Movie</option>
              <option value="Uranus 2324">Uranus 2324</option>
              <option value="Barfi!">Barfi!</option>
              <option value="Geeta Govindam">Geeta Govindam</option>
              <option value="Long Live Love">Long Live Love</option>
              <option value="Bajrangi Bhaijaan">Bajrangi Bhaijaan</option>
              <option value="Brother of the Year">Brother of the Year</option>
              <option value="Hello">Hello</option>
              <option value="RRR">RRR</option>
            </select><br><br>
            <select name="rating" id="rating">
              <option value="">Your rating for the film</option>
              <option value="5"> 5</option>
              <option value="4.5"> 4.5</option>
              <option value="4"> 4</option>
              <option value="3.5"> 3.5</option>
              <option value="3"> 3</option>
              <option value="2.5"> 2.5</option>
              <option value="2"> 2</option>
              <option value="1.5"> 1.5</option>
              <option value="1"> 1</option>
            </select><br><br>
            <input type="message" name="message" id="message" placeholder="Share your experience here"><br><br>
            <input  type="submit"  class="submit1" id="submit1" name="submit1" onclick="submit()" value="Send!" style="margin: 0 0 0 55px;">
            <input  type="reset"  class="submit1" id="submit1" name="submit1" value="Reset"></div>
          
            </form> 

        <div class="column12" >
        <h1>We Value Your Opinion!</h1>
        <p>At CineVerse, your voice matters! We're dedicated to providing the best movie-going experience,
          and your feedback is invaluable in helping us achieve that goal. Whether you loved the film, 
          enjoyed the service, or have a suggestion for improvement, we want to hear from you. 
          Please take a moment to share your thoughts with us below. 
        </p> 
    </div>
      </div>
      <?php
    if(isset($_POST['submit1'])){
      $host = "localhost:3377";
      $user = "root";
      $passwd = "";
      $database = "movieticket";
      $table_name = "feedback";
      $connect = mysqli_connect($host, $user, $passwd, $database) or die("could not connect to database"); 
    
        $sql1=" INSERT INTO feedback(CName, Email, Movie, Rating, Review)VALUES('$_POST[name]' ,' $_POST[email]','$_POST[movie]' ,'$_POST[rating]','$_POST[message]')";
        if(!mysqli_query($connect,$sql1)){
            die(' Error: '.mysqli_error($connect));
        }
        mysqli_close($connect);
    }
    ?> 
    <hr>
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