
    @extends('layouts.home')
    @section('content')
    @if($message ?? '' ?? '' =="True"){
        <div class="toast" data-autohide="false">
            <div class="toast-header">
              <strong class="mr-auto text-primary">Toast Header</strong>
              <small class="text-muted">5 mins ago</small>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
              Some text inside the toast body
            </div>
          </div>
        <script>
        $(document).ready(function(){
          $('.toast').toast('show');
        });
        </script>
    }
    @endif
    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-xl-5">
                    <div class="banner_text">
                        <div class="banner_text_iner">
                            <h5>We are here for your care</h5>
                            <h1>{{ $json["section_1"]["titre"] }}</h1>
                            <p>{{ $json["section_1"]["description"] }} </p>
                                <a href="/now_more" class="btn_2">Now more </a>
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


    <!-- about us part start-->
    <section class="about_us padding_top">
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6 col-lg-6">
                    <div class="about_us_img">
                        <img src="image/top_service.png" alt="">
                    </div>
                </div>
                <div class="col-md-6 col-lg-5">
                    <div class="about_us_text">
                        <h2>{{ $json["section_2"]["titre"] }}</h2>
                        <p>{{ $json["section_2"]["description"] }}</p>
                        <a class="btn_2 " href="/about">learn more</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about us part end-->

    <!-- feature_part start-->
    <section class="feature_part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <div class="section_tittle text-center">
                        <h2>Our services</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="image/icon/feature_1.svg" alt=""></span>
                            <h4>{{ $json["our_service"]["num_1"]["titre"] }} </h4>
                            <p>{{ $json["our_service"]["num_1"]["description"] }}</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="image/icon/feature_2.svg" alt=""></span>
                            <h4>{{ $json["our_service"]["num_2"]["titre"] }}</h4>
                            <p>{{ $json["our_service"]["num_2"]["description"] }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                        <div class="single_feature_img">
                            <img src="image/service.png" alt="">
                        </div>
                </div>
                <div class="col-lg-3 col-sm-12">
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="image/icon/feature_1.svg" alt=""></span>
                            <h4>{{ $json["our_service"]["num_3"]["titre"] }}</h4>
                            <p>{{ $json["our_service"]["num_3"]["description"] }}</p>
                        </div>
                    </div>
                    <div class="single_feature">
                        <div class="single_feature_part">
                            <span class="single_feature_icon"><img src="image/icon/feature_2.svg" alt=""></span>
                            <h4>{{ $json["our_service"]["num_4"]["titre"] }} </h4>
                            <p>{{ $json["our_service"]["num_4"]["description"] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature_part start-->

    <!--::regervation_part start::-->
    <section class="regervation_part section_padding">
        <div class="container">
            <div class="row align-items-center regervation_content">
                <div class="col-lg-7">
                    <div class="regervation_part_iner">
                        <form action="send_feedback" method="POST">
                            @csrf
                            <h2>Give a feedback</h2>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <input type="text" name="name" class="form-control" id="" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="email" name="email" class="form-control" id="inputEmail4"
                                        placeholder="Email address">
                                </div>
                                <div class="form-group col-md-12">
                                    <select class="form-control" name="feedback_type" id="Select">
                                        <option value="0" selected>Type of feedback</option>
                                        <option value="1">advice</option>
                                        <option value="2">add service</option>
                                        <option value="3">problem</option>
                                        <option value="4">service not available</option>
                                        <option value="5">other</option>

                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <textarea class="form-control" name="message" id="Textarea" rows="4"
                                        placeholder="Your Note "></textarea>
                                </div>
                            </div>
                            <div class="regerv_btn">
                                <h1>{{ $message ?? '' }}</h1>
                                <button type="submit" name="seendFeedback" class="btn_2"">seend feedback</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6">
                    <div class="reservation_img">

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--::regervation_part end::-->


    @endsection

