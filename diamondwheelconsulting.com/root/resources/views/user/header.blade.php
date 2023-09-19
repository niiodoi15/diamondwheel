{{-- <header id="header" class="bg-light sticky-top">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <!-- <h1><a href="index.html"><img src="assets/img/rem.png" alt=""></a></h1> -->
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{route('userindex')}}"><img src="assets/img/DMLogo.png" alt="" class="img-fluid"></a>
      </div>

      <nav id="navbar" class="navbar text-dark">
        <ul>
          <li><a class="nav-link scrollto active" href="{{route('userindex')}}">Home</a></li>
          <li class="dropdown"><a href="#"><span>About Us</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="{{route('aboutCom')}}">The Company</a></li>
              <li  class="dropdown"><a href="#"><span>Our Team</span><i class="bi bi-chevron-down"></i></a>
                <ul>
                  <li><a href="#">Board of Directors</a></li>
                  <li><a href="#">Management & Advisory Board</a></li>
                  <li><a href="{{route('aboutTeam')}}">Management Team</a></li>
                </ul>
              </li>
              <li><a href="{{route('aboutVis')}}">Our Vision, Mission, Values</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="{{route('Service')}}">Services</a></li>
          <li><a class="nav-link scrollto" href="{{route('News')}}">Insights</a></li>
          <li><a class="nav-link scrollto" href="{{route('Contact')}}">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->

    </div>
  </header> --}}

  <header class="bg-light">
    <nav>
      <div class="wrapper">
        <div class="logo">
          <a href="{{route('userindex')}}"><img src="assets/img/DMLogo.png" alt="" height="70"></a>
        </div>
        <input type="radio" name="slider" id="menu-btn">
        <input type="radio" name="slider" id="close-btn">
        <ul class="nav-links">
          <label for="close-btn" class="btn close-btn"><i class="bi bi-x"></i></label>
          <li><a href="{{route('userindex')}}">Home</a></li>
          <li>
            <a href="#" class="desktop-item"><span class="mr-2">About Us </span><i class="bi bi-chevron-down"></i></a>
            <input type="checkbox" id="showMega">
            <label for="showMega" class="mobile-item">About Us</label>
            <div class="mega-box px-3 shadow" style="height: 400px">
              <div class="content">
              
                {{-- <div class="row">
                  <header class="text-bold text-center">The Company</header>
                </div> --}}
                <div class="row">
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <header class="text-bold">The Company</header>
                    <ul class="mega-links">
                        <li><a href="{{route('aboutCom')}}">Who We Are</a></li>
                        <li><a href="{{route('aboutVis')}}">Mission, Vision & Values</a></li>
                    </ul>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <header class="text-bold">Our Team</header>
                    <ul class="mega-links">
                        <li><a href="{{route('boardD')}}">Board Members</a></li>
                        {{-- <li><a href="{{route('advisoryboard')}}">Board</a></li> --}}
                        <li><a href="{{route('aboutTeam')}}">Management Team</a></li>
                        {{-- <li><a href="{{route('')}}">Occupational Health and Hygiene</a></li> --}}
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li>
            <a href="#" class="desktop-item"><span class="mr-2">Services</span><i class="bi bi-chevron-down"></i></a>
            <input type="checkbox" id="showMegaserv">
            <label for="showMegaserv" class="mobile-item">Services</label>
            <div class="mega-box shadow scroller">
              <div class="content">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                  {{-- <header class="text-bold">Medical Advisory Services</header> --}}
                  <ul class="mega-links">
                      <li><a href="{{route('clinicalaudit')}}">Clinical Audit</a></li>
                      <li><a href="{{route('corporatehealth')}}">Corporate Health Policy</a></li>
                      <li><a href="{{route('copmedical')}}">Corporate Medical Board</a></li>
                      <li><a href="{{route('employeewellness')}}">Employee Wellness Program (EWP)</a></li>
                      <li><a href="{{route('healthfacility')}}">Health Facility Management</a></li>
                      <li><a href="{{route('emreferrals')}}">Management of External Medical Referrals</a></li>
                      <li><a href="{{route('medbills')}}">Management of Medical Bills</a></li>
                      <li><a href="{{route('actuarial')}}">Actuarial Services </a></li>
                      <li><a href="{{route('busiadvisory')}}">Business Advisory Services</a></li>
                      <li><a href="{{route('impactAna')}}">Impact Assessment</a></li>
                  </ul>
                  </div>
                  {{-- <div class="col-lg-4 col-md-4 col-sm-12">
                    <header class="text-bold">Business Advisory Services</header>
                  <ul class="mega-links">
                      <li><a href="{{route('underC')}}">Actuarial Services</a></li>
                      
                      
                      <li><a href="{{route('')}}">Occupational Health</a></li>
                      <li><a href="{{route('')}}">Occupational Hygiene</a></li>
                  </ul>
                  </div> --}}
                  {{-- <div class="col-lg-4 col-md-4 col-sm-12">
                    <header class="text-bold">Risk Advisory Services</header>
                  <ul class="mega-links">
                      <li><a href="{{route('underC')}}">Enterprise Risk Management</a></li>
                      
                  </ul>
                  </div> --}}

                </div>

                {{-- <div class="row">
                  
                  
                </div>
                <div class="row">
                  
                </div> --}}

                
                
                {{-- <div class="row">
                  <header>Security services</header>
                  <ul class="mega-links">
                    <li><a href="#">Site Seal</a></li>
                    <li><a href="#">VPS Hosting</a></li>
                    <li><a href="#">Privacy Seal</a></li>
                    <li><a href="#">Website design</a></li>
                  </ul>
                </div> --}}
                {{-- <div class="row">
                  <header class="text-bold">Business Advisory Services</header>
                  <ul class="mega-links">
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                    <li><a href="#"></a></li>
                  </ul>
                </div> --}}
              </div>
            </div>
          </li>
          <li><a href="{{route('Contact')}}">Contact Us</a></li>
          <li><a href="/">Insights</a></li>
          <!--{{-- <li><a href="{{route('News')}}">Insights</a></li> --}}-->
        </ul>
        <label for="menu-btn" class="btn menu-btn text-white"><i class="bi bi-list"></i></label>
      </div>
    </nav>
  </header>