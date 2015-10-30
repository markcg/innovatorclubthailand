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
                <input type="hidden" id="businessId" value="{{$business->id}}">
            </div>
            <div class="u-pull-right">
                <div class="u-pull-right"><a href="/business/profile/{{$business->id}}"><button class="btn btn-success">แสดงโปรไฟล์ธุรกิจ</button></a></div>
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
                        <div class="column" style="font-size: 15px;">
                            <div style="float:left;"><input type="text" id="name" placeholder="เพิ่มชื่อธุรกิจของคุณ" value="<?php
                                if ($business->Name != null) {
                                    echo $business->Name;
                                }
                                ?>"></div>
                            <div style="float:left;"><input type="button" value="บันทึก" id="submitName"></div>
                        </div>
                        <div class="column" style="font-size: 15px;">
                            <input type="hidden" id="defaultLocation" value="{{$business->Location}}">
                            <select class="form-control province" id="Location" required></select>
                        </div>
                        <div class="column" style="font-size: 12px;">
                            <div style="float:left;"><input type="text" name="name" placeholder="เพิ่มเว็บไซต์ของคุณ" value="<?php
                                if ($business->profile->Website != null) {
                                    echo $business->profile->Website;
                                }
                                ?>"></div>
                            <div style="float:left;"><input type="button" value="บันทึก"></div>
                        </div>
                        <div class="column">
                            <label for="exampleInputEmail2">รูปภาพ</label>
                            <input type="file" class="form-control" id="ImageUploader" onchange="readImage(this);" placeholder="รูปภาพ">
                            <input type="hidden" id="Image">
                        </div>
                        <div style="float: left;">
                            <input type="button" value="บันทึก" id="submitImage">
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
                    <textarea id="Description" style="width: 100%;">@if($business->Description != ""){{$business->Description}}@else อธิบายภาพรวมวิสัยทัศน์ของคุณ @endif
                    </textarea>
                </div>
                <div style="float:left;"><input id="submitDesc" type="button" value="บันทึก"></div>
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
                            <div class="column" style="text-align: center;"><iframe width="550" height="300"></iframe></div>
                            <div style="float:left;"><input type="text" id="Video" name="video" placeholder="เพิ่ม URL วิดีโอของคุณ" value="<?php
                                if ($business->profile->Website != null) {
                                    echo $business->profile->Video;
                                }
                                ?>"></div>
                            <div style="float:left;"><input type="button" id="submitVideo" value="บันทึก"></div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="panel panel-info">
                        <div class="panel-heading"><h4><img src="https://www.cofounderslab.com/themes/basic/images/head_icons/about.png">ช่องทางติดต่อ</h4></div>
                        <div class="panel-body">
                            <div class="column" style="text-align: left;">
                                <div class="panel panel-info">
                                    <div class="panel-body">
                                        <div class="column" id="add_contact">
                                            <input type="text" id="conName" placeholder="ระบุชื่อการติดต่อ">
                                            <input type="text" id="conContact" placeholder="ระบุการติดต่อ">
                                            <input type="button" id="submitContact" value="เพิ่ม">
                                        </div>
                                    </div>
                                    <div class="panel-body" id="contactList">
                                        <?php foreach ($business->contacts as $contact) { ?>
                                            <div class="column" >
                                                <button style="padding: 5px;" onclick="deleteContact({{$contact->id}}); deleteThis(this);">ลบ</button> {{$contact->Name}} : {{$contact->Contact}}
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
                    <form>
                        <textarea name="editor1" id="editor1" rows="10" cols="80">
                        @if($business->profile->Detail != "")
                            {{$business->profile->Detail}}
                        @else
                            @if($business->Category == 1)
                            อธิบายแนวคิด ความต้องการ หรือ การทำงานของธุรกิจคุณ
                            @else
                            อธิบายแนวติด แนวทางการลงทุนของคุณ หรือ กลุ่มที่คุณสนใจลงทุนด้วย
                            @endif
                        @endif
                        </textarea>
                    </form>
                    <div style="float:left;"><input type="button" id="submitDetail" value="บันทึก"></div>
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