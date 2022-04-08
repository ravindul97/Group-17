<html>
  <head>
    <title>Sunny Jaffna</title>
    <link href="style.css" rel="stylesheet" />
    
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins&display=swap"
      rel="stylesheet"
    />
    <style>
      * {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
      }
      .hero {
        width: 100%;
      }
      .row {
        width: 90%;
        height: 100vh;
        margin: auto;
        display: flex;
        align-items: center;
        justify-content: space-between;
      }
      .col {
        flex-basis: 45%;
      }
      .slider {
        height: 80vh;
        display: flex;
      }
      .product img {
        width: 15vh;
        height: 15vh;
        margin-bottom: 9px;
        cursor: pointer;
        opacity: 0.6;
      }

      .product img:hover {
        opacity: 1;
      }

      .preview img {
        width: 100vh;
        height: 80vh;
        padding-left: 5vh;
        padding-right: 5vh;
        padding-bottom: 5vh;
      }
      p {
        margin-bottom: 20px;
      }
      .district {
        background: #09012b;
        width: fit-content;
        color: #fff;
        font-size: 12px;
        padding: 2px 5px;
      }
      h2 {
        font-size: 45px;
        color: #09012b;
        margin-bottom: 20px;
      }
      .rating {
        display: flex;
        height: 15px;
      }
      .rating .fa {
        color: goldenrod;
      }
      .price {
        color: goldenrod;
        font-size: 26px;
        font-weight: bold;
        padding-top: 10px;
      }
      input {
        width: 30px;
        border: 1px solid #ccc;
        font-weight: bold;
        text-align: center;
      }
      button {
        color: #fff;
        font-size: 15px;
        outline: none;
        border: 0;
        border-radius: 5px;
        background: goldenrod;
        padding: 10px 15px;
        box-sizing: border-box;
        cursor: pointer;
        margin-top: 5vh;
      }
      button .fa {
        margin-right: 10px;
      }
      .related {
        width: 90%;
        margin: 0 auto 40px;
      }
      .related .row {
        width: 100%;
        height: auto;
      }
      .columns {
        flex-basis: 22%;
        height: 100%;
      }
      .items img {
        width: 100%;
      }
      
       .rating {
        margin: 10px 0;
        font-size: 20px;

      }
      .related-pkgs {
        margin-top: 20px;
        font-size: 20px;
        font-weight: bold;
        color: #09012b;
      }
      table{
          padding: 5vh;
          margin: 5vh;
          line-height: 5vh;
      }
      td{
          width: 50%;
      }
      .tags{
        color: #09012b;
       font-size: 20px;
       font-weight: bold;
      }

      .link{
        text-decoration: none; 
      font-weight: bold; 
      color: black;
      }
    </style>
  </head>

  <body>
    <div class="hero">
      <div class="row">
        <div class="col">
          <div class="slider">
            <div class="product">
              <img src="jaffna1.jpg" alt="" onclick="clickme(this)" />
              <img src="jaffna2.jpg" alt="" onclick="clickme(this)" />
              <img src="jaffna3.jpg" alt="" onclick="clickme(this)" />
              <img src="jaffna.jpg" alt="" onclick="clickme(this)" />
            </div>
            <div class="preview">
              <img src="jaffna.jpg" id="imagebox" alt="" />
            </div>
          </div>
        </div>
        <div class="col">
          <div class="content">
            <p class="district">Scroll for more details</p>
            <h2>Sunny Jaffna</h2>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </div>
            <p class="price">District : Jaffna</p>
            <p style="font-size: 20px; font-weight: bold">
              Price : Rs 15,000.00 &nbsp;
              <strike style="color: red; font-size: 15px">Rs 18,000.00</strike>
            </p>
            <br />
            <i style="color: red;">*package is per one person.</i>
            <br>

            <a href="../sithu/form.php">

            <button type="button">
              <i class="fa fa-shopping-cart"></i>
              Proceed to Pay
            </button>
            </a>
          </div>
        </div>
      </div>

      <div class="related">
        <h2>related items</h2>
        <div class="row">
          <div class="columns">
            <div class="items">
              <a href="anuradhapura.php"><img src="anuradhapura.jpg" alt="" style="text-decoration: none;"/>
                <p class="related-pkgs">Ancient Anuradhapura</p>
            </a> 

              
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i> <br />

                
              </div>
              <p style="font-size: 20px; font-weight: bold">
                Price : Rs 13,000.00 &nbsp;
              </p>
            </div>
          </div>
          <div class="columns">
            <div class="items">
              <a href="Nuwara-Eliya.php" style="text-decoration: none;">
                <img src="Nuwara-Eliya.jpg" alt="" />
                <p class="related-pkgs">Freezing Nuwara-Eliya</p>
            </a>

              
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
                <i class="fa fa-star-o"></i> <br />

                
              </div>
              <p style="font-size: 20px; font-weight: bold">
                Price : Rs 25,000.00 &nbsp; <br>
                <strike style="color: red; font-size: 15px"
                  >Rs 30,000.00</strike
                >
              </p>
            </div>
          </div>
          <div class="columns">
            <div class="items">
              <a href="galle.php" style="text-decoration: none;"><img src="downsouth.jpg" alt="" />
                <p class="related-pkgs">Amazing Down south</p>
            </a>

             
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <br />

                
              </div>
              <p style="font-size: 20px; font-weight: bold">
                Price : Rs 15,000.00 &nbsp; <br>
                <strike style="color: red; font-size: 15px"
                  >Rs 18,000.00</strike
                >
              </p>
            </div>
          </div>
          <div class="columns">
            <div class="items">
              <a href="trinco.php" style="text-decoration: none;"><img src="trinco.jpg" alt="" /></a>

              <p class="related-pkgs">Thrilling Trinco</p>
              <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i> <br />

                
                </p>
              </div>
              <p style="font-size: 20px; font-weight: bold">
                Price : Rs 15,500.00 &nbsp; <br>
                <strike style="color: red; font-size: 15px"
                  >Rs 22,300.00</strike
                >
            </div>
          </div>
        </div>
      </div>
    </div>
    <table>
        <tr>
            <td>
                <p class="tags"><i class="fa fa-globe"></i> Visiting locations : <br></p>
            <ul>
                <li>Nallur Kovil</li>
                <li>Neduntheevu (Delft Island)</li>
                <li>Nagadipa Purana Vihara</li>
                <li>jaffna city tour</li>
                <li>Jaffna Fort</li>
                <li>Beach bath</li>
                <li>Kayts Causeway</li>
                <li>Keerimalai Hot springs</li>
            </ul>
            <p class="tags"><i class="fa fa-bed"></i> Lounging : <br></p> 
            <a href="http://dumbara-peak-residence.kandy-hotels.com/en/" class="link" > Green grass hotel 4956</a>

            <br><br>
            <p style="font-size: 15px; color:red;"><sup>*</sup> Transport facilites will be provided</p>
            </td>
            <td>
                <div class="tags">
                    Rules & Regulations 
                </div> 
                    <br>
                    <br>
                  </h4>
                    <div class="rules">
                      
                      <ul>
                        <li>
                          You have to book your package before 2 weeks.
                        </li>
                        <li>
                          No refunds after a week.
                        </li>
                        <li>
                          Children of all ages are welcome.
                        </li>
                        <li>
                          Children of age 10 and above are considered adults at this property.
                        </li>
                        <li>
                          Pets are not allowed.
                        </li>
                        <li>
                          After you complete your booking, we'll send you an email containing a <br> link to a secure traveler registration form. 
                        </li>
                        <li>
                          After we receive your booking and deposit, we will confirm availability of all <br> components and send you a confirmation email within 1–2 business days.
                        </li>
                        <li>
                          A payment via one of our accepted payment methods, is required to secure your booking
                        </li>
                        
                      </ul>
                    </div>
            </td>
        </tr>
    </table>

    <script>
      function clickme(smallImg) {
        var fullImg = document.getElementById("imagebox");
        fullImg.src = smallImg.src;
      }
    </script>
  </body>
</html>
