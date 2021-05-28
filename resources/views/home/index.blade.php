@extends('layouts.main')
@section('title', 'Home')
@section('content')

<header class="header valign bg-img parallaxie" style="background-position: left;" data-scroll-index="0" data-overlay-dark="0" data-background="img/bg-phot-dra.jpeg">
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
                        <div class="owl-carousel owl-theme">
                            @foreach ( $testimonials as $testimonial)
                                <div class="testimonial-item text-center">
                                    <h5 class="mb-30">{{ $testimonial['title'] }}</h5>
                                    <p><b>"</b> {{ $testimonial['content'] }} <b>"</b></p>
                                    <h6>{{ $testimonial['author'] }}</h6>
                                </div>
                            @endforeach
                            <!-- div class="testimonial-item text-center">
                                <h5 class="mb-30">Depoimento 1 !</h5>
                                <p><b>"</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque blanditiis debitis ducimus ratione ad impedit et consectetur officiis possimus voluptate consequuntur, eos similique vel quasi veritatis beatae exercitationem! Aperiam, neque! <b>"</b></p>
                                <h6>Student 1</h6>
                            </div>
                            <div class="testimonial-item text-center">
                                <h5 class="mb-30">Depoimento 2 !</h5>
                                <p><b>"</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque blanditiis debitis ducimus ratione ad impedit et consectetur officiis possimus voluptate consequuntur, eos similique vel quasi veritatis beatae exercitationem! Aperiam, neque! <b>"</b></p>
                                <h6>Student 2</h6>
                            </div>
                            <div class="testimonial-item text-center">
                                <h5 class="mb-30">Depoimento 3 !</h5>
                                <p><b>"</b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque blanditiis debitis ducimus ratione ad impedit et consectetur officiis possimus voluptate consequuntur, eos similique vel quasi veritatis beatae exercitationem! Aperiam, neque! <b>"</b></p>
                                <h6>Student 3</h6>
                            </div -->
                        </div>
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
                                <a href="{{$product->permalink}}"> <img src="{{$product->images[0]->woocommerce_thumbnail}}" alt=""> </a>
                            </div>
                            <div class="post-cont"> <a href="{{$product->permalink}}"><span class="tag">{{$product->categories[1]->name}}</span></a>
                                <h5>
                                    <a href="{{$product->permalink}}">{{$product->name}}</a>
                                </h5>
                                <div class="post-cont-description-course">{!! \Illuminate\Support\Str::limit($product->short_description, 150, $end='...') !!}</div>
                                @if( !empty($product->default_attributes[0]->name))
                                    <div class="info-2">{{ $product->default_attributes[0]->option }}</div>
                                @endif
                                {{-- <div class="info-2">Cidade 1</div> --}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @include('layouts.contact-form')
@endsection
