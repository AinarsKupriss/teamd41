@extends('layouts.app')

@section('content')

    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <br>
        <div>
            <h2>Izvēlaties projektu</h2>
            @if(Session::has('message-order-added'))
                <p class="alert alert-info">{{ Session::get('message-order-added') }}</p>
            @endif
            @foreach($projects as $project)
                <ul>
                    <li>{{$project->name}}</li>
                    <li>{{$project->desc}}</li>
                    <li>{{$project->price}}</li>
                    <li><img src="/storage/{{$project->image}}" alt="img"></li>
                    <li><a href="/addprojecttoorder/{{$project->id}}" class="btn btn-primary">Pasūtīt</a></li>
                </ul>
                <br>
            @endforeach
        </div>
        <div>
            <h2>Vai pievienojiet savu</h2>
            <a href="/newcustomproject" class="btn btn-primary">Pievienot</a>
        </div>
    </div>

@endsection

