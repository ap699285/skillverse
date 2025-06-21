<div class="gallery-area py-120">
    <div class="container">
        <div class="row">
            @foreach($dataGallery as $dg)
            <div class="col-lg-6 mx-auto">
                <div class="site-heading text-center">
                    <span class="site-title-tagline"><i class="fa-solid fa-book-open"></i> {{ $dg->judul }}</span>
                    <h2 class="site-title">{!! $dg->sub_judul !!}</h2>
                    <p>{{ $dg->keterangan }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <div class="row popup-gallery">
            @foreach($dataGalleryContent->chunk(2) as $chunkIndex => $chunk)
            <div class="col-md-4 wow fadeInUp" data-wow-delay=".{{ 25 * ($chunkIndex + 1) }}s">
                @foreach ($chunk as $item)
                <div class="gallery-item">
                    <div class="gallery-img">
                        <img src="{{ asset($item->file_gambar) }}" alt="">
                    </div>
                    <div class="gallery-content">
                        <a class="popup-img gallery-link" href="{{ asset($item->file_gambar) }}"><i
                                class="fal fa-plus"></i></a>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
</div>
