@extends('layouts._mobile_layout')
@section('content')
<link href="/css/gradient.css" rel="stylesheet" type="text/css"/>
<link href="/css/vegas.min.css" rel="stylesheet" type="text/css"/>
<script src="/js/vegas.min.js" type="text/javascript"></script>
<style>.header-menu{background-color: rgba(44, 103, 0, 0.4);}</style>
<div class="row sign-up-area">
    <div class="container" style="text-align: center;">
        <div class="column title header" style="margin-top: 80px;">สนใจค้นหานักลงทุน</div>
        <div class="column"><h3>ไอเดียของคุณจะไม่สูญเปล่าอีกต่อไป</h3></div>
        <div class="column"><strong>ลงชื่อ</strong></div>
        <form action="subcribe" method="POST">
            <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            <div class="column"><input type="email" name="email" placeholder="E-Mail"></div>
            <div class="column"><button>Sign Up</button></div>
        </form>
    </div>
</div>
<div class="container" style="margin-top: 50px;">
    <div class="row landing-component">
        <div class="column">
            <div style="text-align: center;">
                <span><h1>อย่าหยุดไว้เพียงแค่ไอเดีย</h1></span>
            </div>
        </div>
        <div class="row" style="text-align: center;">
            <div class="column" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
                <div class="inline circle how-to-case">
                    <div class="how-to">ไอเดีย โดย คุณ</div>
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center; margin-top: 50px;">
            <div class="six columns" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
                <div class="inline circle how-to-case">
                    <div class="how-to">สร้างโปรเจค</div>
                </div>
            </div>
            <div class="six columns" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
                <div class="inline circle how-to-case">
                    <div class="how-to">นักลงทุน และ นักวิจัย</div>
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center; margin-top: 50px;">
            <div class="six columns" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
                <div class="inline circle how-to-case">
                    <div class="how-to">เผยแพร่</div>
                </div>
            </div>
            <div class="six columns" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
                <div class="inline circle how-to-case">
                    <div class="how-to">ค้นหาโปรเจคที่สนใจ</div>
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center;">
            <div class="column" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
                <div class="inline circle how-to-case">
                    <div class="how-to">จับคู่โปรเจค และ นักลงทุน เพื่อต่อยอด</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row landing-component">
    <div class="row hidden-animation" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
        <div class="column">
            <div style="text-align: center;margin-top: 50px;">
                <span><h1>โปรเจคล่าสุดใน Innovator Thailand</h1></span>
            </div>
        </div>
        <div class="row" style="text-align: center; margin-bottom: 50px;">
            <div class="three inline mobile-showcase">
                <div class="column"><img height="200" width="200" style="background-color: white"></div>
                <div class="column"><h3>โปรเจค</h3></div>
                <div class="column max-john font-small">
                    โปรเจคที่ร่วมหานักลงทุนกับเรา
                </div>
            </div>
            <div class="three inline mobile-showcase">
                <div class="column"><img height="200" width="200" style="background-color: white"></div>
                <div class="column"><h3>โปรเจค</h3></div>
                <div class="column max-john font-small">
                    โปรเจคที่ร่วมหานักลงทุนกับเรา
                </div>
            </div>
            <div class="three inline mobile-showcase">
                <div class="column"><img height="200" width="200" style="background-color: white"></div>
                <div class="column"><h3>โปรเจค</h3></div>
                <div class="column max-john font-small">
                    โปรเจคที่ร่วมหานักลงทุนกับเรา
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row landing-component">
    <div class="row hidden-animation" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
        <div class="column">
            <div style="text-align: center;margin-top: 50px;">
                <span><h1>โปรเจคใน Innovator Thailand</h1></span>
            </div>
        </div>
        <div class="row" style="text-align: center; margin-bottom: 50px;">
            <div class="three columns">
                <div class="column"><img height="200" width="200" style="background-color: white"></div>
                <div class="column"><h3>โปรเจค</h3></div>
                <div class="column max-john font-small">
                    โปรเจคที่ร่วมหานักลงทุนกับเรา
                </div>
            </div>
            <div class="three columns">
                <div class="column"><img height="200" width="200" style="background-color: white"></div>
                <div class="column"><h3>โปรเจค</h3></div>
                <div class="column max-john font-small">
                    โปรเจคที่ร่วมหานักลงทุนกับเรา
                </div>
            </div>
            <div class="three columns">
                <div class="column"><img height="200" width="200" style="background-color: white"></div>
                <div class="column"><h3>โปรเจค</h3></div>
                <div class="column max-john font-small">
                    โปรเจคที่ร่วมหานักลงทุนกับเรา
                </div>
            </div>
            <div class="three columns">
                <div class="column"><img height="200" width="200" style="background-color: white"></div>
                <div class="column"><h3>โปรเจค</h3></div>
                <div class="column max-john font-small">
                    โปรเจคที่ร่วมหานักลงทุนกับเรา
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center; margin-bottom: 50px;">
            <div class="three columns">
                <div class="column"><img height="200" width="200" style="background-color: white"></div>
                <div class="column"><h3>โปรเจค</h3></div>
                <div class="column max-john font-small">
                    โปรเจคที่ร่วมหานักลงทุนกับเรา
                </div>
            </div>
            <div class="three columns">
                <div class="column"><img height="200" width="200" style="background-color: white"></div>
                <div class="column"><h3>โปรเจค</h3></div>
                <div class="column max-john font-small">
                    โปรเจคที่ร่วมหานักลงทุนกับเรา
                </div>
            </div>
            <div class="three columns">
                <div class="column"><img height="200" width="200" style="background-color: white"></div>
                <div class="column"><h3>โปรเจค</h3></div>
                <div class="column max-john font-small">
                    โปรเจคที่ร่วมหานักลงทุนกับเรา
                </div>
            </div>
            <div class="three columns">
                <div class="column"><img height="200" width="200" style="background-color: white"></div>
                <div class="column"><h3>โปรเจค</h3></div>
                <div class="column max-john font-small">
                    โปรเจคที่ร่วมหานักลงทุนกับเรา
                </div>
            </div>
        </div>
    </div>
</div>
<div id="background-slider">

</div>
<script>
    $("#background-slider").vegas({
        slides: [
            {src: "/image/landing/slides/1.jpg"},
            {src: "/image/landing/slides/2.jpg"},
            {src: "/image/landing/slides/3.jpg"},
        ],
        overlay: true
    });
</script>
@endsection