<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centre for Impact Evaluation and Research Design (CFIERD)</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('website/logo.png') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/animate.min.css') }}">
    <!-- fontawesome 6.4.2 -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/fontawesome.min.css') }}">
    <!-- bootstrap min css -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/vendor/bootstrap.min.css') }}">
    <!-- swiper Css 10.2.0 -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/swiper.min.css') }}">
    <!-- Bootstrap 5.0.2 -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/vendor/magnific-popup.css') }}">
    <!-- metismenu scss -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/vendor/metismenu.css') }}">
    <!-- nice select js -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('website/assets/css/plugins/jquery-ui.css') }}">
    <!-- custom style css -->
    <link rel="stylesheet" href="{{ asset('website/assets/css/style.css') }}">

</head>

<body>
<!-- header area start -->
<header class="header header__sticky v__2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="header__wrapper">
                    <div class="header__logo">
                        <a href="/" class="header__logo--link">
                            <img style="width: 60px;" src="{{asset('website/logo.png')}}" alt="">
                        </a>
                    </div>
                    <div class="header__menu">
                        <div class="navigation">
                            <nav class="navigation__menu">
                                <ul>
                                    <li class="navigation__menu--item">
                                        <a href="{{route('site.index')}}" class="navigation__menu--item__link active">Home</a>
                                    </li>


                                    <li class="navigation__menu--item has-child has-arrow">
                                        <a href="javascript:void(0);" class="navigation__menu--item__link">About CFIERD</a>
                                        <ul class="submenu sub__style">
                                            <li><a href="{{route('site.about')}}">About CFIERD</a></li>
                                            <li><a href="{{route('site.our-team')}}">Our Team</a></li>

                                        </ul>
                                    </li>
                                    <li class="navigation__menu--item">
                                        <a href="{{route('site.web-services')}}" class="navigation__menu--item__link">Our Services</a>
                                    </li>
                                    <li class="navigation__menu--item">
                                        <a href="{{ route('site.projects') }}" class="navigation__menu--item__link">Projects</a>
                                    </li>
                                    <li class="navigation__menu--item">
                                        <a href="{{url('/contact')}}" class="navigation__menu--item__link">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header__right">
                        <div class="header__right--item">
                            <div id="langSwitcher" class="lang__trigger">
                                <span class="selected__lang">English</span>
                                <i class="fa-light fa-globe"></i>
                                <div class="translate__lang">
                                    <ul>
                                        <li><a href="#" class="active">English</a></li>
                                        <li><a href="#">French</a></li>
                                        <li><a href="#">Spanish</a></li>
                                        <li><a href="#">Romanian</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div id="search-btn" class="search__trigger">
                                <i class="fa-sharp fa-light fa-magnifying-glass"></i>
                            </div>
                            <div id="menu-btn" class="menu__trigger">
                                <img src="{{asset('website/assets/images/icon/menu__bar.svg')}}" alt="bar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header area end -->


@yield('content')

