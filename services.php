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
                <a class="nav-link active" aria-current="page" href="services.php">Services</a>
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
       <section class="service service-section" id="service">
        <div class="container">
            <div class="row">
                <div class="col-12 ">
                    <h1 class="service-header d-block text-align-center justify-content-center">
                        <!-- Our <span class="brand-name"> Range</span> <span class="brand-name"> Of </span>Services -->
                    </h1>
                        <p class="home-header1 text-align-center justify-content-center">
                          "We are committed to staying up to date with the latest technology and industry developments 
                          to ensure that we are always able to provide the best service possible.
                          If you're interested in learning more about our services, or if you would like to request a quote, 
                          please don't hesitate to contact us. We would be more than happy to help."
                        </p>      
                </div>
            </div>
        </div>
    </section>
    <!--HERO SECTION ENDS-->

 <!--CHOOSE SECTION STARTS-->
 <section class="choose choose-section" id="choose">
    <div class="container">
       <div class="row">
         <h1 class="choose-header text-center text-capitalize">
           Services we offer 
          </h1>

           <div class="col-lg-6 mb-3 mt-3 text-center text-capitalize">
               <div class=" mb-lg-3">
                   <h3 class="choose-sub-header">Overview</h3>
                   <p class="p2"> Our website provides a comprehensive range of career-related services
                     to help individuals advance their careers. Our services include career coaching, job search
                      assistance, and professional development training. Our team of experts has extensive
                       experience and knowledge in various industries and is dedicated to helping our clients achieve their professional goals.
                     </p>
               </div>
           </div>
           <div class="col-lg-6 mb-3 mt-3 text-center text-capitalize">
               <div class=" mb-lg-3">
                   <h3 class="choose-sub-header"> Service Detail</h3>
                   <p class="p2"> Our career coaching services include guidance on career planning, goal setting,
                     and job search strategies. Our job search assistance services include resume writing, interview
                      coaching, and networking support. Our professional development training services include workshops
                     and seminars on key skills such as time management, effective communication, and leadership.
                  </p>
               </div>
           </div>
       </div>
       <div class="row">
           <div class="col-lg-6 mb-3 mt-3 text-center">
               <div class=" mb-lg-3">
                   <h3 class="choose-sub-header text-capitalize">Testimonials</h3>
                   <p class="p2">
                     "I was struggling to find the right job but with the help of the career coach I was able to identify my strengths and weaknesses,
                     and find a job that was the perfect fit for me." - Jane Doe, recent graduate
                     </p>
               </div>
           </div>
           <div class="col-lg-6 mb-3 mt-3 text-center">
               <div class=" mb-lg-3">
                   <h3 class="choose-sub-header text-capitalize"> Case Studies</h3>
                   <p class="p2">
                     We helped John Smith to advance his career by providing him with
                     professional development training on leadership skills.
                     He was able to secure a promotion within 6 months of completing the training.
                     </p>
               </div>
           </div>

           

       </div>
     </div>
 </section>
   <!--CHOOSE SECTION ENDS-->

      <!---ACCORDION STARTS--->
        <section class="accordion-section">
          <div class="container-fluid">
            <div class="row">
              <h3 class="text-center text-capitalize mb-2">FREQUENTLY ASKED QUESTION(FAQ)</h3>
              <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  What is career options all about ?
                </button>
              </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  We are dedicated to providing our users with the highest level of service and quality.
                  Our team is made up of highly skilled and experienced professionals who are passionate
                  about what they do. We pride ourselves on our ability to understand the unique needs 
                  of each of our customers and to provide customized solutions to meet those needs. 
                  Our mission is to [Give the right guidiance on career choices].
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                  What is a career?
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  A career is a person's journey through learning, work and other aspects of life. It refers to the progress and actions taken by 
                  an individual in pursuit of lifelong learning and work fulfillment.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                  How do I know if a certain career is right for me?
                </button>
              </h2>
              <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  You can determine if a career is right for you by researching the job responsibilities, necessary skills, and required education and experience.
                   You can also speak with people in the field and shadow or volunteer to gain hands-on experience.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                  What steps should I take to start a new career?
                </button>
              </h2>
              <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                 To start a new career, you should first research and gain an understanding of the field and the skills required. Then, you can pursue relevant education or training, network with professionals in the field, and gain hands-on experience through volunteering or internships.
                 Finally, you should apply for jobs and be prepared to interview and sell yourself.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                  What skills are important in a career?
                </button>
              </h2>
              <div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  The skills that are important in a career depend on the specific job, but some of the most important skills include: 
                  communication, problem-solving, critical thinking, adaptability, teamwork, leadership, and technical proficiency.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingSix">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                  What is the job outlook for a specific career?
                </button>
              </h2>
              <div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  The job outlook for a specific career can be found through the Bureau of Labor Statistics,
                   which provides information on job growth, salary, and other important data.

                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingSeven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                  How can I make the most of my career?
                </button>
              </h2>
              <div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                 To make the most of your career, it is important to continually update your skills, network with professionals in your field,
                 and seek out new opportunities for growth and development. Additionally, maintaining a positive attitude, setting goals,
                 and staying focused on your long-term aspirations will help you succeed in your career.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingEight">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                How can I find job opportunities in my field?
                </button>
              </h2>
              <div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                You can find job opportunities in your field by using online job search websites, reaching out to professional organizations, 
                attending job fairs and networking events, and applying directly to companies in your desired field.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingNine">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                What should I consider when choosing a career?
                </button>
              </h2>
              <div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                When choosing a career, you should consider your interests, skills, and values. You should also consider job growth, salary, benefits, and job stability.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                 Can I change my career later on?
                </button>
              </h2>
              <div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                 Yes, you can change your career later on. Many people change careers several times throughout their lives, and it is never too late to make a change.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingEleven">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEleven" aria-expanded="false" aria-controls="flush-collapseEleven">
                How important is a college degree for a career?
                </button>
              </h2>
              <div id="flush-collapseEleven" class="accordion-collapse collapse" aria-labelledby="flush-headingEleven" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                The importance of a college degree varies depending on the field and the specific job. Some fields require a degree, while others allow for alternative education and experience.
                 It is important to research the specific requirements for your desired career.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwelve">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwelve" aria-expanded="false" aria-controls="flush-collapseTwelve">
                What kind of job opportunities can I expect with a certain degree?
                </button>
              </h2>
              <div id="flush-collapseTwelve" class="accordion-collapse collapse" aria-labelledby="flush-headingTwelve" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                The job opportunities you can expect with a certain degree will depend on the field and the specific program of study. It is important to research the career options for your degree and consider
                 the job outlook for the field.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingThirteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThirteen" aria-expanded="false" aria-controls="flush-collapseThirteen">
                Can I advance in my career without a college degree?
                </button>
              </h2>
              <div id="flush-collapseThirteen" class="accordion-collapse collapse" aria-labelledby="flush-headingThirteen" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                Yes, you can advance in your career without a college degree. Many careers allow for advancement based on experience, skills, and performance. However, some careers may require further education and certifications.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFourteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFourteen" aria-expanded="false" aria-controls="flush-collapseFourteen">
                What is the role of networking in a career?
                </button>
              </h2>
              <div id="flush-collapseFourteen" class="accordion-collapse collapse" aria-labelledby="flush-headingFourteen" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  Networking plays a significant role in a career as it helps you to build relationships and connections with professionals in your field. 
                  This can lead to job opportunities, mentorship, and valuable industry insights.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingFifteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFifteen" aria-expanded="false" aria-controls="flush-collapseFifteen">
                What is the importance of continuing education in a career?
                </button>
              </h2>
              <div id="flush-collapseFifteen" class="accordion-collapse collapse" aria-labelledby="flush-headingFifteen" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                Continuing education is important in a career as it keeps you updated on industry trends, helps you to acquire new skills and knowledge,
                 and demonstrates a commitment to personal and professional development.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingSixteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSixteen" aria-expanded="false" aria-controls="flush-collapseSixteen">
                How can I balance my personal and professional life?
                </button>
              </h2>
              <div id="flush-collapseSixteen" class="accordion-collapse collapse" aria-labelledby="flush-headingSixteen" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                Balancing your personal and professional life can be challenging, but it is important to prioritize your time and set boundaries. You can also consider flexible work arrangements,
                 such as telecommuting or part-time work, to help manage your personal and professional responsibilities.
                </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingSeventeen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeventeen" aria-expanded="false" aria-controls="flush-collapseSeventeen">
                What is the importance of a strong work ethic in a career?
                </button>
              </h2>
              <div id="flush-collapseSeventeen" class="accordion-collapse collapse" aria-labelledby="flush-headingSeventeen" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                  A strong work ethic is important in a career as it demonstrates a dedication to your job, commitment to excellence, and a positive attitude towards your work. 
                  It can also lead to opportunities for advancement and recognition within your organization.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingEighteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEighteen" aria-expanded="false" aria-controls="flush-collapseEighteen">
                How can I improve my chances of getting hired for a job?
                </button>
              </h2>
              <div id="flush-collapseEighteen" class="accordion-collapse collapse" aria-labelledby="flush-headingEighteen" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                 You can improve your chances of getting hired for a job by building a strong resume and cover letter, preparing for interviews, networking with professionals in your field,
                 and demonstrating a positive attitude and commitment to the job.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingNineteen">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNineteen" aria-expanded="false" aria-controls="flush-collapseNineteen">
                What is the importance of internships in a career?
                </button>
              </h2>
              <div id="flush-collapseNineteen" class="accordion-collapse collapse" aria-labelledby="flush-headingNineteen" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                Internships are important in a career as they provide hands-on experience, exposure to the industry and its culture, and the opportunity to build professional relationships and network. 
                They can also lead to full-time job offers and a competitive edge in the job market.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwenty">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwenty" aria-expanded="false" aria-controls="flush-collapseTwenty">
                How can I advance in my career?
                </button>
              </h2>
              <div id="flush-collapseTwenty" class="accordion-collapse collapse" aria-labelledby="flush-headingTwenty" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                 To advance in your career, you can seek out new opportunities for growth and development, continuously update your skills, network with professionals in your field,
                 and demonstrate a positive attitude and commitment to your job.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwenty-one">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwenty-one" aria-expanded="false" aria-controls="flush-collapseTwenty-one">
                What are the key qualities of a successful career?
                </button>
              </h2>
              <div id="flush-collapseTwenty-one" class="accordion-collapse collapse" aria-labelledby="flush-headingTwenty-one" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                 The key qualities of a successful career include a positive attitude, strong work ethic, commitment to continuous learning, adaptability,
                 teamwork, communication skills, and a focus on personal and professional growth.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwenty-two">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwenty-two" aria-expanded="false" aria-controls="flush-collapseTwenty-two">
                What is the role of teamwork in a career?
                </button>
              </h2>
              <div id="flush-collapseTwenty-two" class="accordion-collapse collapse" aria-labelledby="flush-headingTwenty-two" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                Teamwork is an important aspect of a career as it allows individuals to collaborate and share ideas, skills, and responsibilities. 
                Effective teamwork can lead to increased efficiency, productivity, and job satisfaction.
                 </div>
              </div>
            </div>
            <div class="accordion-item">
              <h2 class="accordion-header" id="flush-headingTwenty-three">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwenty-three" aria-expanded="false" aria-controls="flush-collapseTwenty-three">
                What are the benefits of having a successful career?
                </button>
              </h2>
              <div id="flush-collapseTwenty-three" class="accordion-collapse collapse" aria-labelledby="flush-headingTwenty-three" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                 The benefits of having a successful career include job satisfaction, financial stability, opportunities for growth and advancement, and a sense of purpose and fulfillment.
                 It can also lead to improved personal and professional relationships, and a sense of accomplishment and self-esteem.
                 </div>
              </div>
            </div>
          </div>
            </div>
          </div>
        </section>
      <!---ACCORDION ENDS--->

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
<script src="../js/index.js"></script>   
<script src="./js/script.js"></script>
</body>
</html>