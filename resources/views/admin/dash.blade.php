@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="card">
            <div class="card-header">
               Lietotāji
            </div>
            <div class="card-body">
                @if(Session::has('message-worker-edited'))
                    <p class="alert alert-info">{{ Session::get('message-worker-edited') }}</p>
                @endif
                @foreach($users as $user)

                    {!! Form::open(['action' => ['AdminController@updateUser', $user->id], 'method' => 'POST']) !!}

                        <div class="form-group row">
                            {{Form::label('firstname', 'Vārds:', ['class' => 'col-md-4 col-form-label text-md-right'])}}
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


                    <div class="col">
                        <div class="form-group row">
                            {{Form::label('email', 'Ē-Pasts', ['class' => 'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::email('email', $user->email, ['class' => 'form-control'])}}
                            </div>
                        </div>
                        <div class="form-group row">
                            {{Form::label('status', 'Amats:', ['class' => 'col-md-4 col-form-label text-md-right'])}}
                            <div class="col-md-6">
                                {{Form::select('status', ['1' => 'Lietotājs', '2' => 'Darbinieks', '3' => 'Administrators'], $user->status, ['class' => 'form-control'])}}
                            </div>
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            {{Form::hidden('_method', 'PUT')}}
                            {{Form::submit('Mainīt', ['class' => 'btn btn-primary'])}}
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <hr>
                @endforeach
            </div>
        </div>


    </div>

@endsection
