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
        <section class="couse-detail">
            <div class="course-detail-wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="course-detail-block">
                                <div class="colapse-title">
                                    <div class="left-title">
                                        <div class="course-name">
                                            <h5>Khóa học phụ trợ bảo hiểm</h5>
                                            <div class="rating-score"><span><img src="{{ url('/') }}/assets/images/home/full-star.png?{{ config('custom.version') }}" alt=""></span><div class="total-scrore-rate"><strong>4,5 </strong><span>(50.412)</span></div></div>
                                        </div>
                                        <a href="#" class="btn btn-default sign ">Mua khóa học</a>
                                    </div>
                                    <div class="right-title"></div>
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