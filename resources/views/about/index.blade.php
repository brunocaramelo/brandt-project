@extends('layouts.main')
@section('title', 'Dra. Patrícia| Patricia Brandt')
@section('content')

<header class="header valign bg-img parallaxie" data-scroll-index="0" data-overlay-dark="0" data-background="img/banner_about.jpg" style="background-position: left;">
    <div class="container" style="margin-top:420px">
        {{-- <div class="row">
            <div class="col-md-12 text-left caption">
                <hr class="line line-hr-primary animate-box" data-animate-effect="fadeInLeft">
                <h1 class="animate-box" data-animate-effect="fadeInLeft">Sobre</h1>
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


{!! $introduction !!}


<hr class="line-vr-section">
<!-- Testimonials -->
<section id="testimonials" class="testimonials testimonials-padding bg-img" style="background-position:bottom" data-overlay-dark="0" data-background="img/bg_depoimento_paty.gif">
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
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="blog section-padding bg-grey" data-scroll-index="4">
   {!! $actuation !!}
</section>
@endsection
