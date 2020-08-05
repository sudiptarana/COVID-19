<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Covid-19</title>

  <?php include 'link/links.php'; ?>

  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/2.png" rel="icon">
  <link href="assets/img/2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body onload="fetch()">

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo mr-auto">
        <h1 class="text-light"><a href="#contact"><span><b style="color: rgb(250, 90, 90);">R</b>atron</span></a><img src="assets/img/2.png" alt="" class="img-fluid"></h1>
      </div>

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="#header">Home</a></li>
          <li><a href="#ind">IN INDIA</a></li>
          <li><a href="#wo">WORLD WIDE</a></li>
          <li><a href="#wyd">What you should do</a></li>
          <li><a href="#wya">What you should avoid</a></li>
          <li><a href="#bc">BASIC CHECKUP</a></li>
          <li><a href="#contact">Contact</a></li>

          <li class="get-started"><a href="#ind">Get Started</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">#IndiaFightsCorona</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">COVID-19</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#c" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="assets/img/15.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="c" class="clients">
      <div class="container">

        <div class="row">
        
          <div class="col-lg-3 col-md-6 col-12">
            <img src="assets/img/mygov.png" class="img-fluid" alt="" data-aos="zoom-in">
            <a href="https://www.mygov.in/covid-19/" class="btn btn-danger" role="button">Visit MyGov</a>
          </div>

          <div class="col-lg-6 col-md-6 col-6">
          </div>

          <div class="col-lg-3 col-md-6 col-12">
          <a href="https://www.who.int/" class="btn btn-danger" role="button">Visit WHO</a>
        <img src="assets/img/who.png" class="img-fluid1"  alt="" data-aos="zoom-in" data-aos-delay="100">
           
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= India covid ======= -->
    <section id="ind" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>India</h2>
          <p>#IndiaFightsCorona COVID-19</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><img src="assets/img/7.png" alt="" class="img-fluid"></div>
              <h4 class="title"><a href="">New Confirmed : <span id="ncon"></span></a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><img src="assets/img/2.png" alt="" class="img-fluid"></div>
              <h4 class="title"><a href="">Total Confirmed :<span id="tcon"></span></a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><img src="assets/img/8.png" alt="" class="img-fluid"></div>
              <h4 class="title"><a href="">Total Deaths : <span id="tdea"></span></a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><img src="assets/img/1.png" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500"></div>
              <h4 class="title"><a href="">Total Recovered : <span id="trec"></span></a></h4>
            </div>
          </div>

        </div>

      </div>
    </section><!-- India covid -->

     <!-- =======  world covid ======= -->
     <section id="wo" class="counts">
      <div class="container">

      <div class="section-title" data-aos="fade-up">
          <h2>World wide</h2>
        </div>

        <div class="row">
          <div class="image col-xl-5 justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/00.png" height="10%" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <img src="assets/img/7.png" height="35px">
                    <span data-toggle="counter-up" id="NewConfirmed"></span>
                    <p><h5><strong>New Confirmed Active Cases</strong></h5></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                  <img src="assets/img/3.png" height="35px">
                    <span data-toggle="counter-up" id="TotalConfirmed"></span>
                    <p><h5><strong>Total Confirmed Active Cases</strong></h5></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                  <img src="assets/img/2.png" height="35px">
                    <span data-toggle="counter-up" id="NewDeaths"></span>
                    <p><h5><strong>New Deaths Cases</strong></h5></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                  <img src="assets/img/8.png" height="35px">
                    <span data-toggle="counter-up" id="TotalDeaths"></span>
                    <p><h5><strong>Total Deaths Cases</strong></h5></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                  <img src="assets/img/13.png" height="35px">
                    <span data-toggle="counter-up" id="NewRecovered"></span>
                    <p><h5><strong>New Recovered Cases</strong></h5></p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                  <img src="assets/img/1.png" height="53px">
                    <span data-toggle="counter-up" id="TotalRecovered"></span>
                    <p><h5><strong>Total Recovered Cases</strong></h5></p>
                  </div>
                </div>

              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= world covid Section ======= -->
    <section id="wyd" class="testimonials section-bg">
      <div class="container">

        <div class="owl-carousel testimonials-carousel" data-aos="fade-up" data-aos-delay="200">

          
          <div class="testimonial-wrap">
            <div class="testimonial-item">
            <img src="assets/img/about-2.jpg">
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
            <img src="assets/img/02.png">
            </div>
          </div>

          <div class="testimonial-wrap">
            <div class="testimonial-item">
            <img src="assets/img/banner-top.png">
            </div>
          </div>

        </div>

      </div>
    </section><!-- End world covid Section -->

    <!-- ======= Prevention Coronavirus Covid-19 ======= -->
    <section id="" class="services">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Prevention Coronavirus Covid-19</h2>
        </div>

        <div class="section-title" data-aos="fade-up">
          <h1>What you should do</h1>
         </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="background-color:#99ff99;">
              <div class="icon"><img src="assets/img/c1.jpg" alt="" class="img-fluid"></div>
              <h4 class="title"><a href="" >Wash your hands sanitizer <span id="ncon"></span></a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="background-color:#99ff99;">
            <div class="icon"><img src="assets/img/c2.jpg" alt="" class="img-fluid"></div>
              <h4 class="title"><a href="">Ware a face mask outside<span id="tcon"></span></a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300" style="background-color:#99ff99;">
            <div class="icon"><img src="assets/img/c3.jpg" alt="" class="img-fluid"></div>
              <h4 class="title"><a href="" >Cover your cough tissue paper <span id="tdea"></span></a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400" style="background-color:#99ff99;">
              <div class="icon"><img src="assets/img/c4.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500"></div>
              <h4 class="title"><a href="">Check your body regulerly <span id="trec"></span></a></h4>
            </div>
          </div>

        </div>

      </div>
    </section><!-- India covid -->

    <!-- ======= Prevention Coronavirus Covid-19 ======= -->

     <!-- ======= Prevention Coronavirus Covid-19 ======= -->
     <section id="wyd" class="services">
      <div class="container">


        <div class="section-title" data-aos="fade-up" id="wya">
          <h1>What you should avoid</h1>
         </div>

        <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100" style="background-color:#ff7777;">
              <div class="icon"><img src="assets/img/c5.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500"></div>
              <h4 class="title"><a href="" style="color:white;">Avoid contact with sick people<span id="trec"></span></a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200" style="background-color:#ff7777;">
              <div class="icon"><img src="assets/img/c6.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500"></div>
              <h4 class="title"><a href="" style="color:white;">Avoid contact animals<span id="trec"></span></a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300" style="background-color:#ff7777;">
              <div class="icon"><img src="assets/img/c7.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500"></div>
              <h4 class="title"><a href="" style="color:white;">Avoid crowded places<span id="trec"></span></a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400" style="background-color:#ff7777;">
              <div class="icon"><img src="assets/img/c8.jpg" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500"></div>
              <h4 class="title"><a href="" style="color:white;">Contaminated objects<span id="trec"></span></a></h4>
            </div>
          </div>

        </div>

      </div>
    </section><!-- India covid -->

   



    <!-- ======= Features Section ======= -->
    <section id="bc" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Basic Checkup</h2>
          <p>BASIC TREATMENT</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
            <img src="assets/img/1.png" class="testimonial-img" alt="">
              <h3><a href="">Medical Tips</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
            <img src="assets/img/2.png" class="testimonial-img" alt="">
              <h3><a href="">Take treatment</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
            <img src="assets/img/3.png" class="testimonial-img" alt="">
              <h3><a href="">Health care</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
            <img src="assets/img/4.png" class="testimonial-img" alt="">
              <h3><a href="">Check report</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
            <img src="assets/img/5.png" class="testimonial-img" alt="">
              <h3><a href="">Take Vaccine</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
            <img src="assets/img/6.png" class="testimonial-img" alt="">
              <h3><a href="">Get tips</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
            <img src="assets/img/7.png" class="testimonial-img" alt="">
              <h3><a href="">Take rest</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
            <img src="assets/img/12.png" class="testimonial-img" alt="">
              <h3><a href="">Be Safe</a></h3>
            </div>
          </div>

          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

  
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact">
      <div class="container" style="text-align: center;">

        <div class="section-title" data-aos="fade-up">
          <h2 style="color:white;">Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3 style="color: aliceblue;">#Stay Alert Stay Safe</h3>
              <p style="color: aliceblue;">
              Government of India is taking all necessary steps to ensure that we are prepared well to face the challenge and threat posed by the growing pandemic of COVID-19 the Corona Virus. With active support of the people of India, we have been able to contain the spread of the Virus in our country. The most important factor in preventing the spread of the Virus locally is to empower the citizens with the right information and taking precautions as per the advisories being issued by Ministry of Health & Family Welfare.
                </p>
                <h3 style="color: aliceblue;">MYGOV SOCIAL HUB</h3>
              <div class="social-links">
                <a href="https://www.facebook.com/MyGovIndia/" class="facebook"><i class="icofont-facebook"></i></a>
                <a href="https://t.me/MyGovCoronaNewsdesk" class="instagram"><i class="icofont-telegram"></i></a>

                <a href="https://api.whatsapp.com/send?phone=919013353535&text=Hi&source=&data=&app_absent=" class="linkedin"><i class="icofont-whatsapp"></i></a>

              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info" style="color: aliceblue;">
              <div>
                <a href="https://www.mohfw.gov.in/pdf/DistrictWiseList324.pdf"><i class="ri-map-pin-line"></i></a>
                <p><a href="https://www.mohfw.gov.in/pdf/DistrictWiseList324.pdf"><span style="color:  rgb(214, 76, 76);"><b>district reporting</b></span></a></p>
              </div>

              <div>
              <a href="mailto:ncov2019@gov.in"><i class="ri-mail-send-line"></i></a>
                <p><a href="mailto:ncov2019@gov.in"><span style="color:  rgb(214, 76, 76);"><b>ncov2019@gov.in</b></span></a></p>
              </div>

              <div>
                <a href="https://wa.me/919013151515"><i class="ri-phone-line"></i></a>
                <p style="color:rgb(214, 76, 76);"><a href="https://wa.me/919013151515"><b style="color:rgb(214, 76, 76);">Live HelpDesk</b></a></p>
                <p><a href="https://wa.me/919013151515"><span style="color:  rgb(214, 76, 76);"><b>(+91) 90131 51515</b></span></a></p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" style="background-color:rgb(22, 21, 21);">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright" style="color:white;">
            &copy; Copyright <strong>@<span style="color:  rgb(214, 76, 76);">R</span>atron</strong>
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/counterup/counterup.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
      function fetch() {
          $.get("https://api.covid19api.com/summary",
          
            function(data) {
                //console.log(data['Countries'].length)
                var tbval= document.getElementById('tbval');
                for(var i=1; i<(data['Countries'].length); i++)
                {
                    var x= tbval.insertRow();
                    x.insertCell(0);

                    tbval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
                    tbval.rows[i].cells[0].style.background = '#7a4a91';
                    tbval.rows[i].cells[0].style.color = '#fff';

                    x.insertCell(1);
                    tbval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
                    tbval.rows[i].cells[1].style.background = '#4bb7d8';
                    tbval.rows[i].cells[1].style.color = '#fff';

                    x.insertCell(2);
                    tbval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];
                    tbval.rows[i].cells[2].style.background = '#4bb7d8';
                    tbval.rows[i].cells[2].style.color = '#fff';

                    x.insertCell(3);
                    tbval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
                    tbval.rows[i].cells[3].style.background = '#f36e23';
                    tbval.rows[i].cells[3].style.color = '#fff';

                    x.insertCell(4);
                    tbval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];
                    tbval.rows[i].cells[4].style.background = '#4bb7d8';
                    tbval.rows[i].cells[4].style.color = '#fff';

                    x.insertCell(5);
                    tbval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];
                    tbval.rows[i].cells[5].style.background = '#9cc850';
                    tbval.rows[i].cells[5].style.color = '#fff';

                    x.insertCell(6);
                    tbval.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];
                    tbval.rows[i].cells[6].style.background = '#f36e23';
                    tbval.rows[i].cells[6].style.color = '#fff';




                }
            }
          );
          
      }
  </script>

