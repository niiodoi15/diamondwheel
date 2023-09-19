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
                  <h3>Richard Boateng, Esq</h3>
                  <ul>
                    <li><strong>Management Role</strong>:  Board Member & Company Lawyer</li>
                    {{-- <li><strong>Department</strong>:  </li> --}}
                    <!-- <li><strong>Project date</strong>: 01 March, 2020</li>
                    <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> -->
                  </ul>
                  <div class="portfolio-description">
                    <h2>Details</h2>
                    <ul>
                      <li><strong>Education</strong></li>
                      <p>LLB (Hons), Pg. Dip in Law</p>
                    </ul>
                    
                    <p class="card-text">
                      <ul>
                        <li><strong>Professional Affiliation & Certification</strong></li>
                      </ul>
                      <p>
                        <li>Founding Partner of ABM Attorneys At Law (Ghana)</li>
                        <li>Consultant Solicitor at J Benson Solicitors (UK)</li>
                        <li>Solicitors Association of Higher Court Advocates (UK)</li>
                        <li>London Criminal Courts Solicitors Association (UK)</li>
                        <li>Criminal Litigation Accreditation Scheme (UK)</li>	
                        <li>Law Society (UK)</li>  
                        <li>Ghana Bar Association (Ghana)</li>
                        <li>Howard League (UK)</li>
                        <li>Crime Line (UK)</li>
                      </p>
                    </p>
                    <p>
                      <ul>
                        <li><strong>Professional Experience</strong></li>
                      </ul>
                      As an advocate for excellence, Richard presents as a fastidious and tenacious individual, blessed with an engaging personality, excellent communication skills and a fantastic forensic mind.
As a result, he always strives to achieve the best result possible for his clients, which includes looking at innovative and creative legal solutions. 
No matter what the situation, Richard will always look to push the envelope in pursuit of a creative solution for his clients. Some of his areas of practice have been outlined below: 
                      <li>Appeals and Reviews</li>
                      <li>Business Law and Practice</li>
                      <li>Business and Civil Litigation</li>
                      <li>Commercial Contracts</li>
                      <li>Criminal Litigation</li>  
                      <li>Debt Recovery</li>
                      <li>Extradition
                        </li>
                      <li>Employment Law and Practice</li>
                      <li>Sports and Entertainment Law</li>

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