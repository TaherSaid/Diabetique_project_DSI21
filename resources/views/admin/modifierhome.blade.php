
    @extends('admin.layouts.dashboard')
    @section('section')

    <form action="updateSection1" method="POST">
        @csrf

    <div class="card box_containner" style="width: 100%; ">
        <div class="card-body">
          <h5 class="card-title">Section 1 :</h5>

         <div class="form-group">
          <label for="titre1">Titre de la section </label>
          <input type="text" class="form-control" name="titre1" id="titre1" value="{{ $json["section_1"]["titre"] }}" placeholder="Titre de la section">
        </div>
        <div class="form-group">
            <label for="descriptionSection1">Description section 1 :</label>
            <textarea class="form-control" name="descriptionSection1" id="descriptionSection1" value="{{ $json["section_1"]["description"] }}" rows="3">{{ $json["section_1"]["description"] }}</textarea>
          </div>
        </div>
      </div><br>
      <div class="card box_containner" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title">Section 2 :</h5>
            <div class="form-group">
            <label for="exampleFormControlInput1">Titre de la section </label>
            <input type="text" class="form-control" name="titre2" id="titre2" value="{{ $json["section_2"]["titre"] }}" >
            </div>
        <div class="form-group">
            <label for="descriptionSection1">Description section 2 :</label>
            <textarea class="form-control" name="descriptionSection2" id="descriptionSection2" rows="3">{{ $json["section_2"]["description"] }}</textarea>
          </div>
        </div><br>
      </div><br>
      <div class="card box_containner" style="width: 100%;">
        <div class="card-body">
          <h5 class="card-title">Our Service Section :</h5>
          <h6 class="card-subtitle mb-2 text-muted">partie 1:</h6>
            <div class="form-group">
                <label for="exampleFormControlInput1">Titre de la sou partie 1: </label>
                <input type="text" class="form-control" name="serviceTitre1" id="serviceTitre1" value="{{ $json["our_service"]["num_1"]["titre"]  }}" ">
            </div>
            <div class="form-group">
                <label for="descriptionServiceSection1">Description section 1 :</label>
                <textarea class="form-control" name="descriptionServiceSection1" id="descriptionServiceSection1" rows="3">{{ $json["our_service"]["num_1"]["description"]  }}</textarea>
            </div>
          <h6 class="card-subtitle mb-2 text-muted">partie 2:</h6>
<div class="form-group">
          <label for="serviceTitre2">Titre de la sou partie 2: </label>
          <input type="text" class="form-control" name="serviceTitre2" id="serviceTitre2" value="{{ $json["our_service"]["num_2"]["titre"]  }}" >
        </div>
        <div class="form-group">
            <label for="descriptionSection2">Description section 3 :</label>
            <textarea class="form-control" name="descriptionServiceSection2" id="descriptionServiceSection2" rows="3">{{ $json["our_service"]["num_2"]["description"]  }}</textarea>
          </div>
          <h6 class="card-subtitle mb-2 text-muted">partie 3:</h6>
<div class="form-group">
          <label for="serviceTitre3">Titre de la sou partie 3: </label>
          <input type="text" class="form-control" name="serviceTitre3" id="serviceTitre3" value="{{ $json["our_service"]["num_3"]["titre"]  }}" >
        </div>
        <div class="form-group">
            <label for="descriptionSection1">Description section 3 :</label>
            <textarea class="form-control" name="descriptionServiceSection3" id="descriptionServiceSection3" rows="3">{{$json["our_service"]["num_3"]["description"]  }}</textarea>
          </div>
          <h6 class="card-subtitle mb-2 text-muted">partie 4:</h6>
          <div class="form-group">
          <label for="serviceTitre4">Titre de la sou partie 4: </label>
          <input type="text" class="form-control" name="serviceTitre4" id="serviceTitre4" value="{{ $json["our_service"]["num_4"]["titre"] }}" ">
        </div>
        <div class="form-group">
            <label for="descriptionServiceSection4">descri de la sou partie 4 :</label>
            <textarea class="form-control" name="descriptionServiceSection4" value="{{ $json["our_service"]["num_4"]["titre"]  }}" id="descriptionServiceSection4" rows="3">{{ $json["our_service"]["num_4"]["description"]  }}</textarea>
          </div>
        </div>
      </div>
  <br><br><br>
          <button type="submit" class="btn btn-primary box_containner" style="width: 100%">valider</button>
      </form>
    @endsection
