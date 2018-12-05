@extends('layouts.app')

@section('content')
    <div class="content">
        <section class="custom-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Projekti</h2>
                        <a href="/profile">Atpakaļ</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="card">
                            <div class="card-header">Pievienot projektu</div>
                            <div class="card-body">
                                {!! Form::open(['action' => ['UserController@addCustomProject'], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

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
                                <div class="form-group row">
                                    {{Form::label('image', 'Rasējums', ['class' => 'col-md-4 col-form-label text-md-right'])}}
                                    <div class="col-md-4">
                                        {{Form::file('image')}}
                                    </div>
                                </div>

                                <div class="form-group row">
                                    {{Form::label('price', 'Budžets', ['class' => 'col-md-4 col-form-label text-md-right'])}}
                                    <div class="col-md-6">
                                        {{Form::text('price', '', ['class' => 'form-control'])}}
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-3">
                                        {{Form::submit('Pievienot', ['class' => 'btn btn-primary'])}}
                                        {!! Form::close() !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

