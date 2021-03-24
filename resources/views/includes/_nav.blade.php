<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{route('home')}}">Pronto.es</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('home')}}">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Categorías
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Todas las categorías</a></li>
                        @foreach($categories as $category)
                        <li><a class="dropdown-item" href="#">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </li>
            </ul>
            <ul class="d-flex list-unstyled align-items-center mb-0">

                @guest
                <li class="nav-item btn btn-warning me-2">
                    <a class="text-decoration-none text-white" href='/login'>Sube tu anuncio</a>
                </li>
                @endguest

                @auth
                <li class="nav-item btn btn-warning me-2">
                    <a class="text-decoration-none text-white" href="{{route('newAnnouncement')}}">Sube tu anuncio</a>
                </li>
                @endauth
            </ul>
            <ul class="d-flex list-unstyled align-items-center mb-0">
                @guest
                <li class="nav-item btn btn-success me-2">
                    <a class="text-decoration-none text-white" href='/login'>Inicia sesión</a>
                </li>
                <li class="nav-item btn btn-primary">
                    <a class="text-decoration-none text-white" href='/register'>Regístrate</a>
                </li>
                @endguest

                @auth
                <li class="nav-item mx-2">
                    <a class="text-decoration-none" href="#">Hola {{Auth::user()->name}}</a>
                </li>
                <li class="nav-item">
                    <form action="/logout" method="POST">
                        @csrf
                        <button class="btn btn-danger" type="submit">Logout</button>
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>