<script>
      function fetch() {
          $.get("https://api.covid19api.com/summary",
          
            function(data) {
                var ncon= document.getElementById('ncon');
                var tcon= document.getElementById('tcon');
                var tdea= document.getElementById('tdea');
                var trec= document.getElementById('trec');

                ncon.innerHTML=data['Countries'][100]['NewConfirmed'];
                tcon.innerHTML=data['Countries'][100]['TotalConfirmed'];
                tdea.innerHTML=data['Countries'][100]['TotalDeaths'];
                trec.innerHTML=data['Countries'][100]['TotalRecovered'];

                var NewConfirmed= document.getElementById('NewConfirmed');
                var TotalConfirmed= document.getElementById('TotalConfirmed');
                var NewDeaths= document.getElementById('NewDeaths');
                var TotalDeaths= document.getElementById('TotalDeaths');
                var NewRecovered= document.getElementById('NewRecovered');
                var TotalRecovered= document.getElementById('TotalRecovered');

                NewConfirmed.innerHTML=data['Global']['NewConfirmed'];
                TotalConfirmed.innerHTML=data['Global']['TotalConfirmed'];
                NewDeaths.innerHTML=data['Global']['NewDeaths'];
                TotalDeaths.innerHTML=data['Global']['TotalDeaths'];
                NewRecovered.innerHTML=data['Global']['NewRecovered'];
                TotalRecovered.innerHTML=data['Global']['TotalRecovered'];
            }
          );
          
      }
  </script>

</body>

</html>