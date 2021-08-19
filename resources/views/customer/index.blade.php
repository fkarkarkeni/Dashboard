@extends('customer.layout')

@section('content')

<div class="container-fluid" style="padding-top: 100px;">


       <h1>Liste des clients: </h1>
       <br>
       <br>
        <a class="btn btn-primary btn-lg" href="{{ route('customers.create')}}" role="button">Create</a>
        <br>
        <br>


        @if ($message = Session::get('succes'))
            <div class="alert alert-primary" role="alert">
               {{$message}}
            </div>
        @endif




   <table class="table container-fluid" >
        <thead class="table-dark container">
            <tr>
                <th scope="col">#</th>
                <th scope="col" style="padding-left:30px">Nom</th>
                <th scope="col" style="padding-left:30px">Prenom</th>
                <th scope="col" style="padding-left:30px">Tel</th>
                <th scope="col" style="padding-left:30px">Adress</th>
                <th scope="col" style="padding-left:50px">Date de naissance</th>
                <th scope="col" style="padding-left:30px">Situation familiale</th>
                <th scope="col" style="padding-left:30px">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=0;
            @endphp
            @foreach ($customers as $item )
                <tr>
                    <th scope="row">{{ ++ $i }}</th>
                    <td scope="col" style="padding-left:30px">{{ $item->Nom }}</td>
                    <td scope="col" style="padding-left:30px">{{ $item->Prenom }}</td>
                    <td scope="col" style="padding-left:30px">{{ $item->Tel }}</td>
                    <td scope="col" style="padding-left:30px">{{ $item->Adress }}</td>
                    <td scope="col" style="padding-left:50px">{{ $item->Date_de_naissance}}</td>
                    <td scope="col" style="padding-left:30px">{{ $item->Situation_familiale }}</td>
                    <td scope="col" style="padding-left:30px">

                        <div class="row">
                            <div class="col-sm">
                             <a  class="btn btn-success" href="{{ route('customers.edit',$item->id)}}"> Edit </a>
                            </div>

                            <div class="col-sm">
                                <form action="{{ route('customers.destroy',$item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger"> Delete</button>
                                </form>
                            </div>


                        </div>
                    </td>

                </tr>
            @endforeach

        </tbody>
   </table>

   <br> <br>
   <div class="container ">
   {{$customers->links()}}
   </div>

</div>

@endsection