@extends('layouts.home')
@section('content')
@if (Auth::user())
<div style="padding-top:100px;">
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Pass test </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>
    <div class="container">
        <div class="alert alert-danger" role="alert">
           REMARQUE : this test helps you to check if you are a diabetic or not but this test does replace the role of medcin
        </div>
    <div>
        <form action="save_val" method="POST">
            {{ csrf_field() }}
        <ul>
            @foreach($test as $key=>$k)
                <li>
                    <div class="form-check ml-5 mt-2">
                        <input class="form-check-input" type="checkbox" value="{{  $k->score }}" id={{  ++$key }}>
                        <label class="form-check-label" for="defaultCheck1">
                            {{  $k->question }}
                        </label>
                    </div>
                </li>
            @endforeach

        </ul>
        <input type="number" name="etreDiabetique" hidden value="" id="tota" />

            <button type="submit" class="btn btn-primary ml-5 mt-5 mb-5" style="width:50%" onclick="
            var tot=0;
            var i=0;
                for ( i = 1; i <= {{ $count }}; i++) {
                    if (document.getElementById(i).checked) {
                     tot=tot+parseInt(document.getElementById(i).value);

                    }
                }
                console.log(tot);
                document.getElementById('tota').value=tot;
                "

            >Submit</button>

    </form>

    </div>

    </div>



@else


    <div style="padding-top:100px;">
        <section class="breadcrumb_part breadcrumb_bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcrumb_iner">
                            <div class="breadcrumb_iner_item">
                                <h2>Pass test</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div style="margin-top:-100px;">
        <section class="banner_part">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-xl-5">
                        <div class="banner_text">
                            <div class="banner_text_iner">
                                <h5>We are here for your care</h5>
                                <h1>Notice </h1>
                                <p>to pass a test you must first register and fill in the form because each give entered it has a coefficient </p>
                                    <a href="/login" class="btn_2">login </a>
                                    <a href="/register" class="btn_2">register now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="banner_img">
                            <img src="image/icon/warning_authentification.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        </div>
    </div>
@endif
@endsection
