<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" class="css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>WorldLensAdventures</title>
    <style>
.fa {
  padding: 20px;
  font-size: 15px;
  width: 65px;
  height:15px;
  text-align: center;
  text-decoration: none;
  margin: 4px 3px;
  border-radius: none;
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}
.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}

</style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">WorldLens Adventures</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <li class="nav-item ">
                <a class="nav-link" href="index.php">Home </a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="about.php">About<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="service.php">Services</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.php">Contacts</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit" >Search</button>
        </form>
    </div>
</nav>

<div class="jumbotron">
  <h1>WorldLens Adventures :)</h1>
  <p>See the world through my lens, where every adventure is a story waiting to be told.</p>
</div>

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
                <div class="col-lg-6 col-md-6 col-12">
                    <h2 class="display-5">WorldLens Adventures</h2>
                    <br><br>
                    <p py-4>
                    I'm a friendly travel photographer and tour guide. With a keen eye and a love for exploration, I capture the essence of each country, weaving stories through my lens. Join me on a visual journey that brings the world's wonders to life by capturing its essence through breathtaking photography. Explore, experience, and capture the world with us.
                    </p>
                    <a href="contact.php" class="btn btn-success">Know more</a>
                </div>
            </div>
        </div>
    </section>

<hr>
<hr>
<br>
<center><p>Ready to embark on your next adventure? Contact us now and let's capture your journey together!</p></center>
<br>
<hr>
<hr>
    <section class="my-5 text-white section-dark bg-dark">
            <div class="py-5">
                <h2 class="text-center">Contacts</h2>
            </div>
            <div class="w-50 m-auto">
                <form action="userinfo.php" method="post" onsubmit="return myfunction()">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="user" autocomplete="off" class="form-control" id='user'>
                    </div>
                    <div class="form-group">
                        <label>Email-Id</label>
                        <input type="text" name="email" autocomplete="off" class="form-control" id='email'>
                    </div>
                    <div class="form-group">
                        <label>Mobile no.</label>
                        <input type="text" name="mobile" autocomplete="off" class="form-control" id='mobile'>
                    </div>
                    <div class="form-group">
                        <label>Comments</label>
                        <textarea class="form-control" name="comment"></textarea>
                    </div>
                    <div class="remember-forgot">
                        <label><input type="checkbox"> I agree to the terms and conditions</label>
                    </div>
                    <button type="submit" class="btn btn-success active">Submit</button>
                    <br><br><br><br>
                </form>
            </div>
        </section>

    <footer>
        <p class="p-3 bg-dark text-white text-center">@WorldLensAdventures<br><br>
        <a href="https://www.facebook.com/earthtrekkers" class="fa fa-facebook"></a>
        <a href="https://www.earthtrekkers.com/travel-photography/#" class="fa fa-google"></a>
        <a href="https://www.youtube.com/channel/UCX9EU_QFjUKdfRI-Tlle_iQ" class="fa fa-youtube"></a>
        <a href="https://www.instagram.com/earthtrekkers/" class="fa fa-instagram"></a>
        <a href="https://www.pinterest.com/earthtrekkers/" class="fa fa-pinterest"></a>
    </p>
        
    </footer>

</body>
</html>