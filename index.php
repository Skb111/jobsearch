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
                  <a class="nav-link active" aria-current="page" href="index.php">Home</a>
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
                  <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
              </ul>
            </div>
          </div>
      </nav> 
        <!--- NAV ENDS-->

        <!--HERO SECTION STARTS-->
      <section class="home hero-section" id="home">
            <div class="container">
                <div class="row">
                    <div class="col-12 ">
                        <h6 class="home-header text-align-center justify-content-center">
                            <!-- Get the <span> best</span> <br> <span>course </span>options <br> with no stress -->
                              Welcome to CareerOptions😊 We are thrilled to have you here. Browse our site to learn more about your courses,
                              and career opportunities.
                        </h6>
                         <form method="POST" id="searchform" name="myForm" onsubmit="return validateForm()" class="searchform" action="search.php">
                            <div class="input-group ">
                                  <input class="form-control"  type="text" value="" name="search" id="s" placeholder="Search for anything" />
                                  <input class="btn go " type="submit" name="submit" id="searchsubmit" value="Go" />
                                  <!-- <button type="submit" name="submit">submit</button> -->
                              </div>
                          </form>
                    </div>
                </div>
            </div>
      </section>
        <!--HERO SECTION ENDS-->
      
        <!--CHOOSE SECTION STARTS-->
      <section class="choose choose-section" id="choose">
         <div class="container">
            <div class="row">
              <h1 class="choose-header text-center">
                Choose From Our  <br>lists Of Career Choices 
              </h1>
                <div class="col-lg-4 mb-3 mt-3 text-center text-capitalize">
                    <div class=" mb-lg-3">
                        <h3 class="choose-sub-header">programming</h3>
                        <p class="p2">
                          A programming language is a system of notation for writing computer programs.
                          Most programming languages are text-based formal languages, but they may also be graphical. 
                          They are a kind of computer language.
                          The description of a programming language is usually split into the two components
                           of syntax (form) and semantics (meaning), which are usually defined by a formal language. 
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mt-3 text-center text-capitalize">
                    <div class=" mb-lg-3">
                        <h3 class="choose-sub-header">Engineering</h3>
                        <p class="p2">Engineering is the use of scientific principles to design
                           and build machines, structures, and other items, including bridges,
                            tunnels, roads, vehicles, and buildings. The discipline of engineering
                             encompasses a broad range of more specialized fields of engineering, 
                             each with a more specific emphasis on particular areas of applied mathematics,
                           applied science, and types of application. See glossary of engineering...
                          </p>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mt-3 text-center text-capitalize">
                    <div class=" mb-lg-3">
                        <h3 class="choose-sub-header">Chartered Accountancy</h3>
                        <p class="p2">Chartered accountants were the first accountants to form a 
                          professional accounting body, initially established in Scotland in 1854. 
                          The Edinburgh Society of Accountants (1854), the Glasgow Institute of 
                          Accountants and Actuaries (1854) and the Aberdeen Society of Accountants (1867) 
                          were each granted a royal charter almost from their inception. The title is
                           an internationally recognised professional designation...
                          </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3 mt-3 text-center">
                    <div class=" mb-lg-3">
                        <h3 class="choose-sub-header text-capitalize">Medicine</h3>
                        <p class="p2">Medicine is also a key mention among the toughest courses in the world which 
                          mainly requires patience, knowledge of medical care, a strong stomach and willing 
                          altruistic nature. It is widely known that a good gesture helps people recover from a 
                          dire situation. Nurses assist doctors, therapists, patients and their families. You need
                           to have good GPAs in Biology, Chemistry, Maths, Psychology and other important subjects...
                          </p>
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mt-3 text-center">
                    <div class=" mb-lg-3">
                        <h3 class="choose-sub-header text-capitalize">Finance</h3>
                        <p class="p2">
                          This sought-after area of study in the Commerce stream relates to every aspect of 
                          monetary management and establishment. To build a promising career in Finance, one needs to have
                          the analytic ability, unique funding methods, etc. as well as the knowledge of financial management,
                          accounting, risk management, amongst others which makes it one of the toughest courses in the world...
                    </div>
                </div>
                <div class="col-lg-4 mb-3 mt-3 text-center">
                    <div class=" mb-lg-3">
                        <h3 class="choose-sub-header text-capitalize">Law</h3>
                        <p class="p2">Law is a set of rules that are created and are enforceable by 
                          social or governmental institutions to regulate behavior,with its precise
                           definition a matter of longstanding debate.It has been variously 
                           described as a science and as the art of justice.State-enforced
                            laws can be made by a group legislature or by a single legislator, resulting 
                            in statutes; by the executive through decrees and regulations... 
                          </p>
                    </div>
                </div>
            </div>
          </div>
      </section>
        <!--CHOOSE SECTION ENDS-->

      <section class="range range-section" id="range">
        <div class="container  text-dark">
            <div class="row">
                <div class="col-12">
                    <h1 class="range-header text-capitalize text-center">
                      Career opportunities
                    </h1>
                    <p class="p3 text-center text-dark text-capitalize">
                     Your future is in your hands,it's yours to determine 😊
                    </p>
                    <div class="range-img">
                      <div class="box">
                        <img src="./imgs1/imgxii.jpg" class="img-fluid" alt="" srcset="">
                        <h5 class="bottom-text text-capitalize text-dark bg-light">Data analytics</h5>
                      </div>
                      <div class="box">
                        <img src="./imgs1/img13.png" class="img-fluid" alt="" srcset="">
                        <h5 class="bottom-text text-capitalize">Civil Engineering</h5>
                      </div>
                      <div class="box">
                        <img src="./imgs1/doctor1 - Copy.jpg" class="img-fluid" alt="" srcset="">
                        <h5 class="bottom-text">Health Care</h5>
                      </div>
                      <div class="box">
                        <img src="./imgs1/biologist - Copy.jpg" class="img-fluid" alt="" srcset="">
                        <h5 class="bottom-text text-capitalize text-dark bg-light">Botany</h5>
                      </div>
                    </div>
                  
                </div>
            </div>
            <div class="row">
              <div class="col-12">
                  <div class="range-img">
                    <div class="box">
                      <img src="./imgs1/imgx3.jpg" class="img-fluid" alt="" srcset=""> 
                      <h5 class="bottom-text text-dark bg-light">Stock Exchange</h5> 
                    </div>
                    <div class="box">
                      <img src="./imgs1/tech.png" class="img-fluid" alt="" srcset="">
                      <h5 class="bottom-text text-capitalize">Tech Expert</h5>
                    </div>
                    <div class="box">
                      <img src="./imgs1/doctor - Copy.jpg" class="img-fluid" alt="" srcset="">
                      <h5 class="bottom-text text-capitalize text-dark bg-light">Doctors</h5>
                    </div>
                    <div class="box">
                      <img src="./imgs1/imgx2.jpg" class="img-fluid" alt="" srcset="">
                      <h5 class="bottom-text text-capitalize">Banking</h5>
                    </div>
                  </div>
                
              </div>
          </div>
        </div>
      </section>
        <!--LABOUR MARKETS SECTION ENDS-->

        <!--RANGE INDUSTRIES SECTION STARTS 276 x 523-->
      <section class="range range-section" id="range">
          <div class="container  text-dark">
              <div class="row">
                  <div class="col-12">
                    <h1 class="labour-header text-center text-capitalize mb-3">
                      Varieties Of Career Paths 
                    </h1>
                      <p class="p3 text-center text-dark text-capitalize">
                        Take what you like as a course of study and you'll never have the feeling that you're working 😊😊😊
                      </p>
                      <div class="range-img">
                        <div class="box">
                          <img src="./imgs1/imgg3 - Copy.jpg" class="img-fluid" alt="" srcset="">
                        </div>
                        <div class="box">
                          <img src="./imgs1/teacher1 - Copy.jpg" class="img-fluid" alt="" srcset="">
                        </div>
                        <div class="box">
                          <img src="./imgs1/img28 - Copy.png" class="img-fluid" alt="" srcset="">
                        </div>
                        <div class="box">
                          <img src="./imgs1/lab - Copy.jpg" class="img-fluid" alt="" srcset="">
                        </div>
                      </div>
                    
                  </div>
              </div>
              <div class="row">
                <div class="col-12">
                  <div class="range-img">
                    <div class="box">
                      <img src="./imgs1/imgg.jpg" class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="box">
                      <img src="./imgs1/engineers - Copy.jpg" class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="box">
                      <img src="./imgs1/botanist - Copy.jpg" class="img-fluid" alt="" srcset="">
                    </div>
                    <div class="box">
                      <img src="./imgs1/imgx - Copy.jpg" class="img-fluid" alt="" srcset="">
                    </div>
                  </div>
                  
                </div>
            </div>
          </div>
      </section>
        <!--RANGE INDUSTRIES SECTION ENDS-->

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
    </body>
    </html>
