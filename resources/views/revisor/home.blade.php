@extends('layouts.app')
@section('title')
<title>{{__('ui.revisor')}} - Pronto.es</title>
@endsection
@section('content')
<div class='container-fluid h-100 align-content-center'>
    <div class="content-wrapper">
        @if($announcement)
            <div class='row my-4'>
                <div class='col-12'>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between">
                            <span>{{__("ui.ad")}} #{{$announcement->id}}</span>
                            <span>{{$announcement->created_at->format('d/m/Y')}}</span>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <h3>{{__("ui.user")}}</h3>
                                </div>
                                <div class="col-12 col-md-8 d-flex align-items-center">
                                    <p><span style="color:var(--main-color);">{{__("ui.user")}} id: </span>#{{$announcement->user->id}}</p>
                                    <p class="mx-4"><span style="color:var(--main-color);">{{__("ui.name")}}:
                                </span>{{$announcement->user->name}}</p>
                                    <p><span style="color:var(--main-color);">{{__("ui.email")}}: </span>{{$announcement->user->email}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <h3>{{__("ui.nameAd")}}</h3>
                                </div>
                                <div class="col-12 col-md-8 fs-4" style="color:var(--main-color);">
                                    {{$announcement->name}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <h3>{{__("ui.description")}}</h3>
                                </div>
                                <div class="col-12 col-md-8">
                                    {{$announcement->description}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12 col-md-4 d-flex align-items-center">
                                    <h3>{{__("ui.images")}}</h3>
                                </div>
                                <div class="col-12">
                                    @foreach ($announcement->images as $image)
                                        <div class="row mb-2 border-bottom">
                                            <div class="col-md-4">
                                                <img class="border rounded-3 my-2 img-fluid" src="{{$image->getUrl(300,300)}}" alt="...">
                                            </div>
                                            <div class="col-md-8">
                                                <p class="d-flex align-items-center fw-bold">Adult: <span class="{{$image->adult}} circle d-inline-block mx-2"></span></p>
                                                <p class="d-flex align-items-center fw-bold">Spoof: <span class="{{$image->spoof}} circle d-inline-block mx-2"></span></p>
                                                <p class="d-flex align-items-center fw-bold">Medical: <span class="{{$image->medical}} circle d-inline-block mx-2"></span></p>
                                                <p class="d-flex align-items-center fw-bold">Violence: <span class="{{$image->violence}} circle d-inline-block mx-2"></span></p>
                                                <p class="d-flex align-items-center fw-bold">Racy: <span class="{{$image->racy}} circle d-inline-block mx-2"></span></p>

                                                <p class="fw-bold">Labels:
                                                <ul>
                                                    @if($image->labels)
                                                        @foreach ($image->labels as $label)
                                                            <li>{{ $label }}</li>
                                                        @endforeach
                                                    @endif
                                                </ul>


                                                <!-- <p><span class="fw-bold">Id: </span>{{$image->id}}</p>
                                    <p><span class="fw-bold">Archivo: </span>{{$image->file}}</p>
                                    <p><span class="fw-bold">URL: </span>{{Storage::url($image->file)}}</p> -->
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="row my-3">
                                <div class="col-md-6 my-1 d-flex justify-content-center justify-content-md-start">
                                    <form class="w-75" action="{{route('revisor.announcement.reject',['id'=>$announcement->id])}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-lg w-100 btn-outline-danger">{{__("ui.reject")}}</button>
                                    </form>
                                </div>
                                <div class="col-md-6 my-1 d-flex justify-content-center justify-content-md-end">
                                    <form class="w-75" action="{{route('revisor.announcement.accept',['id'=>$announcement->id])}}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-lg w-100 btn-outline-success">{{__("ui.accept")}}</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <div class="row">
                <div class="col-12 text-center mt-5 text-success">
                    <h3>{{__("ui.noAdsInRevisor")}}</h3>
                </div>
            </div>
        @endif
    </div>
</div>
@endsection
