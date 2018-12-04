@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($users as $user)
        <div class="card">
            <div class="card-header">
               {{$user->firstname}}  {{$user->lastname}}
            </div>

            {{--<div class="row">--}}
                {{--<div class="col">--}}
                    {{--E-Pasts: {{$user->email}}--}}
                {{--</div>--}}

            {{--</div>--}}

            {!! Form::open(['action' => ['AdminController@updateUser', $user->id], 'method' => 'POST']) !!}
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        {{Form::label('firstname', 'Vārds')}}
                        {{Form::text('firstname', $user->firstname, ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('lastname', 'Uzvārds')}}
                        {{Form::text('lastname', $user->lastname, ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('email', 'Ē-Pasts')}}
                        {{Form::email('email', $user->email, ['class' => 'form-control'])}}
                    </div>
                    <div class="form-group">
                        {{Form::label('status', 'Amats:')}}
                        {{Form::select('status', ['1' => 'Lietotājs', '2' => 'Darbinieks', '3' => 'Administrators'], $user->status, ['class' => 'form-control'])}}
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    {{Form::hidden('_method', 'PUT')}}
                    {{Form::submit('Mainīt', ['class' => 'btn btn-success btn-block'])}}
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
        @endforeach

    </div>

@endsection