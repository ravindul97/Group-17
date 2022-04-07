<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!--ffs-->

    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
	  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>

    <script>

$(document).ready(function(){
  $('.customer-logos').slick({
      slidesToShow: 6,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 1500,
      arrows: false,
      dots: false,
      pauseOnHover:false,
      responsive: [{
          breakpoint: 768,
          setting: {
              slidesToShow:4
          }
      }, {
          breakpoint: 520,
          setting: {
              slidesToShow: 3
          }
      }]
  });
});
</script>

  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="img/logo.png"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">       <!-- mx-auto for add items in middle -->
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="packages/packages.php">Packages</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Plan Trip</a>
              </li> -->
              <li class="nav-item">
                <a class="nav-link" href="sithu/about.php">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
              <!--<li class="nav-item">
                <a class="nav-link" href="C:\Users\acer\Desktop\Group-17\try\index.html">Sign Up</a>
              </li> -->
            </ul>
              <button class="btn btn-outline-success text-dark" type="submit"><a href="index.php" style="text-decoration: none"> Sign In</a></button>
          </div>
        </div>
      </nav>

      <div class="mid">
        <video autoplay muted loop>
          <source class= "embed-responsive" src="img/3.mp4" type="video/mp4">
        </video>
        <div class="hero">
          <h2 class="animated bounceInRight" style="animation-delay: 0.8s">Travel As Your Dreams</h2>
          <a  class="animated zoomIn" style="animation-delay: 2s" href="#">Get Started</a>
        </div>
        <div class="chatbot">
          <a href="chatbot/chatbot.php"><img src="img/chatbot2.png"></a>
        </div>

      </div>

    </header>

 <!-- Packages start -->
 
 <div class="container">
  <h2 class="text-center font-weight-bold">Our Packages</h2>
  <section class="customer-logos slider">
      <div class="slide">
        <img src="img/p1.jpg" alt="logo">
        <div class="info">
          <h1>Thiriling Trinco</h1>
          <a href="#" class="btn">See More</a>
        </div>
      </div>
      <div class="slide">
        <img src="img/p2.jpg" alt="logo">
        <div class="info">
          <h1>Ancient Anuradhapura</h1>
          <a href="#" class="btn">See More</a>
        </div>
      </div>
      <div class="slide">
        <img src="img/p3.jpg" alt="logo">
        <div class="info">
          <h1>Amazinf Down-South</h1>
          <a href="#" class="btn">See More</a>
        </div>
      </div>
      <div class="slide">
        <img src="img/p4.jpg" alt="logo">
        <div class="info">
          <h1>Cool Kandy</h1>
          <a href="#" class="btn">See More</a>
        </div>
      </div>
      <div class="slide">
        <img src="img/p5.jpg" alt="logo">
        <div class="info">
          <h1>Freezing Nuwara-Eliya</h1>
          <a href="#" class="btn">See More</a>
        </div>
      </div>
      <div class="slide">
        <img src="img/sigiriya.jpg" alt="logo">
        <div class="info">
          <h1>Sigiriya rock</h1>
          <a href="#" class="btn">See More</a>
        </div>
      </div>
      <div class="slide">
        <img src="img/pool.jpg" alt="logo">
        <div class="info">
          <h1>Pool</h1>
          <a href="#" class="btn">See More</a>
        </div>
      </div>
  </section>
</div> 



 <!-- contact section start -->
 <section class="contact" id="contact">
  <div class="max-width">
      <!--<h2 class="title">Contact me</h2>-->
      <div class="contact-content">
          <div class="left">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31611.42144882526!2d80.72668286197181!3d7.954677831504659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3afca0dfa73179d1%3A0x1e04c1150cff0edf!2sSigiriya!5e0!3m2!1sen!2slk!4v1647745225867!5m2!1sen!2slk" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
          <div class="right">
              <div class="text">Contact Us</div>
              <form name="myform" action="connect.php" onsubmit="validateform()" method="post"> 
                  <div class="fields">
                      <div class="field name">
                          <input type="text" name="name" id="name" placeholder="Name" required>
                      </div>
                      <div class="field email">
                          <input type="email" name="email" id="email" placeholder="Email" required>
                      </div>
                  </div>
                  <div class="field">
                      <input type="text" name="subject" id="subject" placeholder="Subject" >
                  </div>
                  <div class="field textarea">
                      <input type="text" name="message" id="message" textarea cols="30" rows="10" placeholder="Message.." required></textarea>
                  </div>
                  <div class="button-area">
                      <button type="submit">Send message</button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</section>

// <script>
// function validateform(){ 
  // var regName = /^[a-zA-Z]+$/;
  // var f_name = document.forms["myform"]["name"].value;
			
				// if (f_name==null || f_name=="" || !regName.test(f_name)){
					// alert("You have to input your name");
					// return false;
					// }

          // var subject_f=document.forms["myform"]["subject"].value;
                // if(subject_f ==null || subject_f=="" ) {  
					// alert("Please provide valid Mobile Number!");
					// return false;
					// }

          // var email_add=document.forms["myform"]["email"].value;
			
            // var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                // if(!mailformat.test(email_add)){
					// alert("“Please provide valid email address!");
				   // return false;
                // }
// } 

// // </script>

<!-- footer -->
<footer>
  <div class="waves">
    <div class="wave" id="wave1"></div>
    <div class="wave" id="wave2"></div>
    <div class="wave" id="wave3"></div>
    <div class="wave" id="wave4"></div>
  </div>
  <ul class="social_icon">
    <li><a href="https://www.facebook.com/Explore-thambapanni-104502802208902"><ion-icon name="logo-facebook"></ion-icon></a></li>
    <li><a href="#"><ion-icon name="logo-instagram"></ion-icon></a></li>
    <li><a href="#"><ion-icon name="logo-twitter"></ion-icon></a></li>
    <li><a href="#"><ion-icon name="logo-google"></ion-icon></a></li>
  </ul>
  <ul class="menu">
    <li><a href="">Home</a></li>
    <li><a href="">packages</a></li>
    <li><a href="">Plan Trip</a></li>
    <li><a href="">About</a></li>
  </ul>
  <p>© COSC32553  Group  Project 17 | All Rights Reserved</p>
</footer>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

  </body>

</html>
