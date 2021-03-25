@extends('layouts.app')
@section('content')
<div class="container h-100 mt-4">
    <div class="row mb-4">
        <div class='col-12 text-center'>
            <h1>Todos los anuncios de {{$category->name}}</h1>
        </div>
    </div>
    <div class="row justify-content-center align-items-center">
        @foreach($category->announcements as $announcement)
        <div class="col-12 col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center"
                        style="background-image: url('/css/img-placeholder.png'); background-position: center; background-size: cover;">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$announcement->name}}</h5>
                            <h6 class="fst-italic">{{$announcement->category->name}}</h6>
                            <p class="card-text">{{$announcement->description}}</p>
                            <div class="d-flex justify-content-between">
                                <span class="text-danger border border-danger rounded-pill p-2">{{$announcement->price}}
                                    €</span>
                                <span class="btn btn-primary"><a class="text-decoration-none text-white"
                                        href="{{route('detailAnnouncement',['id'=>$announcement->id])}}">Ver
                                        anuncio</a></span>
                            </div>

                            <p class="mt-3">
                                <small class="text-muted">Fecha publicación: <a class="text-decoration-none"
                                        href="#"><span
                                            class="text-success">{{$announcement->created_at->format('d/m/Y')}}</span></a></small>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
