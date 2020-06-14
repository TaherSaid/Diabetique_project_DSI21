
    @extends('admin.layouts.dashboard')
    @section('section')
<div class="card box_containner" style="width: 100%; ">
    <div class="card-body">
        <div class="pl-5 pr-5">
            <form action="updateQcm" method="POST">
                @csrf
                @foreach($qcm as $key=>$q)
                <h4>Question {{ ++$key }}</h4>
                    <input type="number" value="{{ $q->id }}" name="qid{{ $key }}" hidden />
                    <input type="text" name="question{{ $key }}" value="{{ $q->question }}" required class="single-input-primary box_containner_input mb-2">
                    <input type="number" name="score{{ $key }}" value="{{ $q->score }}" required class="single-input-primary box_containner_input mb-1">
                @endforeach
                <br><br><br>
                <button type="submit" class="btn btn-primary box_containner" style="width: 100%">valider</button>
            </form>
        </div>
    </div>
</div>
    @endsection
