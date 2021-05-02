<footer class="footer container-fluid footer-color background-be pt-4">
        <div class="row d-flex justify-content-center">
            <div class="col-12 col-md-12 col-lg-4 d-flex align-items-center justify-content-center">
                <a href="{{route('home')}}"><img src="/css/LOGO.png" width="250"
                        class="img-fluid m-2" alt=""></a>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
                <ul class="m-2 text-dark list-unstyled text-center m-2">
                    <li class="footer-link"><a class="fw-bold" href="{{route('home')}}">{{__('ui.start')}}</a></li>
                    <li class="footer-link"><a href="/login">{{__('ui.login')}}</a></li>
                    <li class="footer-link"><a href="/register">{{__('ui.register')}}</a></li>
                    <li class="footer-link"><a href="{{route('newAnnouncement')}}">{{__('ui.newAd')}}</a></li>
                </ul>
            </div>
            <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
                <ul class="m-2 text-dark list-unstyled footer-columns">
                @foreach($categories as $category)
                    <li class="footer-link"><a href="{{route('detailCategory',['id'=>$category->id])}}">{{__("ui.{$category->name}")}}</li>
                @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-center my-2">                
                <a href="{{route('home')}}" class="copyright">© 2021 - Bea Serrano & Eric Lehmann</a>
            </div>
        </div>
</footer>
