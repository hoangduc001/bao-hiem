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
                                                   <a href="#">500<span>xu</span></a> 
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
                                                    <a class="nav-link" id="history-tab" data-toggle="tab" href="#history-info" role="tab" aria-controls="history-info" aria-selected="false">Lịch sử giao dịch</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" id="favorite-tab" data-toggle="tab" href="#favorite-info" role="tab" aria-controls="favorite-info" aria-selected="false">Khóa học yêu thích</a>
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
                                                            <div class="">
                                                                <form>
                                                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-envelope"></i></span>
                                                                        <input type="email" name="email" placeholder="Email" required />
                                                                    </div>
                                                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                                                        <input type="password" name="password" placeholder="Password" required />
                                                                    </div>
                                                                    <div class="input_field"> <span><i aria-hidden="true" class="fa fa-lock"></i></span>
                                                                        <input type="password" name="password" placeholder="Re-type Password" required />
                                                                    </div>
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
                                                                    <div class="input_field radio_option">
                                                                        <input type="radio" name="radiogroup1" id="rd1">
                                                                        <label for="rd1">Male</label>
                                                                        <input type="radio" name="radiogroup1" id="rd2">
                                                                        <label for="rd2">Female</label>
                                                                    </div>
                                                                    <div class="input_field select_option">
                                                                        <select>
                                                                        <option>Select a country</option>
                                                                        <option>Option 1</option>
                                                                        <option>Option 2</option>
                                                                        </select>
                                                                        <div class="select_arrow"></div>
                                                                    </div>
                                                                    <div class="input_field checkbox_option">
                                                                        <input type="checkbox" id="cb1">
                                                                        <label for="cb1">I agree with terms and conditions</label>
                                                                    </div>
                                                                    <div class="input_field checkbox_option">
                                                                        <input type="checkbox" id="cb2">
                                                                        <label for="cb2">I want to receive the newsletter</label>
                                                                    </div>
                                                                    <input class="button" type="submit" value="Register" />
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade" id="course-info" role="tabpanel" aria-labelledby="course-tab">
                                                <h2>course-info</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eveniet earum. Sed accusantium eligendi molestiae quo hic velit nobis et, tempora placeat ratione rem blanditiis voluptates vel ipsam? Facilis, earum!</p>
                                            </div>
                                            <div class="tab-pane fade" id="exam-info" role="tabpanel" aria-labelledby="exam-tab">
                                                <h2>exam-info</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eveniet earum. Sed accusantium eligendi molestiae quo hic velit nobis et, tempora placeat ratione rem blanditiis voluptates vel ipsam? Facilis, earum!</p>
                                            </div>
                                            <div class="tab-pane fade" id="fail-qes" role="tabpanel" aria-labelledby="fail-qes-tab">
                                                <h2>exam-info</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eveniet earum. Sed accusantium eligendi molestiae quo hic velit nobis et, tempora placeat ratione rem blanditiis voluptates vel ipsam? Facilis, earum!</p>
                                            </div>
                                            <div class="tab-pane fade" id="history-tab" role="tabpanel" aria-labelledby="history-tab">
                                                <h2>exam-info</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eveniet earum. Sed accusantium eligendi molestiae quo hic velit nobis et, tempora placeat ratione rem blanditiis voluptates vel ipsam? Facilis, earum!</p>
                                            </div>
                                            <div class="tab-pane fade" id="favorite-tab" role="tabpanel" aria-labelledby="favorite-tab">
                                                <h2>exam-info</h2>
                                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, eveniet earum. Sed accusantium eligendi molestiae quo hic velit nobis et, tempora placeat ratione rem blanditiis voluptates vel ipsam? Facilis, earum!</p>
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
@stop

@section('footer')
    <script src="{{ url('assets/js/info.js?'.config('custom.version')) }}"></script>

@stop