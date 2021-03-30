@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="row align-items-center">
        <div class="col-12">
            <div class="card mb-3 mycard">
                <div class="row g-0">
                    <div class="col-md-4">
                        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="https://via.placeholder.com/500x400" class="d-block w-100 image-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/500x400" class="d-block w-100 image-fluid" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="https://via.placeholder.com/500x400" class="d-block w-100 image-fluid" alt="...">
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
                        <div class="card-body d-flex flex-column h-100">

                            <div>
                                <h5 class="card-title">{{$announcement->name}}</h5>
                                <h6 class="fst-italic"><a href="{{route('detailCategory',['id'=>$announcement->category->id])}}">{{__("ui.{$announcement->category->name}")}}</a></h6>
                                <p class="card-text">{{$announcement->description}}</p>
                                <span class="text-danger border border-danger rounded-pill p-2">{{$announcement->price}}
                                    €</span>
                            
                            </div>

                            <div class="mt-auto">
                                <p class="mt-2">
                                    <small class="text-muted">{{__('ui.published')}} <a class="text-decoration-none"
                                            href="{{route('user.home',['id'=>$announcement->user->id])}}"><span
                                                class="text-success">{{$announcement->user->name}}</span></a></small>
                                </p>

                                <p class="mt-2">
                                    <small class="text-muted">{{__('ui.dateAd')}} <a class="text-decoration-none"
                                            href="#"><span
                                                class="text-success">{{$announcement->created_at->format('d/m/Y')}}</span></a></small>
                                </p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
