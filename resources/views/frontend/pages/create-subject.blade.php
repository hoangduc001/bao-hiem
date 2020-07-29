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
    <div class="create-subject-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="container-create-subject" id="container-create-subject">
                        <div class="title-create-subject">
                            <h2>Tạo đề thi</h2>
                        </div>
                        <div class="create-subject-detail">
                            <div class="tab-main">
                                <div class="tabs tabs-create-subject">
                                    <div class="tab">
                                        <input type="radio" name="css-tabs" id="tab-in" checked class="tab-switch">
                                        <label for="tab-in" class="tab-label">Tạo đề thi từ ngân hàng đề thi </label>
                                        <div class="tab-content">
                                            <div class="library-subject">
                                                <div class="library-ctn">
                                                    <form class="form-horizontal form-create-subject" role="form" method="post" action="">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="name-subject">Tên đề thi:</label>
                                                                <input type="text" class="form-control" id="name-subject" placeholder="" name="name-subject" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="num-dif">Số câu khó</label>
                                                                <input type="number" pattern="[0-9]*" id="num-dif" name="value" value="1" min="1" max="40" step="1" oninput="maxLengthCheck(this)" maxlength="3">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name-subject">Phí thi:</label>
                                                                <input type="text" class="form-control" id="fee-subject" placeholder="" name="fee-subject" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="type-subject">Thể loại:</label>
                                                                <input type="text" class="form-control" id="type-subject" placeholder="" name="type-subject" value="">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="num-easy">Số câu khó</label>
                                                                <input type="number" pattern="[0-9]*" id="num-easy" name="value" value="1" min="1" max="40" step="1" oninput="maxLengthCheck(this)" maxlength="3">
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name-subject">Số lượng câu:</label>
                                                                <input type="text" class="form-control" id="fee-subject" placeholder="" name="fee-subject" value="">
                                                            </div>
                                                        </div>
                                                       
                                                    </form>
                                                    <div class="btn-create-subject">
                                                        <a href="#" class="btn btn-default ">Tạo đề thi</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab">
                                        <input type="radio" name="css-tabs" id="tab-2" class="tab-switch">
                                        <label for="tab-2" class="tab-label">Tạo mới đề thi</label>
                                        <div class="tab-content">
                                            <div class="custom-subject">
                                                <form class="form-horizontal form-create-subject" role="form" method="post" action="">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="name-subject">Tên đề thi:</label>
                                                            <input type="text" class="form-control" id="name-subject" placeholder="" name="name-subject" value="">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <!-- <div class="form-group">
                                                            <label for="name-subject">Văn bản quy chiếu:</label>
                                                            <input id="files-to-upload" type="file" multiple  accept="application/pdf">
                                                        </div> -->
                                                        <div class="form-group">
                                                            <label for="name-subject">Văn bản quy chiếu:</label>
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
                                                        <!-- <span id="fupload-icon">upload</span> -->
                                                        <!-- <span id="fupload-clear">clear</span> -->

                                                        <!-- <ul id="append-file-name"></ul> -->
                                                    </div>
                                                    <div class="col-md-3">
                                                        <label>Loại hình</label>
                                                        <div class="select">
                                                            <select name="slct" id="slct" class="form-control">
                                                                <option selected disabled>Chọn loại hình</option>
                                                                <option value="1">Loại hình 1</option>
                                                                <option value="2">Loại hình 2</option>
                                                                <option value="3">Loại hình 3</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                </form>
                                                <form class="form-horizontal form-create-question" role="form" method="post" action="">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="name-subject">Nội dung câu hỏi:</label>
                                                            <textarea class="form-control form-control-sm mb-3" rows="3" placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="answer-content">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="name-subject">Nội dung đáp án A:</label>
                                                                <textarea class="form-control form-control-sm mb-3" rows="3" placeholder=""></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name-subject">Nội dung đáp án B:</label>
                                                                <textarea class="form-control form-control-sm mb-3" rows="3" placeholder=""></textarea>
                                                            </div>
                                                        </div>
                                                    
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="name-subject">Nội dung đáp án C:</label>
                                                                <textarea class="form-control form-control-sm mb-3" rows="3" placeholder=""></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name-subject">Nội dung đáp án D:</label>
                                                                <textarea class="form-control form-control-sm mb-3" rows="3" placeholder=""></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="name-subject">Giải thích đáp án:</label>
                                                            <textarea class="form-control form-control-sm mb-3" rows="3" placeholder=""></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="btn-create-question">
                                                        <a href="#" class="btn btn-green"> + Tạo mới</a>
                                                    </div>
                                                </form>
                                                <div class="btn-create-subject">
                                                    <a href="#" class="btn btn-default ">Tạo đề thi</a>
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
  <script>
    //       function spinner() {
    // 	//  SPINNER
    // 	$("#num-dif").spinner();
        
    // 	//  INPUT ONLY NUMBERS
    // 	$('#num-dif').keyup(function () { 
    // 		 this.value = this.value.replace(/[^0-9]/g,'');
    // 	});
    // }

    // INPUT NUMBER MAX LENGHT
    function maxLengthCheck(object) {
        if (object.value.length > object.maxLength)
            object.value = object.value.slice(0, object.maxLength)
    }
  </script>
  <script>
      
    $( document ).ready(function() {

        var ftoupload = [];

        $('#files-to-upload').change(function(event) {
        //console.log( event.target.files.length );
        //reset
        ftoupload=[];
        
        for (i = 0; i < event.target.files.length; i++) {
            //console.log(i);
            //console.log( event.target.files[i].name );
            ftoupload.push(event.target.files[i].name);
        }

        console.log(ftoupload);
        
        $('#append-file-name').html('');
        
        for (i = 0; i < ftoupload.length; i++) {
            $('#append-file-name').append('<li>'+ftoupload[i]+'</li>');
        }
        
        clearStateButton(ftoupload);
        
        });

        function clearStateButton(arr){
        //alert(arr);
        if(arr===undefined){
            $('#fupload-clear').css({'display':'none'})
            return;
        }
        
        arr.length<=0 ? $('#fupload-clear').css({'display':'none'}) : $('#fupload-clear').css({'display':'block'});
        }

        $('#fupload-icon').on('click', function(event) {
        console.log('dddd');
        $('#files-to-upload').trigger( "click" );
        });

        $('#fupload-clear').on('click', function(event) {
        $('#files-to-upload')[0].value = '';
        $('#append-file-name').html('');
        clearStateButton();
        });

    });
  </script>
@stop

@section('footer')
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script>
    CKEDITOR.replace('editor1');

$(document).ready(function(){

$.fn.modal.Constructor.prototype.enforceFocus = function () {
    modal_this = this
    $(document).on('focusin.modal', function (e) {
        if (modal_this.$element[0] !== e.target && !modal_this.$element.has(e.target).length
        // add whatever conditions you need here:
        &&
        !$(e.target.parentNode).hasClass('cke_dialog_ui_input_select') && !$(e.target.parentNode).hasClass('cke_dialog_ui_input_text')) {
            modal_this.$element.focus()
        }
    })
};

});
</script>
    <script src="{{ url('assets/js/home.js?'.config('custom.version')) }}"></script>

@stop