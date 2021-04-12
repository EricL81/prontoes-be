<nav class="navbar navbar-expand-lg navbar-light bg-light background-be border-gradient mb-3" id="tophome">
    <div class="container-fluid">
        <div class="d-flex">
            <a class="navbar-brand" href="{{route('home')}}"><img class="ms-3" src="/css/IMA.png" width="90" alt=""></a>
            <a class="nav-link d-flex align-items-center" aria-current="page" href="{{route('home')}}"><img
                    src='/img/home.png'></a>
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
            <form class="mx-auto my-2 d-flex align-items-center flex-nowrap" action="{{route('search')}}" method="GET" class="d-flex">
                <input class="form-control me-2 rounded-pill" name="q" type="search" placeholder="{{__('ui.search')}}..." aria-label="Search">
                <button class="btn-med" style="border:none;" type="submit">{{__('ui.search')}}</button>
            </form>
            <div class="d-flex justify-content-center">
                <ul class="d-flex list-unstyled justify-content-center align-items-center mb-0">
                    @guest
                    <li class="nav-item me-2">
                        <a class="text-decoration-none login d-flex align-items-center justify-content-center fw-bold fs-6"
                            href='/login'>{{__('ui.login')}}</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="text-decoration-none register d-flex align-items-center justify-content-center fw-bold fs-6"
                            href='/register'>{{__('ui.register')}}</a>
                    </li>
                    @endguest

                    @auth
                    @if(Auth::user()->is_revisor)
                    <li class="nav-item mx-4 dropdown">
                        <a class="text-decoration-none dropdown-toggle link-simple" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false"><img src='/img/user.png'></a>
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
                <ul class="d-flex align-items-center navbar-nav mb-lg-0 ">
                    <li class="nav-item dropdown idiomas align-items-center">
                        <a class="text-decoration-none text-muted dropdown-toggle" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    </div>
</nav>
