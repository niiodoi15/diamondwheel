<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Diamond Wheel</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

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

  

  <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet"> -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet">
</head>

<style>
    a:not([href]):not([class]), a:not([href]):not([class]):hover {
    color: inherit;
    text-decoration: none;
    cursor: pointer;
  }

</style>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="bg-light">
    

      @include('user.header')
      <!-- .navbar -->

   
  </header>
  <!-- End Header -->


  <!-- ======= Hero Section ======= -->
  <section style="min-height:30vh; background-image:url(assets/img/FHD.jpg); background-size: cover;" >

    <div class="container">
        <div class="row d-flex align-items-center">
            <div class=" col-lg-6 order-2 order-lg-1" data-aos="fade-left" style="padding-top: 100px;">
              <h1>Our Services</h1>
              <!-- <h2>We are team of talented designers making websites with Bootstrap</h2>
              <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
              <img src="assets/img/clients" class="img-fluid" alt="">
            </div>
        </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2 data-aos="fade-in">Services</h2>
          <p data-aos="fade-in"></p>
        </div>

        <div class="row">
          <div class="col-md-6 d-flex" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/advisory4.jpg" alt="...">
              </div>
              <div class="card-body text-justify">
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
                    <p>The question is not about whether your organization recognizes the major 
                      drivers of an effective health delivery system 
                      and assumes these risks. The question is whether your organization 
                      understands the complexities of healthcare transactions, the health 
                      delivery system and has the appropriate skills to address these major drivers.    
                    </p>
                    <p>Our medical advisory team brings to the fore our deep industry knowledge and expertise to customized functional requirements that suit the organizational structures, strategies, and goals of our clients to effectively implement the appropriate systems to deliver sustainable and transformational health solutions.</p>

                    {{-- <ul>
                      <li>Clinical Audit</li>
                      <li>Corporate Health Policy: Development & Implementation</li>
                      <li>Corporate Medical Board: Development & Implementation</li>
                      <li>Employee Wellness Program (EWP)</li>
                      <li>Health Facility Management</li>
                    </ul> --}}
                  </span>
               
                  <!-- <button class="read">read more</button> -->
                
                <a class="read" style="color: #5e5e5e; cursor: pointer;"><i class="bi bi-arrow-right"></i> Read More</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 d-flex" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/advisory3.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="{{route('businessadvisory')}}">Business Advisory Services</a></h5>
                <p class="card-text text-justify">
                  Assuring sustainable progress in the midst of continuing and often disruptive 
                  forces takes insight, acumen, and the ability to effectively leverage the true 
                  benefits of data. Our business advisory team develops and offers tailored, 
                  innovative, and comprehensive requirements for our clients’ specific business challenges. 
                  Led by professionals from various industry and functional specialization, enable our 
                  team to effectively implement the appropriate strategies to deliver sustainable and 
                  transformational business solutions
                </p>
                <span class="points"></span>
                
                  <span id="more" style="display: none;">
                    {{-- Led by professionals from industry and functional specialization,
                     enable our team to effectively implement the appropriate strategies to deliver sustainable and transformational business solutions. Our key service offerings include: --}}
                    {{-- <ul>
                      <li>Actuarial Services</li>
                      <li>Business Continuity Management </li>
                      <li>Business Plan: Development and Implementation </li>
                      <li>Business Strategy</li>
                      <li>Governance, Risk & Compliance Models: Development & Implementation </li>
                      <li>Impact Assessment</li>
                      <li>Market Research</li>
                      <li>Project Management</li>
                    </ul> --}}
                  </span>
               
                  <a class="mose" style="color: #5e5e5e; cursor: pointer;"><i class="bi bi-arrow-right"></i> Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/bill.jpg" alt="...">
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
                    <p>
                      Our deep industry knowledge, rigorous industry analysis and appropriate industry expertise 
                      enable us to assist all institution in building a sustainable 
                      corporate health policy that suits the overall corporate medical budget, goals 
                      and culture in order to unlock the true opportunities presented by modern healthcare including quality of care, cost containment, corporate medical representation among others.  
                    </p>
                    {{-- <ul>
                      <li>Clinical Audit</li>
                      <li>Corporate Health Policy: Development & Implementation</li>
                      <li>Corporate Medical Board: Development & Implementation</li>
                      <li>Employee Wellness Program (EWP)</li>
                      <li>Health Facility Management</li>
                    </ul> --}}
                  </span>
               
                  <a class="most" style="color: #5e5e5e; cursor: pointer;"><i class="bi bi-arrow-right"></i> Read More</a>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 d-flex" data-aos="fade-right">
            <div class="card">
              <div class="card-img">
                <img src="assets/img/services-4.jpg" alt="...">
              </div>
              <div class="card-body">
                <h5 class="card-title"><a href="">Management of Medical Bills</a></h5>
                <p class="card-text text-justify">
                  Every patient’s service, procedure and visit have a monetary value, and the question is not about whether your organization recognize the major drivers of healthcare cost and assume these risks. The question is whether your organization understands the complexities of healthcare transactions and have the requisite skills including medical vetting, clinical audit, medical pricing, 
                  pre-authorization among others to address these major drivers of healthcare cost. 
                </p>
                <span class="turn"></span>
                
                  <span id="more" style="display: none;">
                    <p>
                      Our medical advisory team bring to fore our industry knowledge and expertise in the management of medical bills to assure accurate
                       pricing for all medical services and improve the overall healthcare experience.
                    </p>
                    {{-- <ul>
                      <li>Clinical Audit</li>
                      <li>Corporate Health Policy: Development & Implementation</li>
                      <li>Corporate Medical Board: Development & Implementation</li>
                      <li>Employee Wellness Program (EWP)</li>
                      <li>Health Facility Management</li>
                    </ul> --}}
                  </span>
               
                  <a class="much" style="color: #5e5e5e; cursor: pointer;"><i class="bi bi-arrow-right"></i> Read More</a>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>
    <!-- End Services Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('user.footer')
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- query cdn -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

  
<!-- ===== read more === -->
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
  </script>
  

</body>

</html>