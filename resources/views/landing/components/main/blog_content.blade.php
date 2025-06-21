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
     <title>SkillVerse | Blog & News</title>

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
                 <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
             </div>
         </form>
     </div>
     <!-- popup search end -->

     <main class="main">
         <!-- breadcrumb -->
         @foreach($dataBlog as $dbn)
         <div class="site-breadcrumb" style="background: url({{ asset($dbn->file_gambar) }})">
             <div class="container">
                 <h2 class="breadcrumb-title">{{ $dbn->judul }}</h2>
             </div>
         </div>
         @endforeach
         <!-- breadcrumb end -->

         <!-- blog single area -->
         <div class="blog-single-area pt-120 pb-120">
             <div class="container">
                 <div class="row">
                     <div class="col-lg-8">
                         <div class="blog-single-wrapper">
                             <div class="blog-single-content">
                                 @foreach($dataBlog as $dbn)
                                 <div class="blog-thumb-img">
                                     <img src="{{ asset($dbn->file_gambar) }}" alt="thumb">
                                 </div>
                                 <div class="blog-info">
                                     <div class="blog-meta">
                                         <div class="blog-meta-left">
                                             <ul>
                                                 <li><i class="far fa-user"></i><a href="#">{{ $dbn->name }}</a></li>
                                                 <li><i class="far fa-comments"></i>{{ $dbn->jumlah_comment }} Comments
                                                 </li>
                                                 <li><i class="far fa-thumbs-up"></i>{{ $dbn->like }} Like</li>
                                             </ul>
                                         </div>
                                     </div>
                                     <div class="blog-details">
                                         <h3 class="blog-details-title mb-20">{{ $dbn->judul }}</h3>
                                         <div>
                                             {!! $dbn->content !!}
                                         </div>
                                     </div>
                                 </div>
                                 @endforeach
                                 <div class="blog-comments">
                                     <h3>Comments ({{count($dataBlogComment)}})</h3>
                                     <div class="blog-comments-wrapper">
                                         @foreach($dataBlogComment as $dbc)
                                         <div class="blog-comments-single">
                                             <img style="height: 50px; width: 50px;" src="https://api.dicebear.com/9.x/initials/svg?seed=`{{$dbc->name}}`" alt="thumb">
                                             <div class="blog-comments-content">
                                                 <h5>{{$dbc->name}}</h5>
                                                 <span><i class="far fa-clock"></i> {{$dbc->created_at}}</span>
                                                 <p>{{$dbc->comment}}</p>
                                             </div>
                                         </div>
                                         @endforeach
                                     </div>
                                     <div class="blog-comments-form">
                                         <h3>Leave A Comment</h3>
                                         <form method="POST" action="{{ url('save_comment_blog') }}">
                                             @csrf
                                             <input type="number" value="{{$blog_id}}" name="blog_id" hidden>
                                             <div class="row">
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <input type="text" class="form-control" name="nama"
                                                             placeholder="Your Name*" required>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-6">
                                                     <div class="form-group">
                                                         <input type="email" class="form-control" name="email"
                                                             placeholder="Your Email*" required>
                                                     </div>
                                                 </div>
                                                 <div class="col-md-12">
                                                     <div class="form-group">
                                                         <textarea class="form-control" rows="5" name="comment"
                                                             placeholder="Your Comment*" required></textarea>
                                                     </div>
                                                     <button type="submit" class="theme-btn">Post Comment <i
                                                             class="far fa-paper-plane"></i></button>
                                                 </div>
                                             </div>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-lg-4">
                         <aside class="sidebar">
                             <!-- search-->
                             <div class="widget search">
                                 <h5 class="widget-title">Search</h5>
                                 <form class="search-form">
                                     <input type="text" class="form-control" placeholder="Search Here...">
                                     <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                                 </form>
                             </div>
                             <!-- recent post -->
                             <div class="widget recent-post">
                                 <h5 class="widget-title">Recent Post</h5>
                                 @foreach($dataBlogRecent as $dbr)
                                 <div class="recent-post-single">
                                     <div class="recent-post-img">
                                         <img src="{{ asset($dbr->file_gambar) }}" alt="thumb">
                                     </div>
                                     <div class="recent-post-bio">
                                         <h6><a href="{{ url('blog_content/'.$dbr->id) }}">{{$dbr->judul}}</a></h6>
                                         <span><i class="far fa-clock"></i>{{$dbr->created_at}}</span>
                                     </div>
                                 </div>
                                 @endforeach
                             </div>
                             <!-- social share -->
                             <div class="widget social-share">
                                 <h5 class="widget-title">Follow Us</h5>
                                 <div class="social-share-link">
                                     <a href="#"><i class="fab fa-facebook-f"></i></a>
                                     <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                     <a href="#"><i class="fab fa-dribbble"></i></a>
                                     <a href="#"><i class="fab fa-whatsapp"></i></a>
                                     <a href="#"><i class="fab fa-youtube"></i></a>
                                 </div>
                             </div>

                         </aside>
                     </div>
                 </div>
             </div>
         </div>
         <!-- blog single area end -->
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
                                 &copy; Copyright <span id="date"></span> <a href="#"> SkillVerse </a> All Rights
                                 Reserved.
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

     <!-- scroll-top -->
     <a href="#" id="scroll-top"><i class="fa-solid fa-arrow-up"></i></a>
     <!-- scroll-top end -->

     <!-- js -->
     <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
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
