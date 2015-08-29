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
                <div class="col-sm-10 col-sm-offset-1">
                    <div class="page-header">
                        <h1>คุณกำลังมีโครงการอะไรอยู่ ?</h1>
                    </div>
                    <form id="new-project-form">
                        <div style="display:none;"><input id="csrf_token" name="_token" type="hidden" value="{{csrf_token()}}"></div>
                        <div class="form-group">
                            <label class="control-label required" for="name">ชื่อโครงการ *</label>
                            <p class="char-counter hide" title="Letters you have left">40</p><input class="input-lg form-control" id="name" minlength="-1" name="name" type="text" value="" data-maxlength="40">
                            <p class="help-block">ชื่อโครงการ หรือ ไอเดียของคุณที่คุณกำลังจะทำหรือกำลังทำอยู่</p>
                        </div>
                        <div class="form-group">
                            <label class="control-label required" for="pitch">คอนเซปสำคัญของโครงการ *</label>
                            <p class="char-counter hide" title="Letters you have left">120</p><input class="form-control" id="pitch" minlength="-1" name="pitch" type="text" value="" data-maxlength="120">
                            <p class="help-block">อธิบายสั้นๆ ด้วยคีย์เวิร์ด เกี่ยวกับโครงการของคุณ เช่น "Facebook สำหรับนักลงทุน"</p>
                        </div>
                        <div class="form-group">
                            <label class="control-label required" for="description">อธิบายไอเดียของคุณ *</label>
                            <textarea class="form-control" id="description" name="description" rows="20" data-gramm="" data-txt_gramm_id="907bf47a-902b-f7bc-0271-36b646e0c34d" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 414px;"></textarea>
                            <p class="help-block">สินค้าหรือบริการคืออะไร คุณต้องการสร้างขึ้นมาเพื่อแก้ใครอะไร และ กลุ่มเป้าหมายของคุณคือใคร</p>
                        </div>
                        <div class="row form-group">
                            <div class="col-xs-10">
                                <div class="form-group">
                                    <label class="control-label" for="logo">โลโก้ หรือ ตราสัญลักษณ์ของโครงการ</label> 
                                    <input class="form-control" id="logo" name="logo" type="file">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label" for="founding_year">ปีที่ก่อตั้ง</label> 
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                        <input class="form-control" id="founding_year" name="founding_year" placeholder="2015" type="text" value="">
                                    </div>
                                    <p class="help-block">บันทึกเป็น คริสต์ศักราช</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label required" for="location">สถานที่ *</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="fa fa-map-marker"></span></span>
                                        <input class="form-control" id="location" name="location" type="text" value="">
                                    </div>
                                    <p class="help-block">ระบุด้วยที่อยู่เช่น กรุงเทพมหานคร พญาไท</p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label required" for="size">ขนาดทีมของคุณ *</label>
                                    <select class="selectize-activate selectized" id="size" name="size" tabindex="-1">
                                        <option value="1" selected="selected">1</option>
                                        <option value="5" selected="selected">1 - 5</option>
                                        <option value="10" selected="selected">5 - 10</option>
                                        <option value="20" selected="selected">10 - 20</option>
                                        <option value="21" selected="selected">มากกว่า 20</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label class="control-label required" for="status">สถานะโครงการของคุณ *</label>
                                    <select class="selectize-activate selectized" id="status" name="status" tabindex="-1">
                                        <option value="idea" selected="selected">Idea</option>
                                        <option value="idea" selected="selected">Draft</option>
                                        <option value="idea" selected="selected">Prototype</option>
                                        <option value="idea" selected="selected">Tested</option>
                                        <option value="idea" selected="selected">Got Customer</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label required" for="industries">กลุ่มตลาด *</label>
                            <select class="selectize-activate-new-entries selectized" id="industries" multiple="multiple" name="industries" tabindex="-1">

                            </select>
                            <p class="help-block">กลุ่มตลาดหรืออุตสาหกรรมที่โครงการคุณเกี่ยวเนื่องด้วย</p>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="url">เว็บไซต์ของโครงการ</label> 
                            <div class="input-group">
                                <span class="input-group-addon"><span class="fa fa-globe"></span></span>
                                <input class="form-control" id="url" name="url" placeholder="https://www.your_product.ch" type="url" value="">
                            </div>
                            <p class="help-block">เว็บไซต์โปรเจคของคุณถ้าหากคุณมีอยู่แล้ว</p>
                        </div>
                    </form>
                    <a href="/project/job"><button class="btn btn-success">Submit</button></a>
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