@extends('layouts.app')
@section('title')
<title>{{__('ui.welcome')}}</title>
@endsection
@section('content')

<section class="categories">
    <div class="container-fluid px-0 py-3 h-auto .container__categories">
        <div class="row justify-content-center align-items-center my-3">
            <div class="col-12 text-center px-0">
                <h1 class="my-4 px-3 welcome text-center">{{__('ui.welcome')}}</h1>
            </div>
        </div>
        <div class="row row-cols-xl-5 justify-content-center my-5">
            @foreach($categories as $category)
            <div class="col">
                <ul class="d-flex justify-content-center flex-wrap list-unstyled my-4">
                    <li class="mx-1 flex-shrink-0 d-flex linav" style="background-image: url('/img/{{$category->foto}}');"><a class="text-decoration-none text-white fs-3 fw-bold align-items-center d-flex justify-content-center" href="{{route('detailCategory',['id'=>$category->id])}}"><span class="text-center">{{__("ui.{$category->name}")}}</span></a></li>
    
                </ul>
            </div>
            @endforeach
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-12 text-center">
                <p class="m-2">{{__('ui.discover')}} !</p>
                <a href="#5ultimos"><i class="arrow down mb-2"></i></a>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid mx-0 h-auto container__announcements">
    <div class="row py-3 justify-content-center align-items-center h-100" id="5ultimos">
        @foreach($announcements as $announcement)
        <div class="col-12 col-xl-6 h-100 d-flex justify-content-center">
            <div class="card mb-4 mx-1 mycard">
                <div class="row">
                    <div class="col-12 col-md-4 col-xl-6 d-flex justify-content-center justify-content-md-start">
                        <img class="img-fluid h-100" style="object-fit: cover;"
                            src="{{$announcement->images->first()->getUrl(300,380)}}" alt="...">
                    </div>
                    <div class="col-12 col-md-8 col-xl-6 ps-lg-0">
                        <div class="card-body d-flex flex-column h-100">
                            <div>
                                <h5 class="card-title fw-bold fs-2">{{$announcement->name}}</h5>
                                <h6 class="fst-italic"><a class="text-decoration-none" style="color: var(--main-light); text-shadow: 1px 1px 0px var(--main-colordark);"
                                        href="{{route('detailCategory',['id'=>$announcement->category->id])}}">{{__("ui.{$announcement->category->name}")}}</a>
                                </h6>
                                <p class="card-text fs-6 mt-3" style="min-height:100px;">{{$announcement->description}}
                                </p>
                            </div>

                            <div class="mt-3 mt-auto">
                                <div
                                    class="d-flex flex-column flex-sm-row align-items-center justify-content-between my-3">
                                    <span style="color: var(--main-color); text-shadow: 1px 1px 0px var(--main-light);" class="fw-bold fs-4">{{$announcement->price}}
                                        €</span>
                                    <span class="btn-med d-flex align-items-center justify-content-center"><a
                                            class="text-decoration-none text-white"
                                            href="{{route('detailAnnouncement',['id'=>$announcement->id])}}">{{__('ui.adDetail')}}</a></span>
                                </div>
                                <small class="text-muted">{{__('ui.published')}}: <a style="color:var(--main-color);"
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
