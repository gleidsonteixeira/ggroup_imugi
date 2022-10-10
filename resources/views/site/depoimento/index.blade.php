@extends('layouts.site.template')
@section('titulo','Imugi Tecnologia e Educação')
@section('conteudo')
@include('layouts.site.menus.header')
<section class="wow fadeIn depoimento_img"  id="matricula" style="margin-top:60px; background-image: url({{asset('assets/site/images/bg-depoimento.jpg')}}); background-repeat:no-repeat; background-position: center bottom; background-size:100% heigth:100%;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6 text-center md-margin-50px-bottom sm-margin-30px-bottom">
                            <div class="text-center text-lg-left md-no-padding-lr">
                                <h5 class="text-depoimento text-white-2" style="margin-top:20px;">
                                    <div class="depoimento-mobile">
                                        <span > O que dizem </span>
                                        <div style="height:10px;" class="altura_mobile"></div>
                                        <span >Nossos Alunos </span>
                                        <span class="subtitulo_depoimento"> sobre a Imugi :) </span>
                                        <div style="height:100px;"></div>
                                        </div>
                                </h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="wow fadeIn bg_bvd"  style="background-image: url({{asset('assets/site/images/bg-video-depoimento.jpg')}}); background-repeat:no-repeat; background-position: center bottom; background-size:100% heigth:100%;">
            <div class="container ">
                <div class="row align-items-center"> 
                    <div class="col-12 col-lg-12 text-center">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=oS2BG66RVic">
                            <img src="{{asset('assets/site/images/depoimento-video.jpg')}}" alt="" style="width:80%;">
                            <div class="icon-play">
                                <div class="absolute-middle-center">
                                    <img src="{{asset('assets/site/images/icon-play.png')}}" alt="">
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
            <section class="wow fadeIn" style="padding:0px!important;">
            <div class="container">
                <div class="row" >
                    <!-- start testimonial item -->
                    <div class="col-12 col-md-4 md-margin-four-bottom text-center sm-margin-twelve-bottom wow fadeInRight last-paragraph-no-margin">
                        <img src="{{asset('assets/site/images/depoimentos/1.jpg')}}" class="rounded-circle width-30 margin-30px-bottom" alt=""/>
                        <p class="width-90 mx-auto">
                        Desde de quando comecei o curso até agora a minha evolução foi muito boa. Sai  de um completo leigo tanto na área da computação gráfica quanto no inglês para uma pessoa que hoje enxerga progresso nessas habilidades .
                        </p>
                        <i class="fas fa-quote-left icon-small text-deep-pink d-block margin-30px-top margin-15px-bottom"></i>
                        <span class="text-extra-dark-gray font-weight-600 text-small text-uppercase d-block line-height-10 alt-font">José Walter</span>
                      </div>
                    <!-- end testimonial item -->
                    <!-- start testimonial item -->
                    <div class="col-12 col-md-4 md-margin-four-bottom text-center sm-margin-twelve-bottom wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                        <img src="{{asset('assets/site/images/depoimentos/2.jpg')}}" class="rounded-circle width-30 margin-30px-bottom" alt=""/>
                        <p class="width-90 mx-auto">
                        Estou no meu primeiro módulo do Cgfly na Imugi aprendendo Desing. Cada vez mais motivado com vontade de aprender ,através dos professores, a me tornar um profissional diferenciado. 
                        </p>
                        <i class="fas fa-quote-left icon-small text-deep-pink d-block margin-30px-top margin-15px-bottom"></i>
                        <span class="text-extra-dark-gray font-weight-600 text-small text-uppercase d-block line-height-10 alt-font">Marcone Aires</span>
                      </div>
                    <!-- end testimonial item -->
                    <!-- start testimonial item -->
                    <div class="col-12 col-md-4 md-margin-four-bottom text-center wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.4s">
                        <img src="{{asset('assets/site/images/depoimentos/3.jpg')}}" class="rounded-circle width-30 margin-30px-bottom" alt=""/>
                        <p class="width-90 mx-auto">
                        Tenho 19 anos e através dos cursos da imugi aprendi : modelagem para games, tratamento de imagens, edição de vídeos e muito mais . Foram com esses conhecimentos que consegui entrar no mercado de trabalho.
                        </p>
                        <i class="fas fa-quote-left icon-small text-deep-pink d-block margin-30px-top margin-15px-bottom"></i>
                        <span class="text-extra-dark-gray font-weight-600 text-small text-uppercase d-block line-height-10 alt-font">Guilherme Gomes</span>
                      </div>
                    <!-- start testimonial item -->
                </div> 
            </div>
        </section>
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <!-- start testimonial item -->
                    <div class="col-12 col-md-4 md-margin-four-bottom text-center sm-margin-twelve-bottom wow fadeInRight last-paragraph-no-margin">
                        <img src="{{asset('assets/site/images/depoimentos/4.jpg')}}" class="rounded-circle width-30 margin-30px-bottom" alt=""/>
                        <p class="width-90 mx-auto">
                        Obtive facilmente minha entrada  no mercado de trabalho como Designer encaminhado pelo Programa Aprimorar que é o setor responsável por construir uma ponte entre nós alunos e as várias oportunidades existentes.
                        </p>
                        <i class="fas fa-quote-left icon-small text-deep-pink d-block margin-30px-top margin-15px-bottom"></i>
                        <span class="text-extra-dark-gray font-weight-600 text-small text-uppercase d-block line-height-10 alt-font">Henrique Alexandro</span>
                      </div>
                    <!-- end testimonial item -->
                    <!-- start testimonial item -->
                    <div class="col-12 col-md-4 md-margin-four-bottom text-center sm-margin-twelve-bottom wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                        <img src="{{asset('assets/site/images/depoimentos/5.jpg')}}" class="rounded-circle width-30 margin-30px-bottom" alt=""/>
                        <p class="width-90 mx-auto">
                        Acho o curso bastante completo tanto o de Desing como o de Inglês. O que aprendemos em um aplicamos no outro ,como :edição de vídeo, fotografia, criação de jogos, modelagem 3D, programação, tratamento de Imagens todos em softwares internacionais . A  diversidade de conteúdos possibilita a ampliação das oportunidades  para minha entrada no mercado de trabalho.
                        </p>
                        <i class="fas fa-quote-left icon-small text-deep-pink d-block margin-30px-top margin-15px-bottom"></i>
                        <span class="text-extra-dark-gray font-weight-600 text-small text-uppercase d-block line-height-10 alt-font">Christian Alves</span>
                     </div>
                    <!-- end testimonial item -->
                    <!-- start testimonial item -->
                    <div class="col-12 col-md-4 md-margin-four-bottom text-center wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.4s">
                        <img src="{{asset('assets/site/images/depoimentos/6.jpg')}}" class="rounded-circle width-30 margin-30px-bottom" alt=""/>
                        <p class="width-90 mx-auto">
                        A aplicação prática e a ementa do curso são ótimas. Ele é dividido em três níveis : iniciante, médio e avançado possibilitando nivelamento entre os alunos e um maior aproveitamento das aulas nas turmas .
                        </p>
                        <i class="fas fa-quote-left icon-small text-deep-pink d-block margin-30px-top margin-15px-bottom"></i>
                        <span class="text-extra-dark-gray font-weight-600 text-small text-uppercase d-block line-height-10 alt-font">Matheus Nobre</span>
                     </div>
                    <!-- start testimonial item -->
                </div> 
            </div>
        </section>
        @include('layouts.site.footer')
 @endsection