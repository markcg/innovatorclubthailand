@extends('layouts._mobile_layout')
@section('content')
<div class="row" style="margin-top: 100px;">
    <div class="container" style="text-align: center;" >
        <div class="column" style="color: white;"><h1>ลงชื่อเข้าใช้</h1></div>
        <div class="column" id="status"></div>
        <form id="login">
            <input type="hidden" id="token" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="column">
                <input type="email" id="email" name="Email" placeholder="E-Mail">
            </div>
            <div class="column">
                <input type="password" id="password" name="Password" placeholder="Password">
            </div>
            <div class="column">
                <input class="btn btn-success" id="submit" value="ลงชื่อเข้าใช้">
            </div>
        </form>
    </div>
</div>
@endsection
@section('style')
<link href="/css/vegas.min.css" rel="stylesheet" type="text/css"/>
@endsection
@section('script')
<script src="/js/vegas.min.js" type="text/javascript"></script>
<script src="/js/system/memberSystem.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        memberSystem.login("#login");
    });
</script>
<script>
    $("body").vegas({
        slides: [
            {src: "/image/landing/slides/2.jpg"},
        ],
        overlay: false
    });
    $('#succes-story').carousel({
        //interval: 2000,
        pause: "hover",
        wrap: true,
    });
</script>
@endsection