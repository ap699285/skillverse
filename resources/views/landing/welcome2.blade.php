
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- title -->
    <title>SkillVerse - School, College, University And Courses HTML5 Template</title>

    <!-- favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('img/logo/favicon-skillverse.png') }}">

    <!-- css -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <!-- preloader -->
    @include('landing.components.headers.preloader')
    <!-- preloader end -->

    <!-- header area -->
    <header class="header">
        @include('landing.components.headers.main-navigation')
    </header>
    <!-- header area end -->

    <!-- popup search -->
    <div class="search-popup">
        <button class="close-search"><i class="fa-solid fa-xmark"></i></button>
        <form action="#">
            <div class="form-group">
                <input type="search" name="search-field" placeholder="Search Here..." required>
                <button type="submit"><i class="far fa-search"></i></button>
            </div>
        </form>
    </div>
    <!-- popup search end -->


    <main class="main">
        <!-- hero slider -->
        @include('landing.components.main.slider')
        <!-- hero slider end -->

        <!-- feature area -->
        @include('landing.components.main.feature')
        <!-- feature area end -->


        <!-- about area -->
        @include('landing.components.main.about')
        <!-- about area end -->


        <!-- counter area -->
        @include('landing.components.main.counter')
        <!-- counter area end -->


        <!-- course-area -->
        @include('landing.components.main.course')
        <!-- course-area -->


        <!-- video-area -->
        @include('landing.components.main.video')
        <!-- video-area end -->
        

        <!-- team-area -->
        @include('landing.components.main.team')
        <!-- team-area end -->
        

        <!-- choose-area -->
        @include('landing.components.main.choose')
        <!-- choose-area end -->


        <!-- gallery-area -->
        @include('landing.components.main.gallery')
        <!-- gallery-area end -->


        <!-- cta-area -->
        @include('landing.components.main.cta')
        <!-- cta-area end -->


        <!-- event area -->
        @include('landing.components.main.event')
        <!-- event area end -->


        <!-- enroll area-->
        @include('landing.components.main.enrol')
        <!-- enroll area end -->


        <!-- department area -->
        @include('landing.components.main.departement')
        <!-- department area end -->


        <!-- testimonial area -->
        @include('landing.components.main.testimonial')
        <!-- testimonial area end -->


        <!-- blog area -->
        @include('landing.components.main.blog')
        <!-- blog area end -->


        <!-- partner area -->
        @include('landing.components.main.partner')
        <!-- partner area end -->

    </main>


    <!-- footer area -->
    <footer class="footer-area">
        <div class="footer-shape">
            <img src="{{ asset('img/shape/03.png') }}" alt="">
        </div>
        @include('landing.components.footers.widget')
        <div class="copyright">
            <div class="container">
                <div class="copyright-wrapper">
                    <div class="row">
                        <div class="col-md-6 align-self-center">
                            <p class="copyright-text">
                                &copy; Copyright <span id="date"></span> <a href="#"> SkillVerse </a> All Rights Reserved.
                            </p>
                        </div>
                        <div class="col-md-6 align-self-center">
                            <ul class="footer-social">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer area end -->


    <!-- scroll-top -->
    <a href="#" id="scroll-top"><i class="fa-solid fa-arrow-up"></i></a>
    <!-- scroll-top end -->


    <!-- js -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <script src="{{ asset('js/modernizr.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('js/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/counter-up.js') }}"></script>
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>