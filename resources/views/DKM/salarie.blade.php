@extends('app')
@section('content')
    <div>
        <h1>liste des salarie</h1>
        <table>
            <thead>
                <tr>
                    <th> code </th>
                    <th> nom </th>
                    <th> prenom </th>
                    <th> service </th>
                    <th> nombre des voitures </th>
                    <th> actions </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($salaries as $salarie)
                    <tr>
                        <td> {{ $salarie->id }} </td>
                        <td> {{ $salarie->nomSal }} </td>
                        <td> {{ $salarie->prenomSal }} </td>
                        <td> {{ $salarie->service->nomSer }} </td>
                        <td> {{ count($salarie->voiture) }} </td>
                        <td>
                            <a href="/salaries/{{ $salarie->id }}"> voir les deatils </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection