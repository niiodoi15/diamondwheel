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

  <!-- ======= Features Section ======= -->
<section id="features" class="features section-bg">
    <div class="container">

      <div class="section-title">
        <h2 data-aos="fade-in">Corporate Health Policy</h2>
        {{-- <p data-aos="fade-in">To be the leading strategic partner in the provision of sustainable medical and business advisory solutions<br> to corporate and public institutions in Ghana and Africa at large.</p> --}}
      </div>

      <div class="row content">
        {{-- <div class="col-md-5" data-aos="fade-right">
          <img src="assets/img/picture1.jpg" class="img-fluid" alt="">
        </div> --}}
        <div class="col-md-9 pt-1" data-aos="fade-right">
            <p>Effective corporate health policy assures the realization of all corporate health strategies; shaping corporate medical decisions and their implementation by setting the rules of participation. Our medical advisory team assure alignment of these policies to the evolving challenges of the health delivery system of our clients and regulatory requirements.

            </p>
            <p>
              Our deep industry knowledge, rigorous industry analysis and appropriate industry expertise enable us to assist all institution in building a sustainable corporate health policy that suits the overall corporate medical budget, goals and culture in order to unlock the true opportunities presented by modern healthcare including quality of care, cost containment, corporate medical representation among others.  
            </p>
        </div>
        <div class="col-md-3 pt-1" data-aos="fade-left">
            <div class="section-bg p-3 card shadow">
                <h6 class="text-center" style="color: #38a9ca">Other Services</h6>
                        <ul>
                            <li><i class="bi bi-check"></i><a href="{{route('copmedical')}}"  class="text-dark p-2">Corporate Medical Board</a></li>
                            <li><i class="bi bi-check"></i><a href="{{route('medbills')}}"  class="text-dark p-2">Management of Medical Bills</a></li>
                            <li><i class="bi bi-check"></i><a href="{{route('emreferrals')}}"  class="text-dark p-2">Management of External Medical Referrals</a></li>
                            <li><i class="bi bi-check"></i><a href="{{route('employeewellness')}}"  class="text-dark p-2">Employee Wellness Program (EWP)</a></li>
                            <li><i class="bi bi-check"></i><a href="{{route('healthfacility')}}"  class="text-dark p-2">Health Facility Management</a></li>
                            <li><i class="bi bi-check"></i><a href="{{route('clinicalaudit')}}" class="text-dark p-2" style="text-decoration: none;">Clinical Audit </a></li>
                        </ul>
            </div>
        </div>
      </div>

      
    </div>
</section>
  <!-- End Features Section -->
    
{{-- <section>
    <div class="container mt-5">
        <section class="section-bg">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-12">
                    <h2 class="pb-3 text-center" style="color: #38a9ca">Corporate Health Policy</h2>
                    <p>Improving the culture of patients’ safety at the point of care does not only 
                        provide opportunities for the continuous delivery of quality healthcare but 
                        provides a systematic way of genuinely identifying the 
                        weakness of a health delivery system and suggesting appropriate solutions.
                    </p>
                    <p>
                        Our medical advisory team have the appropriate exposure to implement an effective 
                        clinical audit that is suitable to the peculiar circumstances of the medical service 
                        provider. This assures an outcome whose interpretation and understanding meets the standards 
                        expected of all health professionals from regulators, peers and community at large.
                    </p>
                </div>
                <div class="col-lg-3 col-md-3">
                    <div class="section-bg p-3 card shadow">
                        <h6 class="text-center" style="color: #38a9ca">Other Services</h6>
                        <ul>
                            <li><a href="{{route('copmedical')}}"  class="text-dark p-2">Corporate Medical Board</a></li>
                            <li><a href="{{route('medbills')}}"  class="text-dark p-2">Management of Medical Bills</a></li>
                            <li><a href="{{route('emreferrals')}}"  class="text-dark p-2">Management of External Medical Referrals</a></li>
                            <li><a href="{{route('employeewellness')}}"  class="text-dark p-2">Employee Wellness Program (EWP)</a></li>
                            <li><a href="{{route('healthfacility')}}"  class="text-dark p-2">Health Facility Management</a></li>
                            <li><a href="{{route('clinicalaudit')}}" class="text-dark p-2" style="text-decoration: none;">Clinical Audit </a></li>
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
  <script src="assets/js/main.js"></script>
</body>
</html>