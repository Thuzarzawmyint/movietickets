<?php
session_start();
if(!isset($_SESSION["sess_user"])){
    header("location:login.php");
} 
else {
?>
<!DOCTYPE html>
<html>
<head>
           <meta charset = 'utf-8'>
          <title>GOOD FOOD</title>
         <link rel="stylesheet" type="text/css" href="style.css"/>
         <style>
            body {
                margin: 0;
                font-family: Arial, sans-serif;
                background-color: #f8f8f8;
            }
    
            header {
                background-color: #000000;
                padding: 20px;
                text-align: center;
            }
    
            .logo {
                width: 300px;
                height: auto;
            }
    
            nav {
                background-color: #284458;
                overflow: hidden;
            }
    
            nav a {
                color: #fff;
                text-decoration: none;
                padding: 14px 16px;
                display: inline-block;
                font-size: 18px;
            }
    
            .content {
                max-width: 800px;
                margin: 20px auto;
                padding: 20px;
                background-color: #fff;
            }
    
            footer {
                background-color: #233d4f;
                color: #fff;
                text-align: center;
                padding: 10px;
            }
        </style>
</head>


<body>
<center>
    <img src="https://www.nineforbrands.com.au/wp-content/uploads/2021/06/Goodfood.jpg" margin="auto" width="370px" height="150px"></img>
    <p><h3>Life is dull without Good Food</h3></p>
    <br>
<p>
 <nav>
 <div class="topnav" id="myTopnav">
    <a href="ApView.php">View Products</a>
    <a href="ApAdd.php">Add Product</a>
    <a href="APEdit.php">Edit Product</a>
    <a href="APPDelete.php">Delete Product</a>
    <a href="AOView.php">View Orders</a>  
     
    <a href="AReview.php">Review</a>  
    <a href="Logout.php" title="Logout">Logout</a>   
     
    </div>
 </nav>
</p>
</center>

<div class="entries">
  <br>
  <h1 align="center">Edit Form</h1>
  <br>
  <form action="APEdit1.php" method="post" name="editform" enctype="multipart/form-data">
    <table border=0 cellpadding=5 aligh="center">
      <tr>
        <center><td>Product Id:</td>
      <td><input type="text" name="aproductid" size="30"></td></center>
      </tr>

      <tr>
            <td colspan=2 style="text-align:center">
                <input type="submit" name="submit" value="Submit">
                <input type="reset" value=" RESET FORM">
            </td>
        </tr>
    </table>
  </form>
</div>
</body>
</html>
<?php } ?>