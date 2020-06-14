@extends('layouts.home')
@section('content')
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-xl-5">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>Your life mater</h5>
                        <h1>Add mesure  </h1>
                        <br>
                        <form action="/add" method="POST">
            {{ csrf_field() }}
                            <input type="text" value={{ Auth::user()->id }} name="user" hidden>
                            <div class="input-group-icon mt-10">
                                <div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
                                <label for="value" class=" col-form-label">Date and time</label>
                                <input type="number" name="value" placeholder="add mesure value" onfocus="this.placeholder = ''" id="value"
                                    onblur="this.placeholder = 'add mesure value'" required class="single-input-primary">
                            </div>
                            <br>
                            <div class="input-group-icon mt-10">
                                <label for="example-datetime-local-input" class=" col-form-label">Date and time</label>
                                <input class="form-control single-input-primary" name="date" type="datetime-local"  id="example-datetime-local-input">
                            </div>
                            <br>
                            <br>
                            <button class="genric-btn primary-border circle" type="submit" > Add value </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="banner_img">
                    <img src="image/banner_img.png" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
