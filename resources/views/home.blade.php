@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        You are logged in!
                    </div>
                    <h4>Vous êtes {{ Auth::user()->name }}</h4>
                    <h4>Votre mail est {{ Auth::user()->email }}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection
