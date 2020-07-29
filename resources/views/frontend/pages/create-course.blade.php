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
    <section class="course-create">
        <div class="course-create-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="top-section-create-course">
                            <div class="container-create-course" id="container-create-course">
                                <form class="form-horizontal form-create-course" role="form" method="post" action="">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name-subject">Tên đề thi:</label>
                                            <input type="text" class="form-control" id="name-subject" placeholder="" name="name-subject" value="">
                                        </div>
                                        <div class="form-group">
                                            <label class="name-select">Thể loại</label>
                                            <div class="select">
                                                <select name="slct" id="slct" class="form-control">
                                                    <option selected disabled>Chọn loại hình</option>
                                                    <option value="1">Loại hình 1</option>
                                                    <option value="2">Loại hình 2</option>
                                                    <option value="3">Loại hình 3</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name-subject">Văn bản quy chiếu:</label>
                                            <!-- <input id="files-to-upload" name="upload" type="file" multiple  placeholder="Tải file lên" accept="application/pdf"> -->
                                            <div class="">
                                                <div class="form-group col-xs-12">
                                                    <div class="up-file">
                                                        <input type="file" name="img[]" multiple class="input-file" accept="application/pdf">
                                                        <input type="text" class="form-control" placeholder="Upload file">
                                                        <span class="input-group-btn">
                                                            <button class="upload-field btn btn-green" type="button"><i class="fa fa-upload"></i> Browse</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <span id="fupload-icon">upload</span> -->
                                        <!-- <span id="fupload-clear">clear</span> -->
                                        <!-- <ul id="append-file-name"></ul> -->
                                        <div class="form-group">
                                            <label for="name-subject">Phí khóa học:</label>
                                            <input type="text" class="form-control" id="name-subject" placeholder="" name="name-subject" value="">
                                        </div>
                                    </div>
                                    
                                </form>
                                <div class="btn-add-des-course">
                                    <!-- <button class="btn btn-green" type="button"> Bài viết mô tả khóa học</button> -->
                                    <a class="btn btn-green" href="#add-post" rel="modal:open">Bài viết mô tả khóa học</a>
                                </div>
                                <div class="chapper-ctn">
                                    <div class="chapper-title">
                                        <div class="h4">Danh sách chương</div>
                                    </div>
                                    <div class="chapter-content">
                                        <form class="form-horizontal form-create-course" role="form" method="post" action="">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <label for="name-subject">Tên chương:</label>
                                                    <input type="text" class="form-control" id="name-subject" placeholder="" name="name-subject" value="">
                                                </div>
                                                <div class="form-group">
                                                    <label class="name-select">Phí chương học (VNĐ)</label>
                                                    <input type="text" class="form-control" id="fee-subject" placeholder="" name="fee-subject" value="">
                                                </div>
                                                <div class="btn-add-chapter">
                                                    <button class="upload-field btn btn-green" type="button"> Thêm chương mới</button>
                                                </div>
                                            </div>
                                            <div class="col-md-9">
                                                <div class="lecture-content">
                                                    <form class="form-horizontal form-create-lecture" role="form" method="post" action="">
                                                        <div class="title-lecture">
                                                            <div class="form-group">
                                                                <label for="name-subject">Tên bài học:</label>
                                                                <input type="text" class="form-control" id="name-lecture" placeholder="" name="name-lecture" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name-subject">Tài liệu bài giảng:</label>
                                                                <!-- <input id="files-to-upload" name="upload" type="file" multiple  placeholder="Tải file lên" accept="application/pdf"> -->
                                                                <div class="">
                                                                    <div class="form-group col-xs-12">
                                                                        <div class="up-file">
                                                                            <input type="file" name="img[]" multiple class="input-file" accept="video/pdf">
                                                                            <input type="text" class="form-control" placeholder="Upload file">
                                                                            <span class="input-group-btn">
                                                                                <button class="upload-field btn btn-green" type="button"><i class="fa fa-upload"></i> Browse</button>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="editor-ctn">
                                                            <textarea id="tiny"></textarea>
                                                        </div>
                                                        <div class="btn-add-lecture">
                                                            <button type="button" class="btn btn-success btn-circle"><i class="fa fa-plus"></i></button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>  
                                        </form>
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
<div id="ex2" class="modal">
    <div class="modal-wrapper modal-transition">
        <div class="modal-header">
            <h2 class="modal-heading">This is a modal</h2>
        </div>

        <div class="modal-body">
            <div class="modal-content">
                <div class="editor-ctn">
                    <textarea name="" id="editor" cols="30" rows="10"></textarea>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('footer')
    <!-- <script src="{{ url('assets/js/info.js?'.config('custom.version')) }}"></script> -->

@stop