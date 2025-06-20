<div class="video-area">
    <div class="container">
        <div class="row g-4">
            @foreach($dataVideo as $dv)
            <div class="col-lg-4 wow fadeInLeft" data-wow-delay=".25s">
                <div class="site-heading mb-3">
                    <span class="site-title-tagline"><i class="fa-solid fa-book-open"></i> {{$dv->judul}}</span>
                    <h2 class="site-title">
                        {!! $dv->sub_judul !!}
                    </h2>
                </div>
                <p class="about-text">
                    {{$dv->keterangan}}
                </p>
                {{-- <a href="about.html" class="theme-btn mt-30">Learn More<i class="fas fa-arrow-right-long"></i></a> --}}
            </div>
            <div class="col-lg-8 wow fadeInRight" data-wow-delay=".25s">
                <div class="video-content" style="background-image: url({{$dv->file_gambar}});">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="video-wrapper">
                                <a class="play-btn popup-youtube" href="{{$dv->url}}">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
