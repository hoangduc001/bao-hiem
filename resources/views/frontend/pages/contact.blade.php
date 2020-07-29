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
    <div class="contact-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container-contact" id="container-contact">
                        <div class="title-contact">
                            <h2>THÔNG TIN LIÊN HỆ VICS - CORP</h2>
                            <h5>MỌI THẮC MẮC/ CÂU HỎI VÀ YÊU CẦU VỀ CÁC THÔNG TIN KHÓA HỌC/ TƯ VẤN KHÓA HỌC/ TUYỂN DỤNG NHÂN SỰ<br> XIN GỬI THEO ĐỊA CHỈ SAU:</h5>
                        </div>
                        <div class="contact-detail">
                            <div class="contact-item-ctn">
                                <div class="contact-item location">
                                    <h6><span> <img src="{{ url('/') }}/assets/images/default/location.svg?{{ config('custom.version') }}" alt=""></span>Địa chỉ</h6>
                                    <p>Địa chỉ trụ sở chính: Tầng 5, Toà nhà 142 Lê Duẩn, p.Khâm Thiên, q.Đống Đa, tp.Hà Nội</p>
                                </div>
                                <div class="contact-item email">
                                    <h6><span><img src="{{ url('/') }}/assets/images/default/mail.svg?{{ config('custom.version') }}" alt=""></span> Email</h6>
                                    <a href="mailto:contact@vics-corp.com">contact@vics-corp.com</a>
                                </div>
                                <div class="contact-item phone">
                                    <h6> <span><img src="{{ url('/') }}/assets/images/default/phone.svg?{{ config('custom.version') }}" alt=""></span> Số điện thoại</h6>
                                    <a href="tel:0906060784">0906.060.784</a>
                                </div>
                                <div class="contact-item website">
                                    <h6><span><img src="{{ url('/') }}/assets/images/default/global.svg?{{ config('custom.version') }}" alt=""></span> Website</h6>
                                    <a href="https://vics-corp.com" tar>https://vics-corp.com</a>
                                </div>
                            </div>
                        </div>
                        <div class="contact-form-ctn">
                            <div class="form-title">
                                <h5>
                                    HOẶC ĐĂNG KÝ E-MAIL CỦA BẠN TẠI ĐÂY VÀ GỬI KÈM THEO CÂU HỎI/ YÊU CẦU. CHÚNG TÔI SẼ GỬI MAIL TRẢ LỜI BẠN NGAY KHI CÓ THỂ
                                </h5>
                            </div>
                            <form class="form-horizontal" role="form" method="post" action="">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" placeholder="Họ và tên" name="name" value="">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="E-mail" name="email" value="">
                                </div>
                                <textarea class="form-control" rows="10" placeholder="Câu hỏi/ thắc mắc của bạn dành cho chúng tôi..." name="message"></textarea>
                                
                                <button class="btn btn-primary send-button" id="submit" type="submit" value="SEND">
                                    <div class="button">
                                    <a class="send-text"><i class="fa fa-paper-plane"></i>Đăng kí</a>
                                    </div>
                                </button>
                            </form>
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