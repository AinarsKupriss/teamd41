@extends('layouts.app')

@section('content')
    <div class="content">
        <section class="custom-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Lietotāji</h2>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="card-header">Rediģēt projektu</div>
                        <div class="card-body">
                            @if(Session::has('message-worker-edited'))
                                <p class="alert alert-info">{{ Session::get('message-worker-edited') }}</p>
                            @endif
                            @foreach($users as $user)
                                <div class="card">
                                    <div class="card-header">
                                        {{$user->firstname}}
                                    </div>
                                    <div class="card-body">
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
                                                {{Form::label('email', 'E-Pasts', ['class' => 'col-md-4 col-form-label text-md-right'])}}
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
                                            <div class="col-md-6 offset-md-3">
                                                {{Form::hidden('_method', 'PUT')}}
                                                {{Form::submit('Mainīt', ['class' => 'btn btn-primary'])}}
                                                {!! Form::close() !!}
                                            </div>
                                        </div>
                                        <hr>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
