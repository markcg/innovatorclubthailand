@extends('layouts._mobile_layout')
@section('content')
<div class="row" style="margin-top: 70px;">
    <div class="container" style="text-align: center;" >
        <div class="column">
            <a href="#home" aria-controls="role" role="tab" data-toggle="tab"><button class="btn btn-info">ค้นหาจากตำแหน่ง</button></a>
            <a href="#home" aria-controls="exp" role="tab" data-toggle="tab"><button class="btn btn-info">จับคู่จากความสามารถ</button></a>
            <a href="#home" aria-controls="project" role="tab" data-toggle="tab"><button class="btn btn-info">ค้นหาโปรเจค</button></a>
        </div>
    </div>
    <div class="container" style="text-align: center; margin-top: 20px;" >
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home">
                <div class="panel panel-info">
                    <div class="panel-body">
                        <div class="column">ผลการค้นหาจากตำแหน่งที่คุณต้องการ (7 ผลลัพท์)</div>
                        <div class="column" style="text-align: left;">
                            <div class="column">
                                <div class="col-md-2"><img src="" height="70" width="70"></div>
                                <div class="col-md-7">
                                    <div class="column">ชื่อ: ชื่อจริง นามสกุล</div>
                                    <div class="column">ตำแหน่ง: Business Developer</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="column"><a><button class="btn btn-warning">ดูโปรไฟล์</button></a></div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="col-md-2"><img src="" height="70" width="70"></div>
                                <div class="col-md-7">
                                    <div class="column">ชื่อ: ชื่อจริง นามสกุล</div>
                                    <div class="column">ตำแหน่ง: Business Developer</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="column"><a><button class="btn btn-warning">ดูโปรไฟล์</button></a></div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="col-md-2"><img src="" height="70" width="70"></div>
                                <div class="col-md-7">
                                    <div class="column">ชื่อ: ชื่อจริง นามสกุล</div>
                                    <div class="column">ตำแหน่ง: Business Developer</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="column"><a><button class="btn btn-warning">ดูโปรไฟล์</button></a></div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="col-md-2"><img src="" height="70" width="70"></div>
                                <div class="col-md-7">
                                    <div class="column">ชื่อ: ชื่อจริง นามสกุล</div>
                                    <div class="column">ตำแหน่ง: Business Developer</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="column"><a><button class="btn btn-warning">ดูโปรไฟล์</button></a></div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="col-md-2"><img src="" height="70" width="70"></div>
                                <div class="col-md-7">
                                    <div class="column">ชื่อ: ชื่อจริง นามสกุล</div>
                                    <div class="column">ตำแหน่ง: Engineer</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="column"><a><button class="btn btn-warning">ดูโปรไฟล์</button></a></div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="col-md-2"><img src="" height="70" width="70"></div>
                                <div class="col-md-7">
                                    <div class="column">ชื่อ: ชื่อจริง นามสกุล</div>
                                    <div class="column">ตำแหน่ง: Engineer</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="column"><a><button class="btn btn-warning">ดูโปรไฟล์</button></a></div>
                                </div>
                            </div>
                            <div class="column">
                                <div class="col-md-2"><img src="" height="70" width="70"></div>
                                <div class="col-md-7">
                                    <div class="column">ชื่อ: ชื่อจริง นามสกุล</div>
                                    <div class="column">ตำแหน่ง: Product Manager</div>
                                </div>
                                <div class="col-md-3">
                                    <div class="column"><a><button class="btn btn-warning">ดูโปรไฟล์</button></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
@section('style')
<link href="/css/vegas.min.css" rel="stylesheet" type="text/css"/>
@endsection
@section('script')
<script src="/js/vegas.min.js" type="text/javascript"></script>
<script src="/js/system/memberSystem.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        memberSystem.login("#login");
    });
</script>
<script>
    $("body").vegas({
        slides: [
        ],
        overlay: true
    });
    $('#succes-story').carousel({
        //interval: 2000,
        pause: "hover",
        wrap: true,
    });
</script>
@endsection