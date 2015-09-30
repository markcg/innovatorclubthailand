@extends('layouts._mobile_layout')
@section('content')
<div class="row" style="margin-top: 100px;">
    <div class="container" >
        <div>
            <div class="progress">
                <div class="progress-bar" id="progressBar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 0;">
                    <span class="sr-only">60% Complete</span>
                    <input type="hidden" id="MemberId" value="{{Session::get("MemberId")}}">
                </div>
            </div>        
            <div class="column" id="status"></div>
            <!-- Tab panes -->
            <div class="tab-content panel panel-default">
                <div role="tabpanel" class="tab-pane active" id="detail">
                    <div class="column" style="text-align: center;"><h1>ข้อมูลเพิ่มเติม</h1></div>
                    <div class="panel-body">
                        <form data-toggle="validator" role="form">
                            <div class="form-inline" style="text-align: center;">
                                <div class="form-group">
                                    <label for="exampleInputName2">ชื่อจริง</label>
                                    <input type="text" class="form-control" id="FirstName" placeholder="ชื่อจริง">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2">นามสกุล</label>
                                    <input type="text" class="form-control" id="LastName" placeholder="นามสกุล">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">จังหวัดที่คุณอาศัยอยู่</label>
                                <select class="form-control province" id="Location" required></select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">อธิบายเกี่ยวกับคุณ</label>
                                <textarea id="About" class="form-control" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">รูปภาพตัวคุณ</label>
                                <input type="file" class="form-control" id="ImageUploader" onchange="readImage(this);" placeholder="รูปภาพ">
                                <input type="hidden" id="Image">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">วิดีโอแนะนำตัว</label>
                                <input type="text" class="form-control" id="Video" placeholder="URL ของวิดีโอ">
                            </div>
                            <input type="button" class="btn btn-default" onclick="setupSystem.addDetail()" value="บันทึก">                        
                            <a id="detailNext" style="display: none;" href="#contact" aria-controls="experience" role="tab" data-toggle="tab">
                                <button type="submit" onclick="setupSystem.nextProcess()" class="btn btn-default">ต่อไป</button>
                            </a>

                        </form>
                    </div>
                </div>

                <div role="tabpanel" class="tab-pane " id="contact">
                    <div class="column" style="text-align: center;"><h1>ช่องทางการสื่อสาร</h1></div>
                    <div class="panel-body">
                        <form data-toggle="validator" role="form">
                            <div class="form-group" >
                                <div class="input-group" >
                                    <div class="input-group-addon">มือถือ</div>
                                    <input class="form-control" id="Mobile"  type="text" size="5" max="50">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-addon">Skype</div>
                                    <input class="form-control" id="Skype"   type="text" size="5" max="50">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-addon">Line</div>
                                    <input class="form-control" id="Line"   type="text" size="5" max="50">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Facebook</div>
                                    <input class="form-control" id="Facebook"   type="text" size="5" max="50">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-addon">Twitter</div>
                                    <input class="form-control" id="Twitter"   type="text" size="5" max="50">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-addon">Google+</div>
                                    <input class="form-control" id="Google"   type="text" size="5" max="50">
                                </div>
                            </div>
                            <a href="#detail" aria-controls="experience" role="tab" data-toggle="tab">
                                <button class="btn btn-default">กลับ</button>
                            </a>
                            <input type="button" class="btn btn-default" onclick="setupSystem.addContact()" value="บันทึก และ เผยแผร่ข้อมูลของคุณ">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('style')
<link href="/css/vegas.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link href="/js/rating/jquery.rateyo.min.css" rel="stylesheet" type="text/css"/>
<style>
    .jq-ry-container {margin: 0 auto;}
    #skill h2{margin: 0;}
</style>
@endsection
@section('script')
<script src="/js/jqueryUI/jquery-ui.min.js" type="text/javascript"></script>
<script src="/js/system/listSystem.js" type="text/javascript"></script>
<script src="/js/system/memberSystem.js" type="text/javascript"></script>
<script src="/js/rating/jquery.rateyo.min.js" type="text/javascript"></script>
<script src="/js/vegas.min.js" type="text/javascript"></script>
<script src="/js/system/setupSystem.js" type="text/javascript"></script>
<script>
                                $(document).ready(function () {
                                    setupSystem.initialize();
                                    $(function () {
                                        $(".rate").rateYo({
                                            numStars: 5,
                                            rating: 0,
                                            fullStar: true,
                                            onChange: function (rating, rateYoInstance) {
                                                $(this).find(".data").val(rating);
                                            }
                                        });
                                    });
                                });
</script>
@endsection