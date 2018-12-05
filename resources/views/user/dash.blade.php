@extends('layouts.app')

@section('content')

    <div class="container">
        {{--{{$user}}--}}
        {{--{{$user}}--}}
        {{--@foreach($user as $as)--}}
        {{--{{$as->custom_projects}}--}}
        {{--@endforeach--}}

        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Mans profils
                    </div>
                    <div class="card-body">
                        <h1><strong>{{$user->firstname}} {{$user->lastname}}</strong></h1>
                        <p>{{$user->email}}</p>
                        <a href="/editprofile" class="btn btn-primary">Rediģet</a>
                    </div>
                </div>

                <br>
                <div class="card">
                    <div class="card-header">Mani projekti <a href="/newcustomproject"
                                                              class="btn btn-primary">Pievienot</a></div>
                    @if(isset($projects))
                        <div class="card-body">
                            @foreach($projects as $project)
                                <div class="col">
                                    <h2>{{ $project->name}}</h2>
                                    <p>{{ $project->desc }}</p>
                                    <p>{{ $project->price }} EUR</p>
                                    @if($project->status == 3)
                                        <p>Status : <b>Apstrāde</b></p>
                                    @endif
                                    @if($project->status == 2)
                                        <p>Status : <b>Noraidīts</b></p>
                                    @endif
                                    @if($project->status == 1)
                                        <p>Status : <b>Apstiprināts</b></p>
                                    @endif
                                </div>
                                <br>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection

