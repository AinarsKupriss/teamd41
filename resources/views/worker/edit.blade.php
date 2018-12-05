@extends('layouts.app')

@section('content')
    <div class="content">
        <section class="custom-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Darbinieka rediģēšana</h2>
                        <a href="/worker">Atpakaļ</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="card">
                            <div class="card-header">Rediģēt projektu</div>
                                <div class="card-body">
                                <form method="POST" action="/worker/edit/{{$worker->id}}">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="firstname" class="col-md-4 col-form-label text-md-right">Vārds</label>

                                        <div class="col-md-6">
                                            <input id="firstname" type="text"
                                                   class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                                   name="firstname" value="{{ $worker->firstname }}" required autofocus>

                                            @if ($errors->has('firstname'))
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="lastname" class="col-md-4 col-form-label text-md-right">Uzvārds</label>

                                        <div class="col-md-6">
                                            <input id="lastname" type="text"
                                                   class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}"
                                                   name="lastname" value="{{ $worker->lastname }}" required autofocus>

                                            @if ($errors->has('lastname'))
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="email" class="col-md-4 col-form-label text-md-right">E-pasts</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email"
                                                   class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                   name="email" value="{{ $worker->email }}" required>

                                            @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label for="password" class="col-md-4 col-form-label text-md-right">Parole</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password"
                                                   class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                   name="password" required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit" class="btn btn-primary">
                                                Saglabāt
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
