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
        <section class="enroll-section">
            <div class="enroll-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           <div class="select-ctn filters">
                                <ul>
                                    <li class="active" data-filter="*">All</li>
                                    <li data-filter=".diffcult">Mức độ khó</li>
                                    <li data-filter=".medium">Mức độ trung bình</li>
                                    <li data-filter=".easy">Mức độ dễ</li>
                                </ul>
                            </div>
                            <div class="test-subject-wrapper">
                                <div class="filters-content subject-ctn">
                                    <div class="row grid">
                                        @for($i=1;$i<=2;$i++)
                                            <div class="col-3 diffcult all">
                                                <div class="subject-item ">
                                                    <div class="subject-content">
                                                        <div class="title">
                                                            Đề số 1
                                                        </div>
                                                        <div class="progress-num">
                                                            <span class="num-ques">0</span>/<span class="total-ques">40</span> câu
                                                        </div>
                                                        <div class="progress">
                                                            <div class="bar" style="width:0%">
                                                            </div>
                                                        </div>
                                                        <div class="result">
                                                            <a href="#" class="btn btn-default btn-enroll btn-enroll-test">Vào làm</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor 
                                        @for($k=1;$k<=9;$k++)
                                            <div class="col-3 easy all">
                                                <div class="subject-item ">
                                                    <div class="subject-content">
                                                        <div class="title">
                                                            Đề số 2
                                                        </div>
                                                        <div class="progress-num">
                                                            <span class="num-ques">4</span>/<span class="total-ques">40</span> câu
                                                        </div>
                                                        <div class="progress">
                                                            <div class="bar" style="width:35%">
                                                            </div>
                                                        </div>
                                                        <div class="result">
                                                            <a href="#" class="btn btn-default btn-enroll btn-enroll-fail">Trượt</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor 
                                        @for($m=1;$m<=4;$m++)
                                            <div class="col-3 medium all">
                                                <div class="subject-item ">
                                                    <div class="subject-content">
                                                        <div class="title">
                                                            Đề số 3
                                                        </div>
                                                        <div class="progress-num">
                                                            <p>Còn <span class="time-left">29p 41s</span></p>
                                                        </div>
                                                        <div class="progress">
                                                            <div class="bar" style="width:55%">
                                                            </div>
                                                        </div>
                                                        <div class="result">
                                                            <a href="#" class="btn btn-default btn-enroll btn-enroll-cont">Tiếp tục</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor 
                                        <div class="col-3 easy diffcult medium all">
                                            <div class="subject-item ">
                                                <div class="subject-content">
                                                    <div class="title">
                                                        Ngẫu nhiên
                                                    </div>
                                                    <div class="progress-num">
                                                        <span class="num-ques">4</span>/<span class="total-ques">40</span> câu
                                                    </div>
                                                    <div class="progress">
                                                        <div class="bar" style="width:35%">
                                                        </div>
                                                    </div>
                                                    <div class="result">
                                                        <a href="#" class="btn btn-default btn-enroll btn-enroll-cont">Tạo đề</a>
                                                    </div>
                                                </div>
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