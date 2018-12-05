@extends('layouts.app')

@section('content')

    <div class="content">
        <section class="custom-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Mans profils</h2>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="card">
                            <div class="card-header">
                                Labot profilu
                            </div>
                            <div class="card-body">
                                @if(Session::has('message-profile-edited'))
                                    <p class="alert alert-info">{{ Session::get('message-profile-edited') }}</p>
                                @endif
                                <h1><strong>{{$user->firstname}} {{$user->lastname}}</strong></h1>
                                <p>{{$user->email}}</p>
                                <a href="/editprofile" class="btn btn-primary">Rediģēt</a>
                            </div>
                        </div>

                        <br>
                        <div class="card">
                            <div class="card-header">
                                Mani projekti
                            </div>
                            @if(isset($projects))
                                <div class="card-body">
                                    @if(Session::has('message-custom-project-added'))
                                        <p class="alert alert-info">{{ Session::get('message-custom-project-added') }}</p>
                                    @endif

                                    @if(Session::has('message-custom-project-edit'))
                                        <p class="alert alert-info">{{ Session::get('message-custom-project-edit') }}</p>
                                    @endif
                                    @foreach($projects as $project)
                                        <div>
                                            <div class="row">
                                                <div class="col-12 col-md-4">
                                                    <div>
                                                        <b>Projekta nosaukums:</b>
                                                    </div>
                                                    <div>{{ $project->name}}</div>
                                                    <div>
                                                        <b>Apraksts:</b>
                                                    </div>
                                                    <div>{{ $project->desc}}</div>
                                                    <div>
                                                        <b>Cena:</b>
                                                    </div>
                                                    <div>{{ $project->price}} EUR</div>
                                                    <div>
                                                        <b>Statuss:</b>
                                                    </div>
                                                    @if($project->status == 3)
                                                        <div class="text-warning">Apstrāde</div>
                                                    @endif
                                                    @if($project->status == 2)
                                                        <div class="text-danger">Noraidīts</div>
                                                    @endif
                                                    @if($project->status == 1)
                                                        <div class="text-success">Apstiprināts</div>
                                                    @endif
                                                    @if($project->status == 3 && $project->projstatus == 2)
                                                        <div><b>Darbibas</b></div>
                                                        <div>
                                                            <a href="/editcustomproject/{{$project->id}}" class="btn btn-primary">Rediģet</a>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="col-12 col-md-8">
                                                    <img src="storage/{{ $project->image}}" alt="img" height="100%" width="100%">
                                                </div>
                                            </div>
                                        </div>
                                        <hr>
                                    @endforeach
                                     <a href="/newcustomproject" class="btn btn-primary">Pievienot</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

