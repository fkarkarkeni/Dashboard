@extends('customer.layout')

@section('content')


<div class="container" style="padding-top:5%">

<div class="card container ">
    <div class="card-body">
      <p class="card-text">Nom de client : {{ $customer->Nom }} {{ $customer->Prenom }}</p>
    </div>
</div>
</div>

<div class="container" style="padding-top: 2%">
    <form action="{{ route('customers.update',$customer->id)}}" method="POST">
@csrf
@method('PUT')
    <div class="form-group">
      <label>Nom :</label>
      <input type="text" class="form-control"  value="{{ $customer->Nom }}" name="Nom">
    </div>


    <div class="form-group">
        <label>Prenom :</label>
        <input type="text" class="form-control"  value="{{ $customer->Prenom }}" name="Prenom">
      </div>


      <div class="form-group">
        <label>tel :</label>
        <input type="tel" class="form-control" placeholder=" Exemple : +21699 999 999" value="{{ $customer->Tel }}" name="Tel">
      </div>


      <div class="form-group">
        <label>Address :</label>
        <input type="text" class="form-control" value="{{ $customer->Adress }}" name="Adress" >
      </div>


      <div class="form-group">
        <label for="start">Date de naissance :</label>
         <br>
        <input type="date" class="form-control" placeholder="jj/mm/aaaa" value="{{ $customer->Date_de_naissance }}" name='Date_de_naissance'>
      </div>



      <div class="form-group">
        <label >Situation familiale :</label>
        <input type="text" class="form-control" placeholder="marié, divorcé, séparé, célibataire ou veuf." value="{{ $customer->Situation_familiale }}" name="Situation_familiale" >
      </div>



      <div class="form-group">
        <button type="submit" class="btn btn-primary">Update</button>
      </div>

   </form>
</div>









@endsection