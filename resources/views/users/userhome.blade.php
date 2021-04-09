@extends('layouts.app')
@section('content')

<div class="container-fluid h-auto mt-4">
    <div class="row mb-4">
        <div class='col-12 text-center'>
            <h1>{{__('ui.allAdsFrom')}} <span style="color: #5cc9d6e3">{{$user->name}}</span></h1>
        </div>
    </div>
    <div class="row mt-5 vw-100 justify-content-center align-items-top" id="5ultimos">
        @foreach($announcements as $announcement)
        <div class="col-12 col-xl-6 d-flex justify-content-center">
            <div class="card my-3 mycard w-100" style="max-width:800px;">
                <div class="row">
                    <div class="col-12 col-md-4 col-xl-6 d-flex justify-content-center">
                        <img class="img-fluid h-100 p-3" style="object-fit: cover;"
                            src="{{$announcement->images->first()->getUrl(300,380)}}" alt="...">
                    </div>
                    <div class="col-6 col-md-8 col-xl-6">
                        <div class="card-body d-flex flex-column h-100">
                            <div>
                                <h5 class="card-title fw-bold fs-2">{{$announcement->name}}
                                    @if($announcement->is_accepted)
                                    <span><i class="bi bi-hand-thumbs-up fs-3" style="color:green;"></i></span>
                                    @else
                                    <span><i class="bi bi-hand-thumbs-down fs-3" style="color:red;"></i></span>
                                    @endif                               
                                </h5>
                                <h6 class="fst-italic"><a class="text-decoration-none" style="color:#5cc9d6e3;" href="{{route('detailCategory',['id'=>$announcement->category->id])}}">{{__("ui.{$announcement->category->name}")}}</a>
                                </h6>
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
                                            
                                    <small class="text-muted">{{__('ui.dateAd')}}: <a style="color:#7F6BF6;" class="text-decoration-none" href="#"><span>{{$announcement->created_at->format('d/m/Y')}}</span></a></small>
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
