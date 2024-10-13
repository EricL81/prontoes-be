<footer class="container-fluid footer-color background-be">
    
    <div class="row d-flex justify-content-center pt-3">
        <div class="col-12 col-lg-4 d-flex flex-column align-items-center justify-content-center">
            <a href="{{route('home')}}"><img src="/css/LOGO.png" width="250" class="img-fluid m-2" alt=""></a>
        </div>
        <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center">
            <ul class="m-2 text-dark list-unstyled text-center py-2">
                <li class="footer-link"><a class="fw-bold" href="{{route('home')}}">{{__('ui.start')}}</a></li>
                <li class="footer-link"><a href="/login">{{__('ui.login')}}</a></li>
                <li class="footer-link"><a href="/register">{{__('ui.register')}}</a></li>
                <li class="footer-link"><a href="{{route('newAnnouncement')}}">{{__('ui.newAd')}}</a></li>
                <li class="col-12 social-links px-0 pt-3">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </li>
            </ul>
        </div>
        <div class="col-12 col-md-6 col-lg-4 d-flex flex-column align-items-center justify-content-start">
            <ul class="m-2 text-dark list-unstyled footer-columns py-2">
                @foreach($categories as $category)
                <li class="footer-link"><a
                        href="{{route('detailCategory',['id'=>$category->id])}}">{{__("ui.{$category->name}")}}</li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center my-2 d-flex justify-content-center">
            <a href="{{route('home')}}" class="copyright">© 2021 - Bea Serrano & Eric Lehmann</a>

        </div>
    </div>
</footer>
