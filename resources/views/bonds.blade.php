<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dhanavruksha</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <link href="css/custom.css" rel="stylesheet">

    <!-- <link href="css/ionicons.min.css" rel="stylesheet"> -->


</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="Topbar-container-fluid text-white d-none d-lg-flex" style="background-color: #06060b;">
        <div class="Topbar-container py-3">
            <div class="Topbar-d-flex align-items-center">
                <!-- Logo Section -->
                <a href="index.html" class="d-flex align-items-center">
                    <img src="img/dhanavruksha-logo-new.png" alt="Logo" class="img-fluid" style="max-height: 60px; margin-left: 50px;">
                </a>
                <!-- Right Section -->
                <div class="Topbar-right d-flex align-items-center ms-3" style="flex-wrap: nowrap;">
                    <small class="d-flex align-items-center me-3">
                        <i class="fa fa-envelope me-2"></i>customerservice@dhanavruksha.in
                    </small>
                    <small class="d-flex align-items-center me-3">
                        <i class="fa fa-phone-alt me-2"></i>+91 7305888454
                    </small>
                    <a href="{{ route('schedulemeeting') }}" class="nav-item nav-link d-flex align-items-center me-3">
                        <i class="fa fa-calendar-alt me-2"></i>Schedule Meeting
                    </a>
                    <a href="{{ route('opendemata') }}" class="nav-item nav-link d-flex align-items-center">
                        <i class="fa fa-briefcase me-2"></i>Open Demat Account
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


       <!-- Navbar Start -->
   <div class="container-fluid bg-white sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                <a href="index.html" class="navbar-brand d-lg-none">
                    <h1 class="fw-bold m-0"></h1>
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav">
                        <a href="{{ route('home') }}" class="nav-item nav-link active">Home</a>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('company-profile') }}" class="dropdown-item">Company Profile</a>
                                <a href="{{ route('team') }}" class="dropdown-item">Team</a>

                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Products</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('equity') }}" class="dropdown-item">Equity And Derivatives</a>
                                <a href="{{ route('mutual-funds') }}" class="dropdown-item">Mutual Funds</a>
                                <a href="{{ route('pms-aif') }}" class="dropdown-item">PMS-AIF</a>
                                <a href="{{ route('fixed-deposits') }}" class="dropdown-item">Fixed Deposits</a>
                                <a href="{{ route('bonds') }}" class="dropdown-item">Bonds</a>
                                

                            </div>
                        </div>

                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Services</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                            <a href="{{ route('wealth-management') }}" class="dropdown-item">Wealth Management</a>
                            <a href="{{ route('financial-planning') }}" class="dropdown-item">Financial Planning</a>
                            <a href="{{ route('tax-planning') }}" class="dropdown-item">Tax Planning</a>
                            <a href="{{ route('portfolio-restucturing') }}" class="dropdown-item">Portfolio Restructuring</a>
                            <a href="{{ route('child-future-saving') }}" class="dropdown-item"> Child Future Saving</a>    
                            <a href="{{ route('retirmentplanning') }}" class="dropdown-item">Retirement Planning</a>
                            <a href="{{ route('seminars') }}" class="dropdown-item">Investment Seminar For Youth</a>


                            </div>
                        </div>


                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Investor Zone</a>
                            <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                <a href="{{ route('newsletter') }}" class="dropdown-item">Newsletter</a>
                                <a href="{{ route('financial-calculator') }}" class="dropdown-item">Financial calculator</a>
                                <a href="{{ route('downloads') }}" class="dropdown-item">Downloads</a>
                                <a href="{{ route('blogs') }}" class="dropdown-item">Blogs</a>
                                <a href="{{ route('learning') }}" class="dropdown-item">Learning</a>

                            </div>
                        </div>
                        <a href="{{route('kyc')}}" class="nav-item nav-link">KYC</a>
                        <a href="{{ route('contact-us') }}" class="nav-item nav-link">Contact</a>
                    </div>
                        <div class="ms-auto d-none d-lg-block">
                        <a href="{{ route('login-page') }}" class="btn custom-btn rounded-pill py-2 px-3">Client Login</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->
     
    <!-- Sidebar start -->
