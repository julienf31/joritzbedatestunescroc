@extends('template.theme')

@section('content')
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Adresse</th>
            <th>Mail</th>
            <th>Téléphone</th>

        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <td><a class="{{}}">{{$contact->nom}}</a></td>
            <td>{{$contact->prenom}}</td>
            <td>{{$contact->adress}}</td>
            <td>{{$contact->mail}}</td>
            <td>{{$contact->phone}}</td>
            <td><a href="{{}}">Modifier</a><a class="{{}}">Supprimer</a></td>
        @endforeach
        </tbody>
    </table>
@stop