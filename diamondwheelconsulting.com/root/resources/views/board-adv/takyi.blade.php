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
                      <img src="assets/img/tak.jpg" alt="">
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
                  <h3>Samuel Kwesi Takyi
                    
                    </h3>
                  <ul>
                    <li><strong>Management Role</strong>:  Non-Executive Board Member</li>
                    {{-- <li><strong>Department</strong>:  Company Lawyer</li> --}}
                    <!-- <li><strong>Project date</strong>: 01 March, 2020</li>
                    <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
                  </ul>
                  <div class="portfolio-description">
                    <h2>Details</h2>
                    <ul>
                        <li><strong>Education</strong></li>
                        <li>Doctor of Philosophy (PhD) in Mining Engineering - University of Mines & Technology</li>
                        <li>Executive MBA in Business Analytics – Eaton Business School, United Arab Emirates</li>
                        <li>Masters of Philosophy (MPhil) in Mining Engineering, University of Mines & Technology</li>
                        <li>Graduate Diploma in Project Planning & Management, ICM, UK</li>
                        <li>Bachelor of Science (BSc) in   Mining Engineering, Kwame Nkrumah University of Science & Technology</li>
                    </ul>
                    
                    <p class="card-text">
                      <ul>
                        <li><strong>Professional Affiliation & Certification</strong></li>
                      </ul>
                      <p>
                        <li>Chief Executive Officer – SKT Consults</li>
                        <li>Industry Partner - University of Mines & Technology, Mining Department</li>
                        <li>Governing Council Member – West Africa Institute of Mining, Metallurgy & Petroleum (WAIMM)</li>
                        <li>Member - Australasian Institute of Mining and Metallurgy (AusIMM)</li>
                      </p>
                    </p>
                    <p>
                      <ul>
                        <li><strong>Professional Experience</strong></li>
                      </ul>
                      Samuel Kwesi Takyi is an astute and very experienced Certified Mining Professional with over 18 years’ 
                      experience in the mining industry including 11 years in senior management positions. He has a proven 
                      history in delivering results to schedule and budget while demonstrating
                       proactive commitment to safe working environment.  Some of his working experiences have been outline below: 
                        <li>Thonket Mining Services Ltd, Ghana – Consulting General Manager </li>
                      <li>Hummingbird Resources Inc., SMK Gold Operation, Mali – General Manager </li>
                      <li>Endeavour Mining Corporation, Hounde Gold Operation, Burkina Faso – Mining Director </li>
                      <li>Nordgold Somita Gold Mine, Taparko, Burkina Faso, - Mining Director </li>
                      <li>Abosso Goldfields Ltd, Damang Mine, Ghana – Mining Manager  </li>  
                      <li>Endeavour Mining Corporation, Burkina Faso – Mining Manager </li>
                      <li>Etruscan Resources Inc., Burkina Faso – Chief Mining Engineer</li>
                      <li>Goldfields Ghana Ltd, Tarkwa Mine, Ghana – Senior Medium Term Planning Engineer </li>
                      <li>Goldfields Ghana Ltd, Tarkwa Mine, Ghana – Short Term Planning Engineer </li>
                      <li>Anglogold Ashanti Ltd, Iduapriem Mine, Ghana – Long Term Planning Engineer </li>

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