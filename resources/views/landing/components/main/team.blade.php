<div class="team-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="fa-solid fa-book-open"></i> Our Teachers</span>
                    <h2 class="site-title">Meet With Our <span>Teachers</span></h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of
                        a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($dataTeam as $dt)
            <div class="col-md-6 col-lg-3">
                <div class="team-item wow fadeInUp" data-wow-delay=".25s">
                    <div class="team-img">
                        <img src="{{ asset($dt->file_gambar) }}" alt="thumb">
                    </div>
                    <div class="team-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-whatsapp"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                    <div class="team-content">
                        <div class="team-bio">
                            <h5><a href="teacher-single.html">{{ $dt->judul }}</a></h5>
                            <span>{{ $dt->sub_judul }}</span>
                        </div>
                    </div>
                    <span class="team-social-btn"><i class="fa-solid fa-share-nodes"></i></span>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
