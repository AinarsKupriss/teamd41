@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Darbinieks</div>

                    <div class="card-body">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec id accumsan ex, at molestie sem.
                        In tincidunt pellentesque augue, nec dictum orci ultrices ac. Aenean purus lorem, vulputate non
                        neque eget, malesuada sollicitudin arcu. Aliquam mollis ante vitae urna scelerisque bibendum. In
                        sit amet rhoncus felis. Phasellus eget nisl egestas augue vehicula vestibulum. Aenean et auctor
                        sem. Maecenas commodo quis quam laoreet tincidunt. Donec nec mattis eros.
                    </div>
                </div>

                <br>

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
                                <div class="col-md-6 offset-md-4">
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
                                    <a href="/worker/delete/{{$worker->id}}" class="btn btn-primary">Delete</a>
                                    <a href="/worker/edit/{{$worker->id}}" class="btn btn-primary">Edit</a>
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
                        @foreach($projects as $project)
                            <div>
                                <ul>
                                    <li>{{ $project->name}} </li>
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
                                <label for="name" class="col-md-4 col-form-label text-md-right">Projekta nosaukums:</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="name" type="text" name="name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="desc" class="col-md-4 col-form-label text-md-right">Projekta apraksts:</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" id="desc" type="text" name="desc" required></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="price" class="col-md-4 col-form-label text-md-right">Projekta cena:</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="price" type="text" name="price" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-md-4 col-form-label text-md-right">Projekta bilde:</label>

                                <div class="col-md-6">
                                    <input class="form-control" id="image" type="file" name="image" required>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Pievienot
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
