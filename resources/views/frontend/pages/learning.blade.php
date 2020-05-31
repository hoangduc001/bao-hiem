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
    <div class="main-wrapper">
    @include('frontend/pages/floating-element')
        <section class="course-detail">
            <div class="course-detail-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="course-detail-block">
                                <div class="top-section-block">
                                    <div class="left-section main-cover col-6 p-l-0">
                                        <div class="video-ctn">
                                            <img src="{{ url('/') }}/assets/images/course/intro-img.png?{{ config('custom.version') }}" alt="">
                                            <div class="overlay-btn"></div>
                                        </div>
                                        
                                    </div>
                                    <div class="right-section right-section short-intro col-6">
                                        <div class="top-itro">
                                            <div class="intro-title-text">
                                                <h4>Danh sách bài học chương I</h4>
                                            </div>
                                        </div>
                                        <div class="bottom-intro">
                                            <div class="playlist-chapter">
                                                <ul>
                                                    <li class="active">Bài 1. Tìm hiểu chung</li>
                                                    <li>Bài 2. Mở đầu khóa học bổ trợ bảo hiểm</li>
                                                    <li>Bài 3. Tìm hiểu khóa học, những điều cần biết</li>
                                                    <li>Bài 1. Tìm hiểu chung</li>
                                                    <li>Bài 2. Mở đầu khóa học bổ trợ bảo hiểm</li>
                                                    <li>Bài 3. Tìm hiểu khóa học, những điều cần biết</li>
                                                    <li>Bài 1. Tìm hiểu chung</li>
                                                    <li>Bài 2. Mở đầu khóa học bổ trợ bảo hiểm</li>
                                                    <li>Bài 3. Tìm hiểu khóa học, những điều cần biết</li>
                                                </ul>
                                            </div>
                                            <div class="pagination-container pagination-container">
                                                <ul class="pagination">
                                                    <li class="disabled">
                                                    <a class="prev-chap mdc-icon-button btn btn-default square-btn" disabled>
                                                        Chương trước
                                                    </a>
                                                    </li>
                                                    <li aria-current="page">
                                                    <a class="mdc-icon-button active">
                                                        <span class="icon-text">1</span>
                                                    </a>
                                                    </li>
                                                    <li>
                                                    <a class="mdc-icon-button" href="#">
                                                        <span class="icon-text">2</span>
                                                    </a>
                                                    </li>
                                                    <li>
                                                    <a class="mdc-icon-button" href="#">
                                                        <span class="icon-text">3</span>
                                                    </a>
                                                    </li>
                                                    <li class="disabled">
                                                    <a class="mdc-icon-button" disabled><span class="icon-text">...</span></a>
                                                    </li>
                                                    <li>
                                                    <a class="mdc-icon-button" href="#">
                                                        <span class="icon-text">11</span>
                                                    </a>
                                                    </li>
                                                    <li>
                                                    <a class="mdc-icon-button" href="#">
                                                        <span class="icon-text">12</span>
                                                    </a>
                                                    </li>
                                                    <li>
                                                    <a class="mdc-icon-button" href="#">
                                                        <span class="icon-text">13</span>
                                                    </a>
                                                    </li>
                                                    <li>
                                                    <a class="next-chap mdc-icon-button btn btn-default square-btn" href="#">
                                                        Chương sau
                                                    </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-section-block">
                                    <div class="row">
                                        <div class="left-tab-ctn col-6">
                                            <div class="tab-main">
                                                <div class="tabs tabs-learning">
                                                    <div class="tab">
                                                        <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
                                                        <label for="tab-1" class="tab-label">Bài giảng</label>
                                                        <div class="tab-content">
                                                            <div class="lecture-content">
                                                                <h6>What is Lorem Ipsum?</h6>
                                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illo ipsam consectetur atque repudiandae, quis blanditiis, veniam ut praesentium facere iste cumque quaerat possimus expedita cupiditate provident qui. In, illo voluptates.</p>
                                                                <img src="{{ url('/') }}/assets/images/course/item.png?{{ config('custom.version') }}" alt="">
                                                                <h6>What is Lorem Ipsum?</h6>
                                                                <p>
                                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam blanditiis rem, in impedit eaque eos magni sunt omnis. Sapiente velit facilis modi quas porro accusantium ratione deleniti nesciunt. Consequatur, quis.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab">
                                                        <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
                                                        <label for="tab-2" class="tab-label">Tài liệu</label>
                                                        <div class="tab-content">
                                                            B 
                                                        </div>
                                                    </div>
                                                    <div class="tab">
                                                        <input type="radio" name="css-tabs" id="tab-3" class="tab-switch">
                                                        <label for="tab-3" class="tab-label">Test</label>
                                                        <div class="tab-content">
                                                            C
                                                        </div>
                                                    </div>
                                                
                                                </div>
                                                <a class="load-more" href="#"><span>Xem thêm</span> <i></i></a>
                                            </div>
                                        </div>
                                        <div class="right-ctn ">
                                            <div class="right-content">
                                                <div class="right-title">
                                                    <h5>Các khóa học liên quan</h5>
                                                </div>
                                                <div class="right-related-course">
                                                    <div class="related-item">
                                                        <div class="item-img">
                                                            <img src="{{ url('/') }}/assets/images/course/related.png?{{ config('custom.version') }}" alt="">
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="title">
                                                                <h5>KHÓA HỌC PHỤ TRỢ BẢO HIỂM</h5>
                                                            </div>
                                                            <div class="price">7.000.000 <span>đ</span></div>
                                                            <div class="teacher"><a href="#">Lê Hồng Hạnh</a></div>
                                                            <a href="#" class="btn btn-default">Mua khóa học</a>
                                                        </div>
                                                    </div>
                                                    <div class="related-item">
                                                        <div class="item-img">
                                                            <img src="{{ url('/') }}/assets/images/course/related.png?{{ config('custom.version') }}" alt="">
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="title">
                                                                <h5>KHÓA HỌC PHỤ TRỢ BẢO HIỂM</h5>
                                                            </div>
                                                            <div class="price">7.000.000 <span>đ</span></div>
                                                            <div class="teacher"><a href="#">Lê Hồng Hạnh</a></div>
                                                            <a href="#" class="btn btn-default">Mua khóa học</a>
                                                        </div>
                                                    </div>
                                                    <div class="related-item">
                                                        <div class="item-img">
                                                            <img src="{{ url('/') }}/assets/images/course/related.png?{{ config('custom.version') }}" alt="">
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="title">
                                                                <h5>KHÓA HỌC PHỤ TRỢ BẢO HIỂM</h5>
                                                            </div>
                                                            <div class="price">7.000.000 <span>đ</span></div>
                                                            <div class="teacher"><a href="#">Lê Hồng Hạnh</a></div>
                                                            <a href="#" class="btn btn-default">Mua khóa học</a>
                                                        </div>
                                                    </div>
                                                    <div class="related-item">
                                                        <div class="item-img">
                                                            <img src="{{ url('/') }}/assets/images/course/related.png?{{ config('custom.version') }}" alt="">
                                                        </div>
                                                        <div class="item-content">
                                                            <div class="title">
                                                                <h5>KHÓA HỌC PHỤ TRỢ BẢO HIỂM</h5>
                                                            </div>
                                                            <div class="price">7.000.000 <span>đ</span></div>
                                                            <div class="teacher"><a href="#">Lê Hồng Hạnh</a></div>
                                                            <a href="#" class="btn btn-default">Mua khóa học</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="load-more" href="#"><span>Xem thêm</span> <i></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

@stop