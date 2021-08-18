@extends('customer.layout')

@section('content')

<div>
  <div class="jumbotron container">

    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
    <a class="btn btn-primary btn-lg" href="{{ route('customers.create')}}" role="button">Create</a>
  </div>

  <div class="container">
    @if ($message = Session::get('succes'))
    <div class="alert alert-primary" role="alert">
      {{$message}}
      </div>
    @endif

  </div>

<table class="table container">
    <thead class="table-dark container">
      <tr>
        <th scope="col">#</th>
        <th scope="col"style=w>Nom</th>
        <th scope="col">Prenom</th>
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
            <td>{{ $item->Nom }}</td>
            <td>{{ $item->Prenom }}</td>
            <td>{{ $item->Tel }}</td>
            <td>{{ $item->Adress }}</td>
            <td>{{ $item->Date_de_naissance}}</td>
            <td>{{ $item->Situation_familiale }}</td>
            <td>
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

                  {{--

                   <div class="col-sm">
                    <a  class="btn btn-warning" href="{{ route('soft.delete',$item->id)}}"> Soft delete </a>

                   </div>
                 --}}
                </div>
            </td>

        </tr>
        @endforeach

    </tbody>
</table>

  {{ $customers->links() }}

</div>

@endsection