<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Diamond Wheel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/diamondlo.png" rel="icon">
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">


  
    <script src="https://smtpjs.com/v3/smtp.js"></script>  

</head>

<body>

  <!-- ======= Header ======= -->
  @include('user.header')
  <!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section style="min-height:30vh; background-image:url(assets/img/FHD.jpg); background-size: cover;" >

    <div class="container">
      <div class="row d-flex align-items-center">
      <div class=" col-lg-6 order-2 order-lg-1" data-aos="fade-right" style="padding-top: 100px;">
        <h1>Contact Us</h1>
        <!-- <h2>We are team of talented designers making websites with Bootstrap</h2>
        <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
      </div>
      <!-- <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="assets/img/clients" class="img-fluid" alt="">
      </div> -->
    </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
          
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box" data-aos="fade-up">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>H/No.: 10, 0nyinase Lane 22, Gbawe-Lafa, Accra</p>
                  <p>GHANA POST GPS: GS-0276-2041</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>	</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4" data-aos="fade-up" data-aos-delay="100">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+233 302 350 459  <br>+233 0552 524 747</p>
                  <!-- <p> +233 0206 972 313</p> -->
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-lg-0">
            {{-- <h3 class="text-center">Send us a message</h3> --}}
            @if(session('success'))
              <div class="alert alert-success">
                {{ session('success') }}
              </div>
            @endif
            <form action="{{ route('contact-form.store') }}" method="post" role="form" class="php-email-form w-100" data-aos="fade-up">
              {{csrf_field()}}
              <div class="row">
                <div class="col-md-6 form-group {{ $errors->has('name') ? 'has-error' : ''}}">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0 {{ $errors->has('name') ? 'has-error' : ''}}">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3 {{ $errors->has('name') ? 'has-error' : ''}}">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3 {{ $errors->has('name') ? 'has-error' : ''}}">
                <textarea class="form-control" name="comment" rows="5" placeholder="Message" required></textarea>
              </div>
              {{-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> --}}
              <div class="text-center my-3"><button type="submit">Send Message</button></div>
            </form>
          </div>
        </div>

      </div>
    </section>
  <!-- End Contact Section -->

    <div class="maps">
      <div class="map-responsive">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.928062346962!2d-0.30264858477151063!3d5.577653295956177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8fc4bb755a524989!2zNcKwMzQnMzkuNiJOIDDCsDE4JzAxLjciVw!5e0!3m2!1sen!2sgh!4v1651861617725!5m2!1sen!2sgh" width="600" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('user.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>