@extends('layouts._layout')
@section('content')
<div class="container" style="margin-top: 50px;">
    <div class="row">
        <div class="column">
            <div style="text-align: left;">
                @if(isset($post))
                <?php echo $post; ?>
                @endif
            </div>
        </div>
    </div>
    <div class="row"></div>
    <div class="row"></div>
</div>
@endsection