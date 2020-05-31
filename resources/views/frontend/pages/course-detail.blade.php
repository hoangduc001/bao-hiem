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
                                        <img src="{{ url('/') }}/assets/images/course/intro-img.png?{{ config('custom.version') }}" alt="">
                                    </div>
                                    <div class="right-section right-section short-intro col-6">
                                        <div class="top-itro">
                                            <div class="intro-title-text">
                                                <h4>KHÓA HỌC BỔ TRỢ BẢO HIỂM</h4>
                                            </div>
                                            <div class="intro-rate-price">
                                                <div class="rate-sec">
                                                    <div class="left-rate-sec">
                                                        <div class="total-time">
                                                            <img src="{{ url('/') }}/assets/images/course/play-icon.png?{{ config('custom.version') }}" alt="">
                                                            <div class="time">
                                                                48 <span> giờ</span>
                                                            </div>
                                                        </div>
                                                        
                                                        <div class="chapter-ctn">
                                                            10 <span>chương</span>
                                                        </div>
                                                    </div>
                                                    <div class="right-rate-sec">
                                                        <div class="rating-chapter">
                                                            <div class="rating-score"><span><img src="{{ url('/') }}/assets/images/home/full-star.png?{{ config('custom.version') }}" alt=""></span>
                                                            <div class="total-scrore-rate"><strong>4,5 </strong><span>(50.412)</span></div></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="bottom-intro">
                                            <div class="course-total"><span class="line-through">5.000.000</span> 3.500.000đ <span>đ</span></div>
                                            <div class="teacher-degree"><a href="#">Phó giáo sư: Nguyễn Hải Phong</a> </div>
                                            <div class="intro-descript">
                                                <p>
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus quae ducimus perspiciatis illum, doloremque maiores accusantium repudiandae sint corporis recusandae libero ad, natus adipisci nam dolor pariatur voluptates id sed.
                                                </p>
                                            </div>
                                            <a href="#" class="btn btn-default ">Mua khóa học</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="bottom-section-block">
                                    <div class="row">
                                        <div class="left-tab-ctn col-6">
                                            <div class="tab-main">
                                                <div class="tabs">
                                                    <div class="tab">
                                                        <input type="radio" name="css-tabs" id="tab-1" checked class="tab-switch">
                                                        <label for="tab-1" class="tab-label">Chương</label>
                                                        <div class="tab-content">
                                                            <div class="panel-group chapter-item" id="accordion">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading chapter-colapse">
                                                                        <div class="colapse-title">
                                                                            <div class="left-title">
                                                                                <div class="course-name chap-name">
                                                                                    <h5>Chương I. Giới thiệu chung</h5>
                                                                                </div>
                                                                            </div>
                                                                            <div class="right-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-chapter1" class="" aria-expanded="false"></a></div>

                                                                        </div>
                                                                        <div class="chapter-price">
                                                                            <h5>500.000đ</h5>
                                                                        </div>
                                                                        <div class="chapter-get">
                                                                            <a href="#" class="btn btn-default square-btn ">Mua</a>
                                                                        </div>
                                                                    </div>
                                                                    <div id="collapse-chapter1" class="panel-collapse collapse show" aria-expanded="false" >
                                                                        <div class="panel-body">
                                                                            <div class="detail-ctn chapter-detail">
                                                                                <div class="detail-content">
                                                                                    <ul>
                                                                                        <li>Bài 1. Tìm hiểu chung</li>
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
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel-group chapter-item" id="accordion">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading chapter-colapse">
                                                                        <div class="colapse-title">
                                                                            <div class="left-title">
                                                                                <div class="course-name chap-name">
                                                                                    <h5>Chương II. Hiểu về phụ trợ bảo hiểm</h5>
                                                                                </div>
                                                                            </div>
                                                                            <div class="right-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-chapter2" class="" aria-expanded="false"></a></div>

                                                                        </div>
                                                                        <div class="chapter-price">
                                                                            <h5>500.000đ</h5>
                                                                        </div>
                                                                        <div class="chapter-get">
                                                                            <a href="#" class="btn btn-default square-btn ">Mua</a>
                                                                        </div>
                                                                    </div>
                                                                    <div id="collapse-chapter2" class="panel-collapse collapse " aria-expanded="false" >
                                                                        <div class="panel-body">
                                                                            <div class="detail-ctn chapter-detail">
                                                                                <div class="detail-content">
                                                                                    <ul>
                                                                                        <li>Bài 1. Tìm hiểu chung</li>
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
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel-group chapter-item" id="accordion">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading chapter-colapse">
                                                                        <div class="colapse-title">
                                                                            <div class="left-title">
                                                                                <div class="course-name chap-name">
                                                                                    <h5>Chương III. Chi tiết khóa học</h5>
                                                                                </div>
                                                                            </div>
                                                                            <div class="right-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-chapter3" class="" aria-expanded="false"></a></div>

                                                                        </div>
                                                                        <div class="chapter-price">
                                                                            <h5>500.000đ</h5>
                                                                        </div>
                                                                        <div class="chapter-get">
                                                                            <a href="#" class="btn btn-default square-btn ">Mua</a>
                                                                        </div>
                                                                    </div>
                                                                    <div id="collapse-chapter3" class="panel-collapse collapse " aria-expanded="false" >
                                                                        <div class="panel-body">
                                                                            <div class="detail-ctn chapter-detail">
                                                                                <div class="detail-content">
                                                                                    <ul>
                                                                                        <li>Bài 1. Tìm hiểu chung</li>
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
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel-group chapter-item" id="accordion">
                                                                <div class="panel panel-default">
                                                                    <div class="panel-heading chapter-colapse">
                                                                        <div class="colapse-title">
                                                                            <div class="left-title">
                                                                                <div class="course-name chap-name">
                                                                                    <h5>Chương III. Chi tiết khóa học</h5>
                                                                                </div>
                                                                            </div>
                                                                            <div class="right-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse-chapter4" class="" aria-expanded="false"></a></div>

                                                                        </div>
                                                                        <div class="chapter-price">
                                                                            <h5>500.000đ</h5>
                                                                        </div>
                                                                        <div class="chapter-get">
                                                                            <a href="#" class="btn btn-default square-btn ">Mua</a>
                                                                        </div>
                                                                    </div>
                                                                    <div id="collapse-chapter4" class="panel-collapse collapse " aria-expanded="false" >
                                                                        <div class="panel-body">
                                                                            <div class="detail-ctn chapter-detail">
                                                                                <div class="detail-content">
                                                                                    <ul>
                                                                                        <li>Bài 1. Tìm hiểu chung</li>
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
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab">
                                                        <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
                                                        <label for="tab-2" class="tab-label">Nhận xét</label>
                                                        <div class="tab-content">
                                                            B 
                                                        </div>
                                                    </div>
                                                    <div class="tab">
                                                        <input type="radio" name="css-tabs" id="tab-3" class="tab-switch">
                                                        <label for="tab-3" class="tab-label">Cảm nhận của học viên</label>
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