<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body style="width:100%;">
<?php include './includes/nav.php';?>

<!-- carousel starts -->
<div class="container-fluid mt-5">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="/assets/images/slider-img-1.jpg" class="d-block w-100" alt="img">
          </div>
          <div class="carousel-item">
            <img src="/assets/images/slider-img-3.jpg" class="d-block w-100" alt="img">
          </div>
          <div class="carousel-item">
            <img src="/assets/images/slider-img-1.jpg" class="d-block w-100" alt="img">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- Carousel ends here -->
      <!-- breadcrumb starts -->
      <ul class="breadcrumb mt-3">
        <li><a href="">Home</a></li>
        <li><a href="pictures.php">Pictures</a></li>
        <li><a href="#">Blog</a></li>
        <li>Kenya</li>
      </ul>
      <!-- breadcrumb ends -->
      <!-- Service starts -->
      <div class="container mt-5">
        <h3 class="text-center mt-5 text-uppercase">Our Services</h3>

        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5 ">
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a short card.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Card title</h5>
                  <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                </div>
              </div>
            </div>

            <div class="col">
                <div class="card h-100">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>

              <div class="col">
                <div class="card h-100">
                  <img src="..." class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                  </div>
                </div>
              </div>
          </div>
          
    </div>

    <!-- Team Section -->
       <!-- card -->

       <section id="team" class="pb-5">
      <div class="container">
          <h5 class="section-title h1">OUR TEAM</h5>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
          <div class="row ">
              <!-- Team member -->
              <div class="col-12 col-sm-6 col-md-3">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_01.png" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-facebook"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-skype"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-google"></i>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./Team member -->
              <!-- Team member -->
              <div class="col-12 col-sm-6 col-md-3">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_02.png" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-facebook"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-skype"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-google"></i>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./Team member -->
              <!-- Team member -->
              
              <!-- Team member -->
              <div class="col-12 col-sm-6 col-md-3">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_04.jpg" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-facebook"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-skype"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-google"></i>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./Team member -->
              <!-- Team member -->
              <div class="col-12 col-sm-6 col-md-3">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="https://sunlimetech.com/portfolio/boot4menu/assets/imgs/team/img_05.png" alt="card image"></p>
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.</p>
                                      <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sunlimetech</h4>
                                      <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.This is basic card with image on top, title, description and button.</p>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-facebook"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-skype"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="#">
                                                  <i class="fa fa-google"></i>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./Team member -->
             

  
          </div>
      </div>
  </section>
  <!-- Team -->


    <!-- TEam section End -->
    <div class="container mt-5">
        <h3 class="text-center mt-5 mb-5 text-uppercase">Portfolio</h3>

        <div class="row justify-content-center align-items-center g-2">
            <div class="col-8">
                <p>
                 Your privacy is important to us. This privacy statement explains the personal data Microsoft processes, how Microsoft processes it, and for what purposes 
                 Microsoft offers a wide range of products, including server products used to help operate enterprises worldwide, devices you use in your home, software that students use at school, and services developers use to create and host what’s next. References to Microsoft products in this statement include Microsoft services, websites, apps, software, servers, and devices.
                 
                 Please read the product-specific details in this privacy statement, which provide additional relevant information. This statement applies to the interactions Microsoft has with you and the Microsoft products listed below, as well as other Microsoft products that display this statement.
                 
                 Young people may prefer starting with the Privacy for young people page. That page highlights information that may be helpful for young people.
                </p>
              
            </div>
            <div class="col-4">
              <img src="/assets/images/slider-img-1.jpg" height="250px" width="350px">
                
            </div>
        </div>

        
    </div>
    <div class="container mt-5 mb-5">
      <div class=" mt-5 mb-5">
        <h3 class="text-center text-uppercase">contact us</h3>

<!--Section: Contact v.2-->
<section class="mb-4">
  <!--Section description-->
  <p class="text-center w-responsive mx-auto mb-5 mt-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
      a matter of hours to help you.</p>

  <div class="row">

      <!--Grid column-->
      <div class="col-md-9 mb-md-0 mb-5">
        <form id="contact-form" name="contact-form" action="mail.php" method="POST">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="text" id="name" name="name" class="form-control" required>
                        <label for="name" class="">Your name</label>
                    </div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6">
                    <div class="md-form mb-0">
                        <input type="email" id="email" name="email" class="form-control" required>
                        <label for="email" class="">Your email</label>
                    </div>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <div class="col-md-12">
                    <div class="md-form mb-0">
                        <input type="text" id="subject" name="subject" class="form-control" required>
                        <label for="subject" class="">Subject</label>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-12">
                    <div class="md-form">
                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea" required></textarea>
                        <label for="message">Your message</label>
                    </div>
                </div>
            </div>
            <!--Grid row-->

            <div class="text-center text-md-left">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
        <div class="status"></div>
    </div>
      <!--Grid column-->

      <!--Grid column-->
      <div class="col-md-3 text-center">
          <ul class="list-unstyled mb-0">
              <li><i class="bi bi-map-marker-alt fa-2x"></i>
                  <p>Nyeri, CA 94126,KENYA</p>
              </li>

              <li><i class="bi bi-telephone mt-4 fa-2x"></i>
                  <p>+ 01 234 567 89</p>
              </li>

              <li><i class="bi bi-envelope mt-4 fa-2x"></i>
                  <p>contact@mdbootstrap.com </i> </p>
              </li>
          </ul>
      </div>
      <!--Grid column-->

  </div>

</section>
<!--Section: Contact v.2-->
      </div>

      

    </div>

    <!-- End of .container -->

 


</div>

<?php include './includes/footer.php';?>


    
</body>
</html>