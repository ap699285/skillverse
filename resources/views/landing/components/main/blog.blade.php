<div class="blog-area py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="fa-solid fa-book-open"></i> Our Blog</span>
                    <h2 class="site-title">Latest News & <span>Blog</span></h2>
                    <p>It is a long established fact that a reader will be distracted by the readable content of
                        a page when looking at its layout.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($dataBlog as $db)
            <div class="col-md-6 col-lg-4">
                <div class="blog-item wow fadeInUp" data-wow-delay=".25s">
                    <div class="blog-date"><i class="fa-solid fa-calendar-days"></i> {{ $db->created_at }}</div>
                    <div class="blog-item-img">
                        <img src="{{ asset($db->file_gambar) }}" alt="Thumb">
                    </div>
                    <div class="blog-item-info">
                        <div class="blog-item-meta">
                            <ul>
                                <li><a href="#"><i class="far fa-user-circle"></i> By {{ $db->name }}</a></li>
                                <li><a href="#"><i class="far fa-comments"></i> {{ $db->jumlah_comment }} Comments</a></li>
                            </ul>
                        </div>
                        <h4 class="blog-title">
                            <a href="blog-single.html">{{ $db->judul }}</a>
                        </h4>
                        <a class="theme-btn" href="{{ url('blog_content/'.$db->id) }}">Read More<i
                                class="fas fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
