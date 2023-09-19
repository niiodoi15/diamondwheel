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

  
</head>

<body>

  <!-- ======= Header ======= -->
  @include('user.header')


  <!-- ======= Hero Section ======= -->
  <section style="min-height:30vh; background-image:url(assets/img/FHD.jpg); background-size: cover;" >

    <div class="container">
      <div class="row d-flex align-items-center">
        <div class=" col-lg-6 order-2 order-lg-1" data-aos="fade-left" style="padding-top: 100px;">
          <h1>About Us</h1>
          <!-- <h2>We are team of talented designers making websites with Bootstrap</h2>
          <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <img src="assets/img/clients" class="img-fluid" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
        <div class="container">
  
          <div class="section-title">
            <h2 data-aos="fade-in">Board Members</h2>
            <!--{{-- <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> --}}-->
          </div>
  
          <!-- <div class="row">
            <div class="col-lg-12">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div> -->
  
          <div class="row portfolio-container" data-aos="fade-up">
  
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap text-center">
                <img src="assets/img/man.jpeg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <!-- <a href="index.html" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bi bi-plus"></i></a> -->
                  <a href="{{route('richardboateng')}}" title="View More Details"><i class="bi bi-eye"></i></a>
                </div>
                <div class="portfolio-info">
                  <h4>Richard Boateng, Esq</h4>
                  <p>Board Member & Company Lawyer</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap text-center">
                <img src="assets/img/larte.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <!-- <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a> -->
                  <a href="{{route('samuelquarshie')}}" title="View More Details"><i class="bi bi-eye"></i></a>
                </div>
                <div class="portfolio-info">
                  <h4>Dr. Samual Quarshie Lartey  </h4>
                  <p>Executive Board Member</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap text-center">
                <img src="assets/img/adobea.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <!-- <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a> -->
                  <a href="{{route('adobea')}}" title="View More Details"><i class="bi bi-eye"></i></a>
                </div>
                <div class="portfolio-info">
                  <h4>Dr. Nana Yaa Adobea Brown </h4>
                  <p>Executive Board Member</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap text-center">
                <img src="assets/img/takk.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <!-- <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a> -->
                  <a href="{{route('takyi')}}" title="View More Details"><i class="bi bi-eye"></i></a>
                </div>
                <div class="portfolio-info">
                  <h4>Samuel Kwesi Takyi </h4>
                  <p>Non-Executive Board Member</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap text-center">
                <img src="assets/img/rodney.jpeg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <!-- <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a> -->
                  <a href="{{route('oddoye')}}" title="View More Details"><i class="bi bi-eye"></i></a>
                </div>
                <div class="portfolio-info">
                  <h4>Rodney Oddoye</h4>
                  <p>Board Chairman</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap text-center">
                <img src="assets/img/fiakporno.jpg" class="img-fluid" alt="">
                <div class="portfolio-links">
                  <!-- <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a> -->
                  <a href="{{route('lebene')}}" title="View More Details"><i class="bi bi-eye"></i></a>
                </div>
                <div class="portfolio-info">
                  <h4>Dr. Martina Lebene Fiakpornoo</h4>
                  <p>Executive Board Member</p>
                </div>
              </div>
            </div>
          </div>
  
        </div>
      </section>
      <!-- End Portfolio Section -->



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