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
            <div class="u-pull-left">
                @if($business->Category == 1)
                Start Up
                @elseif($business->Category == 2)
                Investor
                @else
                Business Profile
                @endif
            </div>
            <div class="u-pull-right">
                <div class="u-pull-right"><a><button class="btn btn-success">แสดงโปรไฟล์ธุรกิจ</button></a></div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="container-fluid">
        <div class="row panel panel-info">
            <div class="container" style="text-align: center;" >
                <div class="panel-body">
                    <div class="col-md-4"><img src="" height="200" width="300"></div>
                    <div class="col-md-5" style="text-align: left;">
                        <div class="column" style="font-size: 20px;">ชื่อธุรกิจของคุณ</div>
                        <div class="column" style="font-size: 15px;">จังหวัด</div>
                        <div class="column" style="font-size: 15px;">รายละเอียด</div>
                        <div class="column" style="font-size: 12px;"><a>เพิ่มเว็บไซต์</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading"><img src="https://www.cofounderslab.com/themes/basic/images/head_icons/experience.png">ภาพรวมธุรกิจของคุณ</div>
            <div class="panel-body" style="font-size: 20px;">

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

                    <div class="panel panel-primary">
                        <div class="panel-heading">วิดีโอธุรกิจ</div>
                        <div class="panel-body">
                            <div class="column" style="text-align: center;"><iframe width="550" height="300"></iframe></div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading"><h4><img src="https://www.cofounderslab.com/themes/basic/images/head_icons/about.png">ช่องทางติดต่อ</h4></div>
                        <div class="panel-body">
                            <div class="column" style="text-align: left;">
                                <div class="panel panel-primary">
                                    <div class="panel-body">
                                        <div class="column" ></div>
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
        <div class="panel panel-primary">
            <div class="panel-heading"><h4>ข้อมูลโดยละเอียด</h4></div>
            <div class="panel-body">
                <div class="column" style="text-align: left;">
                    <form>
                        <textarea name="editor1" id="editor1" rows="10" cols="80">
                        @if($business->Category == 1)
                        อธิบายแนวคิด ความต้องการ การทำงานของธุรกิจคุณ
                        @else
                        อธิบายแนวติด แนวทางการลงทุนของคุณ กลุ่มที่คุณสนใจลงทุนด้วย
                        @endif
                        </textarea>
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
<style>
    h1,h2,h3,h4,h5,h6,li{margin: 0;}
</style>
@endsection
@section('script')
<script src="/js/vegas.min.js" type="text/javascript"></script>
<script src="/js/ckeditor/ckeditor.js" type="text/javascript"></script>
<script>
    $(function () {
        CKEDITOR.replace('editor1');
        $("body").vegas({
            slides: [
                {src: "/image/landing/slides/3.jpg"},
            ],
            overlay: false
        });
        $('#succes-story').carousel({
//interval: 2000,
            pause: "hover",
            wrap: true,
        });
    })

</script>
@endsection