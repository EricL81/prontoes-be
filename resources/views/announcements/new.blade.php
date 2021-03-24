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
            <form action="{{route('newAnnouncement')}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputname1" class="form-label">Nombre del producto</label>
                    <input name="name" type="text" class="form-control" id="exampleInputname1"
                        aria-describedby="nameHelp">
                    <div id="nameHelp" class="form-text">
                        @error('name')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputdescription1" class="form-label">Descripción</label>
                    <input name="description" type="text" class="form-control" id="exampleInputdescription1">
                    <div id="nameHelp" class="form-text">
                        @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPrice1" class="form-label">Precio</label>
                    <input name="price" type="number" class="form-control" id="exampleInputPrice1">
                    <div id="nameHelp" class="form-text">
                        @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="">Categoría del producto:</label>
                    <select class="form-select" multiple aria-label="multiple select example">
                    </select>
                </div>
                <div class="mt-2">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>

</div>
@endsection
