@extends('layouts.app')
@section('content')
<div class="container mt-4">
    <div class="row align-items-center">
        <div class="col-12 m-auto">
            <div class="card mb-3 mycard">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div id="carouselExampleControls" class="carousel slide carousel-fade h-100" data-bs-ride="carousel">
                            <div class="carousel-inner w-100 h-100">
                                @foreach ($announcement->images as $image)
                                    <div class="carousel-item w-100 h-100 @if($loop->first)active @endif">
                                        <img class="img-fluid w-100 h-100 p-3" style="object-fit: cover;" src="{{$image->getUrl(500,400)}}" alt="...">
                                    </div>
                                @endforeach             
                            </div>
                            <button class="carousel-control-prev" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next me-3" type="button"
                                data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="card-body d-flex flex-column h-100">
                            <div>
                                <h5 class="card-title fw-bold fs-2">{{$announcement->name}}</h5>
                                <h6 class="fst-italic"><a class="text-decoration-none" style="color:#5cc9d6e3;" href="{{route('detailCategory',['id'=>$announcement->category->id])}}">{{__("ui.{$announcement->category->name}")}}</a></h6>
                                <p class="card-text fs-6 mt-3" style="min-height:100px;">{{$announcement->description}}</p>
                            </div>

                            <div class="mt-3 mt-auto">
                                <div class="d-flex flex-column flex-md-row align-items-center justify-content-between my-3">
                                    <span
                                    style="color:#7F6BF6;" class="fw-bold fs-4">{{$announcement->price}}
                                        €</span>
                                    <!-- <span class="btn-med d-flex align-items-center justify-content-center"><a class="text-decoration-none text-white"
                                            href="{{route('detailAnnouncement',['id'=>$announcement->id])}}">{{__('ui.adDetail')}}</a></span> -->
                                </div>
                                    <small class="text-muted">{{__('ui.published')}}: <a style="color:#7F6BF6;" class="text-decoration-none" href="{{route('user.home',['id'=>$announcement->user->id])}}"><span>{{$announcement->user->name}}</span></a></small><br>
                                            
                                    <small class="text-muted">{{__('ui.dateAd')}}: <a style="color:#7F6BF6;" class="text-decoration-none" href="#"><span>{{$announcement->created_at->format('d/m/Y')}}</span></a></small>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


