<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta_title', get_setting('website_name') . ' | ' . get_setting('site_motto'))</title>
    <!-- start font family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@200;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/home/style.css') }}">
</head>
<body>
    
    <div class="home_page">
        <div class="layer"></div>
        <!-- start nav bar sticky-top -->
        <div class="container">
            <nav class="navbar  navbar-expand-lg navbar-light">
                <div class="logo">
                    <img src="{{ asset('assets/home/images/DFORoFv6tYHDPGlJcquf41kpRn48BtakkUv18yCe.png') }}" width="141px" height="59px">
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav home-title ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link active" href="#">الرئيسيه<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('home') }}">عن ببلاش<span class="sr-only">(current)</span></a>
                    </li>
                </ul>
    
                <div class="links">
                    <ul class="list-unstyled navbar-nav login ml-0">
                        <li class="item nav-item">
                            <a href="{{ route('user.registration') }}" class="nav-link text-light nav-register">مستخدم جديد</a>
                        </li>
                        <li class="item nav-item">
                            <a href="{{ route('user.login') }}" class=" nav-link text-light nav-login">تسجيل الدخول</a>
                        </li>
                        <li class="item nav-item">
                            <a href="" class="lang nav-link">EN</a>
                            
                        </li>
                    </ul>
                </div>
    
                    
                </div>
            </nav>
        </div>
        <!-- end navbar  -->

        <!-- start content about bblash -->
        <div class="what_is">
            <div class="container">
                <div class="row parent">
                    <div class="col-md-6">
                        <div class="about ">
                            <div class="head">
                                <h6>ماهو ببلاش ؟</h6>
                            </div>
                            <p class="text-light">ببلاش اكبر واول منصه فى مصر بتقدم خدمات متكامله لكل من يحلم ببناء كيان تجارى الكترونى,بأعلى معدلات ربح على الاطلاق وهتبدأمشروع بدون اى تكاليف من حيث رأس المال او خساره .لان ببساطه بنوفر الدوره الكامله لعمليه البيع بدايه من توفير اكبر عدد من المنتجات مبيعا وبأعلى ربح متوقع واكتر من نظام تشتغل بيه وخدمه تجهيز وتغليف وكمان بنقدم خدمه الشحن من خلال مناديبنا وفروعنا الخاصه فى جميع انحاء الجمهوريه
                            </p>
                            <a href="{{ route('user.registration') }}" class="register_now text-light bg-danger">سجل الان</a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <ul class="item list-unstyled">
                            <li>
                                <div class="head align-middle text-center">
                                    <img src="{{ asset('assets/home/images/join_us.png') }}" >
                                    
                                    <h3>انضم الينا</h3>
                                </div>
                                <p>خليك عضو اساسي من كيان بيهتم بيك وبشغلك ويسعي دايما بأنه يقدملك افضل خدمه تقدر من خلالها تبني البراند الخاص بيك وتزود ارباحك من خلال تيم قوي بيحاول دايما ان يقدم افضل ما يمتلك</p>
                            </li>
                            <li>
                                <div class="head">
                                    <img src="{{ asset('assets/home/images/Advertise.png') }}" >
                                    <h3>اعلن عن منتجاتك</h3>
                                </div>
                                <p>وعلشان طبعا نجاح اي براند بيعتمد بشكل اساسي علي جوده المنتجات والميزه التنافسيه من حيث السعر وندره الانتشار فإحنا بنقولك اطمن لانك هتلاقي عدد كبير من المنتجات الاعلي مبيعا في السوق بأقل سعر موجود من خلال سيستم بسيط وواضح بيساعدك في اختيار منتجاتك بكل تفاصيلها علشان تبدأ في الاعلان عنها وتحقيق ارباحك</p>
                            </li>
                            <li>
                                <div class="head">
                                    <img src="{{ asset('assets/home/images/Increase.png') }}" >
                                    <h3>زيادة الارباح</h3>
                                </div>
                                <p>هتربح يعني هتربح ودا لاننا حققنا المعادله الصعبه " اعلي جوده واقل سعر واعلي ربح " لانك هتلاقي اكتر من نظام تشتغل بيه سواء افيليت او دروبشيبنج او تاجر او تيم ليدر او من خلال الخدمات اللي بنقدمها ومنها خدمه سوقلي وخدمه جهزلي وخدمه اشحنلي وكمان هيكون دعمنا دايما موجود في كل الاوقات لاننا شغالين بمبدأ الربح المشترك" انتا بتكسب فإحنا كمان بنكسب</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end content about bblash -->
    </div>

    <!-- start products  -->
    <div class="products pt-4 pb-4">
        <div class="head text-center">
            <h2>ابرز المنتجات</h2>
        </div>
        <div class="container">
            <div class="row pt-4">
                @foreach ($products as $product)
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <!-- start caroul product  -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            
                            </ol>
                            <div class="carousel-inner">
                              <div class="carousel-item active">
                                @if ($product->thumbnail_img == null)
                                    <img class="d-block w-100" src="https://test.elwarsha-eg.com/assets/corals/images/default_product_image.png">
                                @endif
                                {{-- <img class="d-block w-100" src="images/products.jpg"> --}}
                              </div>
                              
                              
                            </div>
                        
                            
                          </div>
                        <!-- end caroul product  -->
                        <div class="card-body p-0 mt-2">
                          <div class="info d-flex justify-content-between">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <a href="" class="download">
                                <img src="{{ asset('assets/home/images/pdf.png') }}" >
                                تحميل
                            </a>
                          </div>
                          <p class="card-text">
                            <div class="row">
                                <div class="col-md-12 price text-right">
                                    <span class="title text-danger">سعر الشراء : </span>
                                    <span> {{ $product->unit_price }} </span>
                                </div>

                                <div class="col-md-6 quan text-right">
                                    <p class="title text-danger">الكميه : <span class="text-dark"> {{ $product->current_stock }} </span></p>
                                </div>

                                <div class="col-md-6 quan text-right">
                                    <p class="title text-danger">العموله : <span class="text-dark"> 156 </span></p>
                                </div>
                            </div>
                            

                        </p>
                        
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
    <!-- end products  -->
@extends('frontend.inc.footer2')

<script src="{{ asset('assets/home/js/main.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>