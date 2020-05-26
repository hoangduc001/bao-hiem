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
<section id="course-wrapper" class="course-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-course pad-40">
                    <div class="head_title text-center fix">
                        <h2 >Khóa học</h2>
                    </div>
                    <div id="slideCourse" class="swiper-container swiper-course">
                        <div class="swiper-wrapper">
                            @for($m=1;$m<=5;$m++)
                            <div class="swiper-slide slide-item">
                                <div class="content-course-wrapper">
                                    <div class="left-course">
                                        <div class="left-side">
                                            <div class="left-course-item xs-m-top-30">
                                                <div class="course-img-ctn">
                                                    <img src="{{ url('/') }}/assets/images/left-demo.png?{{ config('custom.version') }}" alt="">
                                                    <div class="course_overlay text-center">
                                                        <div class="favorite-btn">
                                                            <span class="heart" id="heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
                                                        </div>
                                                        <div class="overlay-ctn text-left p-l-15">
                                                            <div class="course-rate">
                                                                <div class="rate-star all-rate-ctn">
                                                                    <div id="half-stars">
                                                                        <div class="rating-group">
                                                                            <input class="rating__input rating__input--none" checked name="rating2" id="rating2-0" value="0" type="radio">
                                                                            <label aria-label="0 stars" class="rating__label" for="rating2-0">&nbsp;</label>
                                                                            <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating2-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                                                            <input class="rating__input" name="rating2" id="rating2-05" value="0.5" type="radio">
                                                                            <label aria-label="1 star" class="rating__label" for="rating2-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                            <input class="rating__input" name="rating2" id="rating2-10" value="1" type="radio">
                                                                            <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating2-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                                                            <input class="rating__input" name="rating2" id="rating2-15" value="1.5" type="radio">
                                                                            <label aria-label="2 stars" class="rating__label" for="rating2-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                            <input class="rating__input" name="rating2" id="rating2-20" value="2" type="radio">
                                                                            <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating2-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                                                            <input class="rating__input" name="rating2" id="rating2-25" value="2.5" type="radio" checked>
                                                                            <label aria-label="3 stars" class="rating__label" for="rating2-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                            <input class="rating__input" name="rating2" id="rating2-30" value="3" type="radio">
                                                                            <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating2-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                                                            <input class="rating__input" name="rating2" id="rating2-35" value="3.5" type="radio">
                                                                            <label aria-label="4 stars" class="rating__label" for="rating2-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                            <input class="rating__input" name="rating2" id="rating2-40" value="4" type="radio">
                                                                            <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating2-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                                                            <input class="rating__input" name="rating2" id="rating2-45" value="4.5" type="radio">
                                                                            <label aria-label="5 stars" class="rating__label" for="rating2-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                            <input class="rating__input" name="rating2" id="rating2-50" value="5" type="radio">
                                                                        </div>
                                                                    </div>
                                                                    <div class="total-scrore-rate"><strong>4,5 </strong><span>(50.412)</span></div>
                                                                </div>
                                                               <div class="course-total"><span class="line-through">5.000.000</span> 3.500.000đ <span>đ</span></div>
                                                               <div class="buy-total">
                                                                    <a href="#" class="btn btn-default ">Mua khóa học</a>
                                                               </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="left-side-title">
                                                    <h3 class="text-uppercase">
                                                    Khóa học phụ trợ bảo hiểm
                                                    </h3>
                                                    <h6>Nguyễn Văn A</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right-course">
                                        <div class="right-course-ctn">
                                            @for($i=1;$i<=6;$i++)
                                                <div class="course-item">
                                                    <div class="course-img-ctn">
                                                        <img src="{{ url('/') }}/assets/images/item-demo.png?{{ config('custom.version') }}" alt="">
                                                        <div class="course_overlay text-center">
                                                            <div class="favorite-btn">
                                                                <span class="heart" id="heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
                                                            </div>
                                                            <div class="overlay-ctn">
                                                                <div class="course-price">
                                                                    500.000 <span>đ</span>
                                                                </div>
                                                                <a href="" class="btn btn-default ">Mua khóa học</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="head-title text-center">
                                                        <h5>Loại hình 1</h5>
                                                    </div>
                                                </div>
                                            @endfor
                                        </div>
                                        <div class="watch-more-cnt ">
                                            <a href="javascript:void()">Xem thêm</a>
                                        </div>
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
    
