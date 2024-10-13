<li class="nav-item">
    <form class="formLang" action="{{route('locale',['locale'=>$lang])}}" method="POST">
        @csrf
            <button type="submit" class="nav-link ms-2" style="border:none;background-color:transparent;">
                <span class="flag-icon flag-icon-{{$nation}}"><span class="text-uppercase fw-bold ms-4">{{__("ui.{$nation}")}}</span></span>
            </button>
    </form>
</li>