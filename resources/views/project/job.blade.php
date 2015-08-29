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
<div class="row panel panel-default">
    <div class="wrapper main-wrapper panel-body" id="app">
        <div class="container">
            <div class="row">

                <div class="col-sm-3">
                    <div class="card project-card">
                        <a href="/project/3311">
                            <div class="img-rounded" alt="Shardea">
                                <img height="200" width="150">
                            </div>
                            <h3>Project</h3>
                            <div class="project-card-description">
                                <p>Change the World</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-9">
                    <div class="page-header">
                        <h1>ตำแหน่งงานที่เปิดรับ</h1>
                    </div>

                    <p class="lead" style="margin: 40px 0">
                        สร้างตำแหน่งงานเพื่อค้นหากลุ่มคนที่คุณสนใจให้เข้าร่วม
                    </p>

                    <form class="form" method="POST">
                        <div style="display:none;"><input id="csrf_token" name="_token" type="hidden" value="{{csrf_token()}}"><input id="lat" name="lat" type="hidden" value=""><input id="lon" name="lon" type="hidden" value=""></div>
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label class="control-label required" for="name">ชื่อตำแหน่งงาน *</label>
                                    <p class="char-counter hide" title="Letters you have left">50</p>
                                    <input class="form-control" id="name" minlength="-1" name="name" placeholder="e.g. Technical Cofounder, CTO, Junior UX Designer, Software Engineer" type="text" value="" data-maxlength="50">
                                    <p class="help-block">สั้น และ กระชับ สื่อถึงงานที่ต้องทำชัดเจน</p>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <label class="control-label required" for="job_position">มีตำแหน่งเป็น</label>
                                    <select class="selectize-activate selectized" id="job_position" name="job_position" tabindex="-1">
                                        <option value="1" selected="selected">Cofounder</option>
                                        <option value="1" selected="selected">Full-Time</option>
                                        <option value="1" selected="selected">Part-Time</option>
                                        <option value="1" selected="selected">Internship</option>
                                        <option value="1" selected="selected">Freelance</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label required" for="description">รายละเอียดงาน *</label>
                            <textarea class="form-control" id="description" name="description" rows="15" data-gramm="" data-txt_gramm_id="6f93516d-e988-9ed6-0433-eb9d2c9d5a48" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 314px;"></textarea>
                            <p class="help-block">อธิบายขอบเขตงาน สิ่งที่ต้องทำ สิ่งที่คาดหวังจากตำแหน่งงานนี้</p>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="form-group">
                                    <label class="control-label required" for="location">สถานที่ทำงาน *</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
                                        <input class="form-control" id="location" name="location" type="text" value="">
                                    </div>
                                </div>
                                <input class="form-control" id="lat" name="lat" placeholder="Lat" type="hidden" value="">
                                <input class="form-control" id="lon" name="lon" placeholder="Lon" type="hidden" value="">
                                <div class="form-group hidden">
                                    <label class="control-label" for="city">เมือง</label> 
                                    <input class="form-control" id="city" name="city" type="text" value="">
                                </div>
                                <div class="form-group hidden">
                                    <label class="control-label" for="country">ประเทศ</label> 
                                    <input class="form-control" id="country" name="country" type="text" value="">
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <div class="form-group">
                                    <label> </label>
                                    <div class="checkbox">
                                        <label>
                                            <input id="remote_ok" name="remote_ok" type="checkbox" value="y"> อนุญาติให้ทำงานนอกสถานที่
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="salary_range_from">เงินเดือนเริ่มต้นที่</label> 
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-money"></span></span>
                                        <input class="form-control" id="salary_range_from" name="salary_range_from" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="salary_range_to">ถึง:</label> 
                                    <input class="form-control" id="salary_range_to" name="salary_range_to" type="text" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="equity_range_from">หุ้นส่วนเริ่มต้นที่(หน่วย %)</label> 
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-pie-chart"></span></span>
                                        <input class="form-control" id="equity_range_from" name="equity_range_from" type="text" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <div class="form-group">
                                    <label class="control-label" for="equity_range_to">ถึง:</label> 
                                    <input class="form-control" id="equity_range_to" name="equity_range_to" type="text" value="">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="department">ฝ่าย</label> 
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-building"></span></span>
                                <select class="selectize-activate selectized" id="department" name="department" tabindex="-1">
                                    <option value="1" selected="selected">บุคคล</option>
                                    <option value="1" selected="selected">การตลาด</option>
                                    <option value="1" selected="selected">วิจัยและพัฒนา</option>
                                    <option value="1" selected="selected">เทคนิค</option>
                                    <option value="1" selected="selected">ประชาสัมพันธ์</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="necessary_skills">ความสามารถที่ต้องมี</label> 
                            <select class="selectize-activate-new-entries selectized" id="necessary_skills" multiple="multiple" name="necessary_skills" tabindex="-1" >
                                <option value="1" selected="selected">C#</option>
                                <option value="1" selected="selected">PHP</option>
                                <option value="1" selected="selected">3D</option>
                                <option value="1" selected="selected">3DModeling</option>
                                <option value="1" selected="selected">ประชาสัมพันธ์</option>
                            </select>
                        </div>
                    </form>
                    <a href="/project/manage"><button class="btn btn-success">Submit</button></a>
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