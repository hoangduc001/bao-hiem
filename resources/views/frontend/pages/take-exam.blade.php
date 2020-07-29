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
    <section class="take-exam">
        <div class="take-exam-wrapper">
            <div class="floating-wrapper-ctn">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="heading-ctn">
                                <div class="top-title">
                                    <h4>THI CHỨNG CHỈ PHỤ TRỢ - DAIICHI</h4>
                                </div>
                                <div class="timer-ctn">
                                    <div class="clock">
                                        <svg 
                                            xmlns="http://www.w3.org/2000/svg" 
                                            xmlns:xlink="http://www.w3.org/1999/xlink" 
                                            viewBox="-150 -150 300 300"witdht="30" height="30">
                                            <!-- stroke-dasharray: 140 * 3.14 * 2 = 원의 둘레 -->
                                            <!-- stroke-dashoffset: 원의 둘레 / 4 + 원의 둘레 -->
                                            <circle
                                            class="frame"
                                            cx="0" 
                                            cy="0" 
                                            r="140" 
                                            fill="none" 
                                            stroke="#AE8516" 
                                            stroke-width="20" 
                                            stroke-linecap="round"
                                            stroke-dasharray="0 879.2"
                                            stroke-dashoffset="-1099"
                                            />
                                            <line 
                                            class="hour-hand"
                                            x1="0" 
                                            y1="0" 
                                            x2="-80" 
                                            y2="0" 
                                            stroke="#AE8516"
                                            stroke-width="20" 
                                            stroke-linecap="round"
                                            stroke-dasharray="80"
                                            stroke-dashoffset="79"
                                            />
                                            <line 
                                            class="minute-hand"
                                            x1="0" 
                                            y1="0" 
                                            x2="90" 
                                            y2="0" 
                                            stroke="#AE8516"
                                            stroke-width="20" 
                                            stroke-linecap="round"
                                            stroke-dasharray="90"
                                            stroke-dashoffset="90"
                                            />
                                        </svg>
                                    </div>
                                    <div id="clockdiv"></div>
                                        <!-- <button id="pause">Pause</button>
                                        <button id="resume">Resume</button> -->
                                    </div>
                                <div class="submit-ctn">
                                    <a href="#" class="btn btn-green btn-submit">Nộp bài</a>
                                </div>
                            </div>
                            <div class="answer-ctn">
                                <div class="asnswer-list">
                                    <div class="list">
                                        <div class="numberCircle done">1</div>
                                        <div class="numberCircle done">2</div>
                                        <div class="numberCircle done">3</div>
                                        <div class="numberCircle done">4</div>
                                        <div class="numberCircle done">5</div>
                                        <div class="numberCircle done">6</div>
                                        <div class="numberCircle done">7</div>
                                        <div class="numberCircle done">8</div>
                                        <div class="numberCircle done">9</div>
                                        <div class="numberCircle done">10</div>
                                        <div class="numberCircle done">11</div>
                                        <div class="numberCircle done">12</div>
                                        <div class="numberCircle done">13</div>
                                        <div class="numberCircle done">14</div>
                                        <div class="numberCircle done">15</div>
                                        <div class="numberCircle fail">16</div>
                                        <div class="numberCircle fail">17</div>
                                        <div class="numberCircle fail">18</div>
                                        <div class="numberCircle fail">3</div>
                                        <div class="numberCircle fail">4</div>
                                        <div class="numberCircle fail">1</div>
                                        <div class="numberCircle fail">2</div>
                                        <div class="numberCircle fail">3</div>
                                        <div class="numberCircle fail">4</div>
                                        <div class="numberCircle undone">1</div>
                                        <div class="numberCircle undone">2</div>
                                        <div class="numberCircle undone">3</div>
                                        <div class="numberCircle undone">4</div>
                                        <div class="numberCircle undone">1</div>
                                        <div class="numberCircle undone">2</div>
                                        <div class="numberCircle undone">3</div>
                                        <div class="numberCircle undone">4</div>
                                        <div class="numberCircle undone">1</div>
                                        <div class="numberCircle undone">2</div>
                                        <div class="numberCircle undone">3</div>
                                        <div class="numberCircle undone">4</div>
                                        <div class="numberCircle undone">1</div>
                                        <div class="numberCircle undone">2</div>
                                        <div class="numberCircle undone">3</div>
                                        <div class="numberCircle undone">4</div>
                                    </div>
                                </div>
                                <div class="explain">
                                    <div class="explain-ctn">
                                        <div class="ex-done"><div class="circle done"></div><div class="temp">Các câu đã làm</div></div>
                                        <div class="ex-undone"><div class="circle undone"></div><div class="temp">Các câu chưa làm</div></div>
                                        <div class="ex-fail"><div class="circle fail"></div><div class="temp">Các câu chưa làm</div></div>
                                    </div>
                                    <div class="num-right-ans">
                                        <p>
                                            Số câu đúng <span> 20/40</span>
                                        </p>
                                    </div>
                                    <div class="congrat">
                                        <h2>Chúc mừng bạn đã vượt qua kì thi</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="list-ques-ctn">
                            <div class="quiz">
                                <div class="quiz__heading">
                                    <h2 class="quiz__heading-text">
                                        Your are <span class="result"></span> right.
                                    </h2>
                                </div>
                                <form class="quiz-form">
                                    <div class="quiz-form__quiz">
                                        <p class="quiz-form__question">
                                            1. What happens to plastic waste?
                                        </p>
                                        <label class="quiz-form__ans" for="q11">
                                        <input type="radio" name="q1" id="q11" value="A" checked />
                                        <span class="design"></span>
                                        <span class="text text-wrong">It is a biodegradable material so it eventually
                                            disintegrates</span>
                                        </label>

                                        <label class="quiz-form__ans" for="q12">
                                        <input type="radio" name="q1" id="q12" value="B" />
                                        <span class="design"></span>
                                        <span class="text text-right">It never fully goes away, it just breaks into little
                                            pieces</span>
                                        </label>

                                        <label class="quiz-form__ans" for="q13">
                                        <input type="radio" name="q1" id="q13" value="C" />
                                        <span class="design"></span>
                                        <span class="text text-wrong">There is no such thing as plastic waste, all plastic is
                                            recycled</span>
                                        </label>
                                        <label class="quiz-form__ans" for="q14">
                                        <input type="radio" name="q1" id="q14" value="D" />
                                        <span class="design"></span>
                                        <span class="text text-wrong">It is dumped in the ocean for fish to eat</span>
                                        </label>
                                        <div class="explain-answer white-bg">
                                            <h6>Giải thích đáp án</h6>
                                            <p>Khoản 6 điều 3 Luật KDBH 2000 sửa đổi, bổ sung 2010. Bên mua bảo hiểm là tổ chức, cá nhân giao kết hợp đồng bảo hiểm với doanh nghiệp bảo hiểm và đóng phí bảo hiểm. Bên mua bảo hiểm có thể đồng thời là người được bảo hiểm hoặc người thụ hưởng</p>
                                            <div class="doc-relate">
                                                <span><img src="{{ url('/') }}/assets/images/quiz/clip.svg?{{ config('custom.version') }}" alt=""></span><a href="" target="_blank">Văn bản quy chiếu</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="quiz-form__quiz">
                                        <p class="quiz-form__question">
                                            2. Why is plastic dangerous for marine life?
                                        </p>
                                        <label class="quiz-form__ans" for="q21">
                                        <input type="radio" name="q2" id="q21" value="A" checked />
                                        <span class="design"></span>
                                        <span class="text">It's not dangerous because they use plastic waste for
                                            habitats</span>
                                        </label>
                                        <label class="quiz-form__ans" for="q22">
                                        <input type="radio" name="q2" id="q22" value="B" />
                                        <span class="design"></span>
                                        <span class="text">They can get tangled in it which hinders their ability to
                                            swim</span>
                                        </label>
                                        <label class="quiz-form__ans" for="q23">
                                        <input type="radio" name="q2" id="q23" value="C" />
                                        <span class="design"></span>
                                        <span class="text">They mistake it for food and cannot digest it</span>
                                        </label>
                                        <label class="quiz-form__ans" for="q24">
                                        <input type="radio" name="q2" id="q24" value="D" />
                                        <span class="design"></span>
                                        <span class="text">Both a and b</span>
                                        </label>
                                    </div>
                                </form>
                                <div class="button-ctn">

                                    <div class="next-back-btn">
                                        <a href="#" class="btn btn-default disabled"> Quay lại</a>
                                        <a href="#" class="btn btn-green"> Câu tiếp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="related-subject">
                            <div class="head_title text-center fix">
                                <h2 >Đề thi liên quan</h2>
                            </div>
                            <div class="quiz-other-item-ctn">
                                <div class="row">
                                    @for($i=1;$i<=4;$i++)
                                    <div class="col-md-3">
                                        <div class="item-certi">
                                            <img src="{{ url('/') }}/assets/images/course/item.png?{{ config('custom.version') }}" alt="">
                                            <div class="certi-item-content">
                                                <div class="name-ctn">
                                                    <div class="c-name">Loại hình 1</div>
                                                    <div class="c-price">
                                                        <div class="price">
                                                            1.500.000 <span>đ</span>
                                                        </div>
                                                        <!-- <div class="favorite-btn">
                                                            <span class="heart"><i class="fa fa-heart-o" aria-hidden="true" ></i> </span>
                                                        </div> -->
                                                    </div>
                                                </div>
                                                <div class="des-ctn">
                                                    <p class="ellipsis">
                                                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit accusamus expedita voluptatem dolor voluptates ullam facere? Voluptates excepturi ex, dolore doloribus sequi dolor corrupti magni, facere eos, voluptate doloremque corporis.
                                                    </p>
                                                </div>
                                                <div class="pre-certi-btn">
                                                    <a href="#" class="btn btn-default pre-btn ">Mô tả đề thi</a>
                                                    <a href="#" class="btn btn-default pre-btn ">Vào thi</a>
                                                </div>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                    <div class="watch-more">
                                        <a href="#">Xem thêm</a>
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
<script>
    // 40 minutes from now
    var time_in_minutes = 1;
    var current_time = Date.parse(new Date());
    var deadline = new Date(current_time + time_in_minutes*60*1000);


    function time_remaining(endtime){
        var t = Date.parse(endtime) - Date.parse(new Date());
        console.log(t);
        var seconds = Math.floor( (t/1000) % 60);
        var minutes = Math.floor( (t/1000/60) % 60 );
        var hours = Math.floor( (t/(1000*60*60)) % 24 );
        var days = Math.floor( t/(1000*60*60*24) );
        //add a leading zero (as a string value) if seconds less than 10
        if (seconds < 10) {
            seconds = "0" + seconds;
        console.log(seconds);
        }
        return {'total':t, 'days':days, 'hours':hours, 'minutes':minutes, 'seconds':seconds};
    }

    var timeinterval;
    function run_clock(id,endtime){
        var clock = document.getElementById(id);
        function update_clock(){
            var t = time_remaining(endtime);
            clock.innerHTML =  `<p class="clock-count-down">`+t.minutes+' : '+t.seconds +`</p>`;
            if(t.total<=0){ clearInterval(timeinterval); }
        }
        update_clock(); // run function once at first to avoid delay
        timeinterval = setInterval(update_clock,1000);
    }
    run_clock('clockdiv',deadline);


    var paused = false; // is the clock paused?
    var time_left; // time left on the clock when paused

    function pause_clock(){
        if(!paused){
            paused = true;
            clearInterval(timeinterval); // stop the clock
            time_left = time_remaining(deadline).total; // preserve remaining time
        }
    }

    function resume_clock(){
        if(paused){
            paused = false;

            // update the deadline to preserve the amount of time remaining
            deadline = new Date(Date.parse(new Date()) + time_left);

            // start the clock
            run_clock('clockdiv',deadline);
        }
    }

    // handle pause and resume button clicks
    document.getElementById('pause').onclick = pause_clock;
    document.getElementById('resume').onclick = resume_clock;

</script>
@stop

@section('footer')
    <!-- <script src="{{ url('assets/js/info.js?'.config('custom.version')) }}"></script> -->

@stop