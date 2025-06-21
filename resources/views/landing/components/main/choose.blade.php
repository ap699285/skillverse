<div class="choose-area pt-80 pb-80">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="choose-content wow fadeInUp" data-wow-delay=".25s">
                    <div class="choose-content-info">
                        @foreach($dataChoose as $dc)
                        <div class="site-heading mb-0">
                            <span class="site-title-tagline"><i class="fa-solid fa-book-open"></i> {{ $dc->judul }}</span>
                            <h2 class="site-title text-white mb-10">{!! $dc->sub_judul !!}</h2>
                            <p class="text-white">
                                {{ $dc->keterangan }}
                            </p>
                        </div>
                        @endforeach
                        <div class="choose-content-wrap">
                            <div class="row g-4">
                                @foreach($dataChooseContent as $dcc)
                                <div class="col-md-6">
                                    <div class="choose-item">
                                        <div class="choose-item-icon">
                                            <img src="{{ asset($dcc->file_gambar) }}" alt="">
                                        </div>
                                        <div class="choose-item-info">
                                            <h4>{{ $dcc->judul }}</h4>
                                            <p>{{ $dcc->sub_judul }}</p>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                @foreach($dataChoose as $dc)
                <div class="choose-img wow fadeInRight" data-wow-delay=".25s">
                    <img src="{{ asset($dc->file_gambar) }}" alt="">
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
