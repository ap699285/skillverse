<div class="feature-area fa-negative">
    <div class="col-xl-9 ms-auto">
        <div class="feature-wrapper">
            <div class="row g-4">
                @php $no=1; @endphp
                @foreach($dataFeature as $fs)
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item">
                        <span class="count">0{{$no++}}</span>
                        <div class="feature-icon">
                            <img src="{{ asset($fs->file_gambar) }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">{{$fs->judul}}</h4>
                            <p>{{$fs->keterangan}}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-md-6 col-lg-3">
                    <div class="feature-item">
                        <span class="count">02</span>
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon/teacher.svg') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">Skilled Lecturers</h4>
                            <p>It is a long established fact that a reader will be distracted.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item">
                        <span class="count">03</span>
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon/library.svg') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">Book Library Facility</h4>
                            <p>It is a long established fact that a reader will be distracted.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-item">
                        <span class="count">04</span>
                        <div class="feature-icon">
                            <img src="{{ asset('img/icon/money.svg') }}" alt="">
                        </div>
                        <div class="feature-content">
                            <h4 class="feature-title">Affordable Price</h4>
                            <p>It is a long established fact that a reader will be distracted.</p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
