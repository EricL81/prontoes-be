@extends('layouts.app')
@section('content')
<div class="container h-100 mt-4">
    <div class="row justify-content-center align-items-center">
        @foreach($category->announcements as $announcement)
        <div class="col-12 col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4 d-flex align-items-center">
                        <img class="mw-100" src="css/img-placeholder.png" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">{{$announcement->name}}</h5>
                            <h6 class="fst-italic">{{$announcement->category->name}}</h6>
                            <p class="card-text">{{$announcement->description}}</p>
                            <span class="text-danger border border-danger rounded-pill p-2">{{$announcement->price}}
                                €</span>
                            <p class="mt-3">
                                <small class="text-muted">Anuncio publicado por: <a class="text-decoration-none"
                                        href="#"><span
                                            class="text-success">{{$announcement->user->name}}</span></a></small>
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