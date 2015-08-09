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
        <div class="row" style="text-align: center; margin-top: 50px;">
            <div class="" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
                <div class="inline" style="margin-top: 80px;">
                    <iframe width="720" height="480" src="https://www.youtube.com/embed/Q4EzYAB8Q4A" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="row" style="text-align: center;">
            <div class="" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
                <div class="inline" style="margin-top: 80px;">
                    <div ><img height="600" src="/image/landing/how-to/how-to.jpg"alt=""/></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row landing-component  hidden-animation landing-gradient" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
    <div class="row landing-texture">
        <div class="column">
            <div style="text-align: center;margin-top: 50px;">
                <span><h1 style="color: white;">บริกรอื่นๆ ใน Innovator Club Thailand</h1></span>
            </div>
        </div>
        <div class="row" style="text-align: center; margin-bottom: 50px;color: white;">
            <div class="three columns">
                <div class="column"><img height="200" width="200" style="background-color: white" src="/image/landing/service/service-1.jpg"></div>
                <div class="column"><h3>โต๊ะตกพลึก</h3></div>
                <div class="column max-john font-small">

                </div>
            </div>
            <div class="three columns">
                <div class="column"><img height="200" width="200" style="background-color: white" src="/image/landing/service/service-2.jpg"></div>
                <div class="column"><h3>บมเพาะ/ปรึกษา</h3></div>
                <div class="column max-john font-small">

                </div>
            </div>
            <div class="three columns">
                <div class="column"><img height="200" width="200" style="background-color: white" src="/image/landing/service/service-3.jpg"></div>
                <div class="column"><h3>จด IP</h3></div>
                <div class="column max-john font-small">

                </div>
            </div>
            <div class="three columns">
                <div class="column"><img height="200" width="200" style="background-color: white" src="/image/landing/service/service-4.jpg"></div>
                <div class="column"><h3>หาทุน</h3></div>
                <div class="column max-john font-small">

                </div>
            </div>
        </div>
    </div>
</div>
<div class="row landing-component">
    <div class="row hidden-animation" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
        <div class="column">
            <div style="text-align: center;margin-top: 50px;">
                <span><h1>โปรเจคล่าสุดใน Innovator Club Thailand</h1></span>
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
<div class="row landing-component">
    <div class="row hidden-animation" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
        <div class="column">
            <div style="text-align: center;margin-top: 50px;">
                <span><h1>Success Story</h1></span>
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
<div class="row landing-component hidden-animation" style="background-color: #e5e5e5;text-align: center;" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
    <div class="row landing-texture">
        <div class="container landing-component" style="padding: 50px 0;" >
            <div class="column"><h1>เราคือใคร</h1></div>
            <div class="row">
                <div class="six columns"><img width="200" height="250"></div>
                <div class="six columns" style="text-align: left;">
                    <div style="padding: 0 10px;">
                        พวกเราคือศิษย์เก่าของ มหาวิทยาลัยจุฬาฯ, มหิดล, RMIT, UCL
                        พวกเรามีความเชื่อว่าความคิดสร้างสรรค์ ไม่จำเป็นต้องหยุดอยู่แค่ในกระดาษ หรือแค่ส่งการบ้านให้อาจารย์
                        หลังจากที่ค้นพบปัญหา พวกเรามีโอกาสทำงานใกล้ชิดกับสถาบัน CDIP ซึ่งเป็นผู้เชี่ยวชาญทางด้าน research
                        ,จด IP เเละ ได้รับการสนับสนุนจาก NSTDA, THAIBISPA, Thai Science Park, Software Park 
                        และสถาบันอื่นๆอีกมากมาย ที่พร้อมจะเปลี่ยนความคิดของคุณให้เป็นความจริงได้
                    </div>
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