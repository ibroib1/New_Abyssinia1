<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>New_Abysinia</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-colors-highway.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles.css">
  </head>
  <body>

      <div class="navigation w3-highway-blue w3-container">
        <nav class="nav-container w3-padding-large">
          <div class="logo">
            <a href="index1.php" >New Abyssinia</a>
          </div>
          <div class="mobile-button">
            <span style="float: right;" onclick="toggleMobileNavigation()">&#9776;</span>
          </div>
          <div class="links">
            <a href="service.php" >Services</a>
            <a href="#contact" >Contact</a>      
            <a href="#about">about</a>
                
          
   <a href="register_form.php">
    <button class="btn white-btn" id="loginBtn" onclick="login()">register</button>
   </a>
   <a href="login_form.php">
    <button class="btn black-btn" id="registerBtn" onclick="register()">log-in</button>
  </a>
  <a href="logout.php">
    <button class="btn black-btn" id="registerBtn" onclick="register()">log-out</button>
  </a>
   </div>
  
          <div id="mobile-sidenav" class="mobile-links w3-highway-blue">
            <div class="mobile-logo" style="display: inline;">
              <a href="#home" class="logo"><span></span></a>
              <span style="width: 100%;"></span>
              <a href="javascript:void(0)" class="closebtn" onclick="toggleMobileNavigation()">&times;</a>
            </div>
            <a href="#" onclick="toggleMobileNavigation()">services</a>
            <a href="#contact" onclick="toggleMobileNavigation()">Contact</a>
            <a href="#about" onclick="toggleMobileNavigation()">about</a>
            <a href="#" onclick="toggleMobileNavigation()">login</a>
            <a href="#careers" onclick="toggleMobileNavigation()">register</a>
          </div>
        </nav>
      </div>

      <div class="hero" id="home">
        <div class="text container">
          <p class="pre-title">Welcome all visitors</p>
          <h1 class="title">to the new <span>vision of Ethiopia</span></h1>
          <p class="post-title">Engoy!</p>
          <a class="w3-button w3-round-large w3-indigo w3-hover-blue" href="service.php">OUR SERVICES</a> 
        </div>
      </div>

      <div class="about container w3-padding-large" id="about">
        <div class="text-one">
          <h2>About Us</h2>
          <p>Hello we are the new vision of ethiopia(abyssinia) and we do the simplest  school managemnt sistem  .</p>
          <a class="w3-button w3-round-large w3-indigo w3-hover-blue" href="#about">Read more</a> 
        </div>
        <div class="text-one">
          <h2>Our Vision</h2>
          <p>to be our country advanced on it tech.</p>
          <a class="w3-button w3-round-large w3-indigo w3-hover-blue" href="#our_vision">Read more</a> 
        </div>
      </div>

      <div class="w3-panel w3-highway-blue numbers">
        <h2 class="w3-center w3-xxxlarge"></h2>
        <p class="w3-center w3-xxxlarge show-medium">
          <?xml version="1.0" encoding="utf-8"?>
          <svg x="0px" y="0px" width="36" fill="#bed9f3" stroke="#bed9f3"
            viewBox="0 0 64 64" enable-background="new 0 0 64 64" xml:space="preserve">
          <g id="Down-arrow">
            <path d="M17.2929993,29.7070007c-0.3906994-0.3906002-0.3906994-1.0234013,0-1.4140015
              c0.3906002-0.3906002,1.0234013-0.3906002,1.4140015,0L32,41.5858994l13.2929993-13.2929001
              c0.3905983-0.3906002,1.0233994-0.3906002,1.4140015,0C46.902298,28.4883003,47,28.7441998,47,29
              c0,0.2558994-0.097702,0.5116997-0.2929993,0.7070007l-14,14c-0.3906021,0.3906975-1.0234013,0.3906975-1.4140015,0
              L17.2929993,29.7070007z"/>
            <path d="M32,64c17.6730957,0,32-14.3269005,32-32S49.6730957,0,32,0C14.3268003,0,0,14.3268995,0,32S14.3268003,64,32,64z M32,62
              C15.4579,62,2,48.542099,2,32C2,15.4580002,15.4579,2,32,2s30,13.4580002,30,30C62,48.542099,48.542099,62,32,62z"/>
          </svg>
        </p>
        <div class="container w3-padding-large">
          <div class="text">
            <p class="number"></p>
            
          </div>
          <div class="text">
            <p class="number"></p>
            
          </div>
          <div class="text">
            <p class="number"></p>
            
          </div>
          <div class="text">
            <p class="number"></p>
            
          </div>
        </div>
      </div>

      
          

      <div class="careers container" id="careers">
        <h2 class="w3-center">Our top Services</h2>
        <div class="cards w3-padding-large w3-margin-top">

            <div class="card w3-card-4">
              <header class="w3-container w3-indigo">
                 <h3>E-library</h3>
              </header>

              <div class="content w3-container">
                <div class="card-text" style="padding-bottom: 20px;">
                  <h4>Contents</h4>
                  <ul style="list-style-type: none;">
                    <li>this is why becouse to buld the reading people in our  world becouse our world are going with social media so to back to that time</li>
                    <li>students book, audio book</li>
                    <li>other fitured books</li>
                   
                  </ul>
                  <h4>and all indiginous books</h4>
                  <ul style="list-style-type: none;">
                    <li>example "feker eske mekaber"</li>
                    <li>"zubeyda"</li>
                    <li>academic book</li>
                    <li>all what you want to read is in our web site.</li>
                  </ul> 
                </div>
              </div>
              <footer class="w3-container" style="padding: 0">
                <a class="w3-button w3-indigo w3-hover-blue" style="width: 100%;" href="#">visit</a>
              </footer>
            </div>

            <div class="card w3-card-4 w3-round-large">
              <header class="w3-container w3-indigo">
                 <h3>E-commerce (for students)</h3>
              </header>

              <div class="content w3-container">
                <div class="card-text" style="padding-bottom: 20px;">
                <h4>Contents</h4>
                <ul style="list-style-type: none;">
                 <li>Did you know this is the first web that have only commerce for students</li>
                 <li></li> 
                 <li>this is for our students to buy all gods for our students easly </li>
                  <li>we have books, bags, pens ,pencile, shoes</li>              
                  <li>so this is why we say the new vision</li>
                  <li>on this service we sell the manual books</li>
                  <li>in a team or alone efficiently</li>
                </ul>
                <h4>and </h4>
                <ul style="list-style-type: none;">
                  <li>Great salary</li>
                  <li>we deliver </li>
                  
                </ul>
                </div>
              </div>
              <footer class="w3-container" style="padding: 0">
                <a class="w3-button w3-indigo w3-hover-blue" style="width: 100%;" href="c.php">visit</a>
              </footer>
            </div>

            <div class="card w3-card-4">
              <header class="w3-container w3-indigo">
                 <h3>video learning with our teacher</h3>
              </header>

              <div class="content w3-container">
                <div class="card-text" style="padding-bottom: 20px;">
                <h4>contents</h4>
                <ul style="list-style-type: none;">
                  <li>this service is given by with our expert teachers</li>
                  <li>for all high school school</li>
                  <li>example:- maths,chemistry,physics,biology...</li>
                  <li>and for social students</li>
                  
                </ul>
                <h4>and</h4>
                <ul style="list-style-type: none;">
                  <li>you can also dawnload </li>
                  <li>repeating the video</li>
                 
                </ul>
                </div>
              </div>
              <footer class="w3-container" style="padding: 0">
                <a class="w3-button w3-indigo w3-hover-blue" style="width: 100%;" href="video.php">visit</a>
              </footer>
            </div>
        </div>
      </div>

      <div class="contact container" id="contact">
        <div class="short-contact">
          <h2>Contact us</h2>
          <p class="w3-xlarge">We would like to hear from you!</p>
          <div class="w3-large w3-margin-top contact-info">
            <i class="fa fa-location-arrow"></i><span style="margin-left:10px;"><a href="https://www.google.com/maps/place/German+square+-+%E1%8C%80%E1%88%AD%E1%88%98%E1%8A%95+%E1%8A%A0%E1%8B%B0%E1%89%A3%E1%89%A3%E1%8B%AD/@8.9654352,38.7401973,15.25z/data=!4m6!3m5!1s0x164b810cd4c6fedd:0x117450ee3818e8e0!8m2!3d8.9638925!4d38.7326036!16s%2Fg%2F11pkll2_zg?entry=ttu" target="_blank">Germen road, Adis Abeba,Ethiopia</a></span><br>
            <i class="fa fa-envelope-o"></i><span style="margin-left:10px;"><a href="#">ibrahim7mohammdd@gmail.com</a></span><br>
            <address>

            <i class="fa fa-phone"></i><span style="margin-left:10px;"><a href="+2519562722">call</a></span><br>
          </div>
          <div class="w3-large w3-margin-top contact-info">

            <i class="fa fa-instagram "></i><span style="margin-left:10px;"><a href="https://www.instagram.com/ibroib1/" target="_blank" style="text-decoration: none;"> - Instagram</a></span><br>
              </div>
        </div>
        <div class="form w3-margin-top">
          <div class="container w3-round-xlarge">
            <form class="w3-highway-blue w3-padding-large w3-round-large">
              <label for="fname">First Name</label>
              <input type="text" id="name" name="name" placeholder="Your name">

              <label for="lname">Last Name</label>
              <input type="text" id="email" name="email" placeholder="Your email">

              <label for="subject">Subject</label>
              <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
              
              <p>By submiting this form, you agree to our <a href="privacy-policy.html" target="_blank">privacy policy</a></p><br>
              <input class="w3-metro-blue" type="submit" value="Submit">
            </form>
          </div>
        </div>
      </div>

      <div class=" w3-highway-blue w3-padding-large" id="footer">
        <p class="w3-center logo">© 2023 - New <span>Abyssinia</span> -For vision of ethiopia</p>
      </div>

  <script>
    function toggleMobileNavigation() {
      const mobileNavigation = document.getElementById("mobile-sidenav");
      mobileNavigation.classList.toggle('mobile-links-active');
    }
