<!doctype html>
<head>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
      
        <title>Diamond Wheel</title>
        <!-- <meta content="" name="description">
        <meta content="" name="keywords"> -->
      
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
        <link rel="stylesheet" href="assets/css/testi.css">
      
      
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->
        <!-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script> -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
      
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
          <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
          <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet"> -->
          <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet">

          <link rel="stylesheet" href="assets/assets/css/style.css">
      </head>
   <body>


    <!-- ======= Header ======= -->
    @include('user.header')

    <main style="overflow: hidden">
        <!-- About US Start -->
        <div class="about-area">
            <div class="container">
                    <!-- Hot Aimated News Tittle-->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="trending-tittle">
                                <strong>Trending now</strong>
                                <!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                                {{-- <div class="trending-animated">
                                    <ul id="js-news" class="js-hidden">
                                        <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.</li>
                                        <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                        <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                                    </ul>
                                </div> --}}
                                
                            </div>
                            {{-- <div class="image-top col-12">
                                <img src="{{ asset("storage/news/$trend->photo") }}" alt="" style="width: 100%; height: 300px; padding-top: 0;">
                            </div> --}}
                        </div>
                    </div>
                   <div class="row">
                        
                        <div class="col-lg-8">
                            <!-- Trending Tittle -->
                            <div class="about-right mb-90">
                                <div class="section-tittle mb-30 pt-30">
                                    <h3>{{$trend->title}}</h3>
                                </div>
                                <div class="about-prea"  data-aos="fade-down">
                                    <p class="about-pera1 mb-25">
                                        @php 
                                            echo ($trend->writeup)
                                        @endphp</p>
                                </div> 
                                
                            </div>
                            <!-- From -->
                            
                        </div>
                        
                   </div>
            </div>
        </div>
        <!-- About US End -->
    </main>

   <!-- ======= Footer ======= -->
  @include('user.footer')
  <!-- End Footer -->


   
	<!-- JS here -->
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  

    


  <!-- ===== News Script ==== -->
  @include('user.newscript')
        
    </body>
</html>