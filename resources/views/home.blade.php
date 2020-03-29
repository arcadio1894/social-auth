@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <div class="col-md-8">
                        <p>Nombre:</p>
                        <p><strong>{{ Auth::user()->name }}</strong></p>
                        <hr>
                        <p>Email:</p>
                        <p><strong>{{ Auth::user()->email }}</strong></p>
                    </div>
                    <div class="col-md-4">
                        <img class="img-responsive img-thumbnail" src="{{ Auth::user()->avatar }}" alt="{{ Auth::user()->name }}">
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
