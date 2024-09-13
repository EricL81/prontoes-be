<li class="nav-item">
    <form class="formLang" action="{{route('locale',['locale'=>$lang])}}" method="POST">
        @csrf
            <button type="submit" class="nav-link" style="border:none;background-color:transparent;">
                <span class="flag-icon flag-icon-{{$nation}}"><span class="text-uppercase fw-bold ms-4">{{$nation}}</span></span>
            </button>
    </form>
</li>