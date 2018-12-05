@extends('layouts.app')

@section('content')
    <div class="content">
        <section class="custom-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Mūsu projekti</h2>
                        @if(Session::has('message-project-added'))
                            <p class="alert alert-info">{{ Session::get('message-project-added') }}</p>
                        @endif
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        @foreach($projects as $project)
                            <div class="card">
                                <div class="card-header">
                                    <h3>{{$project->name}}</h3>
                                </div>

                                <div class="card-body">
                                    <div>
                                        <div class="row">
                                            <div class="col-12 col-md-4">
                                                <div>
                                                    <b>Apraksts:</b>
                                                </div>
                                                <div>
                                                    {{$project->desc}}
                                                </div>

                                                <div>
                                                    <b>Cena:</b>
                                                </div>
                                                <div>
                                                    {{$project->price}} EUR
                                                </div>
                                                <hr>
                                                {!! Form::open(['action' => ['UserController@addProjectToOrder', $project->id], 'method' => 'POST']) !!}
                                                {{Form::submit('Pievienot', ['class' => 'btn btn-primary'])}}
                                                {!! Form::close() !!}
                                            </div>
                                            <div class="col-12 col-md-8">
                                                <img src="storage/{{ $project->image}}" alt="img" height="100%" width="100%">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                        @endforeach
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="card">
                            <div class="card-header">Vēlies savu projektu? Pievieno to!</div>

                            <div class="card-body">
                                <a href="/newcustomproject" class="btn btn-primary">Pievienot</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

