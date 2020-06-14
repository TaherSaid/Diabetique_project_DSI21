    @extends('layouts.home')
    @section('content')
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
        <form action="/save_val" method="POST">
            {{ csrf_field() }}
        <ul>
            @foreach($test as $k)
                <li>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{  $k->score }}" id={{  $k->id }}>
                        <label class="form-check-label" for="defaultCheck1">
                            {{  $k->question }}
                        </label>
                    </div>
                </li>
            @endforeach
        </ul>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

    </div>

    @endsection

