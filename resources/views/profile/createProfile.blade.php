
    @extends('layouts.navbarVide')
    @section('content')
<section class="banner_part">
    <div class="container">
        <div style="margin-top: 120px;">
            <form action="save_Profile" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value={{ Auth::user()->id }} name="user">
                <div class="form-group">
                    <div class="form-group">
                    <label for="dateN"> date de naissance :</label>
                    <input type="date" class="form-control" name="dateN" id="dateN" aria-describedby="helpId" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="description"> Description :</label>
                        <input type="textarea" class="form-control" name="description" id="description" aria-describedby="helpId" placeholder="une simple description pour ">
                    </div>
                    <div class="form-group">
                        <label for="etat"> type de compte :</label>
                        <select class="form-control" name="etat" id="etat" aria-placeholder="merci de choisir le type de profile">
                            <option value="1">personne diabetique</option>
                            <option value="2">compte pour suivre autre personne</option>
                            <option value="3">compte pour suivie personnel et autre personne</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image"> image de profile  :</label>
                        <input type="file" class="form-control" name="image_profile" id="image"  >
                        <input type="text" name="dsfgh">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</section>
    @endsection
