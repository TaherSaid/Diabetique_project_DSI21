
    @extends('layouts.home')
    @section('content')
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
                        <img src="image/icon/warning.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    </div>

    @endsection

