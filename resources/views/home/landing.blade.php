@extends('layouts._layout')
@section('content')
<link href="/css/gradient.css" rel="stylesheet" type="text/css"/>
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
            <div class="four columns" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
                <div class="column"><img height="200" width="200"></div>
                <div class="column"><h3>สร้างโปรเจค</h3></div>
                <div class="column max-john font-small">
                    เพียงขั้นตอนง่ายๆ 
                    <br>นำเสนอรายละเอียดของโปรเจคคุณ 
                    แสดงวิสัยทัศน์และเป้าหมายของโปรเจค
                </div>
            </div>
            <div class="four columns" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
                <div class="column"><img height="200" width="200"></div>
                <div class="column"><h3>แสดงผลงาน</h3></div>
                <div class="column max-john font-small">
                    แสดงผลงานผ่านเว็บไซต์ของเรา ร่วมแชร์และแลกเปลี่ยนความคิดเห็นกันในกลุ่มนักประดิษฐ์ และ นักพัฒนา
                </div>
            </div>
            <div class="four columns" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
                <div class="column"><img height="200" width="200"></div>
                <div class="column"><h3>เริ่มต้นลงทุน</h3></div>
                <div class="column max-john font-small">
                    นักลงทุนจากทั่วทุกมุมโลก พร้อมที่จะลงทุนกับคุณ 
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row landing-component landing-gradient">
    <div class="row landing-texture">
        <div class="container landing-component" >
            <div style="text-align: center; padding-top: 100px;color: white;">
                <h1 class="quote">"Don’t wait for something big to occur. Start where you are, 
                    with what you have, and that will always lead you 
                    into something greater." - Mary Manin Morrissey</h1>
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
<div class="row landing-component hidden-animation" style="background-color: #e5e5e5;text-align: center;" data-anijs="if: scroll, on: window, do: fadeInUp hinged animated, before: $scrollReveal">
    <div class="row landing-texture">
        <div class="container landing-component" style="padding: 50px 0;" >
            <div class="column"><h1>ผู้ร่วมก่อตั้ง</h1></div>
            <div class="row">
                <div class="six columns"><img width="200" height="250"></div>
                <div class="six columns" style="text-align: left;">
                    ประวัตืผู้ร่วมก่อตั้ง
                </div>
            </div>
        </div>
    </div>
</div>
@endsection