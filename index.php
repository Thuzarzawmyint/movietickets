<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
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

.image-rotator {
    overflow: hidden;
    margin-left: 20px;
}

#rotating-image {
    width: 400px;
    height: 500px;
    transition: opacity 1s ease-in-out;
    border-radius: 15px;
}

@media(max-width:780px){
  .column1{
    display: none;
  }
  .column{
    width: 100%;
  }
  .column h1{
    font-size: 25px;
    padding-left: 80px;
    margin-top: 50px;
  }
  .column p{
    font-size: 15px;
    padding-left: 50px;
  }
  .btn1{
    margin-right: 100px;
    width: 110px;
    font-size: 16px;
    display: none;
  }
  .btn{
    width: 150px;
    font-size: 16px;
    margin-left: 320px;
    margin-top: -30px;
  }
  .about h3{
    font-size: 25px;
  }
  .about p{
    font-size: 15px;
  }
}

@media(max-width:380px){
  .column1{
    display: none;
  }
  .column{
    border: 2px solid black;
  }
  .column h1{
    font-size: 18px;
    margin-top: 50px;
    padding-right: 550px;
  }
  .column p{
    font-size: 10px;
  }
  .about p{
    font-size: 10px;
  }
}

@media(max-width:1024){
  img{
    width: 350px;
    height: 450px;
    margin-right: 200px;
  }
  .row{
    border: 2px solid black;
  }
  .about{
    width: 100%;
    margin: 0;
  }
  .about h3 {
  font-family: Oswald;
  color: white;
  font-weight: 800;
  font-size: 10px;
  margin-left: -200px;
}

.about p {
  color: #a9a9a9;
  font-size: 15px;
  padding: 20px;
  letter-spacing: 1px;
  font-family: Open Sans;
  line-height: 35px;
}
}

  </style>
</head>
<body>
  <center>
    <p>
      <br>
    <nav>
    <div class="topnav" id="myTopnav">
        <a href="" >Home</a>
        <a href="CMovie.php" >Movies</a>
        <a href="CBooking.php">Book Tickets</a>
        <a href="CFeedback.php">FeedBack</a>
        <a href="CAbout.php">About Us</a>
        <a href="CContact.php">Contact</a>
        <a href="Login.php">Admin</a>
    </div>
    </nav>
</p>
</center>

<br>
<div class="row">
    <div class="column">
      <h1>Your Ultimate Movie Experience Awaits!</h1>
      <p>Welcome to <Strong>CineVerse</Strong>, the future of cinema with our cutting-edge Movie Ticket Management System! 
        Experience seamless ticket booking at your fingertips, where convenience meets entertainment. 
        From browsing the latest releases to selecting your favorite seats, our user-friendly platform ensures that 
        you never miss out on the magic of the movies. Join us as we transform your cinematic adventures into 
        unforgettable moments—because your ultimate movie experience awaits!
      </p>
      <a href=""><button class="btn">Explore Movies</button></a>
      <a href=""><button class="btn1" onclick="h1('ticket')">Book Now!!!</button></a>
    </div>
    <div class="column1">
    <div class="image-rotator">
        <img id="rotating-image" src="img/urnus.jpg" alt="Rotating Image">
    </div>
    </div>
  </div>
  <hr>
</div>
</div>

<h1 class="h1" id="about">About CineVerse</h1> 

<div class="about">
  <h3>Who we are</h3>
  <p> Since 2022, our CineVerse team of experts and movie fans has worked together 
      to create a new system for managing movie tickets. Our goal is clear: 
      to make buying tickets easier and better for both movie fans and theater owners.
  </p>


  <h3>Our Journey So Far</h3>
  <p> Since our launch, we have been on an incredible journey. 
    From working with local theaters to innovate ticketing methods, 
    to embracing feedback from our users to continually refine our platform, 
    we are proud of the milestones we've achieved. As we grow, we are committed 
    to constantly improving our services and expanding our reach to help cinema lovers around the world.
  </p>
</div>
<hr class="hr1">

<!-------------------------------------------------------------------Contact-Us---Contact-Us---Contact-Us----------------------------------------------------------------------
<div class="contact" id="contact">
  <h2>Let's Talk</h2>
    <br><br><br>
  <div class="row-1">
    
    <div class="col-1">
    
    <h3>Email Us:</h3>
    <p>For enquiries and support,reach out to us </p>
    <p>via email at <a href="mailto:rekhajolly71@gmail.com">thuzarr24@gmail.com.</a></p>
    <p>Our team strives to respond within 24 hours.</p>
    <br>
  
  </div>
    <div class="col-2">
      <h3>Call Us:</h3>
    <p>Prefer speaking with someone? Contact our </p>
      <p>customer service at <span style="font-size: 20px; color: lightcoral;">(123) 456-7890</span>. </p> 
    <p>Available Monday to Friday: 9 AM - 6 PM.</p>  
    <br>
    </div>

    <div class="col-3">
    <h3>Our Hours & Location:</h3>
    <p>Monday - Saturday: 9 AM - 6 PM</p>
    <p>Sunday: Closed</p> 
    <p>At Sight: 44/12, Aye Thar Yar, Taunggyi</p>
    </div>
  </div>
</div>

<hr>
</div>  -->

<footer>
    <div class="footer-container">
        <div class="footer-column">
            <h3>Quick Links</h3>
            <p><a href="">Movies</a></p>
            <p><a href="">About Us</a></p>
            <p><a href="">Contact Us</a></p>
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


<script>

  const images = [
    'img/gg.jpg',
    'img/urnus.jpg',
    'img/rrr.jpg',
    'img/lll.jpg',
    'img/barfi.jpg',
    'img/tq.jpg',
    'img/bro.jpg',
    'img/bb.jpg'

];

let currentIndex = 0;

const imgElement = document.getElementById('rotating-image');

function updateImage() {
    imgElement.src = images[currentIndex];
}

setInterval(() => {
    currentIndex = (currentIndex + 1) % images.length;
    updateImage();
}, 1500);

</script>


</body>
</html>