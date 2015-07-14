@extends('layouts._layout')
@section('content')
<div class="row sign-up-area">
    <div class="container" style="text-align: center;">
        <div class="column title header" style="margin-top: 80px;">สนใจค้นหานักลงทุน</div>
        <div class="column"><h3>ไอเดียของคุณจะไม่สูญเปล่าอีกต่อไป</h3></div>
        <div class="column"><strong>ลงชื่อ</strong></div>
        <div class="column"><input type="email" placeholder="E-Mail"></div>
        <div class="column"><button>Sign Up</button></div>
    </div>
</div>
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="column">
            <div style="text-align: center;">
                <span><h1>อย่าหยุดไว้เพียงแค่ไอเดีย</h1></span>
            </div>
        </div>
        <div class="row" style="text-align: center;">
            <div class="four columns" data-anijs="if: scroll, on: window, do: slideInUp animated, before: $scrollReveal">
                <div class="column"><img height="200" width="200"></div>
                <div class="column"><h3>สร้างโปรเจค</h3></div>
                <div class="column max-john">
                    เพียงขั้นตอนง่ายๆ 
                    <br>นำเสนอรายละเอียดของโปรเจคคุณ 
                    แสดงวิสัยทัศน์และเป้าหมายของโปรเจค
                </div>
            </div>
            <div class="four columns" data-anijs="if: scroll, on: window, do: slideInUp animated, before: $scrollReveal">
                <div class="column"><img height="200" width="200"></div>
                <div class="column"><h3>แสดงผลงาน</h3></div>
                <div class="column max-john">
                    แสดงผลงานผ่านเว็บไซต์ของเรา ร่วมแชร์และแลกเปลี่ยนความคิดเห็นกันในกลุ่มนักประดิษฐ์ และ นักพัฒนา
                </div>
            </div>
            <div class="four columns" data-anijs="if: scroll, on: window, do: slideInUp animated, before: $scrollReveal">
                <div class="column"><img height="200" width="200"></div>
                <div class="column"><h3>เริ่มต้นลงทุน</h3></div>
                <div class="column max-john">
                    นักลงทุนจากทั่วทุกมุมโลก พร้อมที่จะลงทุนกับคุณ 
                </div>
            </div>
        </div>
    </div>
    <div class="row"></div>
    <div class="row"></div>
</div>
@endsection