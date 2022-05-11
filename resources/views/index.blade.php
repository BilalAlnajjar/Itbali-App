<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uitheme.net/zipto/home-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 11:51:26 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>etbale</title>

    <link rel="stylesheet" href="/css/themify-icons.css">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/images/logoo.png">
    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="/css/style.css">


    <style>


.header-wrapper .nav-menu li a{
font-size: 15px;
    line-height: 22px;
    font-weight: 600;
    letter-spacing: 0.4px;
    color: black !important;
    transition: all 0.4s ease;
}

.upper-header{
    background-color: #0063C6 !important;

}
.upper-header li a {
color: white  !important;
}

</style>

</head>

<body class="color-theme-darkgreen">

    <div class="preloader"></div>


    <div class="backdrop"></div>



    <div class="main-wrapper">

<div class="upper-header bg-greylight" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-xs-6 d-none d-block-md">
                        <ul class="list-inline list-item-style mt-0 float-left pl-1">
                            <li class="list-inline-item pl-0"><a href="#">(+1)866-540-3229</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-xs-6 d-none d-block-md">
                        <ul class="list-inline list-item-style mt-0 float-right">
                            {{-- <li class="list-inline-item"><a href="#"><i class="ti-user mr-2"></i> My Account</a></li> --}}
                        </ul>
                    </div>
                    <div class="col-12 d-none d-lg-block">
                        <ul class="list-inline list-item-style mt-0 float-left pl-1">
                            {{-- <li class="list-inline-item pl-0"><a href="#">BECOME AN AGENT</a></li>
                            <li class="list-inline-item"><a href="#">PRIVACY</a></li>
                            <li class="list-inline-item"><a href="#">CUSTOMER SERVICE </a></li> --}}
                        </ul>

                        <ul class="list-inline list-item-style mt-0 float-right">

                            <li class="list-inline-item"><a href="#"><i class="ti-user mr-2"></i> My Account</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- header wrapper -->

