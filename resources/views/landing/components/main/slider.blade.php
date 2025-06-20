<div class="hero-section">
    <div class="hero-slider owl-carousel owl-theme">
        @foreach($dataSlider as $slide)
        <div class="hero-single" style="background: url({{ $slide->file_gambar }})">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-7">
                        <div class="hero-content">
                            <h6 class="hero-sub-title" data-animation="fadeInDown" data-delay=".25s">
                                <i class="fa-solid fa-book-open"></i>{{ $slide->judul }}
                            </h6>
                            <h1 class="hero-title" data-animation="fadeInRight" data-delay=".50s">
                                {!! $slide->sub_judul !!}
                            </h1>
                            <p data-animation="fadeInLeft" data-delay=".75s">
                                {{ $slide->keterangan }}
                            </p>
                            <div class="hero-btn" data-animation="fadeInUp" data-delay="1s">
                                <a href="about.html" class="theme-btn">About More<i
                                        class="fas fa-arrow-right-long"></i></a>
                                <a href="contact.html" class="theme-btn theme-btn2">Learn More<i
                                        class="fas fa-arrow-right-long"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
