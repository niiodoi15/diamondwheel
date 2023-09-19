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
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/testi.css">

    
    <!-- ====== News CSS ===== -->
    <!-- CSS here -->
    {{-- <link rel="stylesheet" href="assets/assets/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="assets/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/assets/css/ticker-style.css">
    <link rel="stylesheet" href="assets/assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/assets/css/slick.css">
    <link rel="stylesheet" href="assets/assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/assets/css/style.css">


  </head>

<body>

  <!-- ======= Header ======= -->
  @include('user.header')
  <!-- End Header -->

  <main id="main">

	<div class="trending-area fix">
        <div class="container">
			<div class="row" data-aos="fade-up">
				<div class="col-lg-12">
					<div class="trending-tittle">
						<strong>Trending now</strong>
						<!-- <p>Rem ipsum dolor sit amet, consectetur adipisicing elit.</p> -->
                        @foreach ($trend as $trends)
						<div class="trending-animated">
							<ul id="js-news" class="js-hidden">
								<li class="news-item">{{$trends->title}}</li>
								<li class="news-item">{{$trends->title}}</li>
								<li class="news-item">{{$trends->title}}</li>
							</ul>
						</div>
                        @endforeach
						
					</div>
				</div>
			</div>
            <div class="trending-main">
                <div class="row">
                    <div class="col-lg-8">
                        <!-- Trending Top -->
                        <div class="trending-top mb-30"  data-aos="fade-down">
                            <div class="trend-top-img" style="height: 350px;">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    
                                    <div class="carousel-inner">
                                        @php $count = 1; @endphp
                                        @foreach ($trend as $trends)                                            
                                        <div class="carousel-item {{ $count == 3 ? 'active' : ''}}">
                                            <img src="{{ asset("storage/news/$trends->photo") }}" alt="" style="height: 350px;" alt="...">
                                          {{-- <img src="assets/assets/img/trending/trending_bottom2.jpg" class="d-block w-100"  > --}}
                                          <div class="trend-top-cap">
                                              <span>{{$trends->category}}</span>
                                              <h2><a href="{{route('details', ['title'=>$trends->title])}}">{{$trends->title}}</a></h2>
                                          </div>
                                        </div>
                                        @php $count++; @endphp
                                        @endforeach
                                    </div>
                                    {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button> --}}
                                </div>
                            </div>
                        </div>
                        <!-- Trending Bottom -->
                        <div class="trending-bottom">
                            <div class="row"  data-aos="fade-up">

                              @foreach ($trend as $trends)
                                <div class="col-lg-4">
                                  <div class="single-bottom mb-35">
                                      <div class="trend-bottom-img mb-30">
                                          <img src="{{ asset("storage/news/$trends->photo") }}" alt="" style="height: 155px;">
                                      </div>
                                      <div class="trend-bottom-cap">
                                          <span class="color1">{{$trends->category}}</span>
                                          <h4><a href="{{route('details', ['title'=>$trends->title])}}">{{$trends->title}}</a></h4>
                                      </div>
                                  </div>
                                </div> 

                              @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Riht content -->
                    <div class="col-lg-4"  data-aos="fade-left">
                        @foreach ($docs as $item)                            
                        <div class="trand-right-single d-flex">
                            <div class="trand-right-img">
                                <img src="{{ asset("storage/documents/$item->file") }}" alt="" width="100">
                            </div>
                            <div class="trand-right-cap">
                                <span class="color1">Document</span>
                                <h4><a href="{{ asset("storage/documents/$item->file") }}" download>{{$item->name}}</a></h4>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('user.footer')
  <!-- End Footer -->

  {{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a> --}}

	@include('user.newscript')
  
  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>


  <!-- ===== News Script ==== -->
  <!-- JS here -->
	
</body>

</html>