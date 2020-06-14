
    @extends('admin.layouts.dashboard')
    @section('section')

    <div id="content-wrapper">

        <div class="container-fluid">

            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="index.html">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>
            </ol>

            <!-- Icon Cards-->
    <div class="card mb-3">
        <div class="card-header">
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>email</th>
                <th>feedback type</th>
                <th>message</th>
                <th>day</th>
                <th>delete</th>
            </tr>
        </thead>
        <tbody>
            @foreach($feedbacks as $f)
            <tr>
                <td class="tableFeedback">{{ $f->id }}</td>
                <td class="tableFeedback">{{ $f->name }}</td>
                <td class="tableFeedback">{{ $f->email }}</td>
                <td class="tableFeedback">{{ $f->feedback_type }}</td>
                <td class="tableFeedback">{{ $f->message }}</td>
                <td class="tableFeedback">{{ $f->created_at }}</td>
                <td class="tableFeedback"><a href="{{URL::to('/deletefeed/'.$f->id) }}"> <img src="image/admin/delete.png" style="width: 20px;height:20px;"/></a></td>
            </tr>
            @endforeach

        </tbody>
    </table></div></div></div></div>
    @endsection
