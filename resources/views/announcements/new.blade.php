@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-12 col-md-4 offset-md-4">
            <h2>Sube tu anuncio</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 offset-md-4">
            <form action="{{route('createAnnouncement')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="category" class="form-label">Categoría</label>
                    <select name="category" id="category" class="form-select" aria-label="Default select example">
                        <option selected>Selecciona la categoría</option>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}"
                                        {{old('category') == $category->id ? 'selected' : ''}}>
                                        {{$category->name}}
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
                    <label for="exampleInputname1" class="form-label">Nombre del producto</label>
                    <input value="{{old('name')}}" name="name" type="text" class="form-control" id="exampleInputname1"
                        aria-describedby="nameHelp">
                    <div id="nameHelp" class="form-text">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputdescription1" class="form-label">Descripción</label>
                    <textarea name="description" row="5" type="text" class="form-control text-start" id="exampleInputdescription1">
                    {{old('description')}}
                    </textarea>
                    <div id="nameHelp" class="form-text">
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPrice1" class="form-label">Precio</label>
                    <input value="{{old('price')}}" name="price" type="number" class="form-control"
                        id="exampleInputPrice1">
                    <div id="nameHelp" class="form-text">
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
