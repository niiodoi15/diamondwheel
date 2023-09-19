<!DOCTYPE html>
<html lang="en">
<head>
    @include('user.head')
</head>
<body>
    @include('user.header')
    <main id="main" style="position: relative; height: 100vh;">
        <!-- ======= Hero Section ======= -->
  <section style="min-height:30vh; background-image:url(assets/img/FHD.jpg); background-size: cover;" >

    <div class="container">
      <div class="row d-flex align-items-center">
        <div class=" col-lg-6 order-2 order-lg-1" data-aos="fade-left" style="padding-top: 100px;">
          <h1 class="text-white">Our Services</h1>
          <!-- <h2>We are team of talented designers making websites with Bootstrap</h2>
          <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
          <!-- <img src="assets/img/clients/client-1.png" class="img-fluid" alt=""> -->
        </div>
      </div>
      
    </div>
    

  </section>
  <div class="container">

    <div class="section-title pt-4">
      <h2 data-aos="fade-in">Page Under Construction</h2>
      {{-- <p data-aos="fade-in">To be the leading strategic partner in the provision of sustainable medical and business advisory solutions<br> to corporate and public institutions in Ghana and Africa at large.</p> --}}
    </div>

    <div class="row content">
      {{-- <div class="col-md-5" data-aos="fade-right">
        <img src="assets/img/picture1.jpg" class="img-fluid" alt="">
      </div> --}}
      <div class="col-md-9 pt-1" data-aos="fade-right">
         
      </div>
      <div class="col-md-3 pt-1" data-aos="fade-left">
          <div class="section-bg p-3 card shadow">
              <h6 class="text-center" style="color: #38a9ca">Other Services</h6>
                      <ul>
                          <li><i class="bi bi-check"></i><a href="{{route('corporatehealth')}}" class="text-dark p-2" style="text-decoration: none;">Corporate Health Policy</a></li>
                          <li><i class="bi bi-check"></i><a href="{{route('copmedical')}}" class="text-dark p-2" style="text-decoration: none;">Corporate Medical Board</a></li>
                          <li><i class="bi bi-check"></i><a href="{{route('medbills')}}" class="text-dark p-2" style="text-decoration: none;">Management of Medical Bills</a></li>
                          <li><i class="bi bi-check"></i><a href="{{route('emreferrals')}}" class="text-dark p-2" style="text-decoration: none;">Management of External Medical Referrals</a></li>
                          <li><i class="bi bi-check"></i><a href="{{route('healthfacility')}}" class="text-dark p-2" style="text-decoration: none;">Health Facility Management</a></li>
                          <li><i class="bi bi-check"></i><a href="{{route('clinicalaudit')}}" class="text-dark p-2" style="text-decoration: none;">Clinical Audit </a></li>
                      </ul>
          </div>
      </div>
    </div>

    
  </div>
        {{-- <div style="position: relative;"></div> --}}
        {{-- <div class="w-100" style="position: absolute; background-color: rgba(0, 0, 0, 0.6); display: flex; align-items:center;">
            <h3>This page is under construction</h3>
        </div> --}}
    </main>
    <div class="w-100" style="position: absolute; background-color: rgba(0, 0, 0, 0.8); height: 100vh; top: 80px; display: flex; align-items:center;">
        <h3></h3>
    </div>

    
      <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script><i class="bi bi-check"></i>
</body>
</html>