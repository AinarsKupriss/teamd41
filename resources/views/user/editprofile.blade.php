@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Darbinieka rediģēšana</div>

                    <div class="card-body">
                        <a href="/profile">Atpakaļ</a>
                        {!! Form::open(['action' => ['UserController@editUser'], 'method' => 'POST']) !!}

                            <div class="form-group row">
                                {{Form::label('firstname', 'Vārds', ['class' => 'col-md-4 col-form-label text-md-right'])}}
                                <div class="col-md-6">
                                    {{Form::text('firstname', $user->firstname, ['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="form-group row">
                                {{Form::label('lastname', 'Uzvārds', ['class' => 'col-md-4 col-form-label text-md-right'])}}
                                <div class="col-md-6">
                                   {{Form::text('lastname', $user->lastname, ['class' => 'form-control'])}}
                                </div>
                            </div>
                            <div class="form-group row">
                                {{Form::label('email', 'Ē-Pasts', ['class' => 'col-md-4 col-form-label text-md-right'])}}
                                <div class="col-md-6">
                                    {{Form::email('email', $user->email, ['class' => 'form-control'])}}
                                </div>
                            </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {{Form::hidden('_method', 'PUT')}}
                                {{Form::submit('Saglabat', ['class' => 'btn btn-primary'])}}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
