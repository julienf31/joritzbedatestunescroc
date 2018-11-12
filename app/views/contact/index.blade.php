@extends('template.theme')

@section('content')
    <a href="{{ route('contact.create') }}" class="btn btn-default">Create new contact</a>
    <table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Prénom</th>
            <th>Nom</th>
            <th>Adresse</th>
            <th>Mail</th>
            <th>Téléphone</th>
            <th>Actions</th>

        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <td><a class="">{{$contact->firstname}}</a></td>
                <td>{{$contact->lastname}}</td>
                <td>{{$contact->adress}}</td>
                <td>{{$contact->email}}</td>
                <td>{{$contact->phone}}</td>
                <td><a href="{{ route('contact.show', $contact->id) }}">Voir</a> | <a href="{{ route('contact.edit', $contact->id) }}">Modifier</a> | <a href="{{ route('contact.delete', $contact->id) }}">Supprimer</a></td>
            </tr>

        @endforeach
        </tbody>
    </table>
@stop