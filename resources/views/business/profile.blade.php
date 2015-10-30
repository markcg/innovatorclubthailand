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
        <div style="text-align: left;font-size: 80px; color: Black;overflow: hidden;">
            <div class="u-pull-left">
                {{$business->Name}}
                <input type="hidden" id="businessId" value="{{$business->id}}">
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="container">
        <div class="column" id="status" style="text-align: center;"></div>
    </div>
</div>
<div class="row">
    <div class="container-fluid">
        <div class="row panel panel-info">
            <div class="container" style="text-align: center;" >
                <div class="panel-body">
                    <div class="col-md-4">
                        <div><img id="displayImage" src="{{$business->profile->Image}}" height="200" width="300"></div>
                    </div>
                    <div class="col-md-5" style="text-align: left;">
                        <div class="column" style="font-size: 22px;">
                            <div style="float:left;">
                                <?php
                                if ($business->Name != null) {
                                    echo $business->Name;
                                }
                                ?>
                            </div>
                        </div>
                        <div class="column" style="font-size: 15px;">
                            @if($business->Location != null)
                            {{Province::find($business->Location)->PROVINCE_NAME}}
                            @endif
                        </div>
                        <div class="column" style="font-size: 12px;">
                            <div style="float:left;"><a href="<?php
                                if ($business->profile->Website != null) {
                                    echo $business->profile->Website;
                                }
                                ?>"> เข้าสู่เว็บไซต์</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="container">
        <div class="panel panel-info">
            <div class="panel-heading"><img src="https://www.cofounderslab.com/themes/basic/images/head_icons/experience.png">ภาพรวมธุรกิจของคุณ</div>
            <div class="panel-body" style="font-size: 20px;">
                <div>
                    @if($business->Description != ""){{$business->Description}}@else อธิบายภาพรวมวิสัยทัศน์ของคุณ @endif
                </div>
            </div>
        </div>
    </div>
</div>
@if($business->Category == 1)
<div class="row">
    <div class="container">
        <div class="row" style="text-align: center;" >
            <div class="panel-body">
                <div class="col-md-8" style="text-align: left;">

                    <div class="panel panel-info">
                        <div class="panel-heading">วิดีโอธุรกิจ</div>
                        <div class="panel-body">
                            <div class="column" style="text-align: center;">{{$business->profile->Video}}</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="panel panel-info">
                        <div class="panel-heading"><h4><img src="https://www.cofounderslab.com/themes/basic/images/head_icons/about.png">ช่องทางติดต่อ</h4></div>
                        <div class="panel-body">
                            <div class="column" style="text-align: left;">
                                <div class="panel panel-info">
                                    <div class="panel-body" id="contactList">
                                        <?php foreach ($business->contacts as $contact) { ?>
                                            <div class="column" >
                                                {{$contact->Name}} : {{$contact->Contact}}
                                            </div>
                                        <?php } ?>
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
@endif
<div class="row">
    <div class="container" style="text-align: center;" >
        <div class="panel panel-info">
            <div class="panel-heading"><h4>ข้อมูลโดยละเอียด</h4></div>
            <div class="panel-body">
                <div class="column" style="text-align: left;">
                    <?php echo $business->profile->Detail ?>
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
<script src="/js/ckeditor/ckeditor.js" type="text/javascript"></script>
<script src="/js/system/listSystem.js" type="text/javascript"></script>
<script src="/js/system/business/businessSystem.js" type="text/javascript"></script>
<script>
$(function () {
    listSystem.provinceList("#Location", $('#defaultLocation').val());
    businessSystem.initialize();
    CKEDITOR.replace('editor1');
    $("body").vegas({
        slides: [
        ],
        overlay: false
    });
    $('#succes-story').carousel({
        //interval: 2000,
        pause: "hover",
        wrap: true,
    });
});

</script>
@endsection