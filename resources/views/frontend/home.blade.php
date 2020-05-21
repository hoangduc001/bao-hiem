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

<section class="pre-certificate">
    <div class="certificate-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head_title text-center fix">
                        <h2 class="text-uppercase">Luyện thi chứng chỉ</h2>
                    </div>
                    <div class="certi-content-wrapper">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-certi-tab" data-toggle="tab" href="#nav-certi" role="tab" aria-controls="nav-certi" aria-selected="true">Chứng chỉ phụ trợ bảo hiểm</a>
                                <a class="nav-item nav-link" id="nav-agency-tab" data-toggle="tab" href="#nav-agency" role="tab" aria-controls="nav-agency" aria-selected="false">Chứng chỉ đại lí bảo hiểm</a>
                                <a class="nav-item nav-link" id="nav-human-tab" data-toggle="tab" href="#nav-human" role="tab" aria-controls="nav-human" aria-selected="false">Chứng chỉ phi nhân thọ cơ bản</a>
                            </div>
                        </nav>
                    </div>
                    <div class="pre-certi-ctn">
                        <section id="tabs">
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-certi" role="tabpanel" aria-labelledby="nav-certi-tab">
                                    <div class="certi-ctn tab-ctn">
                                        @for($k=1;$k<=8;$k++)
                                        <div class="certi-item">
                                            <img src="{{ url('/') }}/assets/images/item-demo.png?{{ config('custom.version') }}" alt="">
                                            <div class="name-certi">
                                                Loại hình 1
                                            </div>
                                            <div class="price-certi">
                                                400.000 <span>vnđ</span>
                                            </div>
                                            <div class="des-certi">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="btn-container">
                                            <a href="" class="btn btn-default m-top-20">Mô tả đề thi</a>
                                            <a href="" class="btn btn-default m-top-20">Vào thi</a>
                                            </div>
                                        </div>
                                        @endfor
                                       
                                    </div>
                                    <div class="watch-more-cnt">
                                        <a href="javascript:void()">Xem thêm</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-agency" role="tabpanel" aria-labelledby="nav-agency-tab">
                                    <div class="agency-ctn tab-ctn">
                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-human" role="tabpanel" aria-labelledby="nav-human-tab">
                                    <div class="human-ctn tab-ctn">
                                        
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reason">
    <div class="reason-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head_title text-center fix">
                        <h2 class="text-uppercase">Luyện thi chứng chỉ</h2>
                    </div>
                    <div class="reason-ctn">
                        @for($l=1;$l<=4;%l++)
                        <div class="reason-item">
                            <img src="{{ url('/') }}/assets/images/home/teacher.png?{{ config('custom.version') }}" alt="">
                            <div class="item-content">
                                <div class="reason-title">
                                    <h5>Giáo viên chất lượng</h5>
                                </div>
                                <div class="item-description">
                                    <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, eligendi eius illo cumque nobis nihil debitis cum modi deserunt magnam repudiandae? Nihil aperiam odio illum iusto doloribus corporis expedita ipsum.
                                    </p>
                                </div>
                                <div class="watch-more-cnt">
                                    <a href="javascript:void()">Xem thêm</a>
                                </div>
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