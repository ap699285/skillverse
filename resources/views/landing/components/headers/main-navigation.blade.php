<div class="main-navigation">
    <nav class="navbar navbar-expand-lg">
        <div class="container position-relative">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('img/logo/logo-skillverse.png') }}" alt="logo">
            </a>
            <div class="mobile-menu-right">
                <div class="search-btn">
                    <button type="button" class="nav-right-link search-box-outer"><i
                            class="fa-solid fa-magnifying-glass"></i></button>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-mobile-icon"><i class="fa-solid fa-bars"></i></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="main_nav">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link active" href="#" data-bs-toggle="dropdown">Home <i
                                class="fa-solid fa-caret-down"></i></a>
                        <ul class="dropdown-menu fade-down">
                            <li><a class="dropdown-item" href="{{ url('/') }}">Home Page</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown">Courses <i
                                class="fa-solid fa-caret-down"></i></a>
                        <ul class="dropdown-menu fade-down">
                            <li><a class="dropdown-item" href="course.html">Courses One</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mega-menu dropdown">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown">Academics <i
                                class="fa-solid fa-caret-down"></i></a>
                        <div class="dropdown-menu fade-down">
                            <div class="mega-content">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-12 col-sm-4 col-md-3">
                                            <h5>About Us</h5>
                                            <div class="menu-about">
                                                <a href="#" class="menu-about-logo"><img
                                                        src="{{ asset('img/logo/logo-skillverse-light.png') }}" alt=""></a>
                                                <p>We are many variations of passages available but the majority
                                                    have suffered alteration in some form by injected humour
                                                    words injected humour believable.</p>
                                            </div>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-3">
                                            <h5>Undergraduate</h5>
                                            <ul class="mega-menu-item">
                                                <li><a class="dropdown-item" href="academic-single.html">Art And
                                                        Design</a></li>
                                                <li><a class="dropdown-item" href="academic-single.html">Acting
                                                        And Drama</a></li>
                                                <li><a class="dropdown-item" href="academic-single.html">Accounting And
                                                        Finance</a>
                                                </li>
                                                <li><a class="dropdown-item" href="academic-single.html">Biology
                                                        And Conservation</a></li>
                                                <li><a class="dropdown-item" href="academic-single.html">Science
                                                        And Engineering</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-sm-4 col-md-3">
                                            <h5>Graduate Program</h5>
                                            <ul class="mega-menu-item">
                                                <li><a class="dropdown-item" href="academic-single.html">Software
                                                        Systems</a></li>
                                                <li><a class="dropdown-item" href="academic-single.html">Human
                                                        Resource</a></li>
                                                <li><a class="dropdown-item" href="academic-single.html">Health
                                                        Administration</a></li>
                                                <li><a class="dropdown-item"
                                                        href="academic-single.html">Biochemistry</a></li>
                                                <li><a class="dropdown-item" href="academic-single.html">Computer
                                                        Science</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-3">
                                            <h5>Resources</h5>
                                            <ul class="mega-menu-item">
                                                <li><a class="dropdown-item" href="academic.html">Academics
                                                        Department</a></li>
                                                <li><a class="dropdown-item" href="academic-single.html">Academic
                                                        Department
                                                        Single</a></li>
                                                <li><a class="dropdown-item" href="faculty.html">Our Faculty</a>
                                                </li>
                                                <li><a class="dropdown-item" href="faculty-single.html">Faculty
                                                        Single</a></li>
                                                <li><a class="dropdown-item" href="contact.html">Contact With
                                                        Us</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown">Pages <i
                                class="fa-solid fa-caret-down"></i></a>
                        <ul class="dropdown-menu fade-down">
                            <li><a class="dropdown-item" href="{{ url('about_us') }}">About Us</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Events <i class="fa-solid fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="event.html">Events</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Portfolio <i class="fa-solid fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="portfolio.html">Portfolio</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Teachers <i class="fa-solid fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="teacher.html">Teachers One</a></li>
                                    <li><a class="dropdown-item" href="teacher-2.html">Teachers Two</a></li>
                                    <li><a class="dropdown-item" href="teacher-single.html">Teachers Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="gallery.html">Gallery</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Authentication <i
                                        class="fa-solid fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="login.html">Login</a></li>
                                    <li><a class="dropdown-item" href="register.html">Register</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#" data-bs-toggle="dropdown">Admissions <i
                                class="fa-solid fa-caret-down"></i></a>
                        <ul class="dropdown-menu fade-down">
                            <li><a class="dropdown-item" href="how-to-apply.html">How To Apply</a></li>
                            <li><a class="dropdown-item" href="application-form.html">Application Form</a></li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Our Campus <i class="fa-solid fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="campus-tour.html">Campus Tour</a></li>
                                    <li><a class="dropdown-item" href="campus-life.html">Campus Life</a></li>
                                    <li><a class="dropdown-item" href="notice-board.html">Notice Board</a></li>
                                    <li><a class="dropdown-item" href="student-activities.html">Student
                                            Activities</a></li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Our Facilities <i
                                        class="fa-solid fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="facility.html">Facilities</a></li>
                                    <li><a class="dropdown-item" href="facility-single.html">Facility Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Our Research <i
                                        class="fa-solid fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="research.html">Research</a></li>
                                    <li><a class="dropdown-item" href="research-single.html">Research Single</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-submenu">
                                <a class="dropdown-item" href="#">Our Clubs <i class="fa-solid fa-caret-down"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="club.html">Our Clubs</a></li>
                                    <li><a class="dropdown-item" href="club-single.html">Club Single</a></li>
                                </ul>
                            </li>
                            <li><a class="dropdown-item" href="tuition-fee.html">Tuition Fees</a></li>
                            <li><a class="dropdown-item" href="alumni.html">Alumni</a></li>
                            <li><a class="dropdown-item" href="scholarship.html">Scholarships</a></li>
                            <li><a class="dropdown-item" href="our-fund.html">Our Fund</a></li>
                            <li><a class="dropdown-item" href="athletics.html">Athletics</a></li>
                            <li><a class="dropdown-item" href="health-care.html">Health Care</a></li>
                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
                </ul>
                <div class="nav-right">
                    <div class="search-btn">
                        <button type="button" class="nav-right-link search-box-outer"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </div>
                    <div class="nav-right-btn mt-2">
                        @if (Auth::check())
                        <a href="{{ url('/dashboard') }}" class="theme-btn"><i class="fa-solid fa-chart-pie fa-fw"></i>Dashboard</a>
                        @else
                        <a href="{{ url('/login') }}" class="theme-btn"><i class="fa-solid fa-right-to-bracket"></i>Sign In</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>
