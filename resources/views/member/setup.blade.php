@extends('layouts._mobile_layout')
@section('content')
<div class="row" style="margin-top: 100px;">
    <div class="container" >
        <div>
            <!-- Tab panes -->
            <div class="tab-content panel panel-default">
                <div role="tabpanel" class="tab-pane active" id="profile">
                    <div class="column" style="text-align: center;"><h1>ข้อมูลเบื้องต้น</h1></div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputFile">จังหวัดที่คุณอาศัยอยู่</label>
                                <input id="province" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">ช่วงอายุของคุณ</label>
                                <select class="form-control" id="age">
                                    <option value="24">ต่ำกว่า 25 ปี</option>
                                    <option value="25">25 - 35 ปี</option>
                                    <option value="36">36 - 55 ปี</option>
                                    <option value="56">มากกว่า 55 ปี</option>
                                </select>
                            </div>
                            <div class="container-fluid">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">คุณสนใจที่จะเป็น</label>
                                        <select class="form-control memberGroup" id="memberGroup"></select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">คุณกำลังมองหา</label>
                                        <select class="form-control memberGroup" id="partnerGroup"></select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFile">โปรเจคของคุณกำลัง</label>
                                <select class="form-control projectState" id="projectState"></select>
                            </div>
                            <input type="button" class="btn btn-default" value="บันทึก">
                            <a href="#role" aria-controls="profile" role="tab" data-toggle="tab">
                                <button type="submit" class="btn btn-default">ต่อไป</button>
                            </a>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="role">       
                    <div class="column" style="text-align: center;"><h1>ตำแหน่งที่คุณสนใจ</h1></div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">ตำแหน่งที่สนใจที่สุด</label>
                                <select class="form-control memberRole" id="FirstRole"></select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">หรือ</label>
                                <select class="form-control memberRole" id="SecondRole"></select>
                            </div>                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">หรือ</label>
                                <select class="form-control memberRole" id="ThirdRole"></select>
                            </div>
                            <input type="button" class="btn btn-default" value="บันทึก">
                            <a href="#joining" aria-controls="role" role="tab" data-toggle="tab">
                                <button type="submit" class="btn btn-default">ต่อไป</button>
                            </a>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="joining">
                    <div class="column" style="text-align: center;"><h1>คุณต้องการ</h1></div>
                    <div class="panel-body">
                        <form>
                            <div class="container-fluid">
                                <div class="col-md-6">
                                    <div class="form-group" style="text-align: center;">
                                        <label for="exampleInputEmail1">หาคนมาร่วมโปรเจค</label>
                                        <input type="checkbox" class="form-control memberGroup" id="OpenToJoin"/>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group" style="text-align: center;">
                                        <label for="exampleInputPassword1">เข้าร่วมโปรเจคของผู้อื่น</label>
                                        <input type="checkbox" class="form-control memberGroup" id="ReadyToJoins"/>
                                    </div>
                                </div>
                                <input type="button" class="btn btn-default" value="บันทึก">
                                <a href="#skill" aria-controls="joining" role="tab" data-toggle="tab">
                                    <button type="submit" class="btn btn-default">ต่อไป</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane " id="skill">
                    <div class="column" style="text-align: center;"><h1>ความสามารถที่คุณมี และ ที่คุณต้องการ</h1></div>
                    <div class="panel-body">
                        <form>
                            <div class="container-fluid" style="text-align: center;">
                                <div class="panel" style="overflow: hidden;">   
                                    <div class="col-md-6">
                                        <div class="panel panel-primary" style="overflow: hidden;">   
                                            <div class="panel-heading" >
                                                <h2>ความสามารถที่คุณมี</h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="panel panel-primary" style="overflow: hidden;">   
                                            <div class="panel-heading">
                                                <h2>ความสามารถที่คุณต้องการ</h2>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">                                   
                                    <div class="panel-heading"><h2>การเงิน</h2></div>
                                    <div class="panel-body">
                                        <div class="col-md-6">
                                            <div class="rate"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">                                   
                                    <div class="panel-heading"><h2>การบริหารจัดการ</h2></div>
                                    <div class="panel-body">
                                        <div class="col-md-6">
                                            <div class="rate"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">                                   
                                    <div class="panel-heading"><h2>การตลาด</h2></div>
                                    <div class="panel-body">
                                        <div class="col-md-6">
                                            <div class="rate"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">                                   
                                    <div class="panel-heading"><h2>บริหารและจัดการผลิตภัณฑ์</h2></div>
                                    <div class="panel-body">
                                        <div class="col-md-6">
                                            <div class="rate"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">                                   
                                    <div class="panel-heading"><h2>การขาย</h2></div>
                                    <div class="panel-body">
                                        <div class="col-md-6">
                                            <div class="rate"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-primary">                                   
                                    <div class="panel-heading"><h2>เชิงเทคนิค</h2></div>
                                    <div class="panel-body">
                                        <div class="col-md-6">
                                            <div class="rate"></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="rate"></div>
                                        </div>
                                    </div>
                                </div>
                                <input type="button" class="btn btn-default" value="บันทึก">
                                <a href="#experience" aria-controls="skill" role="tab" data-toggle="tab">
                                    <button type="submit" class="btn btn-default">ต่อไป</button>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane " id="experience">
                    <div class="column" style="text-align: center;"><h1>ประสพการณ์ทำงาน</h1></div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="FirstIndustry">มีประสพการณ์ด้าน</label>
                                <select class="form-control industry" id="FirstIndustry" name="FirstIndustry"></select>
                                <div class="input-group" style="width: 200px;">
                                    <div class="input-group-addon">ประสพการณ์</div>
                                    <input class="form-control" name="SecondExperience"  type="number" size="5" max="50">
                                    <div class="input-group-addon">ปี</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="SecondIndustry">และ</label>
                                <select class="form-control industry" id="SecondIndustry"  name="SecondIndustry"></select>
                                <div class="input-group" style="width: 200px;">
                                    <div class="input-group-addon">ประสพการณ์</div>
                                    <input class="form-control" name="SecondExperience"  type="number" size="5" max="50">
                                    <div class="input-group-addon">ปี</div>
                                </div>
                            </div>                            
                            <div class="form-group">
                                <label for="ThirdIndustry">และ</label>
                                <select class="form-control industry" id="ThirdIndustry"  name="ThirdIndustry"></select>
                                <div class="input-group" style="width: 200px;">
                                    <div class="input-group-addon">ประสพการณ์</div>
                                    <input class="form-control" name="SecondExperience"  type="number" size="5" max="50">
                                    <div class="input-group-addon">ปี</div>
                                </div>
                            </div>
                            <input type="button" class="btn btn-default" value="บันทึก">
                            <a href="#need" aria-controls="experience" role="tab" data-toggle="tab">
                                <button type="submit" class="btn btn-default">ต่อไป</button>
                            </a>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane " id="need">
                    <div class="column" style="text-align: center;"><h1>สิ่งที่คุณต้องการจากเพื่อนร่วมโครงการ</h1></div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputPassword1">กำลังในการสนับสนุนเงินลงทุน</label>
                                <select class="form-control" id="age">
                                    <option value="24">ไม่ต้องการ</option>
                                    <option value="24">ต่ำกว่า 10,000 บาท</option>
                                    <option value="24">10,000 บาท ถึง 100,000 บาท</option>
                                    <option value="24">100,000 บาท ถึง 500,000 บาท</option>
                                    <option value="24">500,000 บาท ถึง 1,000,000 บาท</option>
                                    <option value="24">มากกว่า 1,000,000 บาท</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="age">เวลาต่อสัปดาห์เพื่อโครงการ</label>
                                <select class="form-control" id="age">
                                    <option value="24">ต่ำกว่า 40 ชั่วโมง</option>
                                    <option value="25">40 ชั่วโมงต่อสัปดาห์</option>
                                    <option value="25">50 ชั่วโมงต่อสัปดาห์</option>
                                    <option value="25">60 ชั่วโมงต่อสัปดาห์</option>
                                    <option value="25">70 ชั่วโมงต่อสัปดาห์</option>
                                </select>
                            </div>
                            <div class="panel panel-primary">
                                <div class="panel-heading">ตำแหน่งของเพื่อนร่วมโครงการ</div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <select class="form-control memberRole" id="PartnerFirstRole"></select>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">หรือ</label>
                                        <select class="form-control memberRole" id="PartnerSecondRole"></select>
                                    </div>                            
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">หรือ</label>
                                        <select class="form-control memberRole" id="PartnerThirdRole"></select>
                                    </div>
                                </div>
                            </div>
                            <input type="button" class="btn btn-default" value="บันทึก">
                            <a href="#contact" aria-controls="need" role="tab" data-toggle="tab">
                                <button type="submit" class="btn btn-default">ต่อไป</button>
                            </a>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="contact">
                    <div class="column" style="text-align: center;"><h1>ช่องทางการสื่อสาร</h1></div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <div class="input-group" >
                                    <div class="input-group-addon">มือถือ</div>
                                    <input class="form-control" name="SecondExperience"  type="number" size="5" max="50">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-addon">Skype</div>
                                    <input class="form-control" name="SecondExperience"  type="number" size="5" max="50">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-addon">Line</div>
                                    <input class="form-control" name="SecondExperience"  type="number" size="5" max="50">
                                </div>
                            </div>
                            <input type="button" class="btn btn-default" value="บันทึก">
                            <a href="#social" aria-controls="experience" role="tab" data-toggle="tab">
                                <button type="submit" class="btn btn-default">ต่อไป</button>
                            </a>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="social">
                    <div class="column" style="text-align: center;"><h1>การติดต่อผ่าน Social Media</h1></div>
                    <div class="panel-body">
                        <form>
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-addon">Facebook</div>
                                    <input class="form-control" name="SecondExperience"  type="number" size="5" max="50">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-addon">Twitter</div>
                                    <input class="form-control" name="SecondExperience"  type="number" size="5" max="50">
                                </div>
                                <div class="input-group">
                                    <div class="input-group-addon">Google+</div>
                                    <input class="form-control" name="SecondExperience"  type="number" size="5" max="50">
                                </div>
                            </div>
                            <input type="button" class="btn btn-default" value="บันทึก">
                            <a href="#detail" aria-controls="experience" role="tab" data-toggle="tab">
                                <button type="submit" class="btn btn-default">ต่อไป</button>
                            </a>
                        </form>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="detail">
                    <div class="column" style="text-align: center;"><h1>ข้อมูลเบื้องต้น</h1></div>
                    <div class="panel-body">
                        <form>
                            <div class="form-inline" style="text-align: center;">
                                <div class="form-group">
                                    <label for="exampleInputName2">ชื่อจริง</label>
                                    <input type="text" class="form-control" id="exampleInputName2" placeholder="ชื่อจริง">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2">ชื่อกลาง</label>
                                    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="ชื่อกลาง">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail2">นามสกุล</label>
                                    <input type="text" class="form-control" id="exampleInputEmail2" placeholder="นามสกุล">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">อธิบายเกี่ยวกับคุณ</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">รูปภาพตัวคุณ</label>
                                <input type="file" class="form-control" id="exampleInputEmail2" placeholder="รูปภาพ">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">วิดีโอแนะนำตัว</label>
                                <input type="text" class="form-control" id="exampleInputEmail2" placeholder="URL ของวิดีโอ">
                            </div>
                            <input type="button" class="btn btn-default" value="บันทึก และ เผยแผร่ข้อมูลของคุณ">
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
<script>
    $(document).ready(function () {
        listSystem.memberGroupList(".memberGroup");
        listSystem.memberRoleList(".memberRole");
        listSystem.projectStateList(".projectState");
        listSystem.industryList(".industry");
        listSystem.provinceList("#province");

        $(function () {
            $(".rate").rateYo({
                numStars: 5,
                rating: 0,
                fullStar: true
            });
        });
    });
</script>
<script>
    $("body").vegas({
        slides: [
            {src: "/image/landing/slides/1.jpg"},
            {src: "/image/landing/slides/2.jpg"},
            {src: "/image/landing/slides/3.jpg"},
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