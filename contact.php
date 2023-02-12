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
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="career.php">Careers</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link active" href="contact.php">Contact Us</a>
          </li>
        </ul>
        <!-- <ul class="navbar-nav me-5">
          <li>
            <a class="nav-link btn1" href="signup.html">Sign Up</a>
          </li>
          <li>
            <a class="nav-link btn2" href="signin.html">Sign In</a>
          </li>
        </ul> -->
      </div>
    </div>
  </nav> 
  <!--- NAV ENDS-->
         

      <!---CONTACT FORM SECTION STARTS--->
      <section class="contacts contacts-section" id="contacts">
                <div class="container text-black ">
                    <div class="row">
                        <div class="col-12">
                            <h1 class="contact-header  text-capitalize text-center">Contact Us</h1>
                            <p class="contact-info text-center col-md-12 align-items-center justify-content-center">
                              we value your feedback and are always here to help. If you have any questions or concerns<br/>
                              about our services, please don't hesitate to reach out.
                            </p> 
                            <form class="row g-3 py-4  align-items-center justify-content-center" method="POST" action="send.php">
                                <div class="col-md-10">
                                    <label class="labels">Name</label>
                                    <input type="text" class="form-control form-control-1" id="uname" placeholder="Please Enter Your Name" name="uname">
                                  </div>
                                <div class="col-md-10">
                                    <label class="labels">Email</label>
                                    <input type="email" class="form-control form-control-1" id="email" placeholder="Please Enter Your Name" name="email">
                                  </div>
                                <div class="col-md-10">
                                 <label class="labels">Subject</label>
                                  <input type="text" class="form-control form-control-2" id="subject" placeholder="Please Enter The Subject Of Your Mail" name="subject">
                                </div>
                                <div class="col-md-10">
                                  <label class="labels">Message</label>
                                   <textarea name="message" id="" cols="60" rows="10" class="textarea1 form-control" placeholder="Please Enter Your Message"></textarea>
                                 </div>
                                  <button type="submit" class="cont-btn col-md-10 mb-3" id="cont-btn" name="submit">Submit</button>
                              </form>
                        </div>
                    </div>
                </div>
      </section> 
      <!--- CONTACT FORM SECTION ENDS--->
 

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
<script src="./js/script.js"></script>
<script src="./js/index.js"></script>
</body>
</html>