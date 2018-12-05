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
                            <div class="card-header">Izvēlaties projektu</div>

                            <div class="card-body">
                                @if(Session::has('message-order-added'))
                                    <p class="alert alert-info">{{ Session::get('message-order-added') }}</p>
                                @endif
                                @foreach($projects as $project)
                                    <ul>
                                        <li>{{$project->name}}</li>
                                        <li>{{$project->desc}}</li>
                                        <li>{{$project->price}}</li>
                                        <li><img class="img-fluid d-block mx-auto" src="storage/{{ $project->image}}" height="300" width="300"></li>
                                        <li><a href="/addprojecttoorder/{{$project->id}}" class="btn btn-primary">Pasūtīt</a></li>
                                    </ul>
                                    <br>
                                @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="card">
                            <div class="card-header">Vai pievienojiet savu</div>

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

