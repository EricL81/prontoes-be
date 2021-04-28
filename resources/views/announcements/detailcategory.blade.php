@extends('layouts.app')
@section('title')
<title>{{__("ui.{$category->name}")}} - Pronto.es</title>
@endsection
@section('content')
<div class="container-fluid h-auto mt-4" style="min-height: 450px;">
    <div class="row mb-4">
        <div class='col-12 text-center'>
            <h1>{{__('ui.allAdsFrom')}} <span style="color: var(--main-light); text-shadow: 1px 1px 0px var(--main-colordark)">{{__("ui.{$category->name}")}}</span></h1>
        </div>
    </div>
    <div class="row vw-100 justify-content-center align-items-center">
        @forelse($announcements as $announcement)
        <div class="col-12 col-xl-6 d-flex justify-content-center">
            <div class="card my-3 mycard">
                <div class="row">
                    <div class="col-12 col-md-4 col-xl-6 d-flex justify-content-center">
                        <img class="img-fluid h-100 p-3" style="object-fit: cover;" src="{{$announcement->images->first()->getUrl(300,380)}}"
                            alt="...">
                    </div>
                    <div class="col-12 col-md-8 col-xl-6">
                        <div class="card-body d-flex flex-column h-100">
                            <div>
                                <h5 class="card-title fw-bold fs-2">{{$announcement->name}}</h5>
                                <p class="card-text fs-6 mt-3" style="min-height:100px;">{{$announcement->description}}</p>
                            </div>

                            <div class="mt-3 mt-auto">
                                <div class="d-flex flex-column flex-sm-row align-items-center justify-content-between my-3">
                                    <span
                                    style="color:#7F6BF6;" class="fw-bold fs-4">{{$announcement->price}}
                                        €</span>
                                    <span class="btn-med d-flex align-items-center justify-content-center"><a class="text-decoration-none text-white"
                                            href="{{route('detailAnnouncement',['id'=>$announcement->id])}}">{{__('ui.adDetail')}}</a></span>
                                </div>
                                    <small class="text-muted">{{__('ui.published')}}: <a style="color:#7F6BF6;" class="text-decoration-none" href="{{route('user.home',['id'=>$announcement->user->id])}}"><span>{{$announcement->user->name}}</span></a></small><br>
                                            
                                    <small class="text-muted">{{__('ui.dateAd')}}: <a style="color:#7F6BF6;" class="text-decoration-none" href="#"><span>{{$announcement->created_at->format('d/m/Y')}}</span></a></small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3 text-center" style="color: var(--main-color);">
                <p>{{__('ui.noAdsInCategory')}}</p>
            </div>
        </div>
        @endforelse
        <div class="row my-3">
            <div class="col-12 d-flex justify-content-center">
                {{$announcements->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
