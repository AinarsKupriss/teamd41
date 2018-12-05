@extends('layouts.app')

@section('content')

    <div class="container">
        @foreach($projects->chunk(3) as $chunk)
            <div class="row justify-content-center">
            @foreach($chunk as $project)
                <div class="col">
                    <div class="card">
                        <div class="card-header">
                            {{$project->name}}
                        </div>

                        <div class="card-body">
                            {{$project->desc}}
                            <strong>{{$project->price}}$</strong>
                            {!! Form::open(['action' => ['UserController@addProjectToOrder', $project->id], 'method' => 'POST']) !!}
                            {{Form::submit('Pievienot', ['class' => 'btn btn-primary'])}}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            @endforeach
            </div>
        @endforeach
    </div>
@endsection

