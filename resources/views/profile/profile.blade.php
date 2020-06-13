    @extends('layouts.navbarProfile')
    @section('content2')
    {{-- <form action="" method="post">
        <div>
            <textarea class="card-body card-body-custom1" rows="5" id="comment" placeholder="Ajouter un post"></textarea>
        </div>
        <button type="submit" class="button-post"><img class="contact-icon" src="image/icon/contacter.png"/> </button>
        <button type="image" class="button-img"><img class="contact-icon" src="image/icon/img_134042.png"/></button>
    </form> --}}
    {{-- first post  --}}
    <div class="card-body card-body-custom" >
        <div class="mx-auto d-block">
            <div class="row">
                <div style="display: inline;margin-left:30px;">
                    <img class="rounded-circle mx-auto d-block" src="image/icon/Ellipse 10@2x.png" alt="Card image cap">
                </div>
                <div style="display: inline;margin-left:30px;">
                    <p class="text-sm-center mt-2 mb-1" style="color:#FEA809;">association</p>
                    <h5 class="text-sm-center mt-2 mb-1">Steven Lee</h5>
                </div>
            </div>
            <div class="row">
                <table class="profiltable">
                    <tr class="TrProfile">
                        <td  class="TD_table_data">nom et prenom :</td>
                        <td  class="TD_table_data">{{ Auth::user()->name }}</td>
                    </tr>
                    <tr class="TrProfile">
                        <td  class="TD_table_data">date de naissance :</td>
                        <td  class="TD_table_data">{{ $test[0]->dateNaissance }}</td>
                    </tr>
                    <tr class="TrProfile">
                        <td  class="TD_table_data">Adresse email :</td>
                        <td  class="TD_table_data">{{ Auth::user()->email }}</td>
                    </tr>
                    <tr class="TrProfile">
                        <td  class="TD_table_data">biographie</td>
                        <td  class="TD_table_data">{{ $test[0]->description }}</td>
                    </tr>
                    <tr class="TrProfile">
                        <td  class="TD_table_data">poursentage d'etre diabetique :</td>
                        <td  class="TD_table_data">{{ $test[0]->etreDiabetique }}</td>
                    </tr>
                </table>
                {{-- <div class="list-group">
                    <a href="#" class="list-group-item">Nom et Prenom :<p class="profiledata"> {{ Auth::user()->name }}</p></a>
                    <a href="#" class="list-group-item">Date de naissance :<p class="profiledata"> {{ $test[0]->dateNaissance }}</p></a>
                    <a href="#" class="list-group-item">Adresse email :<p class="profiledata"> {{ Auth::user()->email }}</p></a>
                    <a href="#" class="list-group-item">Biographie :<p class="profiledata"> {{ $test[0]->description }}</p></a>
                    <a href="#" class="list-group-item">Poursentage d'etre diabetique :<p class="profiledata"> {{ $test[0]->etreDiabetique }}</p></a>
                  </div> --}}
            </div>
        </div>
    </div>
    @endsection

