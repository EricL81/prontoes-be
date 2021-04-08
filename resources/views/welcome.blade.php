@extends('layouts.app')
@section('content')

<div class="container-fluid mt-0 mx-0 py-3 my-5 h-100">
    <div class="row justify-content-center align-items-center my-3">
        <div class="col-12 text-center">
            <h1 class="m-0">{{__('ui.welcome')}}</h1>
        </div>
    </div>
    <div class="row row-cols-xl-5 justify-content-center align-items-center my-5">
        @foreach($categories as $category)
        <div class="col">
            <ul class="d-flex justify-content-center flex-wrap list-unstyled m-0">
                <li class="m-3 flex-shrink-0 d-flex linav justify-content-center"><a
                        class="fw-bold align-items-center d-flex justify-content-center"
                        href="{{route('detailCategory',['id'=>$category->id])}}"><span>{{__("ui.{$category->name}")}}</span></a>
                </li>
            </ul>
        </div>
        @endforeach
    </div>
    <div class="row justify-content-center align-items-center">
        <div class="col-12 text-center my-2">
            <p class="m-2">{{__('ui.discover')}} !</p>
            <a href="#5ultimos"><i class="arrow down mb-2"></i></a>
        </div>
    </div>
</div>
<div class="container mt-0 m-4 h-100">
    <div class="row mt-5 vw-100 justify-content-center align-items-top" id="5ultimos">
        @foreach($announcements as $announcement)
        <div class="col-12 col-xl-6 m-auto">
            <div class="card my-3 mycard">
                <div class="row">
                    <div class="col-12 col-md-3 col-xl-6">
                        <img class="img-fluid h-100 p-3" style="object-fit: cover;" src="{{$announcement->images->first()->getUrl(300,380)}}"
                            alt="...">
                    </div>
                    <div class="col-12 col-md-9 col-xl-6">
                        <div class="card-body d-flex flex-column h-100">
                            <div>
                                <h5 class="card-title fw-bold fs-2">{{$announcement->name}}</h5>
                                <h6 class="fst-italic"><a class="text-decoration-none" style="color:#5cc9d6e3;" href="{{route('detailCategory',['id'=>$announcement->category->id])}}">{{__("ui.{$announcement->category->name}")}}</a>
                                </h6>
                                <p class="card-text fs-6" style="min-height:100px;">{{$announcement->description}}</p>
                                <div class="d-flex justify-content-between mt-5">
                                    <span
                                    style="color:#7F6BF6;" class="fw-bold fs-4">{{$announcement->price}}
                                        €</span>
                                    <span class="btn-med d-flex align-items-center justify-content-center"><a class="text-decoration-none text-white"
                                            href="{{route('detailAnnouncement',['id'=>$announcement->id])}}">{{__('ui.adDetail')}}</a></span>
                                </div>

                            </div>

                            <div class="mt-3">
                                    <small class="text-muted">{{__('ui.published')}}: <a style="color:#7F6BF6;" class="text-decoration-none" href="{{route('user.home',['id'=>$announcement->user->id])}}"><span>{{$announcement->user->name}}</span></a></small><br>
                                            
                                    <small class="text-muted">{{__('ui.dateAd')}}: <a style="color:#7F6BF6;" class="text-decoration-none" href="#"><span>{{$announcement->created_at->format('d/m/Y')}}</span></a></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="row my-3">
            <div class="col-12 d-flex justify-content-center">
                {{$announcements->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
