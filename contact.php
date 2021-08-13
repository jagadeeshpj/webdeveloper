
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet" />
    <link rel="stylesheet" href="static/css/main.css"/>
    <link rel="stylesheet" href="static/css/media.css"/>
    <link rel="stylesheet" href="static/css/items_grid.css"/>
      
    <title>JAGADEESH P
            |  Web Developer</title>
       
</head>

<body>


    <header id="header-inner"> 
        <div class="container"> 
           <!-- Navbar -->
           <nav id="main-nav">
               <a href="">
               <img src="static/img/logo.png" alt="Logo" id="logo">
               </a>
               <ul>
                   <li>
                    
                        <a href="index.html">Home</a>
                    
                    </li>
                    <li>
                           
                            <a href="about.html" >About</a>
                        
                    </li>
                    <li>
                        
                            <a href="work.html">Work</a>
                        
                    </li>
                    <li>
                        <!-- 
                        <a href="">Contact</a>
                         -->
                        
                        
                        <a href="contact.php" class="current">Contact</a>
                        
                    </li>
                   
                  <li>
                    <a href="static/resume/JAGADEESH P RESUME.pdf" download="JAGADEESH P RESUME">RESUME</a>
                </li>
                    
               </ul>
           </nav>
       </div>
    </header>

<!-- section A: Contact Form -->

<section id="contact-a" class="text-center py-3">
  <div class="container">
    <h2 class="section-title">Contact Me</h2>
    <div class="bottom-line"></div>
    <p class="lead">Here is how you can reach me</p>
    <form action="submit.php" method="POST">
      <input type="hidden" name="csrfmiddlewaretoken" value="CsGpgDMfSNlSafB1U8msuEVUjf0Qyvi4rVRh3kZpaZO3cXwSTFtTIEyu6OYvj9Us">
      <div class="text-fields">
        <!-- <input
          type="text"
          class="text-input name-input"
          placeholder="Name"
          name="name"
        />
        <input
          type="text"
          class="text-input subject-input"
          placeholder="Subject"
          name="subject"
        />
        <input
          type="email"
          class="text-input email-input"
          placeholder="Email Address"
          name="email"
        />
        <input
          type="text"
          class="text-input phone-input"
          placeholder="Phone Number"
          name="phone_number"
        />
        <textarea
          class="text-input message-input"
          placeholder="Enter Message"
          name="message"
        ></textarea> -->
        <tr><th><label for="id_name">Name:</label></th><td><input type="text" name="name" placeholder="Name" class="text-input name-input" maxlength="30" required id="id_name"></td></tr>
<tr><th><label for="id_email">Email:</label></th><td><input type="email" name="email" placeholder="Email" class="text-input email-input" maxlength="254" required id="id_email"></td></tr>
<tr><th><label for="id_subject">Subject:</label></th><td><input type="text" name="subject" placeholder="Subject" class="text-input subject-input" maxlength="100" required id="id_subject"></td></tr>
<tr><th><label for="id_phone_number">Phone number:</label></th><td><input type="tel" name="phone_number" placeholder="Phone" class="text-input phone-inputt" maxlength="20" required id="id_phone_number"></td></tr>
<tr><th><label for="id_message">Message:</label></th><td><textarea name="message" cols="40" rows="10" placeholder="Message" class="text-input message-input" required id="id_message">
</textarea></td></tr>


      </div>
      <button type="submit" class="btn-dark" name="contact_btn">Submit</button>
    </form>
  </div>
  </section>



  <section id="contact-b" class="py-3 bg-dark main-line">
  <div class="container">
    <div class="contact-info">
      <div>
        <i class="fas fa-envelope fa-2x"></i>
        <h3>Email</h3>
        <p>Jagadeeshpj2001@gmail.com</p>
      </div>
      <div>
        <i class="fas fa-phone fa-2x"></i>
        <h3>Phone</h3>
        <p>(555) 555-5555</p>
      </div>
      <div>
        <i class="fas fa-address-card fa-2x"></i>
        <h3>Address</h3>
        <p>1-23,R.MALLAVARAM(V),TIRUPATHI</p>
      </div>
    </div>
  </div>
</section>






    


  <footer id="main-footer">
    <div class="footer-content container">
        <p>
            Copyright &copy; 2021 All Rights Reserved
        </p>
        <div class="social">
            <a href="https://github.com/jagadeeshpj" target="__blank"  style="color: #fff;">
                <i class="fab fa-github"></i>
            </a>

            <a href="https://www.linkedin.com/in/p-jagadeesh-22923b18b/" target="__blank"  style="color: #fff;">
                <i class="fab fa-linkedin"></i>
            </a>
            
            <a href="https://www.instagram.com/jagadeesh2001/" target="__blank"  style="color: #fff;">
                <i class="fab fa-instagram"></i>
            </a>

            <a href="https://www.facebook.com/jagadeesh.PJ.13/" target="__blank"  style="color: #fff;">
                <i class="fab fa-facebook"></i>
            </a>

        </div>
    </div>
</footer>


    <script src="static/js/typewriter.js"></script>
     <!-- jQuery -->
    <script type="text/javascript" src="static/js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="static/js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="static/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="static/js/mdb.min.js"></script>
    <!-- Your custom scripts (optional) -->
    <script type="text/javascript">
      $(function () {
        new WOW().init();
        // Add smooth scrolling to all links
        $('a').on('click', function (event) {
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== '') {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate(
              {
                scrollTop: $(hash).offset().top,
              },
              800,
              function () {
                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              }
            );
          } // End if
        });
      });
    </script>
</body>

</html>
