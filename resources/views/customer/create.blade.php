@extends('customer.layout')

@section('content')


<div class="container" style="padding-top:5%">
<div class="card container ">
    <div class="card-body">
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
</div>
</div>

<div class="container" style="padding-top: 2%">
    <form action="{{ route('customers.store')}}" method="POST">
@csrf
    <div class="form-group">
      <label>Nom :</label>
      <input type="text" class="form-control"  name="Nom">
    </div>


    <div class="form-group">
        <label>Prenom :</label>
        <input type="text" class="form-control"  name="Prenom">
      </div>


      <div class="form-group">
        <label>tel :</label>
        <input type="tel" class="form-control" placeholder=" Exemple : +21699 999 999" name="Tel">
      </div>


      <div class="form-group">
        <label>Address :</label>
        <input type="text" class="form-control" name="Adress" >
      </div>


      <div class="form-group">
        <label for="start">Date de naissance :</label>
         <br>
        <input type="date" class="form-control" placeholder="jj/mm/aaaa" name="Date_de_naissance" >
      </div>



      <div class="form-group">
        <label >Situation familiale :</label>
        <input type="text" class="form-control" placeholder="marié, divorcé, séparé, célibataire ou veuf." name="Situation_familiale" >
      </div>



      <div class="form-group">
        <button type="submit" class="btn btn-primary">save</button>
      </div>

   </form>
</div>









@endsection