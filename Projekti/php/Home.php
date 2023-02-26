<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <script src="https://kit.fontawesome.com/453ddbb027.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/Index.css"> 

  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>

<body>
 <?php
 include_once("header.php");
 ?>

  























<div class="cnt">

<div class="slider">
  <div class="slide active">
    <img src="../Images/bcg.webp" alt="">
    <div class="info">
      <h2>Best Coffee</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua.</p>
    </div>
  </div>
  <div class="slide">
    <img src="../Images/slideshow2.webp" alt="">
    <div class="info">
      <h2>Best Coffee</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua.</p>
    </div>
  </div>



  <div class="navigation">
    <i class="fas fa-chevron-left prev-btn"></i>
    <i class="fas fa-chevron-right next-btn"></i>
  </div>
  <div class="navigation-visibility">
    <div class="slide-icon active"></div>
    <div class="slide-icon"></div>

  </div>
</div>
</div>
<br>







<div class="intr">
<div class="intr1">
  <h4>SHIPPING & RETURN</h4>
  <p>If your order isn't what you were promised you can return it within 24 hours for a full refund.We'll even pay
    shipping.</p>
</div>

<div class="intr2">
  <h4>SAFE PAYMENT</h4>
  <p>Pay with the worlds most popular and secure payment method</p>
</div>

<div class="intr3">
  <h4>SHOP WITH CONFIDENCE</h4>
  <p>Our Buyer Protection covers your purchase from click to delivery</p>
</div>

</div>
  <div class="clrft">
    <div class="bakg">
      <div class="container" >

        <div class="slide-container active">
          <div class="slide1">
            <i class="fas fa-qoute-right icon"></i>
            <div class="user">
              <img src="../Images/customer1.jpg" alt="">
              <di class="user-info">
                <h3>Jane Doe</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>

                </div>
              </di>
            </div>
            <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt vel aspernatur tempore
              quia,
              id magni
              accusantium dolore a! Dolorum quas molestiae laudantium voluptates voluptatem fuga ipsam a soluta aliquam
              obcaecati.</p>

          </div>
        </div>
        <div class="slide-container">
          <div class="slide1">
            <i class="fas fa-qoute-right icon"></i>
            <div class="user">
              <img src="../Images/customer2.jpg" alt="">
              <di class="user-info">
                <h3>John Doe</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>

                </div>
              </di>
            </div>
            <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt vel aspernatur tempore
              quia,
              id magni
              accusantium dolore a! Dolorum quas molestiae laudantium voluptates voluptatem fuga ipsam a soluta aliquam
              obcaecati.</p>

          </div>
        </div>
        <div class="slide-container">
          <div class="slide1">
            <i class="fas fa-qoute-right icon"></i>
            <div class="user">
              <img src="../Images/customer3.jpg" alt="">
              <di class="user-info">
                <h3>Jolyn Doe</h3>
                <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>

                </div>
              </di>
            </div>
            <p class="text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Deserunt vel aspernatur tempore
              quia,
              id magni
              accusantium dolore a! Dolorum quas molestiae laudantium voluptates voluptatem fuga ipsam a soluta aliquam
              obcaecati.</p>

          </div>
        </div>
       
        <div id="next" class="fas fa-chevron-right" onclick="next()"></div>
        <div id="prev" class="fas fa-chevron-left" onclick="prev()"></div>
<h3 style="margin-left:10%;color:white;">Customer reviews</h3>
      </div>
    </div>















    <div class="footer">
      <footer>

        <div class="wor">
          <div class="loc">

            <p>Sophisticated simplicity for the
              independent mind</p>
          </div>
          <div class="loc">
            <h3>Address <div class="underline"><span></span></div>
            </h3>
            <p>Ilaz Kodra</p>
            <p> Prishtinë 10000</p>
            <p>Kosovë</p>
            <p class="email-id">info@gmail.com</p>
            <h4>123-456-789</h4>
          </div>
          <div class="loc">
            <h3>Links <div class="underline"><span></span></h3>
            <ul>
              <li> <a href="Index.html" class="links">HOME </a></li>
              <li> <a href="Product.html" class="links"> PRODUCTS</a></li>
              <li> <a href="Contact.html" class="links">CONTACT US</a></li>
            </ul>
          </div>
          <div class="loc">
            <h3>Message <div class="underline"><span></span></h3>
            <form class="form">
              <i class="far fa-envelope"></i>
              <input type="email" placeholder="Write your email" required>
              <button type="submit" class="button"><i class="fas fa-arrow-right"></i></button>
            </form>
            <div class="social-icons">
              <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i> </a>
              <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i> </a>
              <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i> </a>
              <a href="https://www.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp"></i> </a>

              </ul>
            </div>
          </div>
        </div>
        <hr>
        <p class="copyright">Copyright &copy2022</p>
      </footer>
    </div>

  </div>


  <script type="text/javascript">
    let menu = document.querySelector('#menu-icon');
    let navbar = document.querySelector('.navbar');

    menu.onclick = () => {
      menu.classList.toggle('bx-x');
      navbar.classList.toggle('open');
    }
  </script>
  <script>
    function togglePopup() {
      document.getElementById("popup-1")
        .classList.toggle("active");
    }
  </script>
  <script>
    var x = document.getElementById('login');
    var y = document.getElementById('register');
    var z = document.getElementById('btn');

    function register() {
      x.style.left = '-400px';
      y.style.left = '50px';
      z.style.left = '110px';
    }

    function login() {
      x.style.left = '50px';
      y.style.left = '450px';
      z.style.left = '0px';
    }
  </script>
  <script>
    var modal = document.getElementById('login-form');
    window.onclick = function (event) {
      if (event.target == modal) {
        modal.style.display = "none";
      }
    }
  </script>
  <script src="../JS/customereview.js"></script>
  <script src="../JS/registervalidate.js"></script>
  <script src="../JS/loginvalidate.js"></script>
  <script src="../JS/slide.js"></script>
</body>

</html>