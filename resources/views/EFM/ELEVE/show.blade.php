@extends('app')

@section('content')
    <div>
        <h1>Eleve Details</h1>
        <ul>
            <li>ID: {{ $eleve->id }}</li>
            <li>Nom: {{ $eleve->nom }}</li>
            <li>Prénom: {{ $eleve->prenom }}</li>
            @if($club)
                <li>Nom Club: {{ $club->nom }}</li>
            @endif
        </ul>

        <h2>Activités:</h2>
        @if($activites->count() > 0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Description</th>
                        <th>Date de Début</th>
                        <th>Nombre de Jours</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($activites as $activite)
                        <tr>
                            <td>{{ $activite->id }}</td>
                            <td>{{ $activite->description }}</td>
                            <td>{{ $activite->date_debut }}</td>
                            <td>{{ $activite->nombreJour }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <h1> nombre de jour : </h1>  {{ $sum  }}
        @else
            <p>No activities found.</p>
        @endif
    </div>
@endsection
