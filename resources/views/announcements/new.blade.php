@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-4 offset-md-4">
            <h2>{{__("ui.uploadAd")}}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 offset-md-4">
            <form action="{{route('createAnnouncement')}}" method="POST">
                @csrf
                <div class="card-header">
                    Nuevo anuncio (Secret: {{$uniqueSecret}})
                </div>
                <input type="hidden" name="uniqueSecret" value="{{$uniqueSecret}}">
                <div class="mb-3">
                    <label for="category" class="form-label">{{__("ui.categorie")}}</label>
                    <select name="category" id="category" class="form-select" aria-label="Default select example">
                        <option value="" selected>{{__("ui.selectCategorie")}}</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}" {{old('category') == $category->id ? 'selected' : ''}}>
                            {{__("ui.{$category->name}")}}
                        </option>
                        @endforeach
                    </select>
                    <div id="nameHelp" class="form-text">
                        @error('category')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">{{__("ui.nameAd")}}</label>
                    <input value="{{old('name')}}" name="name" type="text" class="form-control" id="exampleInputname1"
                        aria-describedby="nameHelp">
                    <div id="nameHelp" class="form-text">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputdescription1" class="form-label">{{__("ui.description")}}</label>
                    <textarea name="description" row="5" type="text" class="form-control text-start"
                        id="exampleInputdescription1">{{old('description')}}</textarea>
                    <div id="nameHelp" class="form-text">
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPrice1" class="form-label">{{__("ui.price")}}</label>
                    <input value="{{old('price')}}" name="price" type="number" class="form-control"
                        id="exampleInputPrice1">
                    <div id="nameHelp" class="form-text">
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="announcementImages" class="form-label">Imagenes</label>
                    <div class="dropzone" id="drophere"></div>
                    @error('images')
                    <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary">{{__("ui.submit")}}</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
