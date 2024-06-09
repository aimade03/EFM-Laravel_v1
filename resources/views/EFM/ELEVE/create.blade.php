@extends('app')
@section('content')
    <div class="container">
        <form action="{{ route('eleves.store') }}" method="POST" >
            @csrf
            <div>
                <label class="form-label"> nom </label>
                <input type="text" class="form-controll" name="nom">
            </div>
            <div>
                <label class="form-label"> prenom </label>
                <input type="text" class="form-controll" name="prenom">
            </div>
            <div>
                <label class="form-label"> club </label>
                <select name="club_id" >
                    @foreach ($club as $club)
                        <option value="{{ $club->id }}">{{ $club->nom }}</option>
                    @endforeach
                </select>
            </div>
            <div>
                <input type="submit" class="btn btn-dark" value="ajouter">
                <a href="{{ route('eleves.index') }}" class="btn btn-dark" > annuler </a>

            </div>
        </form>
    </div>
@endsection