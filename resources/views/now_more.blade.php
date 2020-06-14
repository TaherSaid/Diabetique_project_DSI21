
    @extends('layouts.home')
    @section('content')
    <div style="padding-top:100px;">
    <section class="breadcrumb_part breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner">
                        <div class="breadcrumb_iner_item">
                            <h2>Now more</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="about_us single_about_padding">

            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-4">
                    <div class="about_us_img">
                        <img src="image/top_service.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="about_us_text">
                        <h2>{{ $json["section_1"]["titre"] }}</h2>
                        <p>{{ $json["section_1"]["description"] }}</p>
                        </div>
                    </div>
            </div>

    </section>
    <section class="about_us" style="margin-top:-200px; margin-bottom: 100px;">
        <div class="container">

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="background-color: #d4f3ef; align-content: center;">
                    <div class="carousel-inner">
                      <div class="carousel-item active" width="100%">
                        <iframe class="iframe_video" src="https://www.youtube-nocookie.com/embed/-B-RVybvffU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="carousel-item">
                        <iframe class="iframe_video"  src="https://www.youtube-nocookie.com/embed/-B-RVybvffU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                      <div class="carousel-item">
                        <iframe class="iframe_video"  src="https://www.youtube-nocookie.com/embed/-B-RVybvffU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #393e46; height: 100px; width: 50px;"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #393e46; height: 100px; width: 50px;"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>

        </div>
    </section>
    </div>

    @endsection

