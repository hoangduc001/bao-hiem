<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="vi-VN" dir="LTR" xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="{{ config('custom.seo_author') }}">
    <meta property="fb:app_id" content="{{ config('custom.facebook_appid') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="{{ url('uploads/others/favicon.png?'.config('custom.version')) }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />

    <!-- Link bootstrap -->
    <link rel="stylesheet"
          href="{{ url('assets/lib/bootstrap-4.3.1-dist/css/bootstrap.min.css?'.config('custom.version')) }}">
    <!-- Link font-awesome -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          type="text/css" />
    <!-- Link CSS default -->

    <!-- <link type="text/css" href="{{ url('/') }}/assets/css/system.css?{{ config('custom.version') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ url('assets/lib/swiper/css/swiper.min.css?'.config('custom.version')) }}">
    <link rel="stylesheet" href="{{ url('assets/lib/jqueryModal/css/jquery.modal.min.css?'.config('custom.version')) }}" />
    <link type="text/css" href="{{ url('assets/css/styles.css?18022020') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="{{ url('/') }}/assets/js/jquery-3.3.1.js"></script>
    <script src="{{ url('assets/lib/popper/js/popper.min.js?'.config('custom.version')) }}"></script>
    <script src="{{ url('assets/lib/bootstrap-4.3.1-dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('assets/lib/swiper/js/swiper.min.js?'.config('custom.version')) }}"></script>
    {!! config('custom.embed_header') !!}


    @yield('header')
<script>


</script>
</head>

<body class="">
<!-- Menu -->
{{--sticky-top--}}

<!-- Menu -->
<div class="body-page">
    <div class="page-wrapper">
    @include('frontend/pages/section1')
        @yield('content')
    </div>
    <!-- Back to top -->
    <a class="scrollup"></a>
</div>
<footer>
    <div class="footer-ctn">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mt-5">
                    <div class="foot-title">
                        <h5>CÔNG TY CỔ PHẦN TƯ VẤN DỊCH VỤ BẢO HIỂM VIỆT NAM</h5>
                    </div>

                    <div class="footer-content">
                        <ul class="footer-nav">
                            <li>
                                MST : 0108560536</span>
                            </li>
                            
                            <li>
                                Phòng 520, toà nhà 142 Lê Duẩn, Khâm Thiên, Đống Đa, Hà Nội
                            </li>
                            <li>
                                Hotline <a href="tel:0906060784">0906.060.784</a><span> | <a href="tel:0383590784">0383.590.784</a></span>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mt-5">
                    <div class="foot-title second-part-title">
                        <h5>Về Vics Corp</h5>
                    </div>
                    <div class="footer-content">
                        <ul class="footer-nav">
                            <li>
                                <a href="#">Điều khoản sử dụng</a>
                            </li>
                            <li>
                                <a href="#">Quy chế hoạt động</a>
                            </li>
                            <li>
                                <a href="#">Chính sách bảo mật </a>
                            </li>
                            <li>
                                <a href="#">Trung tâm chăm sóc khách hàng </a>
                            </li>
                            <li>
                                <a href="#">Chính sách hoàn tiền</a>
                            </li>
                            <ul class="ft-social">
                                <li><a href="" target="_blank"><img src="{{ url('assets/images/home/fb.png?'.config('custom.version')) }}" alt=""></a></li>
                                <li><a href="" target="_blank"><img src="{{ url('assets/images/home/insta.png?'.config('custom.version')) }}" alt=""></a></li>
                                <li><a href="" target="_blank"><img src="{{ url('assets/images/home/twitter.png?'.config('custom.version')) }}" alt=""></a></li>
                            </ul>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 mt-5 footer-text-right">
                    <div class="foot-slogan">
                        <img src="{{ url('assets/images/home/logo.png?'.config('custom.version')) }}" alt="">
                        <div class="slogan">
                            Tải ngay App Vics corp Học tốt hơn - thoải mái hơn
                        </div>
                    </div>
                    <div class="footer-content">
                        <div class="app-download">
                            <a href="#"><img src="{{ url('assets/images/home/ch-play1.png?'.config('custom.version')) }}" alt=""></a>
                            <a href="#"><img src="{{ url('assets/images/home/app-store.png?'.config('custom.version')) }}" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="scrollup"><img src="{{url('assets/images/default/bottom-to-top.png')}}" alt=""></a>
    {!! config('custom.embed_footer') !!}

    @yield('footer')
    <script src="{{ url('assets/lib/jqueryModal/js/jquery.modal.min.js?'.config('custom.version')) }}"></script>

    <script>
        $(document).ready(function(){
            // $.ui.menu.init();
            $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
               
            } else {
                $('.scrollup').fadeOut();
                
            }
            });
            $(window).scroll(function () {
                if ($(this).scrollTop() > 600) {
                    $('.contact-floating').fadeIn();
                } else {
                    $('.contact-floating').fadeOut();
                }
            });
            $('.scrollup').click(function () {
                $("html, body").animate({
                    scrollTop: 0
                }, 600);
                return false;
            });
            $('.parent .item').on("click", function() {
                $('.child').slideToggle( 500, function() {
                    $('.child .detail-content').show( 100 );
                });
            });
            $('.parent2 .item').on("click", function() {
                $('.child2').slideToggle( 500, function() {
                    $('.child2 .detail-content').show( 100 );
                });
            });
            $('.parent3 .item').on("click", function() {
                $('.child3').slideToggle( 500, function() {
                    $('.child3 .detail-content').show( 100 );
                });
            });
        });
    </script>
    <script src="{{ url('assets/js/custom.js?'.config('custom.version')) }}"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src='https://foliotek.github.io/Croppie/croppie.js'></script>

  <script>
    AOS.init();
  </script>
</body>
</html>
