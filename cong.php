<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Renting Website</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href=".../gharlijiye-main/style/style.css">


</head>

<body>
<?php
//$conn= mysqli_connect('localhost','root','','gharlijiye') or die("not connect database");
?>
    <nav class="navbar navbar-expand-lg navbar-light">
  <img class="logo ml-2 mr-2" src="./images/logo.png" alt="" srcset="">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <h4><span class="badge_prop badge badge-warning ">Click here if you are a buyer</span>
      </h4>
      <h4><span class="badge_prop badge badge-warning ">Click here if you are a seller</span>
      </h4>
    </ul>
    <!--<form class="form-inline my-2 my-lg-0" action="login.php" method="post">
      <button type="button" class="btn btn-outline-success mr-2 red_btn" data-toggle="modal" data-target="#login_model">Login</button>-->


<!-- Box model code start  -->

<!-- Modal -->
<div class="modal fade" id="login_model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content boxmodel_login">
      <form action="login.php" method="post">
        <div class="form-group row mx-auto my-2">
          <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-10">
            <input type="email" class="form-control" id="inputEmail3" name="email" placeholder="Enter Email">
          </div>
        </div>
        <div class="form-group row mx-auto my-2">
          <label for="inputPassword3" class="col-sm-2 col-form-label ">Password</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" id="inputPassword3" name="cpass" placeholder="Enter Password">
          </div>
        </div>
        <div class="form-group row mx-auto my-2">
          <div class="col-sm-10">
            <button type="submit" name="login" class="btn btn-secondry ">Sign in</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<?php  
/*if(isset($_POST['login'])){
  $e_mail=$_POST['email'];
  $c_pass=$_POST['cpass'];

$sql="SELECT * FROM `reg` WHERE 'email'='$e_mail' and 'password'='$c_pass'";
$result=mysqli_query($conn,$sql);
if($result){
  $row=mysqli_fetch_array($result);
  if($row['email']==$e_mail && $row['password']==$c_pass){
    header("Location: http://localhost/gharlijiye-main/pages/cong.php");
  }
  else{
    echo"<script>alter('not login')</script> ";
    echo"meta http-equiv='refresh' content='0'";
  }
}
}
*/

?>

<!-- Box model code end  



<h1><a href='pages/signup.php'>signup</a></h1>

       

    </form>
  </div>
</nav>-->
<div id="carouselExampleSlidesOnly" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner " class="carousel-item">
    <div class="carousel-item active  ">
      <img class="hsbanner d-block w-100 " src="\images\hsbanner (1).jpg" alt="First slide">

       <div class="carousel-caption d-none d-md-block">
    <h1 class="hsbanner_content">Rent you room with us</h1>
    <p class="hsbanner_content">Zero
      Brokerage Options</p>
  </div>
      
    </div>
    <div class="carousel-item">
      <img class="hsbanner d-block w-100" src="\images\hsbanner (2).jpg" alt="Second slide">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="hsbanner_content">If you are a owner</h1>
        <p class="hsbanner_content">You can list your room here</p>
      </div>
    </div>
    <div class="hsbanner carousel-item">
      <img class="d-block w-100 " src="\images\hsbanner (3).jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="hsbanner_content">If you are a buyer </h1>
        <p class="hsbanner_content">You can take room on rent with cheapest price</p>
      </div>
    </div>
    <div class="hsbanner carousel-item">
      <img class="d-block w-100" src="\images\hsbanner (4).jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="hsbanner_content">If you are a student</h1>
        <p class="hsbanner_content">You can take PG or hotels</p>
      </div>
    </div>
    <div class="hsbanner carousel-item">
      <img class="d-block w-100" src="\images\hsbanner (5).jpg" alt="Third slide">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="hsbanner_content">You can take take room</h1>
        <p class="hsbanner_content">with and without furnitures and accessories</p>
      </div>
    </div>
  </div>
</div>




<div class="search_location input-group mb-3 input-group-lg" >
  <input type="text"class="form-control" placeholder="Enter your location" aria-label="Recipient's username" aria-describedby="basic-addon2" aria-label="Large" >
  <div class="input-group-append">
     <button class="btn red_btn" type="button">Search</button>
  </div>
</div>

