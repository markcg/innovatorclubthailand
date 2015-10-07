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
        <div style="text-align: left;font-size: 80px; color: white;">Profile</div>
        <div class="container-fluid">
            <div class="row panel panel-info">
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