</script>
<style>
:root {
  --nav-link-color: rgba(233, 242, 251, 1);
  --nav-link-hover-color: rgb(190, 217, 243);
  --title-span-color: rgb(24, 78, 129);
  --hero-background: rgb(255, 255, 255);
  --hero-background-gradient: linear-gradient(0deg, rgba(255, 255, 255, 1) 0%, rgba(17, 57, 96, 1) 100%);

  --font-small: 0.5em;
  --font-medium: 1em;
  --font-medium-large: 1.25em;
  --font-large: 1.5rem;
  --font-x-large: 2rem;
  --font-2x-large: 3rem;
  --font-3x-large: 3.5rem;
  --font-4x-large: 4rem;
  --font-5x-large: 4.5rem;
  --font-6x-large: 5rem;
  --font-7x-large: 5.5rem;

  -text-color: rgba(7, 26, 44, 1);

  --transition-slow: 0.6s;
  --transition-medium: 0.4s;
  --transition-fast: 0.2s;
  --transition-fastest: 0.1s;
}

/*Large Desktop*/
/*General CSS*/

html {
  scroll-behavior: smooth;
}

body {
  font-family: "Quicksand", sans-serif;
}

* {
  margin: 0;
  padding: 0;
}
.nav-menu-btn{
    display: flex;}
 .nav-button.btn{
    width: 130px;
    height:40px;
    font-weight:500;
    background: rgba(255, 255, 255, 0.6);
    border: none;
    border-radius: 30cqw;
    cursor: pointer;
    transition: .3s ease;
}
.btn:hover{
    background: rgba(241, 231, 231, 0.3);
}
#registerBtn{
    margin-left: 15px;
}

