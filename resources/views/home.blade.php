@extends('layouts.navbarHome')
@section('content2')
{{-- first post  --}}
    <div class="hiden-ele1">
        <div class="card-body card-body-custom1" >
            <div class="mx-auto d-block">
                <div class="mx-auto d-block">
                    <div class="row">

                        <div class="col-6">
                            <center>
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="50" viewBox="0 0 202 69">
                            <text id="Actualité" transform="translate(0 56)" font-size="52" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">Actualité</tspan></text>
                        </svg>
                        </center>
                        </div>
                        <div class="col-6">
                            <center>
                            <svg xmlns="http://www.w3.org/2000/svg" width="70" height="50" viewBox="0 0 169 63">
                            <text id="Covid19" transform="translate(0 51)" fill="#969697" font-size="47" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">Covid19</tspan></text>
                            </svg>
                        </center>
                        </div>
                    </div>
                    <div>
                        <center><div style="font-style:Baloo Paaji 2;font-size:20px;margin-bottom:-28px;">2,055,743</div><br>Cas Actuelle</center>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <center ><div style="color:green;font-style:Baloo Paaji 2;font-size:10px;margin-bottom:-15px;">508,388</div><br>Rétabli</center>
                        </div>
                        <div class="col-6">
                            <center ><div style="color:red;font-style:Baloo Paaji 2;font-size:10px;margin-bottom:-15px;">133,098</div><br>décès</center>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- second post  --}}
    <div class="card-body card-body-custom" >
        <div class="mx-auto d-block">
            <div class="row">
                <div style="display: inline;margin-left:30px;">
                    <img class="rounded-circle mx-auto d-block" src="image/icon/Ellipse 10@2x.png" alt="Card image cap">
                </div>
                <div style="display: inline;margin-left:30px;">
                    <p class="text-sm-center mt-2 mb-1" style="color:#FEA809;">association</p>
                    <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                </div>
            </div>
            <div class="row">
                <p>
                  Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                </p>
                <img class="img-profile" src="image/icon/google-icon.svg">
            </div>
        </div>

    </div>
@endsection
