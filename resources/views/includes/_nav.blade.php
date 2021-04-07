<nav class="navbar navbar-expand-lg navbar-light bg-transparent navborder" id="tophome">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}"><img src="/css/placeholder-logo.png" width="150" alt=""></a>
        <a class="nav-link" aria-current="page" href="{{route('home')}}"><i
                class="bi bi-house-door fs-4 fw-bold house"></i></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="d-flex list-unstyled align-items-center mb-0 mx-auto">
                @guest
                <li class="nav-item btn-grad d-flex align-items-center justify-content-center">
                    <a class="text-decoration-none text-white" href='/login'>{{__('ui.newAd')}}</a>
                </li>
                @endguest

                @auth
                <li class="nav-item btn-grad d-flex align-items-center justify-content-center">
                    <a class="text-decoration-none text-white"
                        href="{{route('newAnnouncement')}}">{{__('ui.newAd')}}</a>
                </li>
                @endauth
            </ul>


            <ul class="d-flex list-unstyled align-items-center mb-0">
                @guest
                <li class="nav-item btn btn-success me-2">
                    <a class="text-decoration-none text-white" href='/login'>{{__('ui.login')}}</a>
                </li>
                <li class="nav-item btn btn-primary">
                    <a class="text-decoration-none text-white" href='/register'>{{__('ui.register')}}</a>
                </li>
                @endguest

                @auth
                @if(Auth::user()->is_revisor)
                <li class="nav-item mx-2 dropdown">
                    <a class="text-decoration-none nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-circle fs-4 profile"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li class="nav-item my-1 ms-1">
                            {{__('ui.hello')}} {{Auth::user()->name}}
                        </li>
                        <li class="nav-item my-1 ms-1 revisor d-flex align-items-center">
                            <a class="text-decoration-none mx-auto d-flex align-items-center"
                                href="{{route('revisor.home')}}">{{__('ui.revisor')}} <span
                                    class="badge rounded-pill my-badge ms-2">{{\App\Models\Announcement::ToBeRevisionedCount()}}</span></a>
                        </li>
                        <li class="nav-item my-1 ms-1">
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="logout" type="submit">{{__('ui.logout')}}</button>
                            </form>
                        </li>
                    </ul>
                </li>
                @else
                <li class="nav-item mx-2">
                    <a class="text-decoration-none" href="#">{{__('ui.hello')}} {{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">{{__('ui.logout')}}</button>
                    </form>
                </li>
                @endif
                @endauth
            </ul>
            <ul class="navbar-nav mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle idiomas" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        {{__('ui.languages')}}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @include('includes._locale',["lang"=>'es',"nation"=>'es'])
                        @include('includes._locale',["lang"=>'en',"nation"=>'gb'])
                        @include('includes._locale',["lang"=>'it',"nation"=>'it'])
                        @include('includes._locale',["lang"=>'fr',"nation"=>'fr'])
                    </ul>
                    <!-- <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($categories as $category)
                        <li><a class="dropdown-item"
                                href="{{route('detailCategory',['id'=>$category->id])}}">{{__("ui.{$category->name}")}}</a>
                        </li>
                        @endforeach
                    </ul> -->
                </li>
            </ul>
        </div>
    </div>
</nav>