</section>

<section class="pre-certificate">
    <div class="certificate-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head_title text-center fix">
                        <h2 >Luyện thi chứng chỉ</h2>
                    </div>
                    <div class="certi-content-wrapper">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-certi-tab" data-toggle="tab" href="#nav-certi" role="tab" aria-controls="nav-certi" aria-selected="true">Chứng chỉ phụ trợ bảo hiểm</a>
                                <a class="nav-item nav-link" id="nav-agency-tab" data-toggle="tab" href="#nav-agency" role="tab" aria-controls="nav-agency" aria-selected="false">Chứng chỉ đại lí bảo hiểm</a>
                                <a class="nav-item nav-link" id="nav-human-tab" data-toggle="tab" href="#nav-human" role="tab" aria-controls="nav-human" aria-selected="false">Chứng chỉ phi nhân thọ cơ bản</a>
                            </div>
                        </nav>
                    </div>
                    <div class="pre-certi-ctn">
                        <section id="tabs">
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-certi" role="tabpanel" aria-labelledby="nav-certi-tab">
                                    <div class="certi-ctn tab-ctn">
                                        @for($k=1;$k<=8;$k++)
                                        <div class="certi-item">
                                            <img src="{{ url('/') }}/assets/images/item-demo.png?{{ config('custom.version') }}" alt="">
                                            <div class="name-certi">
                                                Loại hình 1
                                            </div>
                                            <div class="price-certi">
                                                400.000 <span>vnđ</span>
                                            </div>
                                            <div class="des-certi">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                            </div>
                                            <div class="btn-container">
                                            <a href="" class="btn btn-default m-top-20">Mô tả đề thi</a>
                                            <a href="" class="btn btn-default m-top-20">Vào thi</a>
                                            </div>
                                        </div>
                                        @endfor
                                       
                                    </div>
                                    <div class="watch-more-cnt">
                                        <a href="javascript:void()">Xem thêm</a>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-agency" role="tabpanel" aria-labelledby="nav-agency-tab">
                                    <div class="agency-ctn tab-ctn">
                                        
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-human" role="tabpanel" aria-labelledby="nav-human-tab">
                                    <div class="human-ctn tab-ctn">
                                        
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="reason">
    <div class="reason-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head_title text-center fix">
                        <h2 >Tại sao nên học ở Vics Corp?</h2>
                    </div>
                    <div class="reason-ctn">
                        @for($l=1;$l<=4;$l++)
                        <div class="reason-item">
                            <img src="{{ url('/') }}/assets/images/home/teacher.png?{{ config('custom.version') }}" alt="">
                            <div class="item-content">
                                <div class="right-reason-ctn">
                                    <div class="reason-title">
                                        <h5>Giáo viên chất lượng</h5>
                                    </div>
                                    <div class="item-description">
                                        <p>
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, eligendi eius illo cumque nobis nihil debitis cum modi deserunt magnam repudiandae? Nihil aperiam odio illum iusto doloribus corporis expedita ipsum.
                                        </p>
                                    </div>
                                    <div class="watch-more-cnt">
                                        <a href="javascript:void()">Xem thêm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="customer">
    <div id="customer" class="customer-review">
        <div class="customer-wrapper text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="head_title text-center fix">
                            <h2 >Cảm nhận của học viên</h2>
                        </div>
                        <div id="slideCustomer" class="swiper-container swiper-customer">
                            <div class="swiper-wrapper">
                                @for($k=1;$k<=5;$k++)
                                <div class="swiper-slide slide-item">
                                    <div class="customer-content">
                                        <img src="{{ url('/') }}/assets/images/test-img2.jpg?{{ config('custom.version') }}" alt="">
                                        <div class="customer-name">
                                            <h5>Lê Văn Hùng </h5>
                                        </div>
                                        <div class="customer-cmt">
                                            <p class="ellipsis">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Laudantium maxime culpa laboriosam esse maiores pariatur ipsum rerum alias suscipit officia odit, dolorum voluptatem magni vitae id, in consectetur itaque ex?</p>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>
                            
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="teachers">
    <div id="teacher-container" class="teacher-container">
        <div class="teacher-wrapper ">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="head_title text-center fix">
                            <h2 >Đội ngũ giáo viên</h2>
                        </div>
                        <div id="slideTeacher" class="swiper-container swiper-teacher">
                            <div class="swiper-wrapper">
                                @for($v=1;$v<=4;$v++)
                                <div class="swiper-slide slide-item">
                                    <div class="teacher-item">
                                        <div class="top-part">
                                            <img src="{{ url('/') }}/assets/images/teacher.jpg?{{ config('custom.version') }}" alt="">
                                            <div class="right-top-part">
                                                <div class="right-top">
                                                    <div class="teacher-name">
                                                        <h4>
                                                            Nguyễn Thị Anh
                                                        </h4>
                                                        <p class="diploma">Phó giáo sư</p>
                                                    </div>
                                                </div>
                                                <div class="right-bottom">
                                                    <div class="num-course">
                                                        <h4>05</h4>
                                                        <p>Khóa học</p>
                                                    </div>
                                                    <div class="rate-star">
                                                        <div id="half-stars">
                                                            <div class="rating-group">
                                                                <input class="rating__input rating__input--none" checked name="rating2" id="rating2-0" value="0" type="radio">
                                                                <label aria-label="0 stars" class="rating__label" for="rating2-0">&nbsp;</label>
                                                                <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating2-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                                                <input class="rating__input" name="rating2" id="rating2-05" value="0.5" type="radio">
                                                                <label aria-label="1 star" class="rating__label" for="rating2-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                <input class="rating__input" name="rating2" id="rating2-10" value="1" type="radio">
                                                                <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating2-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                                                <input class="rating__input" name="rating2" id="rating2-15" value="1.5" type="radio">
                                                                <label aria-label="2 stars" class="rating__label" for="rating2-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                <input class="rating__input" name="rating2" id="rating2-20" value="2" type="radio">
                                                                <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating2-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                                                <input class="rating__input" name="rating2" id="rating2-25" value="2.5" type="radio" checked>
                                                                <label aria-label="3 stars" class="rating__label" for="rating2-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                <input class="rating__input" name="rating2" id="rating2-30" value="3" type="radio">
                                                                <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating2-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                                                <input class="rating__input" name="rating2" id="rating2-35" value="3.5" type="radio">
                                                                <label aria-label="4 stars" class="rating__label" for="rating2-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                <input class="rating__input" name="rating2" id="rating2-40" value="4" type="radio">
                                                                <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating2-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
                                                                <input class="rating__input" name="rating2" id="rating2-45" value="4.5" type="radio">
                                                                <label aria-label="5 stars" class="rating__label" for="rating2-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
                                                                <input class="rating__input" name="rating2" id="rating2-50" value="5" type="radio">
                                                            </div>
                                                        </div>
                                                        <div>4,5 <span>(110)</span></div>
                                                    </div>
                                                    <div class="num-participate">
                                                        <h5>12.3456</h5>
                                                        <p>Học viên</p>
                                                    </div>
                                                </div>
                                            </div>
                                           
                                            
                                        </div>

                                        <div class="bottom-part">
                                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Assumenda, perspiciatis minima a fugit animi dolorum aliquam, quia aliquid adipisci nam quo fugiat sint mollitia aut laudantium quod voluptas eos nemo!</p>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>
                           
                            <!-- Add Pagination -->
                            <div class="swiper-pagination"></div>
                        </div>
                         <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="news">
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
</section>
@stop

@section('footer')
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

@stop