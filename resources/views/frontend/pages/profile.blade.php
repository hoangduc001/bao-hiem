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
    <script src="http://localhost/study/bao-hiem/public/assets/lib/bootstrap-4.3.1-dist/js/bootstrap.min.js"></script>
    <!-- <script src="{{ url('assets/js/?'.config('custom.version')) }}"></script> -->
    <style>
        table {
            table-layout: fixed;
            background-color: #0d0d0d;
            word-wrap: break-word;
        }
    </style>

@stop

@section('content')
<div class="main-wrapper">
    @include('frontend/pages/floating-element')
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{Session::get('success')}}
        </div>
    @endif
    @if(Session::has('errors'))
        <div class="alert alert-success">
            {{Session::get('errors')}}
        </div>
    @endif
    <section class="profile-info">
        <div class="profile-info-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-detail-block">
                            <div class="row">
                                <div class="col-md-4 mb-3">
                                    <div class="tab-nav-ctn">
                                        <div class="user-block">
                                            <div class="img-ctn">
                                                <img src="{{ url('/') }}/assets/images/ltst-img-1.jpg?{{ config('custom.version') }}" alt="">
                                            </div>
                                            <div class="user-information">
                                                <div class="name">
                                                    Nguyễn Thị Anh
                                                </div>
                                                <div class="role">
                                                    Học viên
                                                </div>
                                                <div class="coin-ctn">
                                                    @if(isset($sodu))
                                                        <a id = "sodu" href="#">{{$sodu}}<span>xu</span></a>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="left-navigate">
                                            <ul class="nav nav-pills flex-column" id="myTab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Thông tin tài khoản</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="course-tab" data-toggle="tab" href="#course-info" role="tab" aria-controls="course-info" aria-selected="false">Khóa học đã mua</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="exam-tab" data-toggle="tab" href="#exam-info" role="tab" aria-controls="exam-info" aria-selected="false">Kì thi đã mua</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="fail-qes-tab" data-toggle="tab" href="#fail-qes" role="tab" aria-controls="fail-qes" aria-selected="true">Các câu hay sai</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="history-tab" data-toggle="tab" href="#history"  role="tab" aria-controls="history" aria-selected="true">Thông tin giao dich</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <!-- /.col-md-4 -->
                                <div class="col-md-8">
                                    <div class="main-content">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
                                                <div class="form_wrapper">
                                                    <div class="form_container">
                                                        <div class="row clearfix">
                                                            <div class="upload-ctn">
                                                                <div class="avatar-wrapper">
                                                                    <img class="profile-pic" src="" />
                                                                    <div class="upload-button">
                                                                        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                                                                    </div>
                                                                    <input class="file-upload" type="file" accept="image/*"/>
                                                                </div>
                                                                <div class="profile-form">
                                                                    <div class="col-md-12">
                                                                        <form>
                                                                            <div class="row clearfix">
                                                                                <div class="col_half">
                                                                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                                                                        <input type="text" name="name" placeholder="First Name" />
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col_half">
                                                                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-user"></i></span>
                                                                                        <input type="text" name="name" placeholder="Last Name" required />
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-calendar-o"></i></span>
                                                                                <input type="date" name="birth" placeholder="Date of birth" />
                                                                            </div>
                                                                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-phone"></i></span>
                                                                                <input type="phone" name="phone" placeholder="Phone" required />
                                                                            </div>
                                                                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                                                                <input type="email" name="email" placeholder="Email" required />
                                                                            </div>
                                                                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                                                                <input type="password" name="password" placeholder="Password" required />
                                                                            </div>
                                                                            <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                                                                <input type="password" name="password" placeholder="Re-type Password" required />
                                                                            </div>

                                                                            <div class="input_field radio_option">
                                                                                <input type="radio" name="radiogroup1" id="rd1">
                                                                                <label for="rd1">Male</label>
                                                                                <input type="radio" name="radiogroup1" id="rd2">
                                                                                <label for="rd2">Female</label>
                                                                            </div>
                                                                            <input class="button" type="submit" value="Save" />
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="course-info" role="tabpanel" aria-labelledby="course-tab">
                                                <div class="my-course-ctn">
                                                    <div class="row">
                                                        <div class="join-course-ctn col-12">
                                                            <div class="join-item">
                                                                <div class="left-ctn col-5">
                                                                    <img src="{{ url('/') }}/assets/images/course/join.png?{{ config('custom.version') }}" alt="">
                                                                </div>
                                                                <div class="right-ctn col-7">
                                                                    <div class="title-ctn">
                                                                        <h5>khóa học phụ trợ bảo hiểm</h5>
                                                                    </div>
                                                                    <div class="period">
                                                                        <a href="#"> Bài 1. Mở đầu về khóa học</a>
                                                                    </div>
                                                                    <div class="tutor">
                                                                    <a href="#"> Th.s Nguyễn Mai Anh</a>
                                                                    </div>
                                                                    <div class="progress-bar-ctn">
                                                                        <p style="width:80%" data-value="80"></p>
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-green" style="width: 50%">50%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="btn-cont">
                                                                        <a href="#" class="btn btn-default btn-enroll btn-enroll-test">Tiếp tục học</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="join-item">
                                                                <div class="left-ctn col-5">
                                                                    <img src="{{ url('/') }}/assets/images/course/join.png?{{ config('custom.version') }}" alt="">
                                                                </div>
                                                                <div class="right-ctn col-7">
                                                                    <div class="title-ctn">
                                                                        <h5>khóa học phụ trợ bảo hiểm</h5>
                                                                    </div>
                                                                    <div class="period">
                                                                        <a href="#"> Bài 1. Mở đầu về khóa học</a>
                                                                    </div>
                                                                    <div class="tutor">
                                                                    <a href="#"> Th.s Nguyễn Mai Anh</a>
                                                                    </div>
                                                                    <div class="progress-bar-ctn">
                                                                        <p style="width:80%" data-value="80"></p>
                                                                        <div class="progress">
                                                                            <div class="progress-bar progress-green" style="width: 50%">50%</div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="btn-cont">
                                                                        <a href="#" class="btn btn-default btn-enroll btn-enroll-test">Tiếp tục học</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="bought-course-ctn ">
                                                            <div class="bought-wrapper ">
                                                                <div class="bought-item ">
                                                                    <div class="img-ctn">
                                                                        <img src="{{ url('/') }}/assets/images/course/join.png?{{ config('custom.version') }}" alt="">
                                                                    </div>
                                                                    <div class="title-ctn">
                                                                        <h5>khóa học phụ trợ bảo hiểm</h5>
                                                                    </div>
                                                                    <div class="tutor">
                                                                        <a href="#"> Th.s Nguyễn Mai Anh</a>
                                                                    </div>
                                                                    <div class="btn-cont">
                                                                        <a href="#" class="btn btn-default btn-enroll btn-enroll-test">Vào học</a>
                                                                    </div>
                                                                </div>
                                                                <div class="bought-item ">
                                                                    <div class="img-ctn">
                                                                        <img src="{{ url('/') }}/assets/images/course/join.png?{{ config('custom.version') }}" alt="">
                                                                    </div>
                                                                    <div class="title-ctn">
                                                                        <h5>khóa học phụ trợ bảo hiểm</h5>
                                                                    </div>
                                                                    <div class="tutor">
                                                                        <a href="#"> Th.s Nguyễn Mai Anh</a>
                                                                    </div>
                                                                    <div class="btn-cont">
                                                                        <a href="#" class="btn btn-default btn-enroll btn-enroll-test">Vào học</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="exam-info" role="tabpanel" aria-labelledby="exam-tab">
                                                <h2>exam-info</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eveniet earum. Sed accusantium eligendi molestiae quo hic velit nobis et, tempora placeat ratione rem blanditiis voluptates vel ipsam? Facilis, earum!</p>
                                            </div>
                                            <div class="tab-pane fade" id="fail-qes" role="tabpanel" aria-labelledby="fail-qes-tab">
                                                <h2>exam-info</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eveniet earum. Sed accusantium eligendi molestiae quo hic velit nobis et, tempora placeat ratione rem blanditiis voluptates vel ipsam? Facilis, earum!</p>
                                            </div>
                                            <div class="tab-pane fade" id="history" role="tabpanel" aria-labelledby="history-tab">
                                                <div>@include('frontend.pages.transaction')</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.col-md-8 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script>
    $(document).ready(function() {

    var readURL = function(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('.profile-pic').attr('src', e.target.result);
                console.log('hhh',e.target.result)
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $(".file-upload").on('change', function(){
        readURL(this);

    });

    $(".upload-button").on('click', function() {
       $(".file-upload").click();
    });
});
</script>
@stop
@section('footer')
    <!-- <script src="{{ url('assets/js/info.js?'.config('custom.version')) }}"></script> -->
@stop
