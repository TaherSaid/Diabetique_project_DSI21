
    @extends('layouts.home')
    @section('content')

    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">
                        @foreach($post as $p)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <div class="hiden_ele">
                                        <a href="#" class="blog_item_date">
                                            <img  src="image/blog/blog_4.png" alt="Card image cap" height="100px" width="100px" >
                                        </a>
                                    </div>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="single-blog.html">
                                        <h2>{{ $p->sujet }}</h2>
                                    </a>
                                    <p>{{ $p->article }}.</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                        <li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>
                                    </ul>
                                </div>
                            </article>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection

