@extends('layouts.app')
@section('content')

<div class="container mt-0 mx-0 h-100">
    <div class="row vw-100 vh-100 masthead justify-content-center align-items-center m-0">
        <div class="col-12 text-center">
            <h1 class="m-0">{{__('ui.welcome')}}</h1>
        </div>
        @foreach($categories as $category)
        <div class="col-12">
            <ul class="d-flex justify-content-center flex-wrap list-unstyled m-0">
                <li class="m-3 flex-shrink-0 d-flex linav" style="background-image: url('/img/{{$category->foto}}');"><a class="text-decoration-none text-white fs-3 fw-bold align-items-center d-flex justify-content-center" href="{{route('detailCategory',['id'=>$category->id])}}"><span>{{__("ui.{$category->name}")}}</span></a></li>
            </ul>
        </div>
        @endforeach
        <div class="col-12 text-center mb-4">
            <p class="m-2">{{__('ui.discover')}} !</p>
            <a href="#5ultimos"><i class="arrow down mb-2"></i></a>
        </div>
    </div>

    <div class="row mt-5 vw-100 justify-content-center align-items-top" id="5ultimos">
        @foreach($announcements as $announcement)
        <div class="col-12 col-md-6">
            <div class="card my-3 mycard" style="max-width:650px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img class="img-fluid h-100" src="{{$announcement->images->first()->getUrl(300,380)}}" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body d-flex flex-column h-100">
                            <div>
                                <h5 class="card-title">{{$announcement->name}}</h5>
                                <h6 class="fst-italic"><a
                                        href="{{route('detailCategory',['id'=>$announcement->category->id])}}">{{__("ui.{$announcement->category->name}")}}</a>
                                </h6>
                                <p class="card-text">{{$announcement->description}}</p>
                                <div class="d-flex justify-content-between mt-5">
                                    <span class="text-danger border border-danger rounded-pill p-2">{{$announcement->price}}
                                        €</span>
                                    <span class="btn-grad"><a class="text-decoration-none text-white"
                                            href="{{route('detailAnnouncement',['id'=>$announcement->id])}}">{{__('ui.adDetail')}}</a></span>
                                </div>
                            
                            </div>
                            
                            <div class="mt-auto">
                                <p class="mt-2">
                                    <small class="text-muted">{{__('ui.published')}}: <a class="text-decoration-none"
                                            href="{{route('user.home',['id'=>$announcement->user->id])}}"><span
                                                class="text-success">{{$announcement->user->name}}</span></a></small>
                                </p>

                                <p class="mt-2">
                                    <small class="text-muted">{{__('ui.dateAd')}}: <a class="text-decoration-none"
                                            href="#"><span
                                                class="text-success">{{$announcement->created_at->format('d/m/Y')}}</span></a></small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        <div class="row my-3">
            <div class="col-12 col-md-8 offset-md-2">
            {{$announcements->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
