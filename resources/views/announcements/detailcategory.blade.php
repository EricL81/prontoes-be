@extends('layouts.app')
@section('content')
<div class="container h-100 mt-4">
    <div class="row mb-4">
        <div class='col-12 text-center'>
            <h1>Todos los anuncios de {{$category->name}}</h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        @foreach($category->announcements as $announcement)
        <div class="col-12 col-md-6">
            <div class="card mb-3" style="max-width: 650px;">
                <div class="row g-0">
                    <div class="col-md-4">
                    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://via.placeholder.com/300x330" class="d-block w-100 image-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/300x330" class="d-block w-100 image-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/300x330" class="d-block w-100 image-fluid" alt="...">
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
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$announcement->name}}</h5>
                            <h6 class="fst-italic">{{$announcement->category->name}}</h6>
                            <p class="card-text">{{$announcement->description}}</p>
                            <div class="d-flex justify-content-between">
                                <span class="text-danger border border-danger rounded-pill p-2">{{$announcement->price}}
                                    €</span>
                                <span class="btn btn-primary"><a class="text-decoration-none text-white"
                                        href="{{route('detailAnnouncement',['id'=>$announcement->id])}}">Ver
                                        anuncio</a></span>
                            </div>

                            <p class="mt-3">
                                <small class="text-muted">Fecha publicación: <a class="text-decoration-none"
                                        href="#"><span
                                            class="text-success">{{$announcement->created_at->format('d/m/Y')}}</span></a></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