<div class="header-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 navbar">

                            <img src="/images/المعتمد.png"  alt="" style="width: 110px;
                            height: auto;">

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavDropdown">
                            <ul class="navbar-nav nav-menu float-none text-center">
                              <li class="nav-item"><a class="nav-link text-white" href="/single.html">Home</a></li>
                                <li class="nav-item"><a class="nav-link text-white" href="/search.html">About</a></li>
                                <li class="nav-item"><a class="nav-link text-white" href="/video.html">Category</a></li>
                                <li class="nav-item"><a class="nav-link text-white" href="/landing.html">Contact</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 text-right">
                        @guest
                            @if (Route::has('login'))
                                <a href="#" class="header-btn bg-dark fw-500 text-white font-xssss" data-toggle="modal" data-target="#Modallogin">Login</a>
                            @endif

                            @if (Route::has('register'))
                                <a href="#" class="header-btn bg-current fw-500 text-white font-xssss" data-toggle="modal" data-target="#ModalregisterD">Register</a>
                            @endif

                            @else
                            <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();" class="header-btn bg-current fw-500 text-white font-xssss" >Logout</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

                            @endguest
                    </div>
                </div>
            </div>
        </div>

















        <!-- header wrapper -->

        <div class="banner-wrapper bg-greylight">
            <div class="banner-slider owl-carousel owl-theme dot-none owl-nav-link style2">
                @foreach ($slids as $slid)

                <div class="owl-items bg-size-cover" style="background-image: url({{asset('storage/'.$slid->image)}}); background-position: center;" >
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-7 pt-5 pb-5 style2">
                                <h2 class="delay-06 slider-animation display4-size fw-700 text-white lh-2">{{$slid->title}}</h2>
                                <p class="delay-09 slider-animation fw-300 font-xsss lh-28 text-white">{{$slid->sub_title}}</p>
                                <a data-toggle="modal" data-target="#ModalregisterD" class="delay-12 slider-animation fw-600 text-white bg-orange w150 font-xssss text-uppercase ls-3 lh-32 rounded-lg mt-3 text-center d-inline-block p-2">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>


        <div class="payment-option pt-5 pb-3 bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 mb-3 text-left">
                        <i class="ti-shopping-cart text-grey-900 display1-size float-left mr-3"></i>
                        <h4 class="mt-1 fw-600 text-grey-900 font-xss mb-0">100% Secure Payments</h4>
                        <p class="font-xssss fw-500 text-grey-500 lh-26 mt-0 mb-0">100% Payment Protection.</p>
                    </div>

                    <div class="col-lg-3 col-md-6 mb-3 text-left">
                        <i class="ti-headphone-alt text-grey-900 display1-size float-left mr-3"></i>
                        <h4 class="mt-1 fw-600 text-grey-900 font-xss mb-0">Support</h4>
                        <p class="font-xssss fw-500 text-grey-500 lh-26 mt-0 mb-0">Alway online feedback 24/7</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3 text-left">
                        <i class="ti-lock text-grey-900 display1-size float-left mr-3"></i>
                        <h4 class="mt-1 fw-600 text-grey-900 font-xss mb-0">Trust pay</h4>
                        <p class="font-xssss fw-500 text-grey-500 lh-26 mt-0 mb-0">Easy Return Policy.</p>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3 text-left">
                        <i class="ti-reload text-grey-900 display1-size float-left mr-3"></i>
                        <h4 class="mt-1 fw-600 text-grey-900 font-xss mb-0">Return and Refund</h4>
                        <p class="font-xssss fw-500 text-grey-500 lh-26 mt-0 mb-0">100% money back guarantee</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="feature-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mb-3 pr-2">
                        <div class="card w-100 border-light border-size-md shadow-none h240 bg-image-cover bg-top-left" style="background-image: url(images/g-2.jpg);">
                            <div class="card-body position-absolute p-3 m-3 right-0 left-xs-0">
                                <h4 class="fw-500 font-xsss text-danger mt-1">Fresh Fruit</h4>
                                <h2 class="fw-900 text-grey-900 font-lg">Vegitable & Fruits </h2>
                                <h4 class="fw-600 font-xsss text-grey-800 mt-1">From $18.99</h4>
                                <a data-toggle="modal" data-target="#ModalregisterD" class="fw-600 text-white bg-orange w150 font-xssss text-uppercase ls-3 lh-32 rounded-lg mt-3 text-center d-inline-block p-2">Register Now</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mb-3 pr-2">
                        <div class="card w-100 border-light border-size-md shadow-none h240 bg-image-cover bg-top-left" style="background-image: url(images/g-3.jpg);">
                            <div class="card-body position-absolute p-3 m-3 right-0 left-xs-0">
                                <h4 class="fw-500 font-xsss text-danger mt-1">Grocery</h4>
                                <h2 class="fw-900 text-grey-900 font-lg">Get Best Offers</h2>
                                <h4 class="fw-600 font-xsss text-grey-800 mt-1">From $19.99</h4>
                                <a data-toggle="modal" data-target="#ModalregisterD" class="fw-600 text-white bg-orange w150 font-xssss text-uppercase ls-3 lh-32 rounded-lg mt-3 text-center d-inline-block p-2">Register Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- mobile -->
