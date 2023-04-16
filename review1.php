<?php
// Define MySQL database credentials
$host = "localhost"; // database server
$username = "root"; // database username
$password = ""; // database password
$dbname = "tourista"; // database name

// Establish a connection to the MySQL database
$conn = mysqli_connect($host, $username, $password, );

// Check if the connection to the database was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if the form has been submitted
if (isset($_POST['submit'])) {
    // Get the name and comment from the form
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $comment = mysqli_real_escape_string($conn, $_POST['comment']);
    
    // Insert the name and comment into the database
    $sql = "INSERT INTO review (name, comment) VALUES ('$name', '$comment')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Comment uploaded successfully.')</script>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

$sql="SELECT * FROM review";
$result=mysqli_query($conn,$sql);

// find the number of records
// echo mysqli_num_rows($result);

$num=mysqli_num_rows($result);
echo $num;

// Close the database connection
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VISTA PHOTOGRAPHY</title>
     <!--icon-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/brands.min.css" integrity="sha512-G/T7HQJXSeNV7mKMXeJKlYNJ0jrs8RsWzYG7rVACye+qrcUhEAYKYzaa+VFy6eFzM2+/JT1Q+eqBbZFSHmJQew==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       <!--font--->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
   <!--bootstramp 5-->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   
   <!-- css style-->
 <link rel="stylesheet" href="style.css">  
 <link rel="stylesheet" href="responsive.css"> 
 <style>
  .like-button {
    border: none;
    background-color: transparent;
    cursor: pointer;
    font-size: 14px;
    color: #333;
    text-transform: uppercase;
  }
  .like-button:hover {
    color: #999;
  }
  .like-button.liked {
    color: red;
  }
  .like-button.liked:hover {
    color: #f39c12;
  }
  .like-button i {
    margin-right: 5px;
  }
</style>
</head>
<body>
    <!-- navbar start -->
    <header id="full_nav">
      <div class="header">
      <div class="container">
          
          <nav class="navbar navbar-expand-lg">
              <a class="navbar-brand" href="#">
              <img src="flogo.jpeg" alt="logo">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <!----<span class="navbar-toggler-icon"></span>--->

            <i class="fa fa-bars navbar-toggler-icon "></i>
             </button>


  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mx-auto">
      <li class="nav-item">
        <a class="nav-link " aria-current="page" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about.html">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.html">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="review.php">Review</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="booking.html">Booking</a>
      </li>
    </ul>
    <div class="header_right">
      <div class="text-lg-end">
      <a href="ragist_log.html"><button class="btn main-btn1">Login/ragister</button></a>
      </div>
    </div>
  </div>

</nav>
          </div>
      </div>
  
  </header>
    <!-- navbar end -->


  <!------banner section start--------->
  <section class="pic banner_section">
        <div class="container">
          <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
           
            <div class="carousel-inner">
              <div class="carousel-item active">
              
                <div class="carousel-caption">
                 <div class="banner-content">
                  <h1>About Us</h1>
                  
                
                
                 </div>
                </div>
              </div>
          
           
              
              
            
            </div>
          </div>
        </div>
      </section>
    <!------banner section end--------->




    <!-- ReviewPageStart -->
    <section style="margin-top: 10%;">
      <div class="container-fluid  p-3">
        <center><h2 class="ml-5 text-center"><b>REVIEWS  <span style="font-size: 20px; color:#ffad06 ;">
          / 5.0<i class="fa fa-star" style="color:#ffad06 ;"></i>
          <i class="fa fa-star" style="color:#ffad06;"></i>
          <i class="fa fa-star" style="color:#ffad06;"></i>
          <i class="fa fa-star" style="color:#ffad06;"></i>
          <i class="fa fa-star" style="color:#ffad06;"></i></p></center>
  
        </span></b></h2>
        <div class="row" >
          <div class="col-md-2 m-4">
          <img class="card-img-top" src="s5.jpg" alt="Card image cap">
            <i class=" mr-7" style="color: black ; font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif;">JOHN</i><br>
            
  
            <i style="color:black;">"The discovery of Tourista Photography has been wonderful for our company! The turnaround time on Image Enhancements, as well as their customer service -- is impeccable! We are beyond happy with our results, and can not wait to continue to use Tourista Photography!"</i>
            <p class="mr-7">
              <i class="fa fa-star" style="color:#ffad06;"></i>
              <i class="fa fa-star" style="color:#ffad06;"></i>
              <i class="fa fa-star" style="color:#ffad06;"></i>
              <i class="fa fa-star" style="color:#ffad06;"></i>
              <i class="fa fa-star" style="color:#ffad06;"></i></p>
          </div>
          <div class="col-md-2 m-4">
          <img class="card-img-top" src="s4.jpg" alt="Card image cap">
            <i class=" mr-7" style="color: black ; font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif;">DAVE</i><br>
           
  
            <i style="color:black;">"Tourista Photography’s speed, quality and price is categorically unmatched in the world. We are beyond satisfied with the results and their personalized around the clock customer service.Their energy, passion and enthusiasm is highly contagious. A true pleasure to do business with."</i>
            <p class="mr-7">
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i></p>
          </div>
        
          <div class="col-md-2 m-4">
          <img class="card-img-top" src="s6.jpg" alt="Card image cap">
            <i class=" mr-7" style="color: black ; font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif;">TOM BELTMEN</i><br>
            
  
            <i style="color:black;">"As a real estate photographer and photo editor, sometimes I get overwhelmed with requests from my clients. Tourista Photography always comes through in a pinch and they always come through! Stellar work all the time and such great prices! I cannot love this company enough!"</i>
            <p class="mr-7">
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i></p>
          </div>
          <div class="col-md-2 m-4">
          <img class="card-img-top" src="ga4.jpg" alt="Card image cap">
            <i class=" mr-7" style="color: black ; font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif;">TOM BELTMEN</i><br>
            
  
            <i style="color:black;">"As a real estate photographer and photo editor, sometimes I get overwhelmed with requests from my clients. Tourista Photography always comes through in a pinch and they always come through! Stellar work all the time and such great prices! I cannot love this company enough!"</i>
            <p class="mr-7">
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" ></i></p>
          </div>
          <div class="col-md-2 m-4">
          <img class="card-img-top" src="ga3.jpg" alt="Card image cap">
            <i class=" mr-7" style="color: black ; font-size: 20px; font-family: Georgia, 'Times New Roman', Times, serif;">WENDY</i><br>
            
  
            <i style="color:black;">"Virtually staged a vacant home that I had on the market for 6 months. Brought it back to the market after a Tourista Photography session and it sold in one day! I will never list a property again without them!!"</i>
            <p class="mr-7">
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i>
              <i class="fa fa-star" style="color:#ffad06 ;"></i></p>
          </div>
        
      </div>
    </section>
    <!-- comment section -->
    <section>
      <div class="container-fluid p-3">
        <center><h3>COMMENT</h3></center>
        <div class="row">
        <div class="col-md-6">
          
          <form method="post" action="">
    <label for="name" style="color:black;">Name:</label>
    <input type="text" class="form-control" name="name" required placeholder="Enter name"><br><br>
    <label for="comment" style="color:black;">Comment:</label>
    <textarea name="comment" class="form-control" required placeholder="Enter comment..."></textarea><br><br>
    <input type="submit" class="btn btn-warning" name="submit" value="Submit">
</form>
        </div>
        <div class="col-md-6" data-spy="scroll" data-target="container" data-offset="0" style="border:1px solid black;">
          <?php
        //print all data from database
    while($row=mysqli_fetch_array($result)){?>
        
    <div class="container p-2">
      <h5 style="color:black;"><img src="user.png" class="img-fluid" style="border:1px solid black; border-radius:50%;" width="20px" height="20px"> <?php echo $row["name"]; ?></h5>
      <p style="margin-left:15px;"> <?php echo $row["comment"]; ?></p>
      <button type="button" class="like-button">
  <i class="fa fa-heart"></i>
</button>




    </div>
        
	</tr>
    <?php
    }



?>
        </div>
        </div>
      </div>
    </section>
    <!-- ReviewPageEnd -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $('.like-button').click(function() {
    $(this).toggleClass('liked');
    if ($(this).hasClass('liked')) {
      $(this).html('<i class="fa fa-heart"></i> Liked');
    } else {
      $(this).html('<i class="fa fa-heart"></i> Like');
    }
  });
</script> 

   

    

  





 









       <!------footer section------->
       <section class="footer_wrapper mt-3 mb-md-0">
        <div class="container px-5 px-lg-0">
          <div class="row">
            <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
              <h5>Tourista Photography</h5>
              <p class="mb-4 ps-0 company_details">Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque aut explicabo sequi, iste quae tenetur quas beatae minus fuga error. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellendus, ducimus! </p>
              <div class="contact-info">
                <ul class="list-unstyled">
                  <li><a href="#"><i class="fa fa-home me-3"></i> No. 96,Kashmir </a></li>
                  <li><a href="#"><i class="fa fa-phone me-3"></i> +91 1234567891</a></li>
                  <li><a href="#"><i class="fa fa-envelope me-3"></i> sweety@gmail.com </a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
              <h5>Customer Support</h5>
              <ul class="link-widget p-0">
            <li><a href="#">About Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Quality Content</a></li>
            <li><a href="#">Fixed Price</a></li>
              </ul>
            </div>
           

            <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
              <h5>Quick Links</h5>
              <ul class="link-widget p-0">
                <li><a href="booking.html">About Us</a></li>
                <li><a href="about.html">Privacy Policy</a></li>
                <li><a href="about.html">Terms & Conditions</a></li>
                <li><a href="gallery.html">Quality Content</a></li>
                <li><a href="gallery.html">Fixed Price</a></li>
              </ul>
            </div>
            <div class="col-lg-3 col-sm-6 mb-5 mb-lg-0">
              <h5>Customer Email</h5>
              <div class="form-group mb-4">
                <input type="email" class="form-control bg-transparent" placeholder="Enter Your Email Here">
                <button type="submit" class="btn sub-btn">Subscribe</button>
              </div>
              <h5>Stay Connected!</h5>
              <ul class="social-network d-flex"align-items-center p-0>
             <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
             <li><a href="#"><i class="fab fa-twitter"></i></a></li>
             <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
             <li><a href="#"><i class="fab fa-youtube"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="container-fluid copyright-section">
          <p>Copyright <a href="#">Ⓒ customer  </a>All Rights Reserved</p>
        </div>
      </section>
      <!------footer section exit------->
  
      <script src="main.js"></script>


    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>
