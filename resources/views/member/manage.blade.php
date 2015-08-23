@extends('layouts._mobile_layout')
@section('content')
<div class="row" style="margin-top: 100px;">
    <div class="container" >
        Profile
    </div>
</div>
@endsection
@section('style')
<link href="/css/vegas.min.css" rel="stylesheet" type="text/css"/>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<link href="/js/rating/jquery.rateyo.min.css" rel="stylesheet" type="text/css"/>
<style>

</style>
@endsection
@section('script')
<script src="/js/jqueryUI/jquery-ui.min.js" type="text/javascript"></script>
<script src="/js/system/listSystem.js" type="text/javascript"></script>
<script src="/js/system/memberSystem.js" type="text/javascript"></script>
<script src="/js/rating/jquery.rateyo.min.js" type="text/javascript"></script>
<script src="/js/vegas.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function () {
        listSystem.memberGroupList(".memberGroup");
        listSystem.memberRoleList(".memberRole");
        listSystem.projectStateList(".projectState");
        listSystem.industryList(".industry");
        listSystem.provinceList("#province");

        $(function () {
            $(".rate").rateYo({
                numStars: 5,
                rating: 0,
                fullStar: true
            });
        });
    });
</script>
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