.btn.white-btn{
    background: rgb(253, 249, 249);
    width: 130px;
    height:40px;
    font-weight:500;
    border: none;
    border-radius: 30cqw;
    cursor: pointer;
    transition: .3s ease;
}
.btn.btn.white-btn:hover{
    background: rgba(204, 194, 194, 0.5);
   
}
.btn.black-btn{
    width: 130px;
    height:40px;
    font-weight:500;
    background: #fff;
    border: none;
    border-radius: 30cqw;
    cursor: pointer;
    transition: .3s ease;
}
.btn:hover{
    background: rgba(241, 231, 231, 0.3);}
    .btn.btn.black-btn:hover{
        background: rgba(233, 224, 224, 0.5);}
    
h2,
h3 {
  color: var(--title-span-color);
  font-weight: bold;
}

h2,
h3,
p {
  font-family: "Quicksand", sans-serif;
}

.container {
  width: 60%;
  margin: 0 auto;
}

/*Navigation*/

.navigation {
  width: 100%;
  position: fixed;
  z-index: 100;
  top: 0px;
  height: 50px;
}

.nav-container {
  margin: 0 auto;
  width: 100%;
  height: 100%;
  display: flex;
}

.nav-container .links {
  display: flex;
  width: 100%;
  align-items: center;
  justify-content: flex-end;
  gap: 25px;
  font-family: "Courier New", monospace;
}

.nav-container .logo {
  display: flex;
  width: auto;
  align-items: center;
  min-width: 20%;
  width: auto;
  font-family: "Courier New", monospace;
}

.nav-container .logo span {
  color: var(--nav-link-hover-color);
}

.nav-container .links a,
.nav-container .logo a {
  text-decoration: none;
  color: var(--nav-link-color);
  transition: var(--transition-fast);
}

