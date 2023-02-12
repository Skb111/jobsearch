<?php
    include 'header.php';
?>

    <nav class="navbar navbar-expand-lg fixed-top bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
            <!-- <img src="imgs1/logo2.png" alt="" srcset="" id="logo-image" class="h-100 logo"> -->
            <h3 class="brand-name mx-5">CareerOptions</h3>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="career.php">Careers</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="services.php">Services</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="contact.php">Contact Us</a>
              </li>
            </ul>
          </div>
        </div>
      </nav> 
      <!--- NAV ENDS-->

 <!--WHY SECTION STARTS-->
 <section class="why why-section" id="why">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-3" style="color: purple; font-weight: 600; font-size: 50px;">About Us</h1>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="./imgs1/about-logo.jpg" class="img-fluid" alt="Company Logo">
            </div>
            <div class="col-md-6">
                <p>
                  We are dedicated to providing our users with the highest level of service and quality.
                  Our team is made up of highly skilled and experienced professionals who are passionate about 
                  what they do. 
                  We pride ourselves on our ability to understand the unique needs of each of our customers and 
                  to provide customized solutions to meet those needs.
  
                  Our mission is to [Give the right guidiance on career choices].
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h3>Our Mission</h3>
                <p>
                  We understand that choosing a career can be a daunting task, which is why we offer a wide
                   range of courses to help students explore different fields and find the right path for them.
                    Our courses are taught by industry experts who are passionate about sharing their knowledge
                     and experience with students. They provide students with a combination of theoretical and practical knowledge,
                   which allows students to apply what they learn in the classroom to real-world situations.
                </p>
            </div>
            <div class="col-md-6">
                <h3>Our Vision</h3>
                <p>
                  We are also committed to using cutting-edge technology to enhance the learning experience and make it more interactive and engaging.
                  Our vision is to create a community of lifelong learners who are equipped to meet the demands of the ever-changing job market. We want to give students the tools they need to succeed in their careers,
                   and to be a resource for them throughout their professional lives.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h3>Meet Our Team</h3>
                <hr>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="./imgs1/abt-demo1.png" class="card-img-top" alt="Employee 1">
            <div class="card-body">
            <h5 class="card-title text-white">John Doe</h5>
            <h6 class="card-subtitle mb-2 text-muted">CEO</h6>
                 <p class="card-text text-white">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna vel convallis convallis, ipsum velit vehicula velit, vel malesuada enim enim in magna.
                 </p>
            </div>
            </div>
            </div>
          <div class="col-md-4">
          <div class="card">
          <img src="./imgs1/abt-demo2.jpg" class="card-img-top" alt="Employee 2">
          <div class="card-body">
          <h5 class="card-title text-white">Jane Smith</h5>
          <h6 class="card-subtitle mb-2 text-muted">CEO</h6>
          <p class="card-text text-white">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna vel convallis convallis, ipsum velit vehicula velit, vel malesuada enim enim in magna.
          </p>
          </div>
          </div>
          </div>
        <div class="col-md-4">
        <div class="card">
        <img src="./imgs1/abt-demo3.jpg" class="card-img-top" alt="Employee 3">
        <div class="card-body">
        <h5 class="card-title text-white">Mike Brown</h5>
        <h6 class="card-subtitle mb-2 text-muted">CEO</h6>
        <p class="card-text text-white">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed auctor, magna vel convallis convallis, ipsum velit vehicula velit, vel malesuada enim enim in magna.
         </p>
        </div>
        </div>
        </div>
        </div>
</section>
<!--WHY SECTION ENDS-->

        <!--QUOTE SECTION STARTS-->
        <section class="quote quote-section" id="quote">
          <div class="container-fluid text-white ">
              <div class="row">
                  <div class="col quote1">
                    <div class="card text-center border-0">
                      <div class="card-body quote2 py-5 border-0">
                        <h3 class="card-title card-title1 text-capitalize ">what are you waiting for?</h3>
                        <p class="card-text text-white p4">we value your feedback and are always here to help!</p>
                        <a href="contact.php" class="req-btn py-3">Request a quote</a>
                    </div>
                    </div>
                  </div>
              </div>
          </div>
      </section>
        <!--QUOTE SECTION ENDS-->

        <!--FOOTER SECTION STARTS-->
<section class="footer footer-section" id="footer">
  <footer class="site-footer">
      <div class="container">
        <div class="row">  
      <hr class="mb-2 col mx-5">  
  </div>
  <div class="row align-items-center">
    <div class="col-md-7 col-lg-6">
      <p>
        Copyright &copy; 2023 All rights reserved by:
        <a href="#" style="text-align:none ;">
          <strong class="text-warning">kiki</strong>
        </a>
      </p>
    </div>
    <div class="col-md-5 col-lg-6">
      <div class="text-center text-md-right">
        <ul class="list-unstyled list-inline">
          <li class="list-inline-item">
            <a href="https://web.facebook.com/kiki.joseph.02?mibextid=LQQJ4d&_rdc=1&_rdr" class="btn-floating btn-sm text-dark" ><i class="fab fa-facebook "></i></a>
          </li>
          <li class="list-inline-item">
            <a href="https://instagram.com/kix_of_lasu?igshid=NTdlMDg3MTY=" class="btn-floating btn-sm text-dark" ><i class="fab fa-instagram"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="https://twitter.com/KixUnbothered" class="btn-floating btn-sm text-dark" ><i class="fab fa-twitter"></i></a>
          </li>
          <li class="list-inline-item">
            <a href="http://wa.me/2347066464614" class="btn-floating btn-sm text-dark" ><i class="fab fa-whatsapp"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
</footer>
</section>
      <!--FOOTER SECTION ENDS-->


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" 
integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" 
integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" 
crossorigin="anonymous">
</script>
<script src="./js/data.js"></script>  
<script src="./js/index.js"></script>  
<script src="./js/script.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>
</html>