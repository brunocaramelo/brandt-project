@extends('layouts.main')
@section('title', 'Cursos')
@section('content')

<header class="header valign bg-img parallaxie" id="banner-top-rotate" data-scroll-index="0" style="background-position: left;background-color:#000"  data-overlay-dark="0" data-background="img/banner_site_courses_01.jpg" location-page="courses">
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
    <div id="about" class="about section-padding" style="display:none" data-scroll-index="1">
        {!! $eadBox !!}
    </div>
    {{-- <hr class="line-vr-section"> --}}
    <!-- Services -->
    <section id="services" class="blog section-padding bg-grey" data-scroll-index="2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Cursos</span>
                        <h2 class="animate-box" data-animate-effect="fadeInLeft">Plataforma de ensino</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ( $onlineProducts as $product)
                    <div class="col-md-4">
                        <div class="item animate-box" data-animate-effect="fadeInLeft" style="margin-bottom:30px">
                            <div class="post-imgs">
                                <a href="@if(env("REPLACE_HOST",false)) {{str_replace(env("TOREPLACE_HOST",false),env("TARGET_HOST"), $product->permalink)}} @else {{$product->permalink}} @endif"> <img src="{{$product->images[0]->woocommerce_thumbnail}}" alt=""> </a>
                            </div>
                            {{-- <div class="post-cont post-cont-container"> <a href="@if(env("REPLACE_HOST",false)) {{str_replace(env("TOREPLACE_HOST"),env("TARGET_HOST"), $product->permalink)}} @else {{$product->permalink}} @endif"><span class="tag">{{$product->categories[1]->name}}</span></a>
                                <h5>
                                    <a href="@if(env("REPLACE_HOST",false)) {{str_replace(env("TOREPLACE_HOST",false),env("TARGET_HOST"), $product->permalink)}} @else {{$product->permalink}} @endif">{{$product->name}}</a>
                                </h5>
                                <div class="post-cont-description-course">{{ \Illuminate\Support\Str::limit(strip_tags($product->short_description), 90, $end='...') }}</div>
                                @if( !empty($product->default_attributes[0]->name))
                                    <div class="info-2">{{ $product->default_attributes[0]->option }}</div>
                                @endif
                            </div> --}}
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row services mb-60">
                @foreach ( $onlineProducts as $product)
                <div class="col-md-6 item">
                    <div class="position-re o-hidden"> <img src="{{$product->images[0]->woocommerce_thumbnail}}" alt=""> </div>
                    <div class="con">
                        <h5><a href="@if(env("REPLACE_HOST",false)) {{str_replace(env("TOREPLACE_HOST"),env("TARGET_HOST"), $product->permalink)}} @else {{$product->permalink}} @endif">{{$product->name}}</a></h5>
                    </div>
                </div>
                @endforeach
            </div> --}}
        </div>
    </section>


    <hr class="line-vr-section">

    <section id="services" class="blog section-padding" data-scroll-index="3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Cursos</span>
                        <h2 class="animate-box" data-animate-effect="fadeInLeft">Presenciais</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ( $presentialProducts as $product)
                    <div class="col-md-4">
                        <div class="item animate-box" data-animate-effect="fadeInLeft" style="margin-bottom:30px">
                            <div class="post-imgs">
                                <a href="@if(env("REPLACE_HOST",false)) {{str_replace(env("TOREPLACE_HOST",false),env("TARGET_HOST"), $product->permalink)}} @else {{$product->permalink}} @endif"> <img src="{{$product->images[0]->woocommerce_thumbnail}}" alt=""> </a>
                            </div>
                            {{-- <div class="post-cont post-cont-container"> <a href="@if(env("REPLACE_HOST",false)) {{str_replace(env("TOREPLACE_HOST"),env("TARGET_HOST"), $product->permalink)}} @else {{$product->permalink}} @endif"><span class="tag">{{$product->categories[1]->name}}</span></a>
                                <h5>
                                    <a href="@if(env("REPLACE_HOST",false)) {{str_replace(env("TOREPLACE_HOST",false),env("TARGET_HOST"), $product->permalink)}} @else {{$product->permalink}} @endif">{{$product->name}}</a>
                                </h5>
                                <div class="post-cont-description-course">{{ \Illuminate\Support\Str::limit(strip_tags($product->short_description), 90, $end='...') }}</div>
                                @if( !empty($product->default_attributes[0]->name))
                                    <div class="info-2">{{ $product->default_attributes[0]->option }}</div>
                                @endif
                            </div> --}}
                        </div>
                    </div>
                @endforeach
            </div>
            {{-- <div class="row services mb-60">
                @foreach ( $presentialProducts as $product)
                <div class="col-md-6 item">
                    <div class="position-re o-hidden"> <img src="{{$product->images[0]->src}}" alt=""> </div>
                    <div class="con">
                        <h5><a href="@if(env("REPLACE_HOST",false)) {{str_replace(env("TOREPLACE_HOST"),env("TARGET_HOST"), $product->permalink)}} @else {{$product->permalink}} @endif">{{$product->name}}</a></h5>
                    </div>
                </div>
                @endforeach
            </div> --}}
        </div>
    </section>

    <hr class="line-vr-section">
 @endsection


