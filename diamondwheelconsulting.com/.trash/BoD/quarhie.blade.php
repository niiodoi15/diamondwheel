<!DOCTYPE html>
<html lang="en">
    <head>
      @include('user.head')    
    </head>
<body>

    @include('user.header')

    <main id="main" class="pt-5">

        <!-- ======= Portfolio Details Section ======= -->
        <section id="portfolio-details" class="portfolio-details">
          <div class="container">
    
            <div class="row gy-4">
    
              <div class="col-lg-5">
                <div class="portfolio-details-slider swiper">
                  <div class="swiper-wrapper align-items-center">
    
                    <div class="swiper-slide"  data-aos="fade-right">
                      <img src="assets/img/man.jpeg" alt="">
                    </div>
    
                    <!-- <div class="swiper-slide">
                      <img src="assets/img/portfolio/portfolio-2.jpg" alt="">
                    </div>
    
                    <div class="swiper-slide">
                      <img src="assets/img/portfolio/portfolio-3.jpg" alt="">
                    </div> -->
    
                  </div>
                  <!-- <div class="swiper-pagination"></div> -->
                </div>
              </div>
    
              <div class="col-lg-7">
                <div class="portfolio-info"  data-aos="fade-left">
                  <h3>Dr. Samuel Quarshie Lartey</h3>
                  <ul>
                    <li><strong>Management Role</strong>:  Management & Advisory Board Member</li>
                    {{-- <li><strong>Department</strong>:  Company Lawyer</li> --}}
                    <!-- <li><strong>Project date</strong>: 01 March, 2020</li>
                    <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
                  </ul>
                  <div class="portfolio-description">
                    <h2>Details</h2>
                    <ul><li><strong>Education</strong></li></ul>
                    <li>West Africa College of Surgeons; FWACS </li>
                    <li>Ghana College of Physicians and Surgeons</li>
                    <li>University Of Ghana, Legon; <i class="text-bold"> BSc. Med Sc./MBChB</i></li>
                    
                    <p class="card-text">
                      <ul>
                        <li><strong>Professional Affiliation & Certification</strong></li>
                      </ul>
                      <p>
                        <li>Fellow of the West Africa College of Surgeons, Orthopedics </li>
                        <li>West Africa College of Surgeons</li>
                        <li>Ghana College of Physicians and Surgeons</li>
                        <li>Medical & Dental Council, Ghana</li>
                      </p>
                    </p>
                    <p>
                      <ul>
                        <li><strong>Professional Experience</strong></li>
                      </ul>
                      Dr Samuel Quarshie Lartey is a trauma and orthopaedic surgeon with Korle Bu Teaching Hospital who is passionate and committed to quality and holistic healthcare. His commitment and work have brought healing and alleviation to the vast majority of Ghanaians over the past 14 years’. Some of his work experiences have been outlined 
                      <li>Trauma and Orthopaedic Surgeon - Korle Bu Teaching Hospital </li>
                      <li>Senior Resident, Department of Trauma and Orthopaedics – Korle Bu Teaching Hospital </li>
                      <li>Surgical Specialist - Anfoega Catholic Hospital </li>
                      <li>Surgical Resident – Korle Bu Teaching Hospital </li>
                      <li>Medical Officer - Anfoega Catholic Hospital</li>  
                      <li>Senior House Officer - Tema General Hospital </li>
                      <li>House Officer – Korle Bu Teaching Hospital </li>
                    </p>
                  </div>
                </div>
                
              </div>
    
            </div>
    
          </div>
        </section><!-- End Portfolio Details Section -->
    
    </main><!-- End #main -->
    
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