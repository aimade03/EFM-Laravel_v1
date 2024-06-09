@extends('app')
@section('content')
    <div>
        <h1> list des voiture </h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th> matricule </th>
                    <th> marque </th>
                    <th> modele </th>
                    <th>dateMiseEnCirculation </th>
                    <th> Actions </th>
               </tr>
            </thead>
            <tbody>
                @foreach ($voitures as $voiture)
                <tr>
                    <td> {{ $voiture->id }} </td>
                    <td> {{ $voiture->marque }} </td>
                    <td> {{ $voiture->modele }} </td>
                    <td> {{ $voiture->dateMiseEnCirculation }} </td>
                    <td>
                        <form action="/voitures/{{ $voiture->id }}" method="POST">
                        @csrf
                        @method('DELETE')   
                        <input type="submit" value="supprimer" class="btn btn-outline-dark"> 
                        </form> 
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection