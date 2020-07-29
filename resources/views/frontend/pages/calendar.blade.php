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
    <div class="calender-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="calender-ctn">
                        <div class="head_title text-center fix">
                            <h2 >Lịch thi</h2>
                        </div>
                        <div class="main-wrapper">
                            <div class="row">
                                <div class="col-6">
                                    <div class="calendar-item">
                                        <img src="{{ url('/') }}/assets/images/cal/focus-cal.png?{{ config('custom.version') }}" alt="">
                                        <div class="date-ctn">
                                            <div class="date">
                                                20
                                            </div>
                                            <div class="month">
                                                <span>T</span>5 <span>2020</span>
                                            </div>
                                        </div>
                                        <div class="new-ctn">
                                            <h5>Lịch thi tháng 5 công ty PRUDENTIAL</h5>
                                            <p class="ellipsis">
                                                Sức hút của các sản phẩm bảo hiểm mới như bảo hiểm Corona một lần nữa cho thấy khách hàng không thờ ơ với bảo hiểm, quan trọng là nhà bảo hiểm phải đưa ra những sản phẩm phù hợp với nhu cầu ngày một đa dạng của khách hàng.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="calendar-item ">
                                        <img src="{{ url('/') }}/assets/images/cal/cal1.png?{{ config('custom.version') }}" alt="">
                                        <div class="date-ctn">
                                            <div class="date">
                                                20
                                            </div>
                                            <div class="month">
                                                <span>T</span>5 <span>2020</span>
                                            </div>
                                        </div>
                                        <div class="new-ctn">
                                            <h5>Lịch thi tháng 5 công ty PRUDENTIAL</h5>
                                            <p class="ellipsis">
                                                Sức hút của các sản phẩm bảo hiểm mới như bảo hiểm Corona một lần nữa cho thấy khách hàng không thờ ơ với bảo hiểm, quan trọng là nhà bảo hiểm phải đưa ra những sản phẩm phù hợp với nhu cầu ngày một đa dạng của khách hàng.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="calendar-item">
                                        <img src="{{ url('/') }}/assets/images/cal/cal2.png?{{ config('custom.version') }}" alt="">
                                        <div class="date-ctn">
                                            <div class="date">
                                                20
                                            </div>
                                            <div class="month">
                                                <span>T</span>5 <span>2020</span>
                                            </div>
                                        </div>
                                        <div class="new-ctn">
                                            <h5>Lịch thi tháng 5 công ty PRUDENTIAL</h5>
                                            <p class="ellipsis">
                                                Sức hút của các sản phẩm bảo hiểm mới như bảo hiểm Corona một lần nữa cho thấy khách hàng không thờ ơ với bảo hiểm, quan trọng là nhà bảo hiểm phải đưa ra những sản phẩm phù hợp với nhu cầu ngày một đa dạng của khách hàng.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="calendar-item ">
                                        <img src="{{ url('/') }}/assets/images/cal/cal1.png?{{ config('custom.version') }}" alt="">
                                        <div class="date-ctn">
                                            <div class="date">
                                                20
                                            </div>
                                            <div class="month">
                                                <span>T</span>5 <span>2020</span>
                                            </div>
                                        </div>
                                        <div class="new-ctn">
                                            <h5>Lịch thi tháng 5 công ty PRUDENTIAL</h5>
                                            <p class="ellipsis">
                                                Sức hút của các sản phẩm bảo hiểm mới như bảo hiểm Corona một lần nữa cho thấy khách hàng không thờ ơ với bảo hiểm, quan trọng là nhà bảo hiểm phải đưa ra những sản phẩm phù hợp với nhu cầu ngày một đa dạng của khách hàng.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="calendar-item ">
                                        <img src="{{ url('/') }}/assets/images/cal/cal1.png?{{ config('custom.version') }}" alt="">
                                        <div class="date-ctn">
                                            <div class="date">
                                                20
                                            </div>
                                            <div class="month">
                                                <span>T</span>5 <span>2020</span>
                                            </div>
                                        </div>
                                        <div class="new-ctn">
                                            <h5>Lịch thi tháng 5 công ty PRUDENTIAL</h5>
                                            <p class="ellipsis">
                                                Sức hút của các sản phẩm bảo hiểm mới như bảo hiểm Corona một lần nữa cho thấy khách hàng không thờ ơ với bảo hiểm, quan trọng là nhà bảo hiểm phải đưa ra những sản phẩm phù hợp với nhu cầu ngày một đa dạng của khách hàng.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="calendar-item">
                                        <img src="{{ url('/') }}/assets/images/cal/cal2.png?{{ config('custom.version') }}" alt="">
                                        <div class="date-ctn">
                                            <div class="date">
                                                20
                                            </div>
                                            <div class="month">
                                                <span>T</span>5 <span>2020</span>
                                            </div>
                                        </div>
                                        <div class="new-ctn">
                                            <h5>Lịch thi tháng 5 công ty PRUDENTIAL</h5>
                                            <p class="ellipsis">
                                                Sức hút của các sản phẩm bảo hiểm mới như bảo hiểm Corona một lần nữa cho thấy khách hàng không thờ ơ với bảo hiểm, quan trọng là nhà bảo hiểm phải đưa ra những sản phẩm phù hợp với nhu cầu ngày một đa dạng của khách hàng.
                                            </p>
                                        </div>
                                    </div>
                                </div> <div class="col-3">
                                    <div class="calendar-item ">
                                        <img src="{{ url('/') }}/assets/images/cal/cal1.png?{{ config('custom.version') }}" alt="">
                                        <div class="date-ctn">
                                            <div class="date">
                                                20
                                            </div>
                                            <div class="month">
                                                <span>T</span>5 <span>2020</span>
                                            </div>
                                        </div>
                                        <div class="new-ctn">
                                            <h5>Lịch thi tháng 5 công ty PRUDENTIAL</h5>
                                            <p class="ellipsis">
                                                Sức hút của các sản phẩm bảo hiểm mới như bảo hiểm Corona một lần nữa cho thấy khách hàng không thờ ơ với bảo hiểm, quan trọng là nhà bảo hiểm phải đưa ra những sản phẩm phù hợp với nhu cầu ngày một đa dạng của khách hàng.
                                            </p>
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
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

@stop