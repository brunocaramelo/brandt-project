@extends('layouts.main')
@section('title', 'Contact')
@section('content')

<header class="header valign bg-img parallaxie" data-scroll-index="0" data-overlay-dark="4" data-background="img/1200x800.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left caption">
                <hr class="line line-hr-primary animate-box" data-animate-effect="fadeInLeft">
                <h5 class="animate-box" data-animate-effect="fadeInLeft">Quem é a</h5>
                <h1 class="animate-box" data-animate-effect="fadeInLeft">Dra. Patrícia Brandt Schefer</h1>
                <a href="dra-patricia.html" data-scroll-nav="1" class="btn fl-btn animate-box" data-animate-effect="fadeInLeft">Saiba mais</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="arrow bounce text-center">
                    <a href="index.html#about" class=""> <i class="ti-angle-double-down"></i> </a>
                </div>
            </div>
        </div>
    </div>
</header>

@include('layouts.contact-form')

@endsection
