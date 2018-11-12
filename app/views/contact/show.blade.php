@extends('template.theme')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body card-body-cascade text-center">
                    <h4 class="card-title"><strong>{{$contact->firstname}} {{ strtoupper($contact->lastname) }}</strong></h4>

                    <h6 class="font-weight-bold indigo-text py-2">{{$contact->phone}}</h6>

                    <p class="card-text">Adresse:{{$contact->adress}}</p>
                    <p class="card-text">Mail:{{$contact->email}}</p>

                    <a href="{{ route('contact.edit', $contact->id) }}"class="btn btn-primary">Modifier</a>
                    <a href="{{ route('contact.delete', $contact->id) }}" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>
    <a href="{{ route('contact.index') }}" class="btn btn-danger">Retour</a>
@stop