<div class="float-slider-page">
    <div class="floating-buttons">
        <a href="https://www.facebook.com/people/DhanaVruksha-Financial-services/100086682897556/" target="_blank" class="button facebook">
            <span class="tooltip facebook">Facebook</span>
            <i class="fa-brands fa-facebook-f"></i>
        </a>
        <a href="https://www.linkedin.com/company/dhanavruksha-financial-services-private-ltd/" target="_blank" class="button linkedin">
            <span class="tooltip">LinkedIn</span>
            <i class="fa-brands fa-linkedin-in"></i>
        </a>
        <a href="https://www.instagram.com/dhanavruksha_" target="_blank" class="button instagram">
            <span class="tooltip instagram">Instagram</span>
            <i class="fa-brands fa-instagram"></i>
        </a>
        <a href="https://twitter.com/dhanavruksha" target="_blank" class="button twitter">
            <span class="tooltip twitter">Twitter</span>
            <i class="fa-brands fa-twitter"></i>
        </a>
    </div>

    <div class="contact-buttons">
        <a href="https://wa.me/917305888454" target="_blank" class="contact-button whatsapp">
            <span class="tooltip whatsapp">WhatsApp</span>
            <i class="fa-brands fa-whatsapp"></i>
        </a>
        <a href="tel:+917305888454" class="contact-button phone">
            <span class="tooltip phone">Phone</span>
            <i class="fa-solid fa-phone"></i>
        </a>
        <div class="contact-button hide" onclick="toggleContactButtons()">
            <span class="tooltip">Hide</span>
            <i class="fa-solid fa-bars"></i>
        </div>
    </div>
</div>
<!-- /Sidebar end -->


    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js" crossorigin="anonymous"></script>
    <script>
        function toggleContactButtons() {
            const whatsappButton = document.querySelector('.contact-button.whatsapp');
            const phoneButton = document.querySelector('.contact-button.phone');
            const hideButtonIcon = document.querySelector('.contact-button.hide i');

            whatsappButton.classList.toggle('hidden');
            phoneButton.classList.toggle('hidden');

            // Change icon
            if (whatsappButton.classList.contains('hidden')) {
                hideButtonIcon.classList.replace('fa-bars', 'fa-eye');
            } else {
                hideButtonIcon.classList.replace('fa-eye', 'fa-bars');
            }
        }
    </script>
    <!-- /Sidebar end -->



  

>


    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Bonds</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Products</a></li>
                    <li class="breadcrumb-item"><a href="#">Bonds</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- bond-info-start -->
    <div class="bond-content">
        <img src="/img/bond_left2.webp" alt="Bond Representation" class="bond-image">

        <div class="bond-text">
            <h3>Bonds</h3>
            <p>An investment avenue in which an investor loans money to an entity (government or corporate) that borrows
                funds for a defined period of time at a fixed interest rate. Bond market has not attracted retail
                investors to it. But in recent times, lackluster equity markets and low rate of interest have attracted
                retail investors towards bonds issued by corporate.</p>
        </div>
    </div>
    <!-- bond-info-end -->

     <!-- Rbi-bond-start -->
     <div class="Rbi-bond-container">
        <div class="Rbi-bond-left-section">
            <h2>7.15% RBI Bonds</h2>
            <p>
                Bonds issued by the Reserve Bank Of India (RBI). The rate of interest offered is 7.15%, payable half-yearly with cumulative and non-cumulative options available. The tenure is six years.
            </p>
        </div>
        <div class="Rbi-bond-right-section">
            <div class="box advantage">
                <h3>Advantages</h3>
                <p>Safety, guaranteed return</p>
            </div>
            <div class="box disadvantage">
                <h3>Disadvantages</h3>
                <p>Interest is taxable</p>
            </div>
        </div>
    </div>
    <!--Rbi-bond-end -->

<!--Government-bond-section-start-->
<div class="Government-bond-section">
    <div class="Government-bond-content">
      <h4>Government securities</h4>
      <p>Retail investors have not tapped this investment avenue as much as others. It is good for investors looking for reasonable returns with no risk of default as the securities the Government offers these securities. These securities can be held in a demat format. The market is limited so liquidity can be a problem. Investors need to have a thorough knowledge of this investment format to invest in them. Well, then if you are the one who prefer the comforts of safety to the greed of high returns all the above debt instruments are yours to invest in.</p>
      <button class="read-more-btn">Read More →</button>
    </div>
    <div class="image-content">
      <img src="/img/bond-gov-img1.webp" alt="Team Collaboration">
    </div>
  </div>
<!--Government-bond-section-end-->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-light rounded-circle me-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="">About Us</a>
                    <a class="btn btn-link" href="">Contact Us</a>
                    <a class="btn btn-link" href="">Our Services</a>
                    <a class="btn btn-link" href="">Terms & Condition</a>
                    <a class="btn btn-link" href="">Support</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-white mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative w-100">
                        <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email">
                        <button type="button"
                            class="btn btn-light py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Copyright Start -->
    <div class="container-fluid copyright py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="fw-medium text-light" href="#">Dhanavruksha</a>, All Right Reserved.
                </div>

            </div>
        </div>
    </div>
    <!-- Copyright End -->



    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('.auto-type', {
            strings: [' Growth', ' Financial Freedom'],
            typeSpeed: 150,
            backSpeed: 150,
            loop: true,
        });
    </script>


    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>