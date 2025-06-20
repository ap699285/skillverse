<div class="course-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="fa-solid fa-book-open"></i> Our Courses</span>
                    <h2 class="site-title">Let's Check Our <span>Courses</span></h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of
                        a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($dataCourse as $dc)
            <div class="col-md-6 col-lg-4">
                <div class="course-item wow fadeInUp" data-wow-delay=".25s">
                    <div class="course-img">
                        <span class="course-tag"><i class="far fa-bookmark"></i> {{ $dc->judul }}</span>
                        <img src="{{ asset($dc->file_gambar) }}" alt="">
                        <a href="course-single.html" class="btn"><i class="fa-solid fa-link"></i></a>
                    </div>
                    <div class="course-content">
                        <div class="course-meta">
                            <span class="course-meta-left"><i class="fa-solid fa-book"></i> {{ $dc->lesson }}</span>
                            {{-- <div class="course-rating">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="far fa-star"></i>
                                <span>(4.0)</span>
                            </div> --}}
                        </div>
                        <h4 class="course-title">
                            <a href="course-single.html">{{ $dc->sub_judul }}</a>
                        </h4>
                        <p class="course-text">
                            {{ $dc->keterangan }}
                        </p>
                        <div class="course-bottom">
                            <div class="course-bottom-left">
                                <span><i class="fa-solid fa-users"></i>{{ $dc->jumlah_kursi }}</span>
                                <span><i class="fa-solid fa-clock"></i>{{ $dc->lama_waktu }}</span>
                            </div>
                            {{-- <span class="course-price">$750</span> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
