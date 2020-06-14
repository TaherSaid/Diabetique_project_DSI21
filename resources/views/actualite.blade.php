@if (Auth::user())

<div class="card-body card-body-custom" >
    <div class="mx-auto d-block">
        <div class="row">
            <div class="col-6">
                <center>
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="50" viewBox="0 0 202 69">
                <text id="Actualité" transform="translate(0 56)" font-size="52" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">Actualité</tspan></text>
            </svg>
            </center>
            </div>
            <div class="col-6">
                <center>
                <svg xmlns="http://www.w3.org/2000/svg" width="150" height="50" viewBox="0 0 169 63">
                <text id="Covid19" transform="translate(0 51)" fill="#969697" font-size="47" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">Covid19</tspan></text>
                </svg>
            </center>
            </div>
        </div>
        <div>
            <center><div style="font-style:Baloo Paaji 2;font-size:60px;margin-bottom:-15px;">


                {{ $actualiter ?? '' }}</div><br>Cas Actuelle</center>
        </div>
        <div class="row">
            <div class="col-6">
                <center ><div style="color:green;font-style:Baloo Paaji 2;font-size:25px;margin-bottom:-15px;">158</div><br>Rétabli</center>
            </div>
            <div class="col-6">
                <center ><div style="color:red;font-style:Baloo Paaji 2;font-size:25px;margin-bottom:-15px;">159</div><br>décès</center>
            </div>
        </div>
        <div class="row article">
            <div class="col-3">
                <img src="image/icon/Group 6.svg" width="100px" alt="Card image cap">
            </div>
            <div class="col-9 ">
            <h4>Porter des bavettes</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore .</p>
            </div>
        </div>
        <div class="row article">
            <div class="col-3">
                <img src="image/icon/Group 7.svg" width="100px" alt="Card image cap">
            </div>
            <div class="col-9 ">
            <h4>Porter des bavettes</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore .</p>
            </div>
        </div>
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
