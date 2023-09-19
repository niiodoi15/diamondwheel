<!DOCTYPE html>
<html lang="en">

<head>
    @include('user.head')
</head>

<body>
    @include('user.header')

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
  <!-- End Hero -->

  <section id="features" class="features section-bg">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-in">Actuarial Services</h2>
        {{-- <p data-aos="fade-in">To be the leading strategic partner in the provision of sustainable medical and business advisory solutions<br> to corporate and public institutions in Ghana and Africa at large.</p> --}}
      </div>

      <div class="row content">
        {{-- <div class="col-md-5" data-aos="fade-right">
          <img src="assets/img/picture1.jpg" class="img-fluid" alt="">
        </div> --}}
        <div class="col-md-9 pt-1" data-aos="fade-right">
            <p>
                It is apparent in our present business environment to be confronted with more complex 
                and dynamic risk. The challenge here is to be prepared by effectively anticipating and 
                mitigating the downside of risk; and equally taking advantage of the upside of risk. 
                Diamond Wheel Co. Ltd has expert team of actuaries and mathematicians with deep industry 
                experience, seasoned project management and in-dept understanding of our clients’ business 
                needs to deliver on our promise. Our actuarial consultants provide our clients with: 

            </p>
            <ul>
                <li><i class="bi bi-check"></i>Product Design Services</a></li>
                <li><i class="bi bi-check"></i>Product Pricing Services</a></li>
                <li><i class="bi bi-check"></i>Actuarial Valuation Services</a></li>
                <li><i class="bi bi-check"></i>Experience Analysis</a></li>
                <li><i class="bi bi-check"></i>Premium Adequacy</a></li>
            </ul>
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
</section>
    
    
{{-- <section>
    <div class="container mt-5">
        <section class="section-bg">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12" >
                    <h2 class="pb-3 text-center" style="color: #38a9ca">Employee Wellness Program</h2>
                    <p>
                        Implementing Employee Wellness Programs (EWP) that assure employee productivity, general 
                        improvement of employee health and the overall reduction of corporate medical cost is not 
                        something that is easily achieved by many institutions. At Diamond Wheel Company Limited, we believe 
                        Employee Wellness Program is surely one of the effective ways of managing occupational health.
                    </p>
                    <p>
                        Our Employee Wellness Program (EWP) is customized to suit the organizational structure, 
                        strategies and goals of our 
                        client in order to assure effective measurement of program impact to the overall bottom line.
                    </p>
                </div>
                <div class="col-lg-3 col-md-3">
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
        </section>
    </div>
</section> --}}

    @include('user.footer')

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