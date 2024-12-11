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





<!---------------------------------------------------Add-Movies---Add-Movies---Add-Movies---Add-Movies---Add-Movies----------------------------------------------------------------------->

<center>  
        <h2 id="edit" class="h1">Product Id you wanna Delete</h2><br><br><br>
        <form action="" method="post" onsubmit="showSuccessTicketMessage(event)">
            <input type="text" name="productid" id="productid"><br><br><br><br>
            <input type="submit" class="submit" name="delete" id="delete" value="Delete Movie">
            <input type="reset" class="submit" value="Reset Id">
        </form>
    </center>

    <?php
$host = "localhost:3377";
$user = "root";
$passwd = "";
$database = "movieticket";
$table_name = "movies";

$connect = mysqli_connect($host, $user, $passwd, $database) or die("could not connect to database");

// Check if form was submitted to delete a movie
if (isset($_POST['delete'])) {
    $productid = $_POST['productid'];

    // Ensure productid is numeric to prevent SQL injection
    if (is_numeric($productid)) {
        // Check if the movie exists before deleting
        $sql_check = "SELECT * FROM movies WHERE Id=?";
        $stmt_check = mysqli_prepare($connect, $sql_check);
        mysqli_stmt_bind_param($stmt_check, "i", $productid);
        mysqli_stmt_execute($stmt_check);
        $result_check = mysqli_stmt_get_result($stmt_check);
        
        // If movie exists, proceed with deletion
        if (mysqli_num_rows($result_check) > 0) {
            $sql_delete = "DELETE FROM movies WHERE Id=?";
            $stmt_delete = mysqli_prepare($connect, $sql_delete);
            mysqli_stmt_bind_param($stmt_delete, "i", $productid);

            if (mysqli_stmt_execute($stmt_delete)) {
                echo "<script>alert('Movie successfully deleted.');
                event.preventDefault(); </script>";
            } else {
                echo "<script>alert('Error deleting movie. Please try again.');</script>";
            }

            mysqli_stmt_close($stmt_delete);
        } else {
            echo "<script>alert('Product ID not available.');
              event.preventDefault();</script>";
        }

        mysqli_stmt_close($stmt_check);
    } else {
        echo "<script>alert('Invalid Product ID.');</script>";
    }
}
?>

</div>

</div>
<hr> <footer>
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
</footer><script>

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