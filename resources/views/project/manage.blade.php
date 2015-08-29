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
<div class="row" >
    <div class="panel panel-default table" style="margin: 0 auto;text-align: center;color: white;padding: 20px 0;background-color: grey;overflow: hidden;">
        <div class="column"><img style="height: 250px;width: 200px;background-color: white;"></div>
        <div class="column"><h2>Project</h2></div>
        <div class="column"><h4>Your project</h4></div>
    </div>
</div>
<div class="row">
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-body" style="text-align: center;">
                <div class="col-md-3"><a href="">แกไขรายละเอียด</a></div>
                <div class="col-md-3"><a href="">เพิ่มตำแหน่งงาน</a></div>
                <div class="col-md-3"><a href="">ยกเลิกโครงการ</a></div>
                <div class="col-md-3"><a href="">ลบโครงการ</a></div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-body">
                คำอธิบายโครงการ
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">ทีมงาน</div>
                    <div class="panel-body">
                        <div class="column">
                            <div class="col-md-3"><img src="" height="100" width="100"></div>
                            <div class="col-md-9">
                                <div class="column">ชื่อ: ชื่อจริง นามสกุล</div>
                                <div class="column">ตำแหน่ง: หัวหน้าทีม</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">ตำแหน่งงาน</div>
                    <div class="panel-body">
                        <div class="column">
                            <div class="col-md-4" style="text-align: center;">
                                <div class="column"><img src="" height="150" width="150"></div>
                                <div class="column"><strong>หัวหน้าฝ่ายเทคนิค</strong></div>
                                <div class="column" style="text-align: left;">ดูแลและให้คำปรึกษาด้านโครงสร้างและระบบของโครงการ</div>
                                <div class="column" style="text-align: left;"><strong>รายได้:</strong> 30k - 50k</div>
                                <div class="column" style="text-align: left;"><strong>หุ้นส่วน:</strong> 5 - 10%</div>
                            </div>
                            <div class="col-md-4" style="text-align: center;">
                                <div class="column"><img src="" height="150" width="150"></div>
                                <div class="column"><strong>หัวหน้าฝ่ายการตลาด</strong></div>
                                <div class="column" style="text-align: left;">ดูแลและให้คำปรึกษาด้านการตลาด</div>
                                <div class="column" style="text-align: left;"><strong>รายได้:</strong> 50k - 100k</div>
                                <div class="column" style="text-align: left;"><strong>หุ้นส่วน:</strong> 5 - 20%</div>
                            </div>
                            <div class="col-md-4" style="text-align: center;">
                                <div class="column"><img src="" height="150" width="150"></div>
                                <div class="column"><strong>หัวหน้าฝ่ายบุคคล</strong></div>
                                <div class="column" style="text-align: left;">ดูแลและให้คำปรึกษาด้านการบริหารทรพยากรมนุษย์</div>
                                <div class="column" style="text-align: left;"><strong>รายได้:</strong> 30k - 50k</div>
                                <div class="column" style="text-align: left;"><strong>หุ้นส่วน:</strong> 5 - 10%</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">ข้อมูลเบื้องต้น</div>
                    <div class="panel-body">
                        <div class="column">ก่อตั้งในปี: 2015</div>
                        <div class="column">สถานที่: กรุงเทพมหานครฯ</div>
                        <div class="column">ขนาดทีม: 10-20 คน</div>
                        <div class="column">สถานะโครงการ: Prototype</div>
                        <div class="column">อุตสาหกรรม: ระดมทุน การกุศล</div>
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