<!-- offcanvase menu -->
<!-- header style two -->
<div id="side-bar" class="side-bar">
    <button class="close-icon-menu"><i class="far fa-times"></i></button>
    <!-- inner menu area desktop start -->
    <div class="inner-main-wrapper-desk">
        <div class="thumbnail">
            <img src="{{asset('website/logo.png')}}" alt="CFIERD">
        </div>
        <div class="inner-content">
            <p class="disc" style="text-align: justify;color: black;">
                At the Centre for Impact Evaluation and Research Design (CFIERD), we specialize in crafting custom
                solutions designed to empower your organization to navigate and thrive in today's dynamic industries.
                Our expertise lies in developing innovative systems for data management, strategic training, and
                impactful project foundations, tailored specifically to your unique needs.
            </p>
            <!-- offcanvase banner -->

            <div class="offcanvase__info">
                <div class="offcanvase__info--content">
                    <a href="callto:+61485826710"><span><i class="fa-sharp fa-light fa-phone"></i></span>+263 242339691</a>
                    <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>15 Ridge Road, Avondale
                        Harare, Zimbabwe</a>
                    <div class="offcanvase__info--content--social">
                        <p class="title">Follow Us:</p>
                        <div class="social__links">
                            <a href="#"><i class="fa-brands fa-facebook"></i></a>
                            <a href="#"><i class="fa-brands fa-instagram"></i></a>
                            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                            <a href="#"><i class="fa-brands fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area start -->
    <div class="mobile-menu-main">
        <nav class="nav-main mainmenu-nav mt--30">
            <ul class="mainmenu metismenu" id="mobile-menu-active">

                <li>
                    <a href="{{route('site.index')}}" class="main">Home</a>
                </li>
                <li>
                    <a href="{{route('site.about')}}" class="main">About CFIERD</a>
                </li>
                <li>
                    <a href="{{route('site.web-services')}}" class="main">Our Services</a>
                </li>

                <li>
                    <a href="{{ route('site.projects') }}" class="main">Projects</a>
                </li>


                <li>
                    <a href="{{route('site.contact')}}" class="main">Contact Us</a>
                </li>
            </ul>
        </nav>

        <div class="offcanvase__info--content mt--30">
            <a href="callto:+61485826710"><span><i class="fa-sharp fa-light fa-phone"></i></span>+263 24233969110</a>
            <a href="#"><span><i class="fa-sharp fa-light fa-location-dot"></i></span>15 Ridge Road, Avondale
                Harare, Zimbabwe</a>
            <div class="offcanvase__info--content--social">
                <p class="title">Follow Us:</p>
                <div class="social__links">
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- mobile menu area end -->
</div>
<!-- header style two End -->

<div class="search-input-area">
    <div class="container">
        <div class="search-input-inner">
            <div class="input-div">
                <input class="search-input autocomplete ui-autocomplete-input" type="text"
                       placeholder="Search by keyword or #" autocomplete="off">
                <button><i class="far fa-search"></i></button>
            </div>
        </div>
    </div>
    <div id="close" class="search-close-icon"><i class="far fa-times"></i></div>
</div>
<!-- rts backto top start -->
<div class="progress-wrap">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
        <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
              style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919, 307.919; stroke-dashoffset: 307.919;"></path>
    </svg>
</div>
<!-- rts back to top end -->
<div id="anywhere-home" class="">
</div>

