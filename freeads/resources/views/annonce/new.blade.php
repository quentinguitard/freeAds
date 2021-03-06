@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Publier une Annonce') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('annonce.store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titre') }}</label>

                            <div class="col-md-6">
                                <input id="title" type="text" class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="prix" class="col-md-4 col-form-label text-md-right">{{ __('Prix') }}</label>

                            <div class="col-md-6">
                                <input id="prix" type="text" class="form-control{{ $errors->has('prix') ? ' is-invalid' : '' }}" name="prix" value="{{ old('prix') }}" required>

                                @if ($errors->has('prix'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('prix') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="content" class="col-md-4 col-form-label text-md-right">{{ __('Description de l\'annonce') }}</label>

                            <div class="col-md-6">
                                <textarea id="content" class="form-control{{ $errors->has('content') ? ' is-invalid' : '' }}" name="content" required></textarea>
                                @if ($errors->has('content'))
                                <span class="invalid-feedback">
                                    <strong>{{ $errors->first('content') }}</strong>
                                </span>
                                @endif

                                <input type="file" name="images[]" multiple />

                                @if ($errors->has('images'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('images') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="category" class="col-md-4 col-form-label text-md-right">{{ __('Choisir une catégorie') }}</label>
                            <div class="col-md-6">

                                <select class="custom-select" name='category'>
                                    <option selected>{{ __('Choisir une catégorie') }}</option>
                                    <option value="gardien">Gardien</option>
                                    <option value="defenseur">Defenseur</option>
                                    <option value="milieu">Milieu</option>
                                    <option value="attaquant">Attaquant</option>
                                </select>

                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Publier') }}
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