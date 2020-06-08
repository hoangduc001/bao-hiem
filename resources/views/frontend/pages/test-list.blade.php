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
        <section class="test-list">
            <div class="test-list-wrapper p-top-20">
                <div class="container">
                    <div class="row">
                    <div class="col-md-12">
                            <div class="head_title text-center fix ">
                                <h2 >Đề thi</h2>
                            </div>
                            <div class="trial-examine">
                                <a href="#">Đăng kí thi thử</a>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="test-list-block p-top-20">
                                <div id="slideTest" class="swiper-container swiper-test">
                                    <div class="swiper-wrapper">
                                        @for($m=1;$m<=5;$m++)
                                        <div class="swiper-slide slide-item">
                                            <div class="content-test-wrapper">
                                                <div class="test-img">
                                                    <div class="ctn-img">
                                                        <img src="{{ url('/') }}/assets/images/course/test-item.png?{{ config('custom.version') }}" alt="">
                                                        <div class="logo-brand">
                                                            <img src="{{ url('/') }}/assets/images/course/logo-brand.png?{{ config('custom.version') }}" alt="">
                                                        </div>
                                                    </div>
                                                    <div class="overlay-test">
                                                        <div class="overlay-ctn">
                                                            <div class="test-brand">
                                                                <a href="#"><span>Công ty</span><br>
                                                                    <strong>
                                                                        Prudential
                                                                    </strong>
                                                                </a>
                                                                <p>20 đề thi</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="enroll-test">
                                                    <a href="#" class="btn btn-default btn-test-enroll">Vào thi</a>
                                                </div>
                                            </div>
                                        </div>
                                        @endfor
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                           
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="type-list-wrapper">
               <div class="container">
                   <div class="row">
                       <div class="col-md-12">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="" aria-expanded="true">
                                                Loại hình 1
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                       </div>  
                   </div>
                   <div class="row">
                        <div class="type-test-list">
                            <div id="collapse1" class="type-ctn panel-collapse collapse show" aria-expanded="true">
                                <div class="row">
                                    @for($k=1;$k<=3;$k++)
                                        <div class=" col-4 ">
                                            <div class="type-item">
                                                <div class="type-name">Loại 1.1</div>
                                                <a href="#" class="btn btn-default btn-type-enroll">Vào thi</a>
                                            </div>
                                        </div>
                                    @endfor
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