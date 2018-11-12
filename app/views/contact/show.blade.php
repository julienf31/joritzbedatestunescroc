@extends('template.theme')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-body card-body-cascade text-center">

                    <!-- Title -->
                    <h4 class="card-title"><strong>{{$contact->lastname}}{{$contact->name}}</strong></h4>
                    <!-- Subtitle -->
                    <h6 class="font-weight-bold indigo-text py-2">{{$contact->phone}}</h6>
                    <!-- Text -->
                    <p class="card-text">Adresse:{{$contact->adress}}</p>
                    <p class="card-text">Mail:{{$contact->mail}}</p>
                    <!-- Facebook -->
                    <a href="{{ route('contact.edit', $contact->id) }}"class="btn btn-primary">Modifier</a>
                    <!-- Twitter -->
                    <a href="{{ route('contact.delete', $contact->id) }}" class="btn btn-danger">Supprimer</a>
                    <!-- Google + -->

                </div>
            </div>
        </div>
    </div>
@stop