.nav-container .links a {
  font-size: var(--font-medium);
}

.nav-container .logo a {
  font-size: var(--font-large);
}

.nav-container .links a:hover,
.nav-container .logo a:hover {
  color: var(--nav-link-hover-color);
}

.nav-container .links a:after,
.nav-container .logo a:after {
  display: block;
  content: "";
  border-bottom: 1px solid var(--nav-link-hover-color);
  transform: scaleX(0);
  transition: transform var(--transition-fastest) ease-in-out;
  transform-origin: 100% 50%;
}

.nav-container .logo a:hover:after,
.nav-container .links a:hover:after {
  transform: scaleX(1);
  transform-origin: 0% 50%;
}

.mobile-button {
  display: none;
}

.mobile-logo {
  display: flex !important;
}

.mobile-logo .logo {
  width: auto;
}

.mobile-links {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  overflow-x: hidden;
  transition: var(--transition-fast);
  padding-top: 20px;
}

.mobile-links a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: var(--nav-link-color);
  display: block;
  transition: 0.3s;
}

.mobile-links a:hover {
  color: #f1f1f1;
}

.mobile-links .closebtn {
  font-size: var(--font-x-large);
  margin-right: 25px;
}

/*Hero*/

.hero {
  /* display: flex; */
  min-height: 300px;
  height: 800px;
  background-image: url("https://spaces.w3schools.com/images/KRELIShKxTM.jpg");
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  -webkit-box-shadow: inset 0px 0px 300px 0px rgba(255, 255, 255, 0.3);
  -moz-box-shadow: inset 0px 0px 3000px 2000px rgba(255, 255, 255, 0.3);
  box-shadow: inset 0px 0px 300px 2000px rgba(255, 255, 255, 0.8);
}

.hero .text {
  height: 100%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  gap: 15px;
  text-align: center;
}

.hero .text .pre-title {
  font-size: var(--font-2x-large);
}
.hero .text .title {
  font-size: var(--font-5x-large);
}
.hero .text .title span {
  color: var(--title-span-color);
  border-bottom: 5px solid var(--title-span-color);
}
.hero .text .post-title {
  font-size: xx-large;
}

/*About*/

.about {
  min-height: 400px;
  display: flex;
  gap: 20px;
  padding: 50px 25px;
}

.about-us {
  min-height: 400px;
  padding: 50px;
}

.about .text-one {
  display: flex;
  flex-direction: column;
  gap: 20px;
  min-height: 400px;
  width: 50%;
}

.about .text-one h2 {
  font-size: var(--font-3x-large);
  width: max-content;
}

.about .text-one p {
  font-size: var(--font-medium-large);
}

.about .text-one a {
  width: max-content;
}

/*Numbers*/

.numbers {
  padding-top: 50px;
  padding-bottom: 50px;
}

.numbers .container {
  display: flex;
  justify-content: space-evenly;
  flex-wrap: wrap;
  gap: 20px;
}

.numbers .container .text {
  text-align: center;
  color: var(--nav-link-color);
  font-size: var(--font-large);
}

.numbers h2 {
  font-size: var(--font-3x-large);
  color: var(--nav-link-color);
}

.numbers .container .text .number {
  font-size: var(--font-3x-large);
}

/*Services*/
.services {
  padding-top: 50px;
  padding-bottom: 50px;
}

.services.container,
.careers.container {
  width: 80%;
}

.services h2,
.careers h2 {
  font-size: var(--font-3x-large);
}

.services .cards,
.careers .cards {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  gap: 20px;
}

.services .cards .card {
  max-height: 300px;
  height: 250px;
  overflow: auto;
  width: 30%;
  text-align: center;
}

.services .cards .card h3,
.careers .cards .card h3 {
  color: var(--title-span-color);
  font-size: var(--font-medium-large);
}

.services .cards .card .card-text p,
.careers .cards .card .card-text p {
  font-size: var(--font-medium-large);
}

.services .cards .card .card-text p span {
  color: var(--title-span-color);
}

/*Careers*/
.careers {
  padding-top: 50px;
  padding-bottom: 50px;
}

.careers .cards .card {
  width: 30%;
  text-align: center;
}

.careers .cards .card header h3 {
  color: #fff;
}

.careers .cards .card footer {
  width: 100%;
}

.careers .cards .card .content {
  height: 400px;
  overflow: auto;
}

.careers .cards .card .card-text {
  display: flex;
  flex-direction: column;
  justify-content: space-between;
}

/*Contact*/

