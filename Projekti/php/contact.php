

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <script src="https://kit.fontawesome.com/453ddbb027.js" crossorigin="anonymous"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/Contact.css"> 
  
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="css/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

</head>

<body>
  <script>
    const toggle = () => {
      document.getElementById("nav").classList.toggle("navactive");
    };
  </script>
  


<div class="content ">

<div class="contact ">
  <h1>Contact Info</h1>
  <h2> <i class="fa fa-phone" aria-hidden="true"></i>Phone</h2>
  <p> 123-456-789</p>
  <h2><i class="fa fa-envelope" aria-hidden="true"></i>Email</h2>
  <p> info@gmail.com</p>
  <h2><i class="fa fa-map-marker" aria-hidden="true"></i>Address</h2>
  <p>Rr.Ilaz Kodra, Prishtinë 10000/Kosovë</p>

  <ul>
    <li> <a href="https://www.facebook.com/" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
    <li> <a href="https://twitter.com/" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
    <li> <a href="https://www.instagram.com/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
    </li>
    <li> <a href="https://www.whatsapp.com/" target="_blank"><i class="fa-brands fa-whatsapp"></i></a></li>

  </ul>


</div>

<div class="contact ">
  <h1>Send Message</h1>
  <form action="#" name="contact-form">
    <div class="form-control">
      <input type="text" name="name" placeholder="Write First Name" id="er2" class="info">
      <div class="error hide">Name is required</div>
    </div>
    <div class="form-control">
      <input type="text" name="lastname" placeholder="Write Last Name" id="mb2" class="info">
      <div class="error hide">Last Name is required</div>
    </div>
    <div class="form-control">
      <input type="text" name="email" placeholder="Write Email" id="em2" class="info">
      <div class="error hide">Email is required</div>
    </div>
    <div class="form-control">
      <textarea class="info" id="msg" name="message" placeholder="Message..."></textarea>
      <div class="error hide">Message is required</div>
    </div>

    <input type="submit" class="btn" value="Submit">
  </form>
</div>

<div id="googleMap" class="contact ">
  <iframe
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d733.5833474402789!2d21.15633882923486!3d42.65428999869802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x780786f7f3f2b8fa!2zNDLCsDM5JzE1LjQiTiAyMcKwMDknMjQuOCJF!5e0!3m2!1sen!2s!4v1647031840701!5m2!1sen!2s"
    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
<script src="../JS/contactvalidate.js"></script>
<script src="../JS/registervalidate.js"></script>
<script src="../JS/loginvalidate.js"></script>
</body>

</html>