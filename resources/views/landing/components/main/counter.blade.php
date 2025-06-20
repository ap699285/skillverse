<div class="counter-area pt-60 pb-60">
    <div class="container">
        <div class="row">
            @foreach($dataCounter as $dc)
            <div class="col-lg-3 col-sm-6">
                <div class="counter-box">
                    <div class="icon">
                        <img src="{{ asset($dc->file_gambar) }}" alt="">
                    </div>
                    <div>
                        <span class="counter" data-count="+" data-to="{{$dc->sub_judul}}" data-speed="3000">{{$dc->sub_judul}}</span>
                        <h6 class="title">{{$dc->judul}}</h6>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
