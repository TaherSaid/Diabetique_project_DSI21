
    @extends('admin.layouts.dashboard')
    @section('section')
<div class="pl-5 pr-5">
    <div class="mb-5 mt-5">
    <label for="add_question" ><h3>you can add new questoin here : </h3></label>
        <button type="button" class="btn btn-primary ml-5" id="add_question" data-toggle="modal" data-target="#exampleModalLong">
            add new question
        </button>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Add new question</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <form action="addquestion" method="POST">
                    @csrf
                    <div class="form-group">
                      <label for="question">question</label>
                      <input type="text" class="form-control" name="question" id="question" placeholder="Add new question" required>
                    </div>
                    <div class="form-group">
                        <label for="score">question score value :</label>
                        <input type="number" class="form-control" name="score" id="score" placeholder="define new value for this question" required>
                    </div>
                    <button type="submit" class="btn btn-primary box_containner" style="width: 100%">Add question</button>
                </form>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" style="width: 100%" data-dismiss="modal">Close</button>
            </div>
        </div>
        </div>
    </div>
    <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Question</th>
            <th scope="col">Score</th>
            <th scope="col">delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach($question as $key => $value)
                <tr>
                <th scope="row">{{ ++$key }}</th>
                <td>{{ $value->question }}</td>
                <td>{{ $value->score }}</td>
                <td><a href="{{URL::to('/deletequestion/'.$value->id) }}"> <img src="image/admin/delete.png" style="width: 20px;height:20px;"/></a></td>
            @endforeach
        </tbody>
      </table>
</div>
    @endsection
