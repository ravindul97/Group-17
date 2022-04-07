<!-- <?
session_start();
if(isset($_SESSION['session']))
{
    echo $_SESSION['session'].'<br/>';
}
else{
    header("location:signin.php");
    }
?> -->
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>travel packages</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
    />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <style>
      .navbar {
        position: fixed;
        width: 100%;
        padding: 0.5em 7rem;
        z-index: 1000;
        background: black;
      }
      #navbarSupportedContent > ul > li:nth-child(n) > a {
        color: white;
        font-size: 1.1rem;
        padding: 0 0.8rem;
      }
      #navbarSupportedContent > ul > li:nth-child(n) > a:hover {
        color: cyan;
      }
      #navbarSupportedContent > button {
        background: #00bf85;
        font-weight: 600;
        padding: 0.4 rem 1.4 rem;
        border-radius: 30px;
        text-decoration: none;
        display: inline-block;
      }
      #navbarSupportedContent > button:hover {
        color: white;
      }
      .mid {
        width: 100;
        height: 100vh;
        overflow: hidden;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-content: center;
        text-align: center;
      }
      .mid video {
        width: 100%;
        height: 100vh;
        pointer-events: none;
        object-fit: cover;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        margin-bottom: 20px;
      }
      .mid .hero {
        position: relative;
      }
      .mid .hero H2 {
        padding-top: 17rem;
        font-size: 50px;
        padding-bottom: 1.1rem;
      }

      .mid .hero a {
        background: #00bf85;
        font-weight: 600;
        padding: 0.7rem 1.7rem;
        border-radius: 15px;
        text-decoration: none;
        display: inline-block;
      }

      .navbar .max-width {
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      .navbar .logo a {
        padding: 10px 80px;
      }
      .navbar .menu li {
        list-style: none;
        display: inline-block;
      }
      .navbar .menu li a {
        color: white;
        font-size: 18px;
        font-weight: 500;
        margin-left: 25px;
      }

      /*package css*/
      .packages {
        position: absolute;
        top: 20%;
        left: 5%;
        display: flex;
        flex-direction: column;
        transition: all 0.2s 0.7s;
        overflow: hidden;
        grid-column: 1 / 3;
        grid-row: 1 / 2;
      }
      .img {
        width: 400px;
        height: 250px;
        padding: 10px;
        border-radius: 20px;
        border-color: #09012b;
      }

      
      .btn1 {
        display: inline-block;
        /* margin-top: 1rem; */
        background: #09012b;
        color: #fff;
        /* padding: 0.8rem 3rem; */
        padding: 3px;
        border: 0.2rem solid #09012b;
        cursor: pointer;
        font-family: "Poppins", sans-serif;
        font-size: 20px;
        text-decoration: none;
        width: 150px;
        height: 45px;
        text-align: center;
        border-radius: 10px;
      }
      .btn1:hover {
        color: goldenrod;
      }
      h3 {
        color: #09012b;
        font-size: 25px;
        font-family: "Poppins", sans-serif;
        font-weight: bold;
      }
      h3:hover {
        color: goldenrod;
      }
      .stars {
        color: goldenrod;
      }
      .price {
        font-size: 25px;
        font-weight: bold;
        color: black;
      }

      .price strike {
        color: rgb(197, 40, 40);
        font-size: 18px;
      }

      .services .box-container .box i {
  padding: 1rem;
  font-size: 5rem;
  color: #09012b;
}
.services .box-container .box i:hover{
      color: goldenrod;
}
    </style>
  </head>
  <body >
    <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container-fluid">
        <!-- <a class="navbar-brand" href="#"><img src="logo.png" /></a>-->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            <!-- mx-auto for add items in middle -->
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Packages</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="#">Plan Trip</a>
            </li> -->
            <li class="nav-item">
              <a class="nav-link" href="C:/xampp/htdocs/Group17/sithu/about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
            <!-- <li class="nav-item">
              <a
                class="nav-link"
                href="C:\Users\acer\Desktop\Group-17\try\index.html"
                >Sign Up</a
              >
            </li> -->
          </ul>
          <!-- <button class="btn btn-outline-success text-dark" type="submit">
            <a
              href="C:\Users\acer\Desktop\Group-17\try\index.html"
              style="text-decoration: none"
            >
              Sign In</a
            >
          </button> -->
        </div>
      </div>
    </nav>

    <!--Package codings-->
    
    <div class="packages">
      <table>
        <tr>
          <td>
            <div class="kandy">
              <a href="kandy.php">
                <img src="kandy.jpg" alt="" class="img kandy" />
              </a>
              <h3><i class="fas fa-map-marker-alt"></i> &nbsp;Cool Kandy</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">Rs 15,000.00 <strike>Rs 20,000.00</strike></div>
              <a href="kandy.php" class="btn1">Book now</a>
            </div>
          </td>
          <td>
            <div class="nuwaraliya">
              <a href="Nuwara-Eliya.php">
                <img src="Nuwara-Eliya.jpg" alt="" class="img nuwaraliya" />
              </a>
              <h3>
                <i class="fas fa-map-marker-alt"></i>&nbsp;Freezing Nuwara-Eliya
              </h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">Rs 25,000.00 <strike>Rs 30,000.00</strike></div>
              <a href="Nuwara-Eliya.php" class="btn1">Book now</a>
            </div>
          </td>
          <td>
            <div class="galle">
              <a href="galle.php">
                <img src="downsouth.jpg" alt="" class="img galle" />
              </a>
              <h3>
                <i class="fas fa-map-marker-alt"></i> &nbsp;Amazing Down south
              </h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
              </div>
              <div class="price">Rs 15,000.00 <strike>Rs 18,000.00</strike></div>
              <a href="galle.php" class="btn1">Book now</a>
            </div>
          </td>
        </tr>
        <tr>
          <td>
            <div class="jaffna">
              <a href="jaffna.php">
                <img src="jaffna.jpg" alt="" class="img jaffna" />
              </a>
              <h3><i class="fas fa-map-marker-alt"></i> &nbsp;Sunny Jaffna</h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">Rs 12,400.00 <strike>Rs 15,000.00</strike></div>
              <a href="jaffna.php" class="btn1">Book now</a>
            </div>
          </td>
          <td>
            <div class="anuradhapura">
              <a href="anuradhapura.php">
                <img src="anuradhapura.jpg" alt="" class="img anuradhapura" />
              </a>
              <h3>
                <i class="fas fa-map-marker-alt"></i> &nbsp;Ancient Anuradhapura
              </h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">Rs 13,000.00</div>
              <a href="anuradhapura.php" class="btn1">Book now</a>
            </div>
          </td>
          <td>
            <div class="trinco">
              <a href="trinco.php">
                <img src="trinco.jpg" alt="" class="img trinco" />
              </a>
              <h3>
                <i class="fas fa-map-marker-alt"></i> &nbsp;Thrilling Trinco
              </h3>
              <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
              </div>
              <div class="price">15,500.00 <strike>Rs 22,300.00</strike></div>

              <a href="trinco.php" class="btn1">Book now</a>
            </div>
          </td>
        </tr>
      </table>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <div class="services">
        <div class="box-container">
          <table>
            <tr>
              <td>
                <div class="box">
                  <i class="fas fa-hotel"></i>
                  <h3>affordable hotels</h3>
                  <p>
                   Flexible bookings & enhanced cleanliness. Pamper yourself with a night away and book now. No reservation costs. Great reviews. 
                  </p>
                </div>
              </td>
              <td>
                <div class="box">
                  <i class="fas fa-utensils"></i>
                  <h3>food and drinks</h3>
                  <p>
                    Take a pick from the available scrumptious menus inclusive of a variety of mains, Savouries, Desserts and many more. 
                  </p>
                </div>
              </td>
              <td> <div class="box">
                <i class="fas fa-bullhorn"></i>
                <h3>safty guide</h3>
                <p>
                  Follow all safety measures regarding to Covid-19. Staffs follow safety protocols as directed by local authorities. Process in place to check health of guests.
                </p>
              </div></td>
            </tr>
            <tr>
              <td>
                <div class="box">
                  <i class="fas fa-globe-asia"></i>
                  <h3>around the country</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore
                    commodi earum, quis voluptate exercitationem ut minima itaque iusto
                    ipsum corrupti!
                  </p>
                </div>
              </td>
              <td>
                <div class="box">
                  <i class="fas fa-car"></i>
                  <h3>fastest travel</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore
                    commodi earum, quis voluptate exercitationem ut minima itaque iusto
                    ipsum corrupti!
                  </p>
                </div>
              </td>
              <td>
                <div class="box">
                  <i class="fas fa-hiking"></i>
                  <h3>adventures</h3>
                  <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Inventore
                    commodi earum, quis voluptate exercitationem ut minima itaque iusto
                    ipsum corrupti!
                  </p>
                </div>
              </td>
            </tr>
          </table>
          
          
         
          
          
          
        </div>
      </div>

      </div>
    </div>

    
  </body>
</html>
