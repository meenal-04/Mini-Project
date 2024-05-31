<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" class="css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>WorldLensAdventures/Home.org</title>
</head>
<body>

<?php include'menu.php';?>
   
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
    <li data-target="#demo" data-slide-to="4"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/cc1.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in Los Angeles!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc2.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/cc3.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/c1.png" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>California</h3>
        <p>A Bustling city famous for its sunny beaches</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="images/c2.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
        <h3>Singapore</h3>
        <p>Vibrant city-state known for its stunning skyline</p>
      </div>   
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div> 
<br>   
<section class="my-5 text-white section-dark bg-dark" style="padding:25px; ">
<center><p style="font-family:'Josefin Sans',sans-serif;  font-size:20px;" >Welcome to WorldLens Adventures,<br><br> where your travel dreams come to life through stunning photography and unforgettable guided tours.</p></center>
</section>
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center" >About Us</h2>
        </div>
        <br>
        <br>
        <div class="container-fluid"></div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12">
                    <img src="images/cc4.jpg" alt="" class="img-fluid aboutimg">
                </div>
                <div class="col-lg-6 col-md-6 <col-12></col-12">
                    <h2 class="display-5">Hello there!</h2>
                    <br>
                    <br>
                    <p py-4>
                    I'm a friendly travel photographer and tour guide. With a keen eye and a love for exploration, I capture the essence of each country, weaving stories through my lens. Join me on a visual journey that brings the world's wonders to life  by capturing its essence through breathtaking photography. Explore, experience, and capture the world with us.
                    </p>
                    <a href="about.php" class="btn btn-success">Know more</a>
                </div>
            </div>
        </div>
    </section>
    
    <section class="my-5">
        <div class="py-5">
            <h2 class="text-center" >Our Services</h2>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/dc1.webp" height="250px" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Destination Guide</h4>
                            <p class="card-text">Gain knowledge about each destination, from cultural traditions to the best dining spots ensuring a smooth travel experience and seemless communications.</p>
                            <a href="service.php" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/cc6.jpg" height="250px" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Photography Sessions</h4>
                            <p class="card-text">Capture memories with professional photography services, ensuring you take home stunning images of your adventures.</p>
                            <a href="service.php" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/cc8.avif" height="275px" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Specialized Workshops</h4>
                            <p class="card-text">Enhance your photography skills with hands-on workshops led by a seasoned photographer, tailored to all skill levels.</p>
                            <a href="service.php" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="my-5">
            <div class="py-5">
                <h2 class="text-center">Our Gallery</h2>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/dc1.jpg" height="250px"  alt="" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/dc2.jpg" height="250px" alt="" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/dc15.jpg" height="250px" width="100%" alt="" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/dc4.jpg" height="250px" width="100%" alt="" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/dc5.webp" height="250px"  alt="" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/dc13.jpg" height="250px" alt="" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/dc7.webp" height="250px"  width="100%" alt="" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/c2.jpg" height="250px" alt="" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/dc9.jpg" height="250px" alt="" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/dc10.jpg" height="250px" alt="" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/dc11.webp" height="250px" alt="" class="img-fluid pb-4">
                    </div>
                    <div class="col-lg-4 col-md-4 col-12">
                        <img src="images/dc14.jpg" height="250px" alt="" class="img-fluid pb-4">
                    </div>
                </div>
            </div>
        </section>

<?php include'contact.php';?>
      
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>