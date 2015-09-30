<?php

use App\Models\Category\Province;
use App\Models\Category\ProjectState;
use App\Models\Category\MemberGroup;
use App\Models\Category\MemberStatus;
use App\Models\Category\Industry;
use App\Models\Category\Role;
?>
@extends('layouts._mobile_layout')
@section('content')
<div class="row">
    <div class="container" style="text-align: center;" >
        <div style="text-align: left;font-size: 80px; color: white;overflow: hidden;">
            <div class="u-pull-left">Profile</div>
            <div class="u-pull-right">
                <div class="u-pull-right"><a href="/member/profile/{{$member->id}}"><button class="btn btn-success">แสดงโปรไฟล์</button></a></div>
                <div class="u-pull-right"><a href="/project/manage"><button class="btn btn-success">จัดการโปรเจค</button></a></div>
            </div>
        </div>
        <div class="table" style="margin: 20px auto;">
            <a href="/member/matching"><button class="btn btn-info">ค้นหาพาร์ทเนอร์ที่คุณต้องการ</button></a>
        </div>
        <div class="container-fluid">
            <div class="row panel panel-info">
                <div class="panel-body">
                    <div class="col-md-3"><img src="{{$member->profile->Image}}" height="200" width="150"></div>
                    <div class="col-md-5" style="text-align: left;">
                        <div class="column" style="font-size: 20px;">{{$member->profile->Firstname}} {{$member->profile->Middle}} {{$member->profile->Lastname}} | {{Province::find($member->profile->Location)->PROVINCE_NAME}}</div>
                        <div class="column">
                            <div>
                                <div class="col-md-4" style="text-align: left;font-weight: bold;">
                                    <div class="column" >ฉันเป็น</div>
                                    <div class="column" >กำลังมองหา</div>
                                    <div class="column" >เพื่อมาเป็น</div>
                                </div>
                                <div class="col-md-6" style="text-align: left;">
                                    <div class="column">{{Role::find($member->role->FirstRole)->Name}}</div>
                                    <div class="column">{{Role::find($member->need->PartnerFirstRole)->Name}}</div>
                                    <div class="column">{{MemberGroup::find($member->profile->PartnerGroup)->Name}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="text-align: left;">
                        <div class="column">
                            <div>
                                <div class="column" style="text-align: center;font-weight: bold;">
                                    @if($member->joining->OpenToJoin == 1)
                                    <div class="column">
                                        <label for="join">กำลังหาคนมาร่วมโปรเจค</label>
                                        <img src="/image/member/profile/join.jpg">
                                    </div>
                                    @endif
                                    @if($member->joining->ReadyToJoin == 1)
                                    <div class="column">
                                        <label for="join">กำลังหาโปรเจคเพื่อเข้าร่วม</label>
                                        <img src="/image/member/profile/joined.jpg">
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading"><h4><img src="https://www.cofounderslab.com/themes/basic/images/head_icons/about.png">เกี่ยวกับฉัน</h4></div>
            <div class="panel-body">
                <div class="col-md-8" style="text-align: left;">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <div class="column" >{{$member->profile->About}}</div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading"><img src="https://www.cofounderslab.com/themes/basic/images/head_icons/experience.png">ประสพการณ์การทำงาน</div>
                        <div class="panel-body" style="font-size: 20px;">
                            <div class="column">{{Industry::find($member->experience->FirstIndustry)->Name}}<span style="padding: 0 10px;"> : </span>{{$member->experience->FirstExperience}} ปี</div>
                            @if($member->experience->SecondIndustry != null)
                            <div class="column">{{Industry::find($member->experience->SecondIndustry)->Name}}<span style="padding: 0 10px;"> : </span>{{$member->experience->SecondExperience}} ปี</div>
                            @endif
                            @if($member->experience->ThirdIndustry != null)
                            <div class="column">{{Industry::find($member->experience->ThirdIndustry)->Name}}<span style="padding: 0 10px;"> : </span>{{$member->experience->ThirdExperience}} ปี</div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="text-align: left;">
                    <div class="panel panel-primary" style="text-align: center;">
                        <div class="panel-heading"><img src="https://www.cofounderslab.com/themes/basic/images/head_icons/age.png">ช่วงอายุ</div>
                        <div class="panel-body" style="font-size: 12px;">
                            <div class="column">
                                <div class="progress" style="margin: 0;">
                                    @if($member->profile->Age <=24)
                                    <div class="progress-bar progress-bar-success" style="width: 25%">
                                        <span class="sr-only">25% Complete (success)</span>
                                    </div>
                                    @endif
                                    @if($member->profile->Age >=25)
                                    <div class="progress-bar progress-bar-info" style="width: 25%">
                                        <span class="sr-only">50% Complete (warning)</span>
                                    </div>
                                    @endif
                                    @if($member->profile->Age >=36)
                                    <div class="progress-bar progress-bar-warning" style="width: 25%">
                                        <span class="sr-only">75% Complete (warning)</span>
                                    </div>
                                    @endif
                                    @if($member->profile->Age >=56)
                                    <div class="progress-bar progress-bar-danger" style="width: 25%">
                                        <span class="sr-only">100% Complete (danger)</span>
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="column">
                                <div class="three columns"><24</div>
                                <div class="three columns" >24 - 35</div>
                                <div class="three columns">36 - 55</div>
                                <div class="three columns">>55</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8" style="text-align: left;">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h4><img src="https://www.cofounderslab.com/themes/basic/images/head_icons/skills.png">ความสามารถ</h4></div>
                    <div class="panel-body">
                        <div class="row" >
                            <div class="four columns" style="text-align: right;">
                                <div class="column"><h4 style="font-weight: bold">ความสามารถ</h4></div>
                                <div class="column"><h4>การเงิน</h4></div>
                                <div class="column"><h4>การบริหารจัดการ</h4></div>
                                <div class="column"><h4>การตลาด</h4></div>
                                <div class="column"><h4>ดูแลผลิตภัณฑ์</h4></div>
                                <div class="column"><h4>การขาย</h4></div>
                                <div class="column"><h4>เชิงเทคนิค</h4></div>
                            </div>
                            <div class="four columns" style="font-size: 25px;color: gold;text-align: center;">
                                <div class="column" style="color: black;"><h4 style="font-weight: bold">สิ่งที่มี</h4></div>
                                <div class="column">
                                    <?php
                                    for ($i = 0; $i < $member->skill->Finance; $i++) {
                                        echo '<span class="glyphicon glyphicon-star"></span>';
                                    }
                                    ?>
                                </div>
                                <div class="column">
                                    <?php
                                    for ($i = 0; $i < $member->skill->Managing; $i++) {
                                        echo '<span class="glyphicon glyphicon-star"></span>';
                                    }
                                    ?>
                                </div>
                                <div class="column">
                                    <?php
                                    for ($i = 0; $i < $member->skill->Marketing; $i++) {
                                        echo '<span class="glyphicon glyphicon-star"></span>';
                                    }
                                    ?>
                                </div>
                                <div class="column">
                                    <?php
                                    for ($i = 0; $i < $member->skill->ProductM; $i++) {
                                        echo '<span class="glyphicon glyphicon-star"></span>';
                                    }
                                    ?>
                                </div>
                                <div class="column">
                                    <?php
                                    for ($i = 0; $i < $member->skill->Sales; $i++) {
                                        echo '<span class="glyphicon glyphicon-star"></span>';
                                    }
                                    ?>
                                </div>
                                <div class="column">
                                    <?php
                                    for ($i = 0; $i < $member->skill->Technical; $i++) {
                                        echo '<span class="glyphicon glyphicon-star"></span>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="four columns" style="font-size: 25px;color: gold;text-align: center;">
                                <div class="column" style="color: black;"><h4 style="font-weight: bold">สิ่งที่ต้องการ</h4></div>
                                <div class="column">
                                    <?php
                                    for ($i = 0; $i < $member->skill->FinanceNeed; $i++) {
                                        echo '<span class="glyphicon glyphicon-star"></span>';
                                    }
                                    ?>
                                </div>
                                <div class="column">
                                    <?php
                                    for ($i = 0; $i < $member->skill->ManagingNeed; $i++) {
                                        echo '<span class="glyphicon glyphicon-star"></span>';
                                    }
                                    ?>
                                </div>
                                <div class="column">
                                    <?php
                                    for ($i = 0; $i < $member->skill->MarketingNeed; $i++) {
                                        echo '<span class="glyphicon glyphicon-star"></span>';
                                    }
                                    ?>
                                </div>
                                <div class="column">
                                    <?php
                                    for ($i = 0; $i < $member->skill->ProductMNeed; $i++) {
                                        echo '<span class="glyphicon glyphicon-star"></span>';
                                    }
                                    ?>
                                </div>
                                <div class="column">
                                    <?php
                                    for ($i = 0; $i < $member->skill->SalesNeed; $i++) {
                                        echo '<span class="glyphicon glyphicon-star"></span>';
                                    }
                                    ?>
                                </div>
                                <div class="column">
                                    <?php
                                    for ($i = 0; $i < $member->skill->TechnicalNeed; $i++) {
                                        echo '<span class="glyphicon glyphicon-star"></span>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" style="text-align: left;">
                <div class="panel panel-primary" style="text-align: center;">
                    <div class="panel-heading"><span class="glyphicon glyphicon-phone" style="font-size: 30px;"></span>ช่องทางติดต่อ</div>
                    <div class="panel-body" style="font-size: 12px;">
                        @if($member->contact->Mobile != null)<div class="column"><span class="label label-info">Mobile</span>{{$member->contact->Mobile}}</div>@endif
                        @if($member->contact->Skype != null)<div class="column"><span class="label label-info">Skype</span>{{$member->contact->Skype}}</div>@endif
                        @if($member->contact->Line != null)<div class="column"><span class="label label-info">Line</span>{{$member->contact->Line}}</div>@endif
                    </div>
                </div>
                <div class="panel panel-primary" style="text-align: center;">
                    <div class="panel-heading"><img src="https://www.cofounderslab.com/themes/basic/images/head_icons/social.png">Social Profiles</div>
                    <div class="panel-body" style="font-size: 12px;">
                        @if($member->social->Facebook != null)<div class="column"><span class="label label-info">Facebook</span><a href="{{$member->contact->Facebook}}">link</a></div>@endif
                        @if($member->contact->Twitter != null)<div class="column"><span class="label label-info">Twitter</span><a href="{{$member->contact->Twitter}}">link</a></div>@endif
                        @if($member->contact->Google != null)<div class="column"><span class="label label-info">Google</span><a href="{{$member->contact->Google}}">link</a></div>@endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="panel panel-primary" style="overflow: hidden;padding-bottom: 50px;">
                <div class="panel-heading"><h4><img src="https://www.cofounderslab.com/themes/basic/images/head_icons/looking_for.png">คุณกำลังมองหา</h4></div>
                <div class="panel-body">
                    <div class="column" style="text-align: center;">
                        <div class="inline" style="width: 60%;">
                            <div class="col-md-6">
                                <div class="column"><img src="http://job-images.com/highresolution/l_016.jpg" height="200"></div>
                                <div class="column">สามารถร่วมงานกันได้ <?php
                                    if ($member->need->TimeCommit < 40) {
                                        echo "น้อยกว่า";
                                    } else {
                                        echo "อย่างน้อย";
                                    }
                                    ?> {{$member->need->TimeCommit}} ชั่วโมงต่อสัปดาห์</div>
                            </div>
                            <div class="col-md-6">
                                <div class="column"><img src="http://claycrucible.com/wp-content/uploads/2014/03/Money-Public-Domain.png" height="200"></div>
                                <div class="column"><?php
                                    if ($member->need->Investment == 0) {
                                        echo "ไม่ต้องการเงินลงทุน";
                                    } else if ($member->need->Investment == 10000) {
                                        echo "ต้องการเงินลงทุนต่ำกว่า 10,000 บาท";
                                    } else if ($member->need->Investment == 10001) {
                                        echo "ต้องการเงินลงทุน 10,000 บาท ถึง 100,000 บาท";
                                    } else if ($member->need->Investment == 100001) {
                                        echo "ต้องการเงินลงทุน 100,000 บาท ถึง 500,000 บาท";
                                    } else if ($member->need->Investment == 500000) {
                                        echo "ต้องการเงินลงทุน 500,000 บาท ถึง 1,000,000 บาท";
                                    } else if ($member->need->Investment == 1000001) {
                                        echo "ต้องการเงินลงทุนมากกว่า 1,000,000 บาท";
                                    }
                                    ?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <h3>สถานะโปรเจคของคุณ</h3>
                    <ul class="nav nav-pills" style="display: table;margin: 0 auto;">
                        <li role="presentation" <?php
                        if ($member->profile->ProjectState == 1) {
                            echo ' class="active"';
                        }
                        ?> ><a>Idea</a></li>
                        <li role="presentation" <?php
                        if ($member->profile->ProjectState == 2) {
                            echo ' class="active"';
                        }
                        ?> ><a>Draft</a></li>
                        <li role="presentation" <?php
                        if ($member->profile->ProjectState == 3) {
                            echo ' class="active"';
                        }
                        ?> ><a>Prototype</a></li>
                        <li role="presentation" <?php
                        if ($member->profile->ProjectState == 4) {
                            echo ' class="active"';
                        }
                        ?> ><a>Tested</a></li>
                        <li role="presentation" <?php
                        if ($member->profile->ProjectState == 5) {
                            echo ' class="active"';
                        }
                        ?> ><a>Got Customer</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
@section('style')
<link href="/css/vegas.min.css" rel="stylesheet" type="text/css"/>
<style>
    h1,h2,h3,h4,h5,h6,li{margin: 0;}
</style>
@endsection
@section('script')
<script src="/js/vegas.min.js" type="text/javascript"></script>
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