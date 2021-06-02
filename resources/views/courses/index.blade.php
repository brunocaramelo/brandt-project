@extends('layouts.main')
@section('title', 'Cursos | Patricia Brandt')
@section('content')

<header class="header valign bg-img parallaxie" id="banner-top" data-scroll-index="0" style="background-position: left;"  data-overlay-dark="0" data-background="img/bg-banner-contact-01.jpg">
    <div class="container" style="margin-top:420px">
        {{-- <div class="row">
            <div class="col-md-12 text-left caption">
                <hr class="line line-hr-primary animate-box" data-animate-effect="fadeInLeft">
                <h1 class="animate-box" data-animate-effect="fadeInLeft">Cursos</h1>
            </div>
        </div> --}}
        <div class="row">
            <div class="col-md-12">
                <div class="arrow bounce text-center">
                    <a href="#about" class=""> <i class="ti-angle-double-down"></i> </a>
                </div>
            </div>
        </div>
    </div>
</header>


<hr class="line-vr-section">
    <!-- About Us -->
    <div id="about" class="about section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-img mb-30 img-fluid animate-box" data-animate-effect="fadeInLeft" style="background-image: url(img/bg-lancamento.png);">
                        <!-- <div class="about-img-2 signature" style="background-image: url(img/signature.png);"></div> -->
                    </div>
                </div>
                <div class="col-md-7 animate-box" data-animate-effect="fadeInLeft">
                    <div class="title"> <span>EAD</span>
                        <h2>Lançamento</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                    <h4>Topic 1</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores suscipit harum magnam corrupti ut veritatis amet et quasi aspernatur assumenda, ipsum illum! Dolor laboriosam quidem exercitationem, quaerat sequi expedita quae!</p>
                    <h4>Topic 2</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores suscipit harum magnam corrupti ut veritatis amet et quasi aspernatur assumenda, ipsum illum! Dolor laboriosam quidem exercitationem, quaerat sequi expedita quae!</p>
                    <br />
                    <div class="row">
                        <a href="#" data-scroll-nav="1" class="btn fl-btn animate-box" data-animate-effect="fadeInLeft">Link hotmart</a>
                    </div>
                    <br />
                </div>
                {{-- <div class="row awards">
                    <div class="col-md-12">
                        <div class="title"> <span>Keys</span> </div>
                    </div>
                    <div class="col-md-12 owl-carousel owl-theme">
                        <div class="awards-logo">
                            <a href="#"><img src="img/630x320.jpg" alt=""></a>
                        </div>
                        <div class="awards-logo">
                            <a href="#"><img src="img/630x320.jpg" alt=""></a>
                        </div>
                        <div class="awards-logo">
                            <a href="#"><img src="img/630x320.jpg" alt=""></a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <hr class="line-vr-section">
    <!-- Services -->
    <section id="services" class="section-padding bg-grey" data-scroll-index="2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Cursos</span>
                        <h2 class="animate-box" data-animate-effect="fadeInLeft">Online</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                </div>
            </div>
            <div class="row services mb-60">
                @foreach ( $onlineProducts as $product)
                <div class="col-md-6 item">
                    <div class="position-re o-hidden"> <img src="{{$product->images[0]->woocommerce_thumbnail}}" alt=""> </div>
                    <div class="con">
                        <h5><a href="@if(env("REPLACE_HOST",false)) {{str_replace(env("TOREPLACE_HOST"),env("TARGET_HOST"), $product->permalink)}} @else {{$product->permalink}} @endif">{{$product->name}}</a></h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


    <hr class="line-vr-section">

    <section id="services" class="section-padding bg-grey" data-scroll-index="2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Cursos</span>
                        <h2 class="animate-box" data-animate-effect="fadeInLeft">Presenciais</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                </div>
            </div>
            <div class="row services mb-60">
                @foreach ( $presentialProducts as $product)
                <div class="col-md-6 item">
                    <div class="position-re o-hidden"> <img src="{{$product->images[0]->src}}" alt=""> </div>
                    <div class="con">
                        <h5><a href="@if(env("REPLACE_HOST",false)) {{str_replace(env("TOREPLACE_HOST"),env("TARGET_HOST"), $product->permalink)}} @else {{$product->permalink}} @endif">{{$product->name}}</a></h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

 @endsection
