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
<<<<<<< HEAD:contact.html
            <a class="nav-link active" href="contact.html">Contact Us</a>
=======
            <a class="nav-link active" href="contact.php">Contact Us</a>
>>>>>>> c255bc3ffcdceb603a69cd6d4503a7bfeb3e895a:contact.php
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
                              If you are a company searching how to hire temporary or foreign workers, please fill out the form below to get a free assessment.
                               We are always glad to help Canadian businesses address their labour shortages with qualified staff.
                            </p> 
                            <form class="row g-3 py-4  align-items-center justify-content-center" method="POST" action="send.php">
                                <div class="col-md-10">
                                    <label class="labels">Name</label>
                                    <input type="text" class="form-control form-control-1" id="uname" placeholder="Please Enter Your Name" name="uname">
                                  </div>
                                <div class="col-md-5">
                                 <label class="labels">Lastname</label>
                                  <input type="text" class="form-control form-control-2" id="lname" placeholder="" name="lname">
                                </div>
                                <div class="col-md-5">
                                    <label class="labels">Company Name</label>
                                    <input type="text" class="form-control form-control-1" id="cname" placeholder="" name="cname">
                                  </div>
                                <div class="col-md-5">
                                 <label class="labels">Email</label>
                                  <input type="text" class="form-control form-control-2" id="email" placeholder="" name="email">
                                </div>
                                <div class="col-md-5">
                                  <label class="labels">How did you hear about us?</label>
                                   <!-- <input type="text" class="form-control form-control-2" id="Email" placeholder="" name="Email"> -->
                                   <ul class="navbar-nav hear" id="social_icon">
                                    <li class="nav-item ">
                                      <a class="nav-link" href="#">Facebook</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link twit-active" href="#">Twitter</a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#">WhatsApp</a>
                                    </li>
                                    <li class="nav-item ">
                                      <a class="nav-link" href="#">Instagram</a>
                                    </li>
                                    <li class="nav-item ">
                                      <a class="nav-link" href="#">Youtube</a>
                                    </li>
                                  </ul>
                                 </div>
                                 <div class="col-md-5">
                                  <label class="labels">Message</label>
                                   <!-- <input type="text" class="form-control form-control-2" id="Email" placeholder="" name="Email"> -->
                                   <textarea name="" id="message" cols="" rows="8" class="form-control textarea1" ></textarea>
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
          <div class="row mb-5">
            <div class="col-lg-4 mb-5 py-4">
              <!-- <img src="./imgs1/logo2.png" alt="" srcset=""> -->
                 <p class="p5"> 
                  At Intersource Global Inc., we apply the most highly 
                  developed and advanced methodologies that strive and
                   recruit qualified candidates that meet the staffing
                    need of companies.
                  </p>
               </div>
                    <div class="col-lg-4 mb-2 py-5">
                      <ul class="list-unstyled footer-link">
                        <li class="d-flex ">
                          <span class="me-3">Privacy & Terms</span><span class="text-dark">Help & Support</span>
                        </li>
                        <li class="d-flex">
                          <span class="me-5">Feedbacks</span> <span class="text-dark">Feedbacks</span>
                        </li>
                        <li class="d-flex">
                          <span class="me-5">Contact Us</span><span class="text-dark">Contact Us</span>
                        </li>
                      </ul>
                    </div>
                    
                    <div class="col-lg-4 mb-2 py-5">
                      <p>
                        Subscribe to our newsletter for more info.
                      </p>
                      <form action="" >
                        <input type="search" class="form-control form-control3 mb-2" placeholder="Enter Email" aria-label="Search" aria-describedby="search-addon" />
                              <span class=" border-0" id="search-addon">
                                <!-- <button type="submit" class="btn ">search</button> -->
                                <button class=" subscribe-btn btn-block py-3"  type="submit">Subscribe</button>
                              </span>
                      </form>
                    </div>
                      <hr class="mb-2 col mx-5">  
                  </div>
                  <div class="row align-items-center">
                    <div class="col-md-7 col-lg-6">
                      <p>
                        Copyright &copy; 2022 All rights reserved by:
                        <a href="#" style="text-align:none ;">
                          <strong class="text-warning">skb</strong>
                        </a>
                      </p>
                    </div>
                    <div class="col-md-5 col-lg-6">
                      <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                          <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-dark" ><i class="fab fa-facebook "></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-dark" ><i class="fab fa-instagram"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-dark" ><i class="fab fa-twitter"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-dark" ><i class="fab fa-whatsapp"></i></a>
                          </li>
                          <li class="list-inline-item">
                            <a href="#" class="btn-floating btn-sm text-dark" ><i class="fab fa-youtube"></i></a>
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