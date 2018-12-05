@extends('layouts.app')

@section('content')
    <div class="content">
        <section class="custom-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Darbinieks</h2>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 text-center">

                        <div class="card">
                            <div class="card-header">Jauna darbinieka reģistrācija</div>

                            <div class="card-body">
                                @if(Session::has('message-worker-added'))
                                    <p class="alert alert-info">{{ Session::get('message-worker-added') }}</p>
                                @endif
                                <form method="POST" action="/worker/register">
                                    @csrf

                                    <div class="form-group row">
                                        <label for="firstname" class="col-md-4 col-form-label text-md-right">Vārds</label>

                                        <div class="col-md-6">
                                            <input id="firstname" type="text"
                                                   class="form-control{{ $errors->has('firstname') ? ' is-invalid' : '' }}"
                                                   name="firstname" value="{{ old('firstname') }}" required autofocus>

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
                                                   name="lastname" value="{{ old('lastname') }}" required autofocus>

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
                                                   name="email" value="{{ old('email') }}" required>

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
                                        <div class="col-md-6 offset-md-3">
                                            <button type="submit" class="btn btn-primary">
                                                Reģistrēt
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <br>

                        <div class="card">
                            <div class="card-header">Eksistējošie darbinieki:</div>

                            <div class="card-body">
                                @if(Session::has('message-worker-deleted'))
                                    <p class="alert alert-info">{{ Session::get('message-worker-deleted') }}</p>
                                @endif
                                @if(Session::has('message-worker-edited'))
                                    <p class="alert alert-info">{{ Session::get('message-worker-edited') }}</p>
                                @endif
                                @foreach($workers as $worker)
                                    <div class="row">
                                        <div class="col-6">
                                            {{$worker->firstname}} {{$worker->lastname}} {{$worker->email}}
                                        </div>
                                        <div class="col-6">
                                            <a href="/worker/delete/{{$worker->id}}" class="btn btn-primary">Dzēst</a>
                                            <a href="/worker/edit/{{$worker->id}}" class="btn btn-primary">Labot</a>
                                        </div>
                                    </div>
                                    <br>
                                @endforeach
                            </div>
                        </div>

                        <br>

                        <div class="card">
                            <div class="card-header">Eksistējošie projekti</div>

                            <div class="card-body">
                                @if(Session::has('message-project-edited'))
                                    <p class="alert alert-info">{{ Session::get('message-project-edited') }}</p>
                                @endif
                                @if(Session::has('message-project-deleted'))
                                    <p class="alert alert-info">{{ Session::get('message-project-deleted') }}</p>
                                @endif
                                @if(Session::has('message-project-enabled'))
                                    <p class="alert alert-info">{{ Session::get('message-project-enabled') }}</p>
                                @endif
                                @if(Session::has('message-project-disabled'))
                                    <p class="alert alert-info">{{ Session::get('message-project-disabled') }}</p>
                                @endif
                                @foreach($projects as $project)
                                    <div>
                                        <ul>
                                            <li>
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
                                                        <div><b>Darbibas</b></div>
                                                        <div>
                                                            <a href="/worker/edit-project/{{$project->id}}"
                                                               class="btn btn-primary">Labot</a>
                                                            <a href="/worker/delete-project/{{$project->id}}"
                                                               class="btn btn-primary">Dzēst</a>
                                                            @if($project->status == 3)
                                                                Projekts ir atslēgts

                                                                <a href="/worker/enable-project/{{$project->id}}"
                                                                   class="btn btn-primary">Ieslēgt</a>
                                                            @endif
                                                            @if($project->status == 1)
                                                                Projekts ir ieslēgts

                                                                <a href="/worker/disable-project/{{$project->id}}"
                                                                   class="btn btn-primary">Atslēgt</a>
                                                            @endif
                                                        </div>
                                                    </div>
                                                    <div class="col-12 col-md-8">
                                                        <img src="storage/{{ $project->image}}" alt="img">
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <br>

                        <div class="card">
                            <div class="card-header">Pievienot jaunu projektu</div>

                            <div class="card-body">
                                @if(Session::has('message-project-added'))
                                    <p class="alert alert-info">{{ Session::get('message-project-added') }}</p>
                                @endif
                                <form method="post" action="/worker/addProject" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="name" class="col-md-4 col-form-label text-md-right">Projekta
                                            nosaukums:</label>

                                        <div class="col-md-6">
                                            <input class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                   id="name" type="text" name="name" required>
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <label for="desc" class="col-md-4 col-form-label text-md-right">Projekta
                                            apraksts:</label>

                                        <div class="col-md-6">
                                    <textarea class="form-control {{ $errors->has('desc') ? ' is-invalid' : '' }}"
                                              id="desc" type="text" name="desc"
                                              required></textarea>
                                        </div>
                                        @if ($errors->has('desc'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <label for="price" class="col-md-4 col-form-label text-md-right">Projekta cena:</label>

                                        <div class="col-md-6">
                                            <input class="form-control {{ $errors->has('price') ? ' is-invalid' : '' }}"
                                                   id="price" type="text" name="price" required>
                                        </div>
                                        @if ($errors->has('price'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <label for="image" class="col-md-4 col-form-label text-md-right">Projekta bilde:</label>

                                        <div class="col-md-6">
                                            <input class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}"
                                                   id="image" type="file" name="image" required>
                                        </div>
                                        @if ($errors->has('image'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                    <div class="form-group row mb-0">
                                        <div class="col-md-6 offset-md-3">
                                            <button type="submit" class="btn btn-primary">
                                                Pievienot
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <br>

                        <div class="card">
                            <div class="card-header">Pasūtījumi:</div>
                            @if(Session::has('message-order-accepted'))
                                <p class="alert alert-info">{{ Session::get('message-order-accepted') }}</p>
                            @endif
                            @if(Session::has('message-order-denied'))
                                <p class="alert alert-info">{{ Session::get('message-order-denied') }}</p>
                            @endif
                            <div class="card-body">
                                @foreach($orders as $order)
                                    <div class="row">
                                        <div class="col-12">
                                            <ul>
                                                <li><b>Pasūtītājs:</b> {{$order->firstname}} {{$order->lastname}}</li>
                                                <li><b>Projekts:</b> {{$order->name}}</li>
                                                <li><b>Apraksts:</b> {{$order->desc}}</li>
                                                <li><b>Bilde:</b> <a href="/storage/{{$order->image}}">Apskatīt</a></li>
                                                <li><b>Cena:</b> {{$order->price}} EUR</li>
                                            </ul>
                                        </div>
                                        <div class="col-12">
                                            <a class="btn btn-success" href="/worker/accept-order/{{$order->id}}">Pieņemt</a>
                                            <a class="btn btn-danger" href="/worker/deny-order/{{$order->id}}">Noraidīt</a>
                                        </div>
                                    </div>
                                    <br>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>


@endsection
