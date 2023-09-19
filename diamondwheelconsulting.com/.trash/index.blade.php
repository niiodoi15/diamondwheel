<!DOCTYPE html>
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
  {{-- <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> --}}
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/testi.css">


  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet">
</head>


<body>

  <!-- ======= Header ======= -->
  @include('user.header')
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section>
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/banner11.jpg" class="d-block w-100" alt="..."  style="height: 80vh;">
          <div class="carousel-caption d-md-block mb-5" style=" background: #213b523b; border-radius: 20px; bottom: 50% ">
            <h3>Decisions must be guided by appropriate data.</h3>
            
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/banner22.jpg" class="d-block w-100" alt="..."  style="height: 80vh;">
          <div class="carousel-caption d-md-block mb-5" style=" background: #213b523b; border-radius: 20px; bottom: 50% ">
            <h3>Join The team that truly supports data driven advisory services.</h3>
            
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/banner3.jpg" class="d-block w-100" alt="..."  style="height: 80vh;">
          <div class="carousel-caption d-md-block mb-5" style=" background: #213b523b; border-radius: 20px; bottom: 50% ">
            <h3>The privacy and security of clients’ data is important.</h3>
            
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/banner4.jpg" class="d-block w-100" alt="..."  style="height: 80vh;">
          <div class="carousel-caption d-md-block mb-5" style=" background: #213b523b; border-radius: 20px; bottom: 50% ">
            <h3>Adequate guidance is imperative for a good health</h3>
            
          </div>
        </div>
      </div>
      {{-- <a class="carousel-control-prev" data-target="#carouselExampleCaptions" data-slide="prev">
        <span class="carousel-control-prev-icon p-0" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" data-target="#carouselExampleCaptions" data-slide="next">
        <span class="carousel-control-next-icon p-0" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a> --}}
    </div>
  </section>

  <!-- End Hero -->


  <main id="main" class="">
    
    <!-- ======= About Section ======= -->
    <section id="features" class="features section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Who we are</h2>
          <p data-aos="fade-in"></p>
        </div>

        <div class="row content">
          <div class="col-md-12" data-aos="fade-left">
            {{-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> --}}
            <p class="card-text">
              Diamond Wheel Company Limited (DWCL) is a wholly Ghanaian owned management consultancy, incorporated 
              in the Republic of Ghana on 7th February 2018. Many corporate institutions have the responsibility to 
              make decisions that affect the health employees and dependents even as they are not medical institutions. 
              In recognition of this peculiar challenge, DWCL is set up to enables all corporate institutions to leverage 
              our experience and expertise in making informed decisions about employees’ health.
  

            </p>
            <p>
              At DWCL, we are committed to providing sustainable medical and business advisory solutions that meet the strategic 
              aim of all corporate institutions. DWCL professionals shall leverage the strategic vision of senior executives across 
              functional areas, applying our expertise, rigorous analysis, and deep industry knowledge to develop innovative 
              solutions to our clients’ complex medical and business challenges. At DWCL, we enhance the ability to build value,
               reduce cost, manage risk and improve delivery.
            </p>
            
            
          </div>
        </div>
      </div>
    </section>
    <!-- End Features Section -->

    <!-- testimonial -->
    <section class="testimonial section-bg">
      <div class="container">
        {{-- <div class="row">
          <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
            <div class="section-title">
              <h2 data-aos="fade-in">Services</h2>
              <p data-aos="fade-in"></p>
            </div>
          </div>
        </div> --}}
        <div class="row">
          <div class="clients-carousel owl-carousel">
            <div class="single-box">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/md3.jpg" alt="...">
                </div>
                <div class="card-body text-justify pb-5">
                  <h5 class="card-title"><a href="{{route('medicalservices')}}">Medical Advisory Services:</a></h5>
                  <p class="card-text text-justify">
                    The challenge of assuring an 
                    effective health delivery system is putting serious stress on the medical 
                    budgets of corporate institutions, making policymakers, especially at 
                    the management and board level spend a good deal of time and energy 
                    considering the best approach to it.
                  </p>
                  <span class="dots"></span>
                  
                    <span id="more" style="display: none;">
                      <p class="card-text">The question is not about whether your organization recognizes the major 
                        drivers of an effective health delivery system 
                        and assumes these risks. The question is whether your organization 
                        understands the complexities of healthcare transactions, the health 
                        delivery system and has the appropriate skills to address these major drivers.    
                      </p>
                      <p class="card-text">Our medical advisory team brings to the fore our deep industry knowledge and expertise to customized functional requirements that suit the organizational structures, strategies, and goals of our clients to effectively implement the appropriate systems to deliver sustainable and transformational health solutions.</p>
  
                      
                      
                    </span>
                 
                    <!-- <button class="read">read more</button> -->
                  
                  <a class="read" style="color: #5e5e5e; cursor: pointer;"><i class="bi bi-arrow-right"></i> Read More</a>
                </div>
              </div>
            </div>
            <div class="single-box">
              <div class="content">
                <div class="card">
                  <div class="card-img">
                    <img src="assets/img/adv4.jpg" alt="...">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="{{route('businessadvisory')}}">Business Advisory Services</a></h5>
                    <p class="card-text text-justify">
                      Assuring sustainable progress in the midst of disruptive 
                      forces often takes insight, acumen, and the ability to effectively leverage the true 
                      benefits of data. Our business advisory team develops and offers tailored, 
                      innovative, and comprehensive requirements for our clients’ specific business challenges. 
                      
                    </p>
                    <span class="points"></span>
                    
                      <span id="more" style="display: none;">
                        <p class="card-text">
                        Led by professionals from various industry and functional specialization, enable our 
                        team to effectively implement the appropriate strategies to deliver sustainable and 
                        transformational business solutions.
                      </p>
                        
                      </span>
                   
                      <a class="mose" style="color: #5e5e5e; cursor: pointer;"><i class="bi bi-arrow-right"></i> Read More</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="single-box">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/adv3.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Management of Medical Bills</a></h5>
                  <p class="card-text text-justify">
                    Every patient’s service, procedure and visit have a monetary value, and the
                     question is not about whether your organization recognize the major drivers
                      of healthcare cost and assume these risks. The question is whether your
                       organization understands the complexities 
                    of healthcare transactions and have the requisite skills including medical.

                  </p>
                  <span class="turn"></span>
                  
                    <span id="plenty" style="display: none;">
                      <p class="card-text">
                    The question is whether your organization
                      understands the complexities of healthcare transactions and have the requisite 
                      skills including medical vetting, clinical audit, medical pricing, 
                    pre-authorization among others to address these major drivers of healthcare cost.
                      </p>
                      
                    </span>
                 
                    <a class="plenty" style="color: #5e5e5e; cursor: pointer;"><i class="bi bi-arrow-right"></i> Read More</a>
                  
                </div>
              </div>
            </div>
            <div class="single-box">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/adv9.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Corporate Health Policy </a></h5>
                  <p class="card-text text-justify">
                    
                    Effective corporate health policy assures the realization of all corporate health strategies,
                    shaping corporate medical decisions and their implementation by setting the rules of participation.
                    Our medical advisory team assures alignment of these policies to the evolving challenges of the
                     health delivery system of our clients and regulatory requirements.
                  </p>
                  <span class="dart"></span>
                  
                    <span id="more" style="display: none;">
                      <p class="card-text">
                        Our deep industry knowledge, rigorous industry analysis and appropriate industry expertise 
                        enable us to assist all institution in building a sustainable 
                        corporate health policy that suits the overall corporate medical budget, goals 
                        and culture in order to unlock the true opportunities presented by modern healthcare including quality of care, cost containment, corporate medical representation among others.  
                      </p>
                      
                    </span>
                 
                    <a class="most" style="color: #5e5e5e; cursor: pointer;"><i class="bi bi-arrow-right"></i> Read More</a>
                </div>
              </div>
            </div>
            <div class="single-box">
              <div class="card">
                <div class="card-img">
                  <img src="assets/img/adv6.jpg" alt="...">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Data Protection Principles</a></h5>
                  <p class="card-text text-justify">
                    We consider the right of our clients to the security and 
                    privacy of their personal 
                    data as enshrine by the Data Protection Act, 2012 (Act 843) in all our operations.
                    In lieu of the above, the eight basic principles 
                    for processing personal data is strictly adhered. These eight basic principles imclude: 
                  </p>
                  <span class="turn"></span>
                  
                    <span id="more" style="display: none;">
                      <p class="card-text">
                    <ul>
                      <li>Accountability</li>
                      <li>Lawfulness Of Processing</li>
                      <li>Specification Of Purpose</li>
                      <li>Compatibility Of Further Processing With Purpose Of Collection</li>
                      <li>Quality Of Information</li>
                      <li>Openness</li>
                      <li>Data Security Safeguards</li>
                      <li>Data Subject Participation.</li>
                    </ul>
                      </p>
                      
                    </span>
                 
                    <a class="much" style="color: #5e5e5e; cursor: pointer;"><i class="bi bi-arrow-right"></i> Read More</a>
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Speak to our Consultants</h2>
          <p></p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12 order-1 order-md-2" data-aos="fade-left">
                <img src="assets/img/contact3.jpg" class="img-fluid" alt="">
              </div>
              
            </div>

          </div>

          <div class="col-lg-6 mt-lg-0">
            <form action="{{url('contact_us')}}" method="post" role="form" class="php-email-form w-100 pt-5" data-aos="fade-up">
              @csrf
              <div class="row pt-3">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              {{-- <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div> --}}
              <div class="text-center my-3"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('user.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  {{-- <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> --}}
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
	</script> 
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
	</script> 
	{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
	</script>  --}}
  
  <script>
    $(document).ready(function(){
      $(".read").click(function(){
        $(this).prev().toggle();
        $(this).siblings('.dots').toggle();
          if($(this).text()=='Read less'){
    	      $(this).text('Read more');
            }
          else{
    	      $(this).text('Read less');
          }
      });
    });

    $(document).ready(function(){
      $(".mose").click(function(){
        $(this).prev().toggle();
        $(this).siblings('.points').toggle();
          if($(this).text()=='Read less'){
    	      $(this).text('Read more');
            }
          else{
    	      $(this).text('Read less');
          }
      });
    });

    $(document).ready(function(){
      $(".most").click(function(){
        $(this).prev().toggle();
        $(this).siblings('.dart').toggle();
          if($(this).text()=='Read less'){
    	      $(this).text('Read more');
            }
          else{
    	      $(this).text('Read less');
          }
      });
    });
    $(document).ready(function(){
      $(".much").click(function(){
        $(this).prev().toggle();
        $(this).siblings('.turn').toggle();
          if($(this).text()=='Read less'){
    	      $(this).text('Read more');
            }
          else{
    	      $(this).text('Read less');
          }
      });
    });
    $(document).ready(function(){
      $(".plenty").click(function(){
        $(this).prev().toggle();
        $(this).siblings('.turn').toggle();
          if($(this).text()=='Read less'){
    	      $(this).text('Read more');
            }
          else{
    	      $(this).text('Read less');
          }
      });
    });
  </script>

	<script>
	       $('.clients-carousel').owlCarousel({
	           loop: true,
	           nav: false,
	           autoplay: true,
	           autoplayTimeout: 5000,
	           animateOut: 'fadeOut',
	           animateIn: 'fadeIn',
	           smartSpeed: 450,
	           margin: 30,
	           responsive: {
	               0: {
	                   items: 1
	               },
	               768: {
	                   items: 2
	               },
	               991: {
	                   items: 2
	               },
	               1200: {
	                   items: 2
	               },
	               1920: {
	                   items: 2
	               }
	           }
	       });
	</script>

</body>

</html>