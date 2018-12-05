@extends('layouts.app')

@section('content')
    <div class="content">
        <section class="custom-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading text-uppercase">Projekti</h2>
                        <a href="/worker">Atpakaļ</a>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="card-header">Rediģēt projektu</div>
                        <div class="card-body">
                            <form method="POST" action="/worker/edit-project/{{$project->id}}" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group row">
                                    <label for="name" class="col-md-4 col-form-label text-md-right">Nosaukums</label>

                                    <div class="col-md-6">
                                        <input id="name" type="text"
                                               class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                               name="name" value="{{ $project->name }}" required autofocus>

                                        @if ($errors->has('name'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="desc" class="col-md-4 col-form-label text-md-right">Apraksts</label>

                                    <div class="col-md-6">
                                    <textarea id="desc" type="text"
                                              class="form-control{{ $errors->has('desc') ? ' is-invalid' : '' }}"
                                              name="desc" required autofocus>{{ $project->desc }}</textarea>

                                        @if ($errors->has('desc'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('desc') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="price" class="col-md-4 col-form-label text-md-right">Cena</label>

                                    <div class="col-md-6">
                                        <input id="price" type="text"
                                               class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}"
                                               name="price" value="{{ $project->price }}" required>

                                        @if ($errors->has('price'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                        @endif
                                    </div>
                                </div>


                                {{--Image div (image-visible)--}}
                                <div data-show="1">
                                    <div class="form-group row">
                                        <div for="image" class="col-md-4 col-form-label text-md-right">Bilde</div>
                                    </div>
                                    <img style="height: 250px;width: 200px;object-fit: cover;" src="/storage/{{$project->image}}" alt="img">

                                    <button type="button" class="btn btn-primary" data-show-trigger>Mainīt bildi</button>
                                </div>

                                <div class="form-group row" data-showable="1">
                                    <label for="image" class="col-md-4 col-form-label text-md-right">Bilde</label>

                                    <div class="col-md-6">
                                        <input id="image" type="file"
                                               class="form-control{{ $errors->has('image') ? ' is-invalid' : '' }}"
                                               name="image" data-add-required>

                                        @if ($errors->has('image'))
                                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
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
        </section>
    </div>


@endsection
