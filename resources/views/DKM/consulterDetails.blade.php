@extends('app')
@section('content')
    <div>
        <h1> details des voiture utiliser par {{ $salaries->nomSal }} </h1>
        <table class="table table-striped">
            <tr>
                <th>id</th>
                <th>marque</th>
                <th>modele</th>
                <th>date debut</th>
                <th>date fin</th>
            </tr>
            @foreach($voitures as $voiture)
                <tr>
                    <td>{{ $voiture->id }}</td>
                    <td>{{ $voiture->marque }}</td>
                    <td>{{ $voiture->modele }}</td>
                    <td>{{ $voiture->pivot->dateDebutUtilisation }}</td>
                    <td>{{ $voiture->pivot->dateFinUtilisation }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection