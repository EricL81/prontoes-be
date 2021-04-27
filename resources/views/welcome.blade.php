@extends('layouts.app')
@section('title')
<title>{{__('ui.welcome')}}</title>
@endsection
@section('content')

<div class="container-fluid mt-0 mx-2 py-3 mt-3 h-auto">
    <div class="row justify-content-center align-items-center my-3">
        <div class="col-12 text-center">
            <h1 class="mb-4 welcome">{{__('ui.welcome')}}</h1>
        </div>
    </div>
    <div class="row row-cols-xl-5 justify-content-center my-5">
        @foreach($categories as $category)
        <div class="col">
            <ul class="d-flex justify-content-center flex-wrap list-unstyled m-0">
                <li class="m-3 flex-shrink-0 d-flex linav justify-content-center"><a class="fw-bold align-items-center d-flex flex-column justify-content-start"
                        href="{{route('detailCategory',['id'=>$category->id])}}"><img
                            src='/img/{{$category->foto}}'><span
                            class="text-center mt-2">{{__("ui.{$category->name}")}}</span></a>
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
<div class="container-fluid mx-0 h-auto container__announcements">

    <div class="row mt-5 px-2 justify-content-center align-items-center h-100" id="5ultimos">
        @foreach($announcements as $announcement)
        <div class="col-12 col-xl-6 h-100 d-flex justify-content-center">
            <div class="card my-3 mx-1 mycard">
                <div class="row">
                    <div class="col-12 col-md-4 col-xl-6 d-flex justify-content-center justify-content-md-start">
                        <img class="img-fluid h-100" style="object-fit: cover;"
                            src="{{$announcement->images->first()->getUrl(300,380)}}" alt="...">
                    </div>
                    <div class="col-12 col-md-8 col-xl-6">
                        <div class="card-body d-flex flex-column h-100">
                            <div>
                                <h5 class="card-title fw-bold fs-2">{{$announcement->name}}</h5>
                                <h6 class="fst-italic"><a class="text-decoration-none" style="color:#5cc9d6e3;"
                                        href="{{route('detailCategory',['id'=>$announcement->category->id])}}">{{__("ui.{$announcement->category->name}")}}</a>
                                </h6>
                                <p class="card-text fs-6 mt-3" style="min-height:100px;">{{$announcement->description}}
                                </p>
                            </div>

                            <div class="mt-3 mt-auto">
                                <div
                                    class="d-flex flex-column flex-sm-row align-items-center justify-content-between my-3">
                                    <span style="color:#7F6BF6;" class="fw-bold fs-4">{{$announcement->price}}
                                        €</span>
                                    <span class="btn-med d-flex align-items-center justify-content-center"><a
                                            class="text-decoration-none text-white"
                                            href="{{route('detailAnnouncement',['id'=>$announcement->id])}}">{{__('ui.adDetail')}}</a></span>
                                </div>
                                <small class="text-muted">{{__('ui.published')}}: <a style="color:#7F6BF6;"
                                        class="text-decoration-none"
                                        href="{{route('user.home',['id'=>$announcement->user->id])}}"><span>{{$announcement->user->name}}</span></a></small><br>

                                <small class="text-muted">{{__('ui.dateAd')}}: <a style="color:#7F6BF6;"
                                        class="text-decoration-none"
                                        href="#"><span>{{$announcement->created_at->format('d/m/Y')}}</span></a></small>
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
