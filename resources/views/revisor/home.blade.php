@extends('layouts.app')
@section('content')
<div class='container'>
    @if($announcement)
    <div class='row my-4'>
        <div class='col-12'>
            <div class="card">
                <div class="card-header">
                    {{__("ui.ad")}} #{{$announcement->id}}
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <h3>{{__("ui.user")}}</h3>
                        </div>
                        <div class="col-12 col-md-9 d-flex">
                            <p><span class="text-muted">{{__("ui.user")}} id: </span>#{{$announcement->user->id}}</p>
                            <p class="mx-4"><span class="text-muted">{{__("ui.name")}}:
                                </span>{{$announcement->user->name}}</p>
                            <p><span class="text-muted">{{__("ui.email")}}: </span>{{$announcement->user->email}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <h3>{{__("ui.nameAd")}}</h3>
                        </div>
                        <div class="col-12 col-md-9">
                            {{$announcement->name}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-3">
                            <h3>{{__("ui.description")}}</h3>
                        </div>
                        <div class="col-12 col-md-9">
                            {{$announcement->description}}
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-3 d-flex align-items-center">
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

                                    <p><span class="fw-bold">Id: </span>{{$image->id}}</p>
                                    <p><span class="fw-bold">Archivo: </span>{{$image->file}}</p>
                                    <p><span class="fw-bold">URL: </span>{{Storage::url($image->file)}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <form action="{{route('revisor.announcement.reject',['id'=>$announcement->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-lg btn-danger">{{__("ui.reject")}}</button>
            </form>
        </div>
        <div class="col-md-6 d-flex justify-content-end">
            <form action="{{route('revisor.announcement.accept',['id'=>$announcement->id])}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-lg btn-success">{{__("ui.accept")}}</button>
            </form>
        </div>
    </div>
    @else
    <div class="row">
        <div class="col-12 text-center text-success">
            <h3>{{__("ui.noAdsInRevisor")}}</h3>
        </div>
    </div>
    @endif
</div>
@endsection
