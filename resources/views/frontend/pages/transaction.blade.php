<section class="pre-certificate">
    <div class="certificate-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="head_title text-center fix">
                        <h2 >Thông tin giao dịch</h2>
                    </div>
                    <div class="certi-content-wrapper">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-certi-tab" data-toggle="tab" href="#nav-certi" role="tab" aria-controls="nav-certi" aria-selected="true">Lịch sử</a>
                                <a class="nav-item nav-link" id="nav-agency-tab" data-toggle="tab" href="#nav-agency" role="tab" aria-controls="nav-agency" aria-selected="false">Nộp tiền</a>
                                <a class="nav-item nav-link" id="nav-human-tab" data-toggle="tab" href="#nav-human" role="tab" aria-controls="nav-human" aria-selected="false">Chuyển tiền</a>
                                <a class="nav-item nav-link" id="nav-money-tab" data-toggle="tab" href="#nav-money" role="tab" aria-controls="nav-money" aria-selected="false">Rút tiền</a>
                            </div>
                        </nav>
                    </div>
                    <div class="pre-certi-ctn">
                        <section id="tabs">
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-certi" role="tabpanel" aria-labelledby="nav-certi-tab">
                                    <h3>Chuyển tiền:</h3>
                                    <div class="certi-ctn tab-ctn">
                                        <table class="table table-dark">
                                            <thead>
                                            <tr>
                                                <th>stt</th>
                                                <th>amount</th>
                                                <th>from</th>
                                                <th>date</th>
                                                <th>status</th>
                                                <th>memo</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($desposits as $desposit)
                                                <tr>
                                                    <td>{{$desposit->id}}</td>
                                                    <td>{{$desposit->amount}}</td>
                                                    <td>{{$desposit->from}}</td>
                                                    <td>{{$desposit->created_at}}</td>
                                                    <td>{{'thành công'}}</td>
                                                    <td>{{$desposit->memo}}</td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{$desposits->links()}}
                                    <br>
                                    <br>
                                    <h3>Rút tiền:</h3>
                                    <div class="certi-ctn tab-ctn">
                                        <table class="table table-dark">
                                            <thead>
                                            <tr>
                                                <th>stt</th>
                                                <th>amount</th>
                                                <th>to</th>
                                                <th>date</th>
                                                <th>status</th>
                                                <th>memo</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($withdraws as $withdraw)
                                                    <tr>
                                                        <td>{{$withdraw->id}}</td>
                                                        <td>{{$withdraw->amounts}}</td>
                                                        <td>{{$withdraw->to}}</td>
                                                        <td>{{$withdraw->created_at}}</td>
                                                        <td>{{"thành công"}}</td>
                                                        <td>{{$withdraw->memo}}</td>
                                                    </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{$withdraws->links()}}
                                </div>

                                <div class="tab-pane fade" id="nav-agency" role="tabpanel" aria-labelledby="nav-agency-tab">
                                    <div class="agency-ctn tab-ctn">
                                        <h1>giao tiền</h1>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-human" role="tabpanel" aria-labelledby="nav-human-tab">
                                    <div class="human-ctn tab-ctn">
                                        <form>
                                            @csrf
                                            <h3>Chuyển tiền:</h3>
                                            <input type="email" name="from" placeholder="email" required/>
                                            <input type="number" name="amount" placeholder="số tiền" required/>
                                            <input type="text" name="memo" placeholder="ghi chú" required/>
                                            <button type="submit" class="btn-submit" data-toggle="modal" data-target="#exampleModal">Chuyển tiền</button>
                                            <div id="fade" class="submit" style="display: none">
                                                <b>Email:</b><p id="main"></p><br>
                                                <b>Số tiền:</b><p id="main2"></p><br>
                                                <b>Ghi chú:</b><p id="main3"></p><br>
                                                <button>Xác nhận</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-money" role="tabpanel" aria-labelledby="nav-money-tab">
                                    <div class="human-ctn tab-ctn">
                                        <form action="{{route('profile-user.withdraw')}}" method="get">
                                            @csrf
                                            <h3>Rút tiền:</h3>
                                            <input type="number" name="stk" placeholder="số tài khoản ngân hàng" required/>
                                            <input type="text" name="to" for = "bank" placeholder="tên ngân hàng" required/>
{{--                                            <label name = "to" for="bank">Choose a bank:</label>--}}
{{--                                            <select id="bank">--}}
{{--                                                <option value="volvo">Volvo</option>--}}
{{--                                                <option value="saab">Saab</option>--}}
{{--                                                <option value="vw">VW</option>--}}
{{--                                                <option value="audi" selected>Audi</option>--}}
{{--                                            </select>--}}
                                            <input type="text" name="human_name" placeholder="tên người nhận" required/>
                                            <input type="number" name="amounts" placeholder="số tiền rút" required/>
                                            <input type="text" name="memos" placeholder="ghi chú" required/>
                                            <button type="submit" class="btn-submit2">Rút tiền</button>

                                            <div id="fade2" class="submit2" style="display: none">
                                                <b>Số tài khoản ngân hàng:</b><p id="mains"></p><br>
                                                <b>Tên ngân hàng:</b><p id="mains2"></p><br>
                                                <b>Tên người nhận:</b><p id="mains3"></p><br>
                                                <b>Số tiền rút:</b><p id="mains4"></p><br>
                                                <b>Ghi chú:</b><p id="mains5"></p><br>
                                                <button>Xác nhận</button>
                                            </div>
                                        </form>
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
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(".btn-submit").click(function (data) {
        data.preventDefault();
        var from = $("input[name=from]").val();
        var amounts = $("input[name=amount]").val();
        var memo = $("input[name=memo]").val();
        var sodu = $("input[name = amount]").val();
        $.ajax({
            type:'GET',
            url:"{{route('profile-user.process-deposit')}}",
            data:{
                from: from,
                amount:$("input[name=amount]").val(),
                memo:$("input[name=memo]").val(),
            },
            success:function (data) {
                $('#main').html(from)
                $('#main2').html(data.amount)
                $('#main3').html(data.memo)
                $("#fade").modal({
                    fadeDuration: 100
                });
                console.log(data);
            },
        });
        $(".submit").click(function (data) {
            data.preventDefault();
            $.ajax({
                type:'POST',
                url:"{{route('profile-user.deposit')}}",
                data:{
                    from:from,
                    amount:amounts,
                    memo:memo,
                    sodu:sodu,
                },
                success:function (data) {
                    console.log(data.sodu)
                    $('#sodu').html(sodu)
                    alert(data.success)
                    location.reload()
                },
            });
        });
    });

    $(".btn-submit2").click(function (data) {
        data.preventDefault();

        var stk = $("input[name=stk]").val();
        var to = $("input[name=to]").val();
        var human_name = $("input[name=human_name]").val();
        var amount = $("input[name=amounts]").val();
        var memo = $("input[name=memos]").val();

        $.ajax({
            type:'GET',
            url:"{{route('profile-user.process-withdraw')}}",
            data:{
                stk:stk,
                to:to,
                human_name:human_name,
                amounts:amount,
                memos:memo,
            },
            success:function (data) {
                $('#mains').html(stk)
                $('#mains2').html(to)
                $('#mains3').html(human_name)
                $('#mains4').html(amount)
                $('#mains5').html(memo)
                $("#fade2").modal({
                    fadeDuration: 100
                });
                console.log(data.success);
            }
        });
        $(".submit2").click(function (data) {
            data.preventDefault();
            $.ajax({
                type:'POST',
                url:"{{route('profile-user.withdraw')}}",
                data:{
                    stk:stk,
                    to:to,
                    human_name:human_name,
                    amounts:amount,
                    memos:memo,
                },
                success:function (data) {
                    console.log(data)
                    alert(data.success)
                    location.reload()
                },
            });
        });
    });
</script>
