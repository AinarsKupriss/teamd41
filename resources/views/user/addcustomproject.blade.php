@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Pievienot projektu</div>

                    <div class="card-body">
                        <a href="/profile">Atpakaļ</a>
                        {!! Form::open(['action' => ['UserController@addCustomProject'], 'method' => 'POST']) !!}

                        <div class="form-group row">
                            {{Form::label('name', 'Nosaukums', ['class' => 'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::text('name', '', ['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('desc', 'Apraksts', ['class' => 'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::textarea('desc', '', ['class' => 'form-control'])}}
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                {{Form::submit('Pievienot', ['class' => 'btn btn-primary'])}}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

