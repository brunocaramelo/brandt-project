@extends('layouts.main')
@section('title', 'Dra. Patrícia')
@section('content')

<header class="header valign bg-img parallaxie" data-scroll-index="0" data-overlay-dark="0" data-background="img/bg-phot-dra.jpeg" style="background-position: left;">
    <div class="container" style="margin-top:420px">
        <div class="row">
            <div class="col-md-12 text-left caption">
                <hr class="line line-hr-primary animate-box" data-animate-effect="fadeInLeft">
                <h1 class="animate-box" data-animate-effect="fadeInLeft">Dra. Patrícia</h1>
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

<div id="about" class="about section-padding" data-scroll-index="1">
    <div class="container">
        <div class="row">
            <div class="col-md-6 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                <div class="title">
                    <h2>Dra. Patrícia</h2>
                    <hr class="line line-hr-secondary">
                </div>
                <p>Há 06 anos ministra cursos na área e nesse período já ensinou sua técnica para mais de 5.000 alunos.
                    <br />Professora Titular das cadeiras de " Introdução a Biomedicina Estética e " Consulta e Semiologia" pelo ISEEC, no período de 2015 a 2017, atuando nos estados de Santa Catarina, Paraná e Rio Grande do Sul. 
                    <br />Professora de Pós Graduação em Biomedicina e Farmácia Estética pela Universidade Feevale desde 2109 até o momento. 
                    <br />Professora de Pós Graduação em Odontologia Estética pela Hodos, desde 2018 até o momento. 
                    <br />Professora de Pós Graduação em Odontologia Estética pela Funorte desde 2019 até o momento. 
                    <br />Participou de cursos internacionais da área de estética avançada em 2015, em Las Vegas " Minimally Invasive Facial Treatment techniques in Fresh Frozen Cadavers" YOUCAP USA Participou no Principality of Monaco- Monte Carlo, of attendance to the scientific program on AMWC em 2015 e 2019 E participou do 20 th World Congress in Aesthetic Medicine, Miami Florida, 2015.  Participou do curso de capacitação em Procedimentos minimamente invasivos em 2014 na ISEEC. Capacitação em procedimentos minimamente invasivos em Biomedicina Estética também em 2015 </p>
                <br>
            </div>

            <div class="col-md-6 animate-box fadeInLeft animated" data-animate-effect="fadeInLeft">
                <div class="title">
                    <br />
                    <br />
                    <br />
                </div>
                <p>Possui Título de Especialista em Biomedicina Estética pela Associação Brasileira de Biomedicina.
                    <br />Diversos Cursos de Imersão em Harmonização Facial avançado. 
                    <br />Capacitada em Anatomia Facial e correções de assimetrias faciais, técnicas de preenchimentos faciais com microcânulas (olheiras, malar, zigomático, mandíbula, mentoplastia, lábios e Rinomedelação), Microagulhamento Fotobiomodulado e associações ao Drug Delivery system, Skinboosters e seus agregados, plástica biofotônica e laserterapia, Lipo de papada enzimática com Deoxycholic acid, lifting facial com fios PDO, Mesobotox, Efeito Nefertiti ( liftimg de pescoço), PRP e PRF ( plasma rico em plaquetas e plasma rico em fibrinas), técnicas de venopunção e obtenção do plasma, bem como fatores de crescimento. 
                    <br />Ministrante de Cursos de Harmonização Facial pelo Instituto Aprendente. 
                    <br />Ministrante de Cursos de Bioestimuladores de Colágeno e técnicas avançadas.
                    <br />Ministrante de Curso em cadáveres Frescos, pelo ITC, com o título, Master Class em Fresh Frozen Cadavers. Diretora Acadêmica da Abrahof. Mestranda em Harmonização Facial pelo European Face Institute - Porto, Portugal
                </p>
                <br>
            </div>

        </div>


    </div>
</div>



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
                     /div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="blog section-padding bg-grey" data-scroll-index="4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title mb-30"> <span>Onde</span>
                    <h2 class="animate-box" data-animate-effect="fadeInLeft">Países de atuação</h2>
                    <hr class="line line-hr-secondary">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                    <br />
                    <br />
                </p>
            </div>
        </div>

        <div class="row">

            <div class="col-md-4">
                <div class="item animate-box" data-animate-effect="fadeInLeft">
                    <div class="post-cont"> <span class="tag">Brasil</span>
                        <h5>
                            Cursos e palestras
                        </h5>
                        <p>
                            search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="item animate-box" data-animate-effect="fadeInLeft">
                    <div class="post-cont"> <span class="tag">Portugal</span>
                        <h5>
                            Palestras
                        </h5>
                        <p>
                            search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>

                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="item animate-box" data-animate-effect="fadeInLeft">
                    <div class="post-cont"> <span class="tag">Mundo</span>
                        <h5>
                            Online
                        </h5>
                        <p>
                            search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                        </p>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
