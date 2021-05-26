@extends('layouts.main')
@section('title', 'Contact')
@section('content')

<header class="header valign bg-img parallaxie" data-scroll-index="0" data-overlay-dark="0" data-background="img/bg-phot-dra.jpeg" style="background-position: left;">
    <div class="container" style="margin-top:420px">
        <div class="row">
            <div class="col-md-12 text-left caption">
                <hr class="line line-hr-primary animate-box" data-animate-effect="fadeInLeft">
                <h1 class="animate-box" data-animate-effect="fadeInLeft">Cursos</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="arrow bounce text-center">
                    <a href="#about" class=""> <i class="ti-angle-double-down"></i> </a>
                </div>
            </div>
        </div>
    </div>
</header>

@include('layouts.contact-form')

@endsection
