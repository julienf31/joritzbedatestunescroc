@extends('template.theme')

@section('content')
    <div class="row">
        <div class="col-lg-4">
            <div class="card-body card-body-cascade text-center">

                <!-- Title -->
                <h4 class="card-title"><strong>{{$contact->lastname}}{{$contact->name}}</strong></h4>
                <!-- Subtitle -->
                <h6 class="font-weight-bold indigo-text py-2">{{$contact->phone}}</h6>
                <!-- Text -->
                <p class="card-text">Adresse:{{$contact->adress}}</p>
                <p class="card-text">Mail:{{$contact->mail}}</p>
                <!-- Facebook -->
                <button type="button" href=""class="btn btn-primary">Modifier</button>
                <!-- Twitter -->
                <button type="button" href="" class="btn btn-danger">Supprimer</button>
                <!-- Google + -->
                <a type="button" class="btn-floating btn-small btn-dribbble"><i class="fa fa-dribbble"></i></a>

            </div>
        </div>
    </div>
@stop