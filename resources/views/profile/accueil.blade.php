
    @extends('layouts.home')
    @section('content')

 {{-- add post --}}
 {{-- <div style="width: 70%; margin-top: 93px; margin-left: 227px;">

 </div>
    <section class="blog_area section_padding">
        <div class="container">
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
    </section> --}}
<div class="row" style=" margin-top: 93px;">
    <div class="col-8"">
        <form action="add_post" method="POST">
            @csrf
                <input type="text" value={{ Auth::user()->id }} name="user" hidden>
                <div>
                    <textarea name="article" class="card-body card-body-custom1" rows="5" id="comment" placeholder="Ajouter un post"></textarea>
                </div>
                <button type="submit" class="button-post"><img class="contact-icon" src="image/icon/contacter.png"/> </button>
                <button type="file" class="button-img"><img class="contact-icon" src="image/icon/img_134042.png"/></button>
            </form>
    </div>
    <div class="col-4 " >

            <table class="table table-hover" style="margin-top: 70px;">
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
    @endsection

