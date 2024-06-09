@extends('app')
@section('content')
    <h1>Liste eleve</h1>
    <a href="{{ route('eleves.create') }}" class="btn btn-dark">Ajouter une nouveau eleve</a>
    {{-- @auth
    <a href="/logout">Logout</a>
    <h1>{{ Auth::user()->name }}</h1>
    @endauth --}}
    <table>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th> nom club </th>
            <th>action</th>
        </tr>
        @foreach($eleves as $eleve)
            <tr>
                <td>{{ $eleve->id }}</td>
                <td>{{ $eleve->nom }}</td>
                <td>{{ $eleve->prenom }}</td>
                <td> {{ $eleve->club->nom }} </td>
                <td>
                    <a href="{{ route('eleves.edit',$eleve->id) }}" class="btn btn-dark"> update </a>
                    <a href="{{ route('eleves.show',$eleve->id) }}" class="btn btn-dark"> show </a>
                    <form action="{{ route('eleves.destroy',$eleve->id) }}" method="post">
                        @method('DELETE')
                        <button type="submit" class="btn btn-dark">Supprimer</button>
                        @csrf
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection