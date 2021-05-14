@extends('layouts.main')
@section('title', 'Home')
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

<hr class="line-vr-section">
    <!-- About Us -->

    {!! $banner !!}

    <!-- div id="about" class="about section-padding" data-scroll-index="1">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="about-img mb-30 img-fluid animate-box" data-animate-effect="fadeInLeft" style="background-image: url(img/1000x1000.jpg);">
                    </div>
                </div>
                <div class="col-md-7 animate-box" data-animate-effect="fadeInLeft">
                    <div class="title"> <span>EAD</span>
                        <h2>Lançamento</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores suscipit harum magnam corrupti ut veritatis amet et quasi aspernatur assumenda, ipsum illum! Dolor laboriosam quidem exercitationem, quaerat sequi expedita quae!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores suscipit harum magnam corrupti ut veritatis amet et quasi aspernatur assumenda, ipsum illum! Dolor laboriosam quidem exercitationem, quaerat sequi expedita quae!</p>
                    <br />
                    <div class="row awards">
                        <div class="col-md-12">
                            <div class="title"> <span>Vantagens</span> </div>
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
                            <div class="awards-logo">
                                <a href="#"><img src="img/630x320.jpg" alt=""></a>
                            </div>
                            <div class="awards-logo">
                                <a href="#"><img src="img/630x320.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div -->

    <hr class="line-vr-section">
    <!-- Testimonials -->
    <section id="testimonials" class="testimonials testimonials-padding bg-img" data-overlay-dark="5" data-background="img/1200x800.jpg">
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
                    <div class="title mb-30"> <span>Próximos</span>
                        <h2 class="animate-box" data-animate-effect="fadeInLeft">Cursos</h2>
                        <hr class="line line-hr-secondary">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="item animate-box" data-animate-effect="fadeInLeft">
                        <div class="post-img">
                            <a href="post.html"> <img src="img/600x400.jpg" alt=""> </a>
                        </div>
                        <div class="post-cont"> <a href="blog.html"><span class="tag">Tipo do curso</span></a>
                            <h5>
                                <a href="post.html">Curso 1</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quasi accusantium provident consequatur doloribus! Sapiente corporis.</p>
                            <div class="info-2">27 de junho 2021</div>
                            <div class="info-2">Cidade 1</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item animate-box" data-animate-effect="fadeInLeft">
                        <div class="post-img">
                            <a href="post.html"> <img src="img/600x400.jpg" alt=""> </a>
                        </div>
                        <div class="post-cont"> <a href="blog.html"><span class="tag">Tipo do curso</span></a>
                            <h5>
                                <a href="post.html">Curso 2</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quasi accusantium provident consequatur doloribus! Sapiente corporis.</p>
                            <div class="info-2">27 de junho 2021</div>
                            <div class="info-2">Cidade 2</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item animate-box" data-animate-effect="fadeInLeft">
                        <div class="post-img">
                            <a href="post.html"> <img src="img/600x400.jpg" alt=""> </a>
                        </div>
                        <div class="post-cont"> <a href="blog.html"><span class="tag">Tipo do curso</span></a>
                            <h5>
                                <a href="post.html">Curso 1</a>
                            </h5>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem quasi accusantium provident consequatur doloribus! Sapiente corporis.</p>
                            <div class="info-2">27 de junho 2021</div>
                            <div class="info-2">Cidade 2</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('layouts.contact-form')
@endsection
