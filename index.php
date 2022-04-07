<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style2.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
    <!--<div class="tohome">
      <table>
        <tr>
          <td><img src="logo.png" alt="logo" /></td>
          <td>
            <form action="home.html">
              <input type="submit" value="Home" class="homebtn" />
            </form>
          </td>
        </tr>
      </table>
    </div>-->

    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form  name="myform" action="signin.php" method="post" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

          <form action="signup.php" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>

            <div class="input-field">
              <i class="fas fa-signature"></i>
              <input type="text" placeholder="Name" name="name" requiredc/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" requiredc/>
            </div>
            <div class="input-field">
              <i class="fas fa-globe"></i>
              <input type="text" placeholder="Country" name="country" requiredc/>
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="uname" requiredc/>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="pword" requiredc/>
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>

        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New to Explore Thambapanni?</h3>
            <br />
            <p>
              If you are new to Explore thambapanni Sign-up for more info and be
              a member of team " Explore Thambapanni ".
            </p>
            <button class="btn transparent" id="sign-up-btn">Sign up</button>
          </div>
          <img src="travel_mode_re_2lxo.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us from Explore Thambapanni?</h3>
            <br />
            <p>
              Sign in if you are an existing member of team " Explore
              Thambapanni " to plan your dream travel.
            </p>
            <button class="btn transparent" id="sign-in-btn">Sign in</button>
          </div>
          <img src="world_re_768g.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
