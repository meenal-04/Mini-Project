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
<script>
function myfunction() {
 
 var user = document.getElementById("user").value;
 var email = document.getElementById("email").value;
 var mobile = document.getElementById("mobile").value;

 
 if(user === "" || email === "" || mobile === "")  {
     alert("PLease fill in the complete details");
     return false;
 } else if (user === "") {
     alert("Username cannot be blank");
 return false;
 } else if (email === "") {
     alert("Email-Id cannot be empty");
 return false;
 } else if (mobile === "" || mobile.length !==10) {
     alert("Enter valid mobile number");
 return false;
 } else {
     alert("Thankyou for contacting Us :)");
     alert("We have received your message and will get back to you shortly!");
 return true;
 }
}
</script>
</head>
<body>

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