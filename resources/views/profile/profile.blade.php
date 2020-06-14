    @extends('layouts.navbarProfile')
    @section('content2')
    {{-- add post --}}
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
            {{-- <div class="row">
                <div style="display: inline;margin-left:30px;">
                    <img class="rounded-circle mx-auto d-block" src="image/icon/Ellipse 10@2x.png" alt="Card image cap">
                </div>
                <div style="display: inline;margin-left:30px;">
                    <h5 class="text-sm-center mt-2 mb-1">{{  Auth::user()->id  }}</h5>
                </div>
            </div> --}}
            <div class="row">
                <table class="table table-hover" style="margin-top: 20px;">
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

            </div>
        </div>
    </div>
    @endsection

