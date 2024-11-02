<nav class="navbar navbar-expand-lg navbar-light background-be border-gradient" id="tophome">
    <div class="container-fluid">
        <div class="d-flex align-items-center">
            <a class="navbar-brand" href="{{route('home')}}"><img class="ms-3" src="/css/IMA.png" width="90" alt=""></a>
            <div class="home-wrapper">
                <a class="icon__home" aria-current="page" href="{{route('home')}}">
                <ion-icon name="home"></ion-icon>
            </a>
            </div>
        </div>


        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex justify-content-lg-between" id="navbarSupportedContent">
            <ul class="d-flex list-unstyled justify-content-center align-items-center my-2 mx-auto">
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
            <form class="mx-auto my-2 search flex-nowrap" action="{{route('search')}}" method="GET" class="d-flex">
                <input class="form-control me-2 rounded-pill search__input" name="q" type="search"
                    placeholder="{{__('ui.search')}}..." aria-label="Search">
                <button class="search__icon" type="submit">
                    <ion-icon name="search"></ion-icon>
                </button>
            </form>
            <div class="d-flex justify-content-center">
                <ul class="list-unstyled d-flex flex-column justify-content-around align-items-center mb-0">
                    @guest
                    <li class="nav-item me-2">
                        <a class="text-decoration-none login d-flex align-items-center justify-content-center fw-bold fs-6"
                            href='/login'>{{__('ui.login')}}</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="register d-flex align-items-end justify-content-center fw-bold fs-6"
                            href='/register'>{{__('ui.register')}}</a>
                    </li>
                    @endguest

                    @auth
                    @if(Auth::user()->is_revisor)
                    <li class="mx-4 dropdown">
                        <a class="icon__account text-decoration-none" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <ion-icon name="person"></ion-icon>
                        </a>
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
                        <a class="text-decoration-none" href="#" style="color:var(--main-color);">{{__('ui.hello')}}
                            {{Auth::user()->name}}</a>
                    </li>
                    <li class="nav-item">
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="logout me-2" type="submit">{{__('ui.logout')}}</button>
                        </form>
                    </li>
                    @endif
                    @endauth
                </ul>
                <ul class="d-flex list-unstyled justify-content-center align-items-center mb-lg-0">
                    <li class="dropdown">
                        <a class="icon__world text-decoration-none" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" data-bs-target="#lang">
                            <ion-icon name="globe-outline"></ion-icon>
                        </a>
                        {{-- Modal Languages --}}
                        <ul class="dropdown-menu language-menu" aria-labelledby="navbarDropdown">
                            @include('includes._locale',["lang"=>'es',"nation"=>'es'])
                            @include('includes._locale',["lang"=>'en',"nation"=>'gb'])
                            @include('includes._locale',["lang"=>'it',"nation"=>'it'])
                            @include('includes._locale',["lang"=>'fr',"nation"=>'fr'])
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
