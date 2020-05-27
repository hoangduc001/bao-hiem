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
                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="colapse-title">
                                                <div class="left-title">
                                                    <div class="course-name">
                                                        <h5>Khóa học phụ trợ bảo hiểm</h5>
                                                        <div class="rating-score"><span><img src="{{ url('/') }}/assets/images/home/full-star.png?{{ config('custom.version') }}" alt=""></span><div class="total-scrore-rate"><strong>4,5 </strong><span>(50.412)</span></div></div>
                                                    </div>
                                                    <a href="#" class="btn btn-default square-btn ">Mua khóa học</a>
                                                </div>
                                                <div class="right-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse1" class="collapsed" aria-expanded="true"></a></div>

                                            </div>
                                        </div>
                                        <div id="collapse1" class="panel-collapse collapse show" aria-expanded="true" >
                                            <div class="panel-body">
                                                <div class="detail-ctn">
                                                    <div class="main-img">
                                                        <img src="{{ url('/') }}/assets/images/course/detail1.png?{{ config('custom.version') }}" alt="">
                                                        <div class="course_overlay">
                                                            <div class="overlay-ctn text-left p-l-15">
                                                                <div class="course-rate">
                                                                <div class="course-total"><span class="line-through">5.000.000</span> 3.500.000đ <span>đ</span></div>
                                                                <div class="buy-total">
                                                                        <a href="#" class="btn btn-default ">Mua khóa học</a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="detail-content">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, mollitia. Tempora expedita laborum quos soluta illum molestiae placeat voluptate praesentium ad voluptatum. Incidunt maxime repellendus dolorem tempore voluptatum vero dolore.
                                                            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Esse consequatur, vitae, illo repellat hic perspiciatis illum deserunt dolores voluptatem ut repudiandae dolore a voluptas tenetur, totam nihil iusto iure officia!
                                                        </p>
                                                    </div>
                                                    <div class="other-item-ctn">
                                                        <div class="row">
                                                            @for($i=1;$i<=9;$i++)
                                                            <div class="col-md-4">
                                                                <div class="item-course">
                                                                    <img src="{{ url('/') }}/assets/images/course/item.png?{{ config('custom.version') }}" alt="">
                                                                    <div class="other-item-content">
                                                                        <div class="name-ctn">
                                                                            <div class="c-name">Loại hình 1</div>
                                                                            <div class="c-price">
                                                                                <div class="price">
                                                                                    1.500.000 <span>đ</span>
                                                                                </div>
                                                                                <div class="favorite-btn">
                                                                                    <span class="heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="des-ctn">
                                                                            <p class="ellipsis">
                                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusamus expedita voluptatem dolor voluptates ullam facere? Voluptates excepturi ex, dolore doloribus sequi dolor corrupti magni, facere eos, voluptate doloremque corporis.
                                                                            </p>
                                                                        </div>
                                                                        <a href="#" class="btn btn-default buy-btn ">Mua ngay</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="colapse-title">
                                                <div class="left-title">
                                                    <div class="course-name">
                                                        <h5>Khóa học đại lý bảo hiểm</h5>
                                                        <div class="rating-score"><span><img src="{{ url('/') }}/assets/images/home/full-star.png?{{ config('custom.version') }}" alt=""></span><div class="total-scrore-rate"><strong>4,5 </strong><span>(50.412)</span></div></div>
                                                    </div>
                                                    <a href="#" class="btn btn-default square-btn ">Mua khóa học</a>
                                                </div>
                                                <div class="right-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse2" class="collapsed" aria-expanded="false"></a></div>

                                            </div>
                                        </div>
                                        <div id="collapse2" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <div class="detail-ctn">
                                                    <div class="main-img">
                                                        <img src="{{ url('/') }}/assets/images/course/detail1.png?{{ config('custom.version') }}" alt="">
                                                        <div class="course_overlay">
                                                            <div class="overlay-ctn text-left p-l-15">
                                                                <div class="course-rate">
                                                                <div class="course-total"><span class="line-through">5.000.000</span> 3.500.000đ <span>đ</span></div>
                                                                <div class="buy-total">
                                                                        <a href="#" class="btn btn-default ">Mua khóa học</a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="detail-content">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, mollitia. Tempora expedita laborum quos soluta illum molestiae placeat voluptate praesentium ad voluptatum. Incidunt maxime repellendus dolorem tempore voluptatum vero dolore.
                                                        </p>
                                                    </div>
                                                    <div class="other-item-ctn">
                                                        <div class="row">
                                                            @for($i=1;$i<=9;$i++)
                                                            <div class="col-md-4">
                                                                <div class="item-course">
                                                                    <img src="{{ url('/') }}/assets/images/course/item.png?{{ config('custom.version') }}" alt="">
                                                                    <div class="other-item-content">
                                                                        <div class="name-ctn">
                                                                            <div class="c-name">Loại hình 1</div>
                                                                            <div class="c-price">
                                                                                <div class="price">
                                                                                    1.500.000 <span>đ</span>
                                                                                </div>
                                                                                <div class="favorite-btn">
                                                                                    <span class="heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="des-ctn">
                                                                            <p class="ellipsis">
                                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusamus expedita voluptatem dolor voluptates ullam facere? Voluptates excepturi ex, dolore doloribus sequi dolor corrupti magni, facere eos, voluptate doloremque corporis.
                                                                            </p>
                                                                        </div>
                                                                        <a href="#" class="btn btn-default buy-btn ">Mua ngay</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endfor
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <div class="colapse-title">
                                                <div class="left-title">
                                                    <div class="course-name">
                                                        <h5>Khóa học phụ trợ bảo hiểm</h5>
                                                        <div class="rating-score"><span><img src="{{ url('/') }}/assets/images/home/full-star.png?{{ config('custom.version') }}" alt=""></span><div class="total-scrore-rate"><strong>4,5 </strong><span>(50.412)</span></div></div>
                                                    </div>
                                                    <a href="#" class="btn btn-default square-btn ">Mua khóa học</a>
                                                </div>
                                                <div class="right-title"><a data-toggle="collapse" data-parent="#accordion" href="#collapse3" class="collapsed" aria-expanded="false"></a></div>

                                            </div>
                                        </div>
                                        <div id="collapse3" class="panel-collapse collapse" aria-expanded="false" style="height: 0px;">
                                            <div class="panel-body">
                                                <div class="detail-ctn">
                                                    <div class="main-img">
                                                        <img src="{{ url('/') }}/assets/images/course/detail1.png?{{ config('custom.version') }}" alt="">
                                                        <div class="course_overlay">
                                                            <div class="overlay-ctn text-left p-l-15">
                                                                <div class="course-rate">
                                                                <div class="course-total"><span class="line-through">5.000.000</span> 3.500.000đ <span>đ</span></div>
                                                                <div class="buy-total">
                                                                        <a href="#" class="btn btn-default ">Mua khóa học</a>
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="detail-content">
                                                        <p>
                                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur, mollitia. Tempora expedita laborum quos soluta illum molestiae placeat voluptate praesentium ad voluptatum. Incidunt maxime repellendus dolorem tempore voluptatum vero dolore.
                                                        </p>
                                                    </div>
                                                    <div class="other-item-ctn">
                                                        <div class="row">
                                                            @for($i=1;$i<=9;$i++)
                                                            <div class="col-md-4">
                                                                <div class="item-course">
                                                                    <img src="{{ url('/') }}/assets/images/course/item.png?{{ config('custom.version') }}" alt="">
                                                                    <div class="other-item-content">
                                                                        <div class="name-ctn">
                                                                            <div class="c-name">Loại hình 1</div>
                                                                            <div class="c-price">
                                                                                <div class="price">
                                                                                    1.500.000 <span>đ</span>
                                                                                </div>
                                                                                <div class="favorite-btn">
                                                                                    <span class="heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="des-ctn">
                                                                            <p class="ellipsis">
                                                                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusamus expedita voluptatem dolor voluptates ullam facere? Voluptates excepturi ex, dolore doloribus sequi dolor corrupti magni, facere eos, voluptate doloremque corporis.
                                                                            </p>
                                                                        </div>
                                                                        <a href="#" class="btn btn-default buy-btn ">Mua ngay</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            @endfor
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
            </div>
        </section>
    </div>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

@stop