@extends('layouts.app')
@section('content')
<div class='container'>
    @if($announcement)
    <div class='row my-4'>
        <div class='col-12'>
            <div class="card">
                <div class="card-header">
                    Anuncio #{{$announcement->id}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <h3>Usuario</h3>
                        </div>
                        <div class="col-12 col-md-9 d-flex">
                            <p><span class="text-muted">User id: </span>#{{$announcement->user->id}}</p>
                            <p class="mx-4"><span class="text-muted">Nombre: </span>{{$announcement->user->name}}</p>
                            <p><span class="text-muted">Email: </span>{{$announcement->user->email}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <h3>Titulo</h3>
                        </div>
                        <div class="col-12 col-md-9">
                            {{$announcement->name}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <h3>Descripción</h3>
                        </div>
                        <div class="col-12 col-md-9">
                            {{$announcement->description}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                            <div class="col-12 col-md-3 d-flex align-items-center">
                                <h3>Fotos</h3>
                            </div>
                            <div class="col-12 col-md-9 d-flex justifify-content-center">
                                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img src="https://via.placeholder.com/300x240"
                                                class="d-block mw-100 image-fluid" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://via.placeholder.com/300x240"
                                                class="d-block mw-100 image-fluid" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="https://via.placeholder.com/300x240"
                                                class="d-block mw-100 image-fluid" alt="...">
                                        </div>
                                    </div>
                                    <button class="carousel-control-prev" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button"
                                        data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <form action="{{route('revisor.announcement.reject',['id'=>$announcement->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-lg btn-danger">Rechazar</button>
            </form>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <form action="{{route('revisor.announcement.accept',['id'=>$announcement->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-lg btn-success">Acceptar</button>
            </form>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-12 text-center text-success">
            <h3>No hay ningun anuncio para revisar.</h3>
        </div>
    </div>
    @endif
</div>
@endsection
