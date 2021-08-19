@extends('customer.layout')

@section('content')


<div class="container" style="padding-top:2%; " >
<div class="card container " >
    <div class="card-body">
      <h1 class="card-text">Créer un client :</h1>
    </div>
</div>
</div>

<div class="container" style="padding-top: 2%">
    <form action="{{ route('customers.store')}}" method="POST">
@csrf
    <div>
        <span><a href="{{ route('customers.index')}}"> Retour</a><Span>
    </div>
    <div class="form-group">
      <label>Nom :</label>
      <input type="text" class="form-control"  name="Nom" maxlength="45">
    </div>


    <div class="form-group">
        <label>Prenom :</label>
        <input type="text" class="form-control"  name="Prenom" maxlength="45">
      </div>


      <div class="form-group">
        <label>tel :</label>
        <input type="tel" class="form-control" placeholder=" Exemple : 99 999 999" name="Tel" >
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
        <input type="text" class="form-control" placeholder="marié, divorcé, séparé, célibataire ou veuf..." name="Situation_familiale" maxlength="45">
      </div>



      <div class="form-group">
        <button type="submit" class="btn btn-primary">save</button>
      </div>

   </form>
</div>









@endsection