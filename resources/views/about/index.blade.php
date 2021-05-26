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
@endsection
