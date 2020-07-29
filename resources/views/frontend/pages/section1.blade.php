<div id="section1" class="section1">
    <div class="sec1-wrapper text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @include('frontend/pages/breadcum')
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div id="slideBanner" class="swiper-container swiper-banner">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-item">
                            <div class="overlay-bg"></div>
                            <img src="{{ url('/') }}/assets/images/hcertificate-wrapperome-bg.jpg?{{ config('custom.version') }}" alt="">
                        </div>
                        <div class="swiper-slide slide-item">
                            <div class="overlay-bg"></div>
                            <img src="{{ url('/') }}/assets/images/home-bg.jpg?{{ config('custom.version') }}" alt="">
                        </div>
                        <div class="swiper-slide slide-item">
                            <div class="overlay-bg"></div>
                            <img src="{{ url('/') }}/assets/images/home-bg.jpg?{{ config('custom.version') }}" alt="">
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>

        </div>
    </div>
</div>