.contact {
  min-height: 400px;
  display: flex;
  justify-content: flex-end;
  padding: 50px;
}

.contact .form .container {
  display: flex;
  justify-content: flex-end;
  width: 100%;
}

.contact span {
  color: var(--title-span-color);
  transition: var(---transition-fast);
}

.contact span:hover {
  font-weight: bolder;
}

.contact .form .container form {
  width: 80%;
}

.contact .short-contact {
  display: flex;
  flex-direction: column;
  align-items: left;
  min-height: 400px;
}

.contact h2 {
  font-size: var(--font-3x-large);
  width: max-content;
}

.contact .form input[type="text"],
select,
textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.contact .form input[type="submit"] {
  background-color: #04aa6d;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.contact .form input[type="submit"]:hover {
  background-color: #45a049;
}

/*FOOTER*/
#footer p span {
  color: var(--nav-link-hover-color);
}

/*Utilities*/

.show-medium {
  display: none;
}

@media screen and (max-width: 1200px) {
  .services.container,
  .careers.container {
    width: 100%;
  }
  .services .cards .card {
    height: 200px;
  }
  .services .cards .card .card-text p,
  .careers .cards .card .card-text p {
    font-size: var(--font-medium);
  }
  .contact.container {
    width: 80%;
  }
}

@media screen and (max-width: 1024px) {
  .nav-container {
    width: 80%;
  }

  .container {
    width: 80%;
  }
  .nav-container .links {
    display: none;
  }

  .mobile-button {
    display: flex;
    width: 100%;
    justify-content: flex-end;
    align-items: center;
  }

  .mobile-button span {
    font-size: var(--font-x-large);
    color: var(--nav-link-hover-color);
  }

  .mobile-logo {
    display: flex;
  }
  .mobile-links-active {
    width: 40%;
  }

  .hero .text .pre-title {
    font-size: var(--font-x-large);
  }
  .hero .text .title {
    font-size: var(--font-2x-large);
  }
  .hero .text .post-title {
    font-size: x-large;
  }

  .about .text-one {
    width: 70%;
  }

  .about .text-one h2,
  .contact h2 {
    font-size: var(--font-2x-large);
  }

  .about .text-one p {
    font-size: var(--font-medium);
  }

  .about .text-two ul {
    font-size: var(--font-medium);
  }

  .services .cards .card,
  .careers .cards .card {
    width: 45%;
  }

  .services .cards .card .card-text p {
    font-size: var(--font-medium);
  }

  .careers .cards .card {
    height: auto;
  }
}

@media screen and (max-width: 768px) {
  .mobile-links-active {
    width: 70%;
  }

  .about {
    flex-direction: column;
    text-align: center;
  }

  .about .text-one {
    min-height: 0;
  }

  .about .text-one h2,
  .contact h2 {
    width: 100%;
  }

  .about .text-one a {
    margin: 0 auto;
  }

  .about .text-one {
    width: 100%;
  }
  .about .text-two {
    width: 100%;
  }

  .numbers .container {
    justify-content: center;
    flex-direction: column;
  }

  .show-medium {
    display: block;
  }

  .services .cards .card,
  .careers .cards .card {
    width: 100%;
  }

  .services .cards .card {
    height: auto;
  }

  .services .cards .card .card-text p {
    font-size: var(--font-medium);
  }

  .contact {
    flex-direction: column;
    justify-content: center;
  }

  .contact .short-contact {
    width: 100%;
    min-height: 0;
    justify-content: center;
  }

  .contact .short-contact h2 {
    width: fit-content;
  }

  .contact .container {
    width: 90%;
  }

  .contact .form .container form {
    width: 100%;
  }
}

@media screen and (max-width: 480px) {
  html,
  body {
    overflow-x: none;
  }

  .nav-container {
    width: 90% !important;
  }

  .hero {
    height: 400px;
    width: 100%;
  }

  .hero .text .pre-title {
    font-size: var(--font-large);
  }
  .hero .text .title,
  .contact h2,
  .services h2,
  .careers h2 {
    font-size: var(--font-x-large);
  }
  .hero .text .post-title {
    font-size: large;
  }

  .mobile-links-active {
    width: 100%;
  }

  .services {
    padding: 0 !important;
  }

  .services.container,
  .about.container,
  .careers.container {
    width: 100%;
  }

  .contact {
    padding: 10px;
  }

  .contact p {
    font-size: var(--font-medium-large) !important;
  }

  .contact .container {
    width: 100%;
  }
}


</style>
  </body>
</html>  
    
    
    
    
    
    
    
