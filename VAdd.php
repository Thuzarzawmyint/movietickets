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


<h1 class="h1">Here is the Section to add new movies</h1>
<br><br><br>


<!---------------------------------------------------Add-Movies---Add-Movies---Add-Movies---Add-Movies---Add-Movies----------------------------------------------------------------------->

        <center>
        
    <form action="" id="addMovieForm" method="post" enctype="multipart/form-data" onsubmit="showSuccessTicketMessage(event)">
        <input type="text" name="title" id="title" placeholder="Movie Title"><br><br>
        <select name="genre" id="genre">
            <option value="">Genre</option>
            <option value="Rom-Com (Romance Comedy)">Rom-Com (Romance Comedy)</option>
            <option value="Sci-Fi (Science Fiction)">Sci-Fi (Science Fiction)</option>
            <option value="Drama">Drama</option>
            <option value="Action">Action</option>
            <option value="Romance">Romance</option>
            <option value="Comedy">Comedy</option>
        </select><br><br>
        <input type="text" name="duration" id="duration" placeholder="Duration"><br><br>
        <select name="rating" id="rating">
            <option value="">Your rating for the film</option>
            <option value="5">5</option>
            <option value="4.5">4.5</option>
            <option value="4">4</option>
            <option value="3.5">3.5</option>
            <option value="2">2</option>
            <option value="1.5">1.5</option>
            <option value="1">1</option>
        </select><br><br>
        <input type="text" name="price" id="price" placeholder="Price"><br><br>
        <input type="file" name="pfile" id="pfile" placeholder="Choose Poster"><br><br>
        <input type="submit" class="submit" id="submit" name="submit" value="Add Movie">
    </form>
</center>

   
    <?php 
if(isset($_POST['submit'])) {
  $host = "localhost:3377";
  $user = "root";
  $passwd = "";
  $database = "movieticket";
  $table_name = "movies";

  $connect = mysqli_connect($host,$user,$passwd,$database) or die("could not connect to database");

  $target_dir = "img/"; 
  $target_file = $target_dir . basename($_FILES["pfile"]["name"]);
  $maxsize = 5242880; 

  
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

  
  $extensions_arr = array("png", "jpeg", "jpg");

  
  if(in_array($imageFileType, $extensions_arr)) {
      if(($_FILES['pfile']['size'] >= $maxsize) || ($_FILES["pfile"]["size"] == 0)) {
          echo "File too large. File must be less than 5MB.";
      } else {
              if(move_uploaded_file($_FILES["pfile"]["tmp_name"], $target_file)) {
                  
                  $imageData = file_get_contents($target_file);
                  $imageData = mysqli_real_escape_string($connect, $imageData);

                  // Prepare the SQL statement
                  $sql = "INSERT INTO movies (Title, Genre, Duration, Rating, Pricing, Poster) 
                    VALUES('$_POST[title]','$_POST[genre]', '$_POST[duration]', '$_POST[rating]', '$_POST[price]', '".$imageData."')";
                    if (!mysqli_query($connect, $sql)) {
                      die('Error: ' . mysqli_error($connect));
                    } else {
                      echo "<br><br><center><p color=white> Movie Successfully Added!!<p></center>";
                  }
              } else {
                  echo "Sorry, there was an error uploading your file.";
              }
          
      }
  } else {
      echo "Invalid file extension.";
  }
  mysqli_close($connect);  
}  
?> <hr><footer>
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
</footer><br><br><br><br><script>

document.getElementById("(addMovieForm").addEventListener("submit", function(event) {
  event.preventDefault();
  showSuccessTicketMessage();})
  
 function hideSuccessMessage() {
    document.getElementById("successMessage").style.display = "none";
  }


  
</script> 
  <br><br><br>

</body>
</html>