<div class="feedback-wrapper pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6"><img src="/images/app-image.png" alt="app-image" class="img-fluid"></div>
                    <div class="col-lg-4 offset-lg-1 pt-7 page-title style1">
                        <h4 class="text-uppercase text-current font-xsss fw-600 mb-3 mt-lg-5">Download &amp; Enjoy</h4>
                        <h2 class="text-grey-900 fw-300 display2-size lh-3">Get the zpito app <br> for payment</h2>
                        <p class="w-75 font-xssss fw-500 text-grey-500 lh-26 mt-2">We are digital agency, a small design agency based in paris as i was groping to remove through language.</p>
                        @if($apps)
                        <a href="#"><img src="/images/apple-store.png" alt="icon" class="w175 mb-xs-2"></a>
                        <a href="#"><img src="/images/play-store.png" alt="icon" class="w175 p-md--2"></a>
                        @endif
                    </div>
                </div>
            </div>
        </div>





 <div class="brand-wrapper pt-2 pb-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="feedback-slider owl-carousel owl-theme overflow-visible dot-none " data-itemsnumber="4">
                            <div class="owl-items text-center"><img src="/images/b-1.png" alt="icon" class="w100 ml-auto mr-auto"></div>
                            <div class="owl-items text-center"  ><img src="/images/b-2.png" alt="icon" class="w100 ml-auto mr-auto"></div>
                            <div class="owl-items text-center"  ><img src="/images/b-3.png" alt="icon" class="w100 ml-auto mr-auto"></div>
                            <div class="owl-items text-center" ><img src="/images/b-4.png" alt="icon" class="w100 ml-auto mr-auto"></div>
                            <div class="owl-items text-center"  ><img src="/images/b-5.png" alt="icon" class="w100 ml-auto mr-auto"></div>
                            <div class="owl-items text-center" ><img src="/images/b-6.png" alt="icon" class="w100 ml-auto mr-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




        <div class="feedback-wrapper pt-7 pb-7">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center mb-5 pb-3">
                        <h2 class="text-grey-900 fw-600 font-xxl">Our Customers love what we do</h2>
                    </div>
                    <div class="col-lg-12">
                        <div class="feedback-slider-2 owl-carousel owl-theme overflow-visible">

                            @foreach ($comments as $comment)

                            <div class="owl-items">
                                <div class="card shadow-lg rounded-0 p-5 bg-white text-left border-0">
                                    <p class="font-xsss fw-500 text-grey-500 lh-32 mt-0 mb-4">{{$comment->comment}}</p>
                                    <div class="card-body p-0">
                                        <img src="{{asset('storage/'.$comment->image)}}" alt="user" class="w60 float-left mr-3">
                                        <h4 class="text-current fw-700 font-xsss mt-1">{{$comment->name}}</h4>
                                        <div class="star d-block w-100 text-left">
                                            @for ($i = 0 ; $i <= $comment->rate;$i++)
                                            <img src="/images/star.png" alt="star" class="w15 float-left">
                                            @endfor
                                        </div>
                                    </div>
                                </div>
                            </div>

                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>














    </div>

     <!-- Modal Left -->
    <div class="modal left fade menu-slider" id="ModalCategores" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content bg-white" style="background: #fff;">
                <button type="button" class="close mt-1" data-dismiss="modal" aria-label="Close"><i class="ti-close text-grey-500"></i></button>
                <div class="modal-body p-3 vw100">
                    <h2 class="text-grey-900 fw-600 mb-4">Menu</h2>
                    <div class="section full mb-4">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default border-bottom rounded-0 pl-0 pt-2 pb-2 pr-2 mb-0 bg-color-none">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h2 class="panel-title fw-400 mb-0"><a class="accordion-toggle collapsed text-grey-600 font-xsss fw-600" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">A4 </a></h2>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                    <div class="panel-body pt-2 pb-2">
                                        <ul class="list-group border-0">
                                          <li class="list-group-item border-0 p-0 lh-32 font-xsss  text-grey-500">print</li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

       <!-- Modal Register -->
       <div class="modal bottom fade" id="ModalregisterD" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content border-0">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close text-grey-500"></i></button>
               <div class="modal-body p-3 d-flex align-items-center bg-none">
                   <div class="card shadow-none rounded-0 w-100 p-2 pt-3 border-0">
                       <div class="card-body rounded-0 text-left pt-0">
                           <h2 class="fw-600 display2-size mb-4">Create <br>your account</h2>
                           <form method="POST" action="{{route('register')}}">
                            @csrf
                               <div class="form-group mb-3">
                                   <input type="text" class="form-control h60 border-2 bg-color-none text-grey-700" placeholder="Name" name="name">
                               </div>
                               <div class="form-group mb-3">
                                   <input type="text" class="form-control h60 border-2 bg-color-none text-grey-700" placeholder="Email" name="email">
                               </div>
                               <div class="form-group icon-tab mb-3">
                                   <input type="text" class="form-control h60 border-2 bg-color-none text-grey-700" placeholder="Password" name="password">
                                   <i class="ti-lock text-grey-700 pr-0"></i>
                               </div>
                               <div class="form-group icon-tab mb-3">
                                   <input type="text" class="form-control h60 border-2 bg-color-none text-grey-700" placeholder="Confirm Password" name="password_confirmation">
                                   <i class="ti-lock text-grey-700 pr-0"></i>
                               </div>

                           <div class="col-sm-12 p-0 text-center">
                               <button type="submit" class="form-control h60 bg-current text-white font-xss fw-500 border-2 border-0 p-0">Create an account</button>

                           </div>

                        </form>


                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

   <!-- Modal Register -->

    <div class="modal bottom fade" id="Modallogin" tabindex="-1" role="dialog" aria-modal="true" aria-hidden="false">
        <div class="modal-dialog modal-dialog-centered" role="document">
           <div class="modal-content border-0">
               <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close text-grey-500"></i></button>
               <div class="modal-body p-3 d-flex align-items-center bg-none">
                   <div class="card shadow-none rounded-0 w-100 p-2 pt-3 border-0">
                       <div class="card-body rounded-0 text-left pt-0 pb-2">
                           <h2 class="fw-600 display2-size mb-4">Login into <br>your account</h2>
                           <form method="POST" action="{{route('login')}}">
                            @csrf
                               <div class="form-group mb-3">
                                   <input type="text" class="form-control h60 border-2 bg-color-none text-grey-700" placeholder="Email" name="email">
                               </div>
                               <div class="form-group icon-tab mb-1">
                                   <input type="text" class="form-control h60 border-2 bg-color-none text-grey-700" placeholder="Password" name="password">
                                   <i class="ti-lock text-grey-700 pr-0"></i>
                               </div>
                               <div class="form-check text-left mb-3">
                                   <input type="checkbox" class="form-check-input mt-2" id="exampleCheck1" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                   <label class="form-check-label font-xsss text-grey-500" for="exampleCheck1">Remember me</label>
                                   <a href="#" class="fw-600 font-xsss text-grey-700 mt-1 float-right">Forgot your Password?</a>
                               </div>

                           <div class="col-sm-12 p-0 text-center">
                               <button type="submit" class="form-control h60 bg-current text-white font-xss fw-500 border-2 border-0 p-0">Login</button>
                            </form>
                               <h6 class="text-grey-500 font-xsss fw-500 mt-2 mb-0 lh-32">Dont have account <a href="#ModalregisterD" class="fw-700 ml-1">Register</a></h6>
                           </div>

                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>




    <script src="/js/plugin.js"></script>

    <script src="/js/countdown.js"></script>
    <script src="/js/scripts.js"></script>

    <script>
        $(function () {

           $('.timer').countdown('2021/6/31', function(event) {
              var $this = $(this).html(event.strftime(''
                // + '<span>%w</span> weeks '
                + '<div class="time-count"><span class="text-time">%d</span> <span class="text-day">Day</span></div> '
                + '<div class="time-count"><span class="text-time">%H</span> <span class="text-day">Hours</span> </div> '
                + '<div class="time-count"><span class="text-time">%M</span> <span class="text-day">Min</span> </div> '
                + '<div class="time-count"><span class="text-time">%S</span> <span class="text-day">Sec</span> </div> '));
            });
        });
    </script>

</body>


<!-- Mirrored from uitheme.net/zipto/home-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 05 Apr 2021 11:52:07 GMT -->
</html>
