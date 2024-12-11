<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CineVerse</title>
    <link rel="stylesheet" href="admin.css">
    <style>

        .booking-section {
            padding: 20px;
            border-radius: 8px;
            width: 80%;
            margin: 0 auto;
        }

        h1 {
            text-align: center;
            color: #fdda0d;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-size: 16px;
            color: white;
        }

        input[type="text"],
        input[type="file"] {
            width: 350px;
            height: 30px;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            color: white;
        }

        input[type="submit"] {
            color: black;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #fbc700;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 10px;
            margin: 0 auto;
            max-width: 400px;
        }



.button-container {
    display: flex;
    justify-content: center;
    gap: 15px;  /* Adjust the space between the buttons */
    margin-top: 20px;
    margin-left: 30px;
}

.btn {
  cursor: pointer;
  display: inline-block;
  width: 130px;
  height: 60px;
  font-size: 20px;
  font-weight: bolder;
  border-radius: 20px;
  margin: 20px 0 0 20px;
  background: #fdda0d;
  border: 2px solid #fdda0d;
  color: black;
  transition: transform 0.4s ease, background-color 0.3s ease;
}

.btn1 {
  cursor: pointer;
  display: inline-block;
  width: 130px;
  height: 60px;
  font-size: 20px;
  font-weight: bolder;
  border-radius: 20px;
  margin: 20px 0 0 0;
  background: #fdda0d;
  border: 2px solid #fdda0d;
  color: black;
  transition: 0.4s;
  transition: transform 0.4s ease, background-color 0.3s ease;
}


        img {
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
                    <a href="VMovie.php">View Movies</a>
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
  <br><br>

    <div class="booking-section">
        <center>
            <?php
            $host = "localhost:3377";
            $user = "root";
            $passwd = "";
            $database = "movieticket";
            $tablename = "movies";
            $connect = mysqli_connect($host, $user, $passwd, $database) or die("could not connect to database");
            mysqli_select_db($connect,$database);

            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                // Fetching POST data
                $productid = $_POST["productid"];
                $title = $_POST["title"];
                $genre = $_POST["genre"];
                $duration = $_POST["duration"];
                $rating = $_POST["rating"];
                $price = $_POST["price"];
                $name=$_FILES["pfile"]["name"];
            
                //$name = $_FILES['pfile']['name'];
    $target_file = basename($_FILES["pfile"]["name"]);
    $target_dir = "img/".$target_file;
    $maxsize = 5242880; // 5MB


    // Select file type
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


    // Valid file extensions
    $extensions_arr = array("png","jpeg","jpg");


    // Check extension
    if (in_array($imageFileType, $extensions_arr)) {
        // Check file size
        if (($_FILES['pfile']['size'] >= $maxsize) || ($_FILES["pfile"]["size"] == 0)) {
            echo "File too large. File must be less than 5MB.";
        } else {
            if(move_uploaded_file($_FILES["pfile"]["tmp_name"], $target_file)) {
                  
                $imageData = file_get_contents($target_file);
                $imageData = mysqli_real_escape_string($connect, $imageData);
            // Update record
            $myquery = "UPDATE movies SET Title='$title',Genre='$genre',Duration='$duration',Rating='$rating',Pricing='$price', Poster='".$imageData."' WHERE Id='".$productid."'";
            mysqli_select_db($connect,$database);

            if (!mysqli_query($connect, $myquery)) {
                die('Error: ' . mysqli_error($connect));
            } else {
                echo "<center><p style='color:white'>Successfully updated</p></center>";
            }
        }}
    } else {
        echo "Invalid file extension.";
    }
}
?>
<hr>
        </center>
    </div><footer>
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
    <br><br><br><br>
    
    <script>
        // JavaScript code here (if needed)
    </script>
    <br><br><br>
</body>
</html>
