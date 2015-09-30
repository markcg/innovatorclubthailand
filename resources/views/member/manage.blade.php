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
        <div style="text-align: left;font-size: 80px; color: black;overflow: hidden;">
            <div class="u-pull-left">Profile</div>
            <!--            <div class="u-pull-right">
                            <div class="u-pull-right"><a href="/member/profile/{{$member->id}}"><button class="btn btn-success">แสดงโปรไฟล์</button></a></div>
                            <div class="u-pull-right"><a href="/project/manage"><button class="btn btn-success">จัดการโปรเจค</button></a></div>
                        </div>-->
        </div>
    </div>
</div>
<div class="row">
    <div class="container-fluid">
        <div class="row panel panel-info">
            <div class="container" style="text-align: center;" >
                <div class="panel-body">
                    <div class="col-md-3"><img src="{{$member->profile->Image}}" height="200" width="150"></div>
                    <div class="col-md-5" style="text-align: left;">
                        <div class="column" style="font-size: 20px;">{{$member->profile->Firstname}} {{$member->profile->Middle}} {{$member->profile->Lastname}} | {{Province::find($member->profile->Location)->PROVINCE_NAME}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="container" style="text-align: center;" >
        <div class="panel panel-primary">
            <div class="panel-heading"><h4><img src="https://www.cofounderslab.com/themes/basic/images/head_icons/about.png">เกี่ยวกับฉัน</h4></div>
            <div class="panel-body">
                <div class="column" style="text-align: left;">
                    <div class="panel panel-primary">
                        <div class="panel-body">
                            <div class="column" >{{$member->profile->About}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-primary">
            <div class="panel-heading"><h4><img src="https://www.cofounderslab.com/themes/basic/images/head_icons/experience.png">ธุรกิจของฉัน</h4></div>
            <div class="panel-body">
                <div class="column" style="text-align: left;">
                    <div style="text-align: center;">
                        <div class="col-md-6 panel panel-primary">
                            <div class="panel-body">
                                <div class="column" >
                                    @if(empty($startup)|| is_null($startup))
                                    <div>คุณเป็นเจ้าของกิจการรุ่นใหม่</div>
                                    <div class="h1">Start-Up!</div>
                                    <button class="btn btn-info" onclick="createBusiness({{Session::get('MemberId')}}, 1)">สร้างโปรไฟล์</button>
                                    @else
                                    <div class="h1">Start-Up Profile</div>
                                    <a href="/business/manage/{{$startup->id}}"><button class="btn btn-info">ดูโปรไฟล์ของคุณ</button></a>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 panel panel-primary">
                            <div class="panel-body">
                                <div class="column" >
                                    @if(empty($investor) || is_null($investor))
                                    <div>นักลงทุนพร้อมลงทุนกับธุรกิจ</div>
                                    <div class="h1">Investor!</div>
                                    <button class="btn btn-info" onclick="createBusiness({{Session::get('MemberId')}}, 2)">สร้างพอร์ตฟอลิโอ้</button>
                                    @else
                                    <div class="h1">Investor Profile</div>
                                    <a href="/business/manage/{{$investor->id}}"><button class="btn btn-info">ดูพอร์ตโฟลิโอของคุณ</button></a>
                                    @endif
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
<style>
    h1,h2,h3,h4,h5,h6,li{margin: 0;}
</style>
@endsection
@section('script')
<script src="/js/vegas.min.js" type="text/javascript"></script>
<script src="/js/system/business/businessSystem.js" type="text/javascript"></script>
@endsection
