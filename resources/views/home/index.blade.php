@extends('layouts.main')
@section('title', 'Home | Patricia Brandt')
@section('content')

<header class="header valign bg-img parallaxie" style="background-position: left;" data-scroll-index="0" data-overlay-dark="0" data-background="img/bg-phot-home.jpeg" />
    <div class="container">
        {{-- <div class="row">
            <div class="col-md-12 text-left caption">
                <hr class="line line-hr-primary animate-box" data-animate-effect="fadeInLeft">
                <h5 class="animate-box" data-animate-effect="fadeInLeft">Quem é a</h5>
                <h1 class="animate-box" data-animate-effect="fadeInLeft">Dra. Patrícia Brandt Schefer</h1>
                <a h href={{route('about')}} class="btn fl-btn animate-box" data-animate-effect="fadeInLeft">Saiba mais</a>
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

    {!! $banner  !!}

    <hr class="line-vr-section">
    <!-- Testimonials -->
    <section id="testimonials" class="testimonials testimonials-padding bg-img" data-overlay-dark="5" data-background="img/bg-depoimento.png">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="testimonial-say text-center">
                        {{-- <div class="owl-carousel owl-theme">
                            @foreach ( $testimonials as $testimonial)
                                <div class="testimonial-item text-center">
                                    <h5 class="mb-30">{{ $testimonial['title'] }}</h5>
                                    <p><b>"</b> {{ $testimonial['content'] }} <b>"</b></p>
                                    <h6>{{ $testimonial['author'] }}</h6>
                                </div>
                            @endforeach --}}
                        <div class="owl-carousel owl-theme">
                                <div class="testimonial-item text-center">
                                    <h5 class="mb-30">Depoimentos</h5>
                                    <p>
                                        Ouça diretamente de quem já estudou diretamente com a Dra. Patrícia.<br />
                                        Fica aqui nosso agradecimento, a todos os alunos que gravam vídeos e deixam mensagens com apoio e carinho.
                                    </p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="arrow bounce text-center">
                        <a href="#portifolio" class=""> <i class="ti-angle-double-down"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="blog" class="blog section-padding bg-grey" data-scroll-index="4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Cursos</span>
                        <h2 class="animate-box" data-animate-effect="fadeInLeft">Destaque</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ( $products as $product)
                    <div class="col-md-4">
                        <div class="item animate-box" data-animate-effect="fadeInLeft">
                            <div class="post-img">
                                <a href="@if(env("REPLACE_HOST",false)) {{str_replace(env("TOREPLACE_HOST",false),env("TARGET_HOST"), $product->permalink)}} @else {{$product->permalink}} @endif"> <img src="{{$product->images[0]->woocommerce_thumbnail}}" alt=""> </a>
                            </div>
                            <div class="post-cont post-cont-container"> <a href="@if(env("REPLACE_HOST",false)) {{str_replace(env("TOREPLACE_HOST"),env("TARGET_HOST"), $product->permalink)}} @else {{$product->permalink}} @endif"><span class="tag">{{$product->categories[1]->name}}</span></a>
                                <h5>
                                    <a href="@if(env("REPLACE_HOST",false)) {{str_replace(env("TOREPLACE_HOST",false),env("TARGET_HOST"), $product->permalink)}} @else {{$product->permalink}} @endif">{{$product->name}}</a>
                                </h5>
                                <div class="post-cont-description-course">{{ \Illuminate\Support\Str::limit(strip_tags($product->short_description), 90, $end='...') }}</div>
                                @if( !empty($product->default_attributes[0]->name))
                                    <div class="info-2">{{ $product->default_attributes[0]->option }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <hr class="line-vr-section">

    <section id="portfolio" class="section-padding" data-scroll-index="6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="title mb-30"> <span>Ultimos</span>
                        <h2 class="animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">Vídeos</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                </div>
            </div>
            <div class="row mb-30">
            @foreach ( $videos as $video)
                <div class="col-md-4 gallery-item">
                    <a href="javascript:void(0)" title="" class="mklbItem demo" data-video-src="{{$video["source_url"]}}">
                        <div class="gallery-boxs">
                            <div class="gallery-imgs">
                               {{-- {{$video["source_url"]}} --}}
                               <div style="width: 310px;" class="wp-video"><!--[if lt IE 9]><script>document.createElement('video');</script><![endif]-->
                                    <video class="wp-video-shortcode" id="video-144-1" width="300" height="250" preload="metadata">
                                        <source type="video/mp4" src="{{$video["source_url"]}}?_=1" />
                                    </video>
                                </div>
                                <div class="gallery-detail text-center"> <i class="ti-plus"></i> </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
    </section>

    <hr class="line-vr-section">

    @include('layouts.contact-form')
@endsection
