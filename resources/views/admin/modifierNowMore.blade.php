
    @extends('admin.layouts.dashboard')
    @section('section')
    <h1>Modifier Now More</h1>
    <form action="updateNowMoreContent" method="POST">
        @csrf

    <div class="card box_containner" style="width: 100%; ">
        <div class="card-body">
          <h5 class="card-title">Section 1 :</h5>

         <div class="form-group">
          <label for="titre1">Titre de la section </label>
          <input type="text" class="form-control" name="titre" id="titre1" value="{{ $json["section_1"]["titre"] }}" placeholder="Titre de la section">
        </div>
        <div class="form-group">
            <label for="descriptionSection1">Description section 1 :</label>
            <textarea class="form-control" name="description" id="descriptionSection1" value="{{ $json["section_1"]["description"] }}" rows="3">{{ $json["section_1"]["description"] }}</textarea>
          </div>
        </div>
      </div><br>
  <br><br><br>
          <button type="submit" class="btn btn-primary box_containner" style="width: 100%">valider</button>
      </form>
    @endsection
