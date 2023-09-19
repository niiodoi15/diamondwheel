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
                      <img src="assets/img/rodney.jpeg" alt="">
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
                  <h3>Rodney Oddoye
                    </h3>
                  <ul>
                    <li><strong>Management Role</strong>:  Board Chairman</li>
                    {{-- <li><strong>Department</strong>:  Company Lawyer</li> --}}
                    <!-- <li><strong>Project date</strong>: 01 March, 2020</li>
                    <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
                  </ul>
                  <div class="portfolio-description">
                    <h2>Details</h2>
                    <ul>
                      <li><strong>Education</strong></li>
                     <p>
                        <li>Chartered Accountant, Ghana</li>
                        <li>Bachelor of Arts (BA) – University of Cape Coast, Ghana</li>
                        <li>Diploma in Education – University of Cape Coast, Ghana</li>
                        <li>Leadership Training - Eskerdale, UK</li>
                      </p>
                    </ul>
                    
                    <p class="card-text">
                      <ul>
                        <li><strong>Professional Affiliation & Certification</strong></li>
                        
                        
                      </ul>
                      <p>
                        <li>The Institute of Chartered Accountants, Ghana </li>
                        <li>Ankobra Golf & Country Club - Chairman & Treasurer (2011-2021)</li>
                        <li>Ghana Golf Association - Treasurer</li>
                      </p>
                    </p>
                    <p>
                      <ul>
                        <li><strong>Professional Experience</strong></li>
                      </ul>
                      Rodney Oddoye is an experienced Chartered Accountant with over 28 years working experience particularly
                       in the mining industry of Ghana. He has been very instrumental in setting up the financial systems and
                        effectively managing same for
                       Golden Star Bogoso/Prestea Ltd until his retirement in 2021. His working experience is outlined below: 
                         <li>Finance & Administration Manager – Golden Star Bogoso/Prestea Ltd </li>
                      <li>Finance Manager - Golden Star Bogoso/Prestea Ltd </li>
                      <li>Chief Accountant - Golden Star Bogoso/Prestea Ltd </li>
                      <li>Financial Planning & Cost Analyst - Golden Star Bogoso/Prestea Ltd</li>
                      <li>Financial Controller - Resolute Amansie Ltd </li>  
                      <li>Finance & Administration Manager - KAS Ltd</li>
                      <li>Senior Accountant - Abosso Goldfields Ltd </li>

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