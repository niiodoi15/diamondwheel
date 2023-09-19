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
                      <img src="assets/img/md1.jpg" alt="">
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
                  <h3>Dr. Martina Lebene Fiakpornoo 
                    
                    </h3>
                  <ul>
                    <li><strong>Management Role</strong>:  Executive Board Member</li>
                    {{-- <li><strong>Department</strong>:  Company Lawyer</li> --}}
                    <!-- <li><strong>Project date</strong>: 01 March, 2020</li>
                    <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
                  </ul>
                  <div class="portfolio-description">
                    <h2>Details</h2>
                    <ul>
                        <li><strong>Education</strong></li>
                        <li>Ghana College of Physicians and Surgeons; MGCPS (2016)</li>
                        <li>West Africa College of Physicians; MWACP (2016)</li>
                        <li>Ghana Institute of Management and Public Administration (GIMPA) – Certificate in Health Management (2012)</li>
                        <li>University Of Ghana, Legon; BSc. Med Sc. (2004); MBChB (2008)</li>
                    </ul>
                    
                    <p class="card-text">
                      <ul>
                        <li><strong>Professional Affiliation & Certification</strong></li>
                      </ul>
                     <p>
                        <li>Member of the West Africa College of Physicians</li>
                        <li>Member of the Ghana College of Physicians and Surgeons</li>
                        <li>Medical & Dental Council, Ghana</li>
                      </p>
                    </p>
                    <p>
                    <ul>
                        <li><strong>Professional Experience</strong></li>
                      </ul>
                      Dr. Martina Lebene Fiakpornoo is a family oriented hard working Physician Specialist and Dermatologist
                       in training with over thirteen (13) years’ experience in the medical profession. Dr. Fiakpornoo believes
                        in working ethically and upholding the integrity of the medical profession in the provision of
                       holistic care to all patients at all times. Some of her working experiences have been outline below:
                    <li>Fellow in Training, Dermatology / Physician Specialist – Korle Bu Teaching HospitalS </li>
                      <li>Resident, Internal Medicine – Korle Bu Teaching Hospital </li>
                      <li>Medical Officer – Madina Polyclinic</li>
                      <li>Medical officer in charge, Madina Polyclinic</li>
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