@extends('layouts.default')
@section('header')
    <title>{{ config('custom.seo_title') }}</title>
    <meta name="description" content="{{ config('custom.seo_description') }}">
    <meta property="og:type" content="article" />
    <meta property="og:site_name" content="{{ url('/')  }}" />
    <meta property="og:url" content="{{ Request::url()  }}" />
    <meta property="og:image" content="{{ url('uploads/others/fbimage.jpg?'.config('custom.version'))  }}" />
    <meta property="og:title" content="{{ config('custom.seo_title') }}" />
    <meta property="og:description" content="{{ config('custom.seo_description') }}" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,600,600i,700" rel="stylesheet">

    <!-- <script src="{{ url('assets/js/?'.config('custom.version')) }}"></script> -->

@stop

@section('content')
<section id="course-wrapper" class="course-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div id="slideCourse" class="swiper-container swiper-course">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide slide-item">
                           
                        </div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <div class="section-course pad-80">
            <div class="head_title text-center fix">
                <h2 class="text-uppercase">Khóa học</h2>
            </div>
            <div id="slideCourse" class="swiper-container swiper-course">
                <div class="swiper-wrapper">
                    <div class="swiper-slide slide-item">
                        <div class="content-course-wrapper">
                            <div class="left-course">
                                <div class="left-side">
                                    <img src="{{ url('/') }}/assets/images/left-demo.png?{{ config('custom.version') }}" alt="">
                                    <div class="left-side-title">
                                        <h3 class="text-uppercase">
                                        Khóa học phụ trợ bảo hiểm
                                        </h3>
                                        <h6>Nguyễn Văn A</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="right-course">
                                @for($i=1;$i<=6;$i++)
                                <div class="course-item">
                                    <img src="{{ url('/') }}/assets/images/item-demo.png?{{ config('custom.version') }}" alt="">
                                    <div class="head-title text-center">
                                        <h5>Loại hình 1</h5>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</section>


@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

@stop