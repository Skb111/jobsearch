
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


    <?php
        if(isset($_POST['submit'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM choices WHERE course LIKE '%$search%' OR descriptions LIKE '%$search%'";
            $result = mysqli_query($conn, $sql);
            $queryResult = mysqli_num_rows($result);
            echo "<h4 class='text-center mt-4'>There are $queryResult found!</h4>";
            if($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                          echo    "<div class='container text-dark'>
                          <div class='row'>
                              <div class='col-md-6 col-sm-12'>
                                  <div class='card-body'>
                                  <img src='./imgs1/".$row['image']."' style='border-radius: 15px;' class='img-fluid'>
                                </div>
                              </div>
                              <div class='col-md-6 col-sm-12'>
                                <div class='card-body cards'>
                                  <h5 class='card-title text-R text-capitalize'>".$row['course']."</h5>
                                  
                                  <p class='card-text text-fluid'>".$row['descriptions']."</p>
                              </div>
                            </div>
                              </div>
                            </div>  
                      </div>";
                }
            }else{
                echo "<h4 class='text-dark mt-4'>There are no result found!<h4/>";
            }
            
        }
    ?>

     <!--QUOTE SECTION STARTS-->
     <section class="quote quote-section mt-5" id="quote">
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