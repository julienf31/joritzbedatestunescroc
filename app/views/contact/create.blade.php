@extends('template.theme')

@section('content')
    <div class="card mt-5">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Create contact</strong>
        </h5>

        <div class="card-body px-lg-5 pt-0">

            <form class="md-form" style="color: #757575;" action="{{ route('contact.create') }}" method="post">
                <div class="md-form input-group mb-3">
                    <input type="text" name="firstname" class="form-control" placeholder="Firstname" aria-label="Firstname" aria-describedby="material-addon1">
                </div>

                <div class="md-form input-group mb-3">
                    <input type="text" name="lastname" class="form-control" placeholder="Lastname" aria-label="lastname" aria-describedby="material-addon1">
                </div>

                <div class="md-form input-group mb-3">
                    <input type="text" name="email" class="form-control" placeholder="Email" aria-label="email" aria-describedby="material-addon1">
                </div>

                <div class="md-form input-group mb-3">
                    <input type="text" name="phone" class="form-control" placeholder="Phone" aria-label="phone" aria-describedby="material-addon1">
                </div>

                <div class="md-form input-group mb-3">
                    <input type="text" name="adress" class="form-control" placeholder="Adress" aria-label="adress" aria-describedby="material-addon1">
                </div>

                <button class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0" type="submit">Create</button>

            </form>
        </div>
    </div>
@stop