<!-- footer start -->
<footer class="rts-footer rts-footer-padding v_2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="rts-footer-newsletter">
                <div class="col-lg-10">
                    <div class="rts-newsletter-box-content">
                        <h4 class="newsletter-title">Subscribe To Newsletter
                        </h4>
                        <div class="newsletter-form w-530">
                            <form action="#">
                                <input type="email" name="subscription" id="subscription" placeholder="Enter Your mail"
                                       required="">
                                <button type="submit" class="rts-nbg-btn btn-arrow">Subscribe <span><i
                                            class="fa-sharp fa-regular fa-arrow-right"></i></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       {{-- <div class="row gy-5 gy-lg-0">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="rts-footer-widget w-320">
                    <a href="index.html" class="d-block rts-footer-logo mb--40">
                        <img width="100" src="{{asset('logo.png')}}" alt="Unipix">
                    </a>
                    <p style="text-align: justify;color: white;">
                        At the Centre for Impact Evaluation and Research Design (CFIERD), we specialize in crafting
                        custom solutions designed to empower your organization to navigate and thrive in today's dynamic
                        industries. Our expertise lies in developing innovative systems for data management, strategic
                        training, and impactful project foundations, tailored specifically to your unique needs.
                    </p>
                    <div class="rts-contact-link">
                        <a href=""><i class="fa-sharp fa-light fa-location-dot"></i> 15 Ridge Road, Avondale Harare, Zimbabwe </a>
                        <a href="callto:+263 242339691"><i class="fa-thin fa-phone"></i> +263 242339691</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="rts-footer-widget ">
                    <h6 class="rt-semi">About CFIERD</h6>
                    <div class="rts-footer-menu">
                        <ul>
                            <li><a href="">About Us</a></li>
                            <li><a href="">Our Journey & Approach</a></li>
                            <li><a href="">Research & Development</a></li>
                            <li><a href="">Services</a></li>
                            <li><a href="">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-sm-4">
                <div class="rts-footer-widget ml--30">
                    <h6 class="rt-semi">Our Campus</h6>
                    <div class="rts-footer-menu">
                        <ul>
                            <li><a href="about.html">About </a></li>
                            <li><a href="tution-fee.html">Tution Fee</a></li>
                            <li><a href="alumni.html">Alumni</a></li>
                            <li><a href="faculty.html">Faculty Staff</a></li>
                            <li><a href="event.html">Event</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="rts-footer-widget ml--30">
                    <h6 class="rt-semi">Recent Post</h6>
                    <div class="rts-post-widget">
                        <ul class="list-unstyled">
                            <li class="single-post">
                                <a href="blog-details.html" class="blog-thumb">
                                    <img src="assets/images/blog/w-1.jpg" alt="latest post">
                                </a>
                                <div class="post-content">
                                    <span class="rt-date">October 29, 2023</span>
                                    <a href="blog-details.html">
                                        Avoid These 4 Common When Managing Remote Teams
                                    </a>
                                </div>
                            </li>
                            <li class="single-post">
                                <a href="blog-details.html" class="blog-thumb">
                                    <img src="assets/images/blog/small-thumb-1.jpg" alt="latest post">
                                </a>
                                <div class="post-content">
                                    <span class="rt-date">October 29, 2023</span>
                                    <a href="blog-details.html">
                                        Avoid These 4 Common When Managing Remote Teams
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
</footer>
<div class="rts-footer-copy-right v_1">
    <div class="container">
        <div class="row">
            <div class="rt-center">
                <p class="--p-xs">Copyright &copy; {{date('Y')}} All Rights Reserved by <a href="#">Leading Digital</a></p>
            </div>
        </div>
    </div>
</div>
<!-- footer end -->
<!-- scripts -->
<!-- jquery js -->
<script src="{{ asset('website/assets/js/vendor/jquery.min.js') }}"></script>
<!-- bootstrap 5.0.2 -->
<script src="{{ asset('website/assets/js/plugins/bootstrap.min.js') }}"></script>
<!-- jquery ui js -->
<script src="{{ asset('website/assets/js/vendor/jquery-ui.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('website/assets/js/vendor/waw.js') }}"></script>
<!-- mobile menu -->
<script src="{{ asset('website/assets/js/vendor/metismenu.js') }}"></script>
<!-- magnific popup -->
<script src="{{ asset('website/assets/js/vendor/magnifying-popup.js') }}"></script>
<!-- swiper JS 10.2.0 -->
<script src="{{ asset('website/assets/js/plugins/swiper.js') }}"></script>
<!-- counterup -->
<script src="{{ asset('website/assets/js/plugins/counterup.js') }}"></script>
<script src="{{ asset('website/assets/js/vendor/waypoint.js') }}"></script>
<!-- isotop mesonary -->
<script src="{{ asset('website/assets/js/plugins/isotop.js') }}"></script>
<script src="{{ asset('website/assets/js/plugins/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('website/assets/js/plugins/sticky-sidebar.js') }}"></script>
<script src="{{ asset('website/assets/js/plugins/resize-sensor.js') }}"></script>
<script src="{{ asset('website/assets/js/plugins/twinmax.js') }}"></script>
<!-- dynamic Contact Form -->
<script src="{{ asset('website/assets/js/plugins/contact.form.js') }}"></script>
<script src="{{ asset('website/assets/js/plugins/nice-select.min.js') }}"></script>
<!-- main Js -->
<script src="{{ asset('website/assets/js/main.js') }}"></script>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/6634956ea0c6737bd133e3b3/1hsumfem6';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->
</body>

</html>

