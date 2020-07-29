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
    <div class="list-about-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="list-about-ctn">
                        <div class="head_title text-center fix">
                            <h2 >Về Vics corp</h2>
                        </div>
                        <div class="about-p">
                            <p>Chúng tôi mang sứ mệnh phục vụ cho mọi người dân Việt Nam – Nâng cao kiến thức pháp luật về bảo hiểm cho người dân là một trong những sứ mệnh cao cả của các thành viên Công ty.</p>
                        </div>
                        <div class="main-about">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="about-item">
                                        <img src="{{ url('/') }}/assets/images/about1.png?{{ config('custom.version') }}" alt="">
                                        <div class="about-content">
                                            <h5>Tầm nhìn</h5>
                                            <p>Chúng tôi luôn nỗ lực, phấn đấu trở thành nhà Tư vấn dịch vụ Bảo hiểm hàng đầu Việt Nam. VICS – CORP muốn tạo ra một thương hiệu là Công ty tiên phong trong lĩnh vực Dịch vụ bảo hiểm.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="about-item">
                                        <img src="{{ url('/') }}/assets/images/about2.png?{{ config('custom.version') }}" alt="">
                                        <div class="about-content">
                                            <h5>Sứ mệnh</h5>
                                            <p>Chúng tôi mang sứ mệnh phục vụ cho mọi người dân Việt Nam – Nâng cao kiến thức pháp luật về bảo hiểm cho người dân là một trong những sứ mệnh cao cả của các thành viên Công ty.<br> Chúng tôi tạo sự khác biệt với đội ngũ nhân viên chuyên nghiệp nhất, trách nhiệm nhất, có đầy đủ kiến thức cơ bản và chuyên sâu nhất về bảo hiểm. Tạo dựng sự tin tưởng và chính sách nhất cho khách hàng.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="list-teacher-ctn">
                        <div class="head_title text-center fix">
                            <h2 >Giảng viên</h2>
                        </div>
                        <div class="row">
                            @for($i=1;$i<=4;$i++)
                                <div class="col-xs-12 col-sm-6 col-md-3">
                                    <div class="list-teacher-item">
                                        <div class="teacher-img">
                                            <img src="{{ url('/') }}/assets/images/default/teacher.png?{{ config('custom.version') }}" alt="">
                                            <div class="overlay-logo"></div>
                                        </div>
                                        <div class="detail">
                                            <div class="teacher-name">
                                                <h5>
                                                    Ths. Quỳnh Anh
                                                </h5>
                                            </div>
                                            <div class="review">
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita et accusamus, soluta fuga distinctio, laudantium totam perspiciatis necessitatibus molestias nam inventore corporis, quae officiis quidem! Quo officiis labore dignissimos quaerat?</p>
                                            </div>
                                            <div class="section-detail">
                                                <a href="#">Chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endfor
                        </div>
                        <div class="what-more">
                            <a href="#">Xem thêm</a>
                        </div>
                    </div>
                    <div class="partner-ctn">
                        <div class="head_title text-center fix">
                            <h2 >Đối tác</h2>
                        </div>
                        <div id="slidePartner" class="swiper-container swiper-partner">
                            <div class="swiper-wrapper parner-slide">
                                <div class="swiper-slide slide-item">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/cal/pn1.png?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="swiper-slide slide-item">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/cal/pn1.png?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="swiper-slide slide-item">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/cal/pn2.png?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="swiper-slide slide-item">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/cal/pn1.png?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="swiper-slide slide-item">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/cal/pn3.png?{{ config('custom.version') }}" alt="">
                                </div>
                                <div class="swiper-slide slide-item">
                                    <img class="img-fluid" src="{{ url('/') }}/assets/images/cal/pn1.png?{{ config('custom.version') }}" alt="">
                                </div>
                            </div>
                            <!-- Add Arrows -->
                        </div>
                    </div>
                    <div class="news-wrapper">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="head_title text-center fix">
                                        <h2 >Tin tức</h2>
                                    </div>
                                    <div class="news-container">
                                        @for($g=1;$g<=3;$g++)
                                            <div class="new-item col-4">
                                                <img src="{{ url('/') }}/assets/images/test-img3.jpg?{{ config('custom.version') }}" alt="">
                                                <div class="item-ctn">
                                                    <div class="new-title">
                                                        <h5>Truyền thông vận động bảo hiểm xã hội toàn dân: Cần linh hoạt, sáng tạo</h5>
                                                    </div>
                                                    <div class="new-date">
                                                        <i class="fa fa-calendar"></i><a href="#"> Mar 27, 2014</a>
                                                    </div>
                                                    <div class="new-des">
                                                        <p class="ellipsis text-left">
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis id aliquam, corrupti laboriosam cupiditate esse illum minima temporibus sapiente deserunt labore ipsam in, dolor incidunt quia ullam provident delectus nostrum.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
                                    </div>
                                    <div class="watch-more-news">
                                        <a href="" class="btn btn-default m-top-20">Xem thêm </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

@stop