<hr>
<div class="container">
<center><h1 class="heading_h1" >DESIGNED FOR EVERYONE</h1></center>
<div class="cards_features">

  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="/images/card_img1.webp" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">PG for boys & girls</h5>
      <p class="card-text">We are providing PG for boys and girls both.</p>
      <a href="#" class="btn btn-primary  red_btn">BOOK NOW</a>
    </div>
  </div>
  
  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="/images/card_img2.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Single room</h5>
      <p class="card-text">We are providing single room, only one person allowed</p>
      <a href="#" class="btn btn-primary red_btn">BOOK NOW</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="/images/card_img3.avif" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Shared room</h5>
      <p class="card-text">We are providing shared room, share you room with friends .</p>
      <a href="#" class="btn btn-primary red_btn">BOOK NOW</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="/images/card_img4.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Hostels</h5>
      <p class="card-text">We are providing hostels. If you are a student it's for you.</p>
      <a href="#" class="btn btn-primary red_btn">BOOK NOW</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="/images/card_img5.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Room for families</h5>
      <p class="card-text">We are providing room for families. </p>
      <a href="#" class="btn btn-primary red_btn">BOOK NOW</a>
    </div>
  </div>

  <div class="card" style="width: 18rem;">
    <img class="card-img-top" src="/images/card_img6.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">Room for Shop</h5>
      <p class="card-text">We are providing room for shop. Start your business from here.</p>
      <a href="#" class="btn btn-primary red_btn">BOOK NOW</a>
    </div>
  </div>
</div>

</div>

<hr>


<div class="container">
  <center><h1 class="heading_h1" >HOW WE ARE DIFFERENT FROM OTHERS?</h1></center>
  
<div class="cards_features">


  <div class=" card text-white bg-primary mb-3" style="max-width: 18rem;">
   <h5> <div class="card-header">With & without accessories </div></h5>
    <div class="card-body">
      <p class="card-text">We are providing both types of room with and without furnitures and accessories.</p>
    </div>
  </div>
  <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
    <h5><div class="card-header">Buy what you see</div></h5>
    <div class="card-body">
      <p class="card-text">We will provide room as it is which you will see in our website, with cleanliness</p>
    </div>
  </div>
  <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
   <h5> <div class="card-header">Risk free</div></h5>
    <div class="card-body">
      <p class="card-text">You are risk free here because any buyer or seller will do any wrong with you then we will take action.</p>
    </div>
  </div>
  <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
   <h5><div class="card-header">Affordabie Prices</div></h5> 
    <div class="card-body">
      <p class="card-text">You will find here better room in affordabie price, and in good condition</p>
    </div>
  </div>
  <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
    <h5><div class="card-header">Secure</div></h5>
    <div class="card-body">
      <p class="card-text">If you will not get room as same condition which you see in website we will refund your money</p>
    </div>
  </div>
  <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
    <h5><div class="card-header">Time flexibility</div></h5>
    <div class="card-body">
      <p class="card-text">You can stay here for from 1 month to as you want</p>
    </div>
  </div>
  
  
</div>

</div>
<hr>



<div  class="container_refer" >
  <img src="images/refer_earn.gif" alt="">


  
  <button type="button" class=" red_btn btn btn-primary large_btn my-2" >CLICK HERE FOR REFER AND EARN</button>
 <a href="/pages/Javascript project/index.html"><button type="button" class=" red_btn btn btn-primary large_btn" > Play and earn points</button></a> 

</div>
<hr>



<div class="icons">
<a href="#"><img src="/images/fb_icon.png" alt="" class="social_icons"></a>
<a href="#"><img src="/images/insta_icon.png" alt="" class="social_icons"></a>
<a href="#"><img src="/images/tw_icon.png" alt="" class="social_icons"></a>
<a href="#"><img src="/images/yt_icon.png" alt="" class="social_icons"></a>
 

</div>

<hr>




<!-- Footer -->
<footer class="page-footer font-small blue pt-4 footer">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase">Gharlijiye</h5>
        <p>Gharlijiye is India's fastest growing "Managed Home Rental Network" attempting to provide better rental solutions via design & technology.
          We help find, book rental homes of choice across Indian cities. We assist with move-in, provide home maintenance services from cleaning, damages to rent payment & even move-out.
          Whatever be your budget, whatever you may call a home (a bed, a room or an entire house), we have something for you!.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">For owners & tenants</h5>

        <ul class="list-unstyled">
          <li>
            <a href="#">Take room on rent</a>
          </li>
          <li>
            <a href="#">Give room on rent</a>
          </li>
          <li>
            <a href="#">Take shop on rent</a>
          </li>
          <li>
            <a href="#">Give shop on rent</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
        <h5 class="text-uppercase">More information</h5>

        <ul class="list-unstyled ">
          <li>
            <a href="#">About Us</a>
          </li>
          <li>
            <a href="#">Contact Us</a>
          </li>
          <li>
            <a href="#">Blog</a>
          </li>
          <li>
            <a href="#">Privacy Policies</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2022 Copyright:
    <a style="color: white;" href="#">Abhipole.com</a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->








   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script>

</script>
<h1><a href='o.php'>ram</a></h1>
</body>
</html>