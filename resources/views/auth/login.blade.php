@extends('layouts.app')
@section('content')
<div class="container my-5">
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
        <div class="col-12 col-md-4 offset-md-4">
            <h2>{{__('ui.signIn')}}</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 offset-md-4">
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">{{__('ui.hello')}}</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">{{__('ui.neverShareEmail')}}</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">{{__('ui.password')}}</label>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                </div>

                <button type="submit" class="btn btn-primary">{{__('ui.login')}}</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 offset-md-4 text-center mt-3">
            <h6>{{__('ui.noAccount')}}<a href="/register">{{__('ui.registerHere')}}</a></h6>
        </div>
    </div>
</div>

@endsection
