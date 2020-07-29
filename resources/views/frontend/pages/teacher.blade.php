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
    <div class="list-teacher-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="list-teacher-ctn">
                        <div class="head_title text-center fix">
                            <h2 >Giảng viên</h2>
                        </div>
                        <div class="row">
                            @for($i=1;$i<=12;$i++)
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
                        <div class="pagin-section">
                            <div class="pagination-container pagination-container">
                                <ul class="pagination">
                                    <li class="disabled">
                                    <a class="prev-chap mdc-icon-button btn btn-default " disabled>
                                        Trang trước
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
                                    <a class="next-chap mdc-icon-button btn btn-default " href="#">
                                        Trang sau
                                    </a>
                                    </li>
                                </ul>
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