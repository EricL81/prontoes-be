@extends('layouts.app')
@section('title')
<title>{{__('ui.login')}} - Pronto-BE</title>
@endsection
@section('content')
<div class="container-fluid my-5">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <div class="row">
        <div class="col-12 col-md-4 offset-md-4 mb-2">
            <h2 class="fs-3 fw-bold text-center">{{__('ui.signIn')}}</h2>
        </div>
    </div>
    <div class="row m-2">
        <div class="form-login col-12 col-lg-4 offset-lg-4 p-5 background-be">
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{__('ui.email')}}</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">{{__('ui.neverShareEmail')}}</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{__('ui.password')}}</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn-grad border-0 mt-4" style="width:100%;">{{__('ui.login')}}</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 offset-md-4 text-center mt-3">
            <h6>{{__('ui.noAccount')}} <br><a class="link-simple" href="/register">{{__('ui.registerHere')}}</a></h6>
        </div>
    </div>
</div>

@endsection
