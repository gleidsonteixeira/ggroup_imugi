@extends('layouts.site.template')
@section('titulo','Imugi Tecnologia e Educação')
@section('conteudo')
@include('layouts.site.menus.header')
<section class="wow fadeIn bem_vindo_img" style="background-image: url({{asset('assets/site/images/bg_franquia.png')}}); background-repeat:no-repeat; background-position: bottom center;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12 text-center md-margin-50px-bottom sm-margin-30px-bottom">
                            <div class="text-center md-no-padding-lr">
                            <div style="height:270px;"></div>
                                <h4 class="titulo_franquia text-white">
                                    Seja nosso <br> Franqueado 
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
</section>
<section class="wow fadeIn" style="padding: 50px 0!important; margin-top:150px!important;">
                <div class="container"> 
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-5 text-center wow fadeInLeft">
                                <img src="{{asset('assets/site/images/img_franquia.png')}}" alt="" class="w-100">
                        </div> 
                        <div class="col-12 col-lg-7 wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                            <div class="padding-eight-lr text-center text-lg-left sm-no-padding w-100">
                                <div class="top_centro"></div>
                                <span  class="titulo_centro">
                                    Quem Somos:
                                 </span>
                                <p class="mt-4 text-justify center">
                                Escola de tecnologia e educação que utiliza uma metodologia <br>
                                de ensino única abordando interdisciplinarmente <br>
                                contéudos das áreas de Robótica, Game, <br>
                                Programação, Inglês e Computação Gráfica. <br>
                                 Um novo mundo cria novas oportunidades.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
              <!-- start services section -->
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h5 class="text-uppercase margin-20px-bottom numeros_franquia font-weight-700 md-width-100">
                        Números de uma <br> </h5>
                        <h5><span class="n_franquia"> Franquia de Sucesso </span>
                        </h5>
                        
                    </div>
                    <div class="col-12 margin-100px-top md-margin-70px-top sm-margin-50px-top">                    
                        <div class="row">
                            <!-- start services item -->
                            <div class="col-md-2"></div>
                            <div class="col-12 col-md-3 team-block text-left feature-box-15 sm-margin-40px-bottom last-paragraph-no-margin wow fadeInUp center">
                                <figure>
                                    <figcaption>
                                        <div class="margin-25px-top">
                                            <div class="item_franquia">Taxa de  Franquia</div> 
                                            <p class="item_franquia green">R$25.000.00</p>
                                        </div>   
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- end services item -->
                           <!-- start services item -->
                           <div class="col-12 col-md-3 team-block text-left feature-box-15 sm-margin-40px-bottom last-paragraph-no-margin wow fadeInUp center">
                                <figure>
                                    <figcaption>
                                        <div class="margin-25px-top">
                                            <div class="item_franquia green">14 a 18 MESES</div> 
                                            <p class="item_franquia">Prazo médio de retorno <br> no  investimento</p>
                                        </div>   
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- end services item -->
                            <!-- start services item -->
                            <div class="col-12 col-md-3 team-block text-left feature-box-15 sm-margin-40px-bottom last-paragraph-no-margin wow fadeInUp center">
                                <figure>
                                    <figcaption>
                                        <div class="margin-25px-top">
                                            <div class="item_franquia"> Área Mínima </div> 
                                            <p class="item_franquia green">150m</p>
                                        </div>   
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- end services item -->
                        </div>
                        <div class="row mt-4">
                        <div class="col-md-2"></div>
                            <!-- start services item -->
                            <div class="col-12 col-md-3 team-block text-left feature-box-15 sm-margin-40px-bottom last-paragraph-no-margin wow fadeInUp center">
                                <figure>
                                    <figcaption>
                                        <div>
                                            <div class="item_franquia green">25%</div> 
                                            <p class="item_franquia">Margem média <br>
                                            de lucro
                                            </p>
                                        </div>   
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- end services item -->
                           <!-- start services item -->
                           <div class="col-12 col-md-3 team-block text-left feature-box-15 sm-margin-40px-bottom last-paragraph-no-margin wow fadeInUp center">
                                <figure>
                                    <figcaption>
                                        <div class="margin-25px-top">
                                            <p class="item_franquia">
                                            Investimento <br> Total Estimado <br> 
                                            <span class="green">150 MIL
                                            </p> 
                                        </div>   
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- end services item -->
                            <!-- start services item -->
                            <div class="col-12 col-md-3 team-block text-left feature-box-15 sm-margin-40px-bottom last-paragraph-no-margin wow fadeInUp center">
                                <figure>
                                    <figcaption>
                                        <div class="margin-25px-top">
                                            <div class="item_franquia">
                                            Previsão de <br> Faturamento.
                                            </div> 
                                            <p class="item_franquia green">R$100 MIL A <br> R$130 MIL</p>
                                        </div>   
                                    </figcaption>
                                </figure>
                            </div>
                            <!-- end services item -->
                        </div>
                    </div>
                </div>
            </div> 
        </section>
        <section class="wow fadeIn bem_vindo_img" style="background-color:#7aba17;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12 text-center md-margin-50px-bottom sm-margin-30px-bottom">
                            <div class="text-center md-no-padding-lr">
                                <h4 class="text-white">
                                    <span class="taxa_royaltie">Não cobramos taxa de </span>  <br> Royalties e Publicidade 
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="border-top border-color-extra-light-gray wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h5 class="text-uppercase diferenciais  margin-20px-bottom font-weight-700 md-width-100">
                        DIFERENCIAIS DA IMUGI
                        </h5>
                    </div>
                </div>
                <div class="row margin-100px-top md-margin-70px-top sm-margin-50px-top">
                    <div class="col-12 col-lg-4 col-md-6  last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/razoes/1.png')}}" alt="" class="width-40 vantagens_suporte">
                            </div>
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais_itens">UNIVERSIDADE <br> CORPORATIVA</h6>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/razoes/2.png')}}" alt="" class="width-40 vantagens_suporte">
                            </div>
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais_itens">ANÁLISE DE PONTO <br> COMERCIAL</h6>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6  last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/razoes/3.png')}}" alt="" class="width-40 vantagens_suporte">
                            </div>
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais_itens">MÉDIA DE LUCRATIVIDADE <br> 25% a 30%</h6>
                              
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row margin-100px-top md-margin-70px-top sm-margin-50px-top">
                    <div class="col-12 col-lg-4 col-md-6 md-margin-50px-bottom sm-margin-30px-bottom last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/razoes/4.png')}}" alt="" class="width-40 vantagens_suporte">
                            </div>
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais_itens">SELEÇÃO E CONTRATAÇÃO <br> DA PRIMEIRA EQUIPE</h6>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 md-margin-50px-bottom sm-margin-30px-bottom last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/razoes/5.png')}}" alt="" class="width-40 vantagens_suporte">
                            </div>
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais_itens">NÃO COBRAMOS ROYALTY <br> E TAXA DE PUBLICIDADE</h6>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-6 md-margin-50px-bottom sm-margin-30px-bottom last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/razoes/6.png')}}" alt="" class="width-40 vantagens_suporte">
                            </div>
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais_itens">CONSULTOR DE <br> TREINAMENTO</h6>
                              
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="wow fadeIn">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h5 class="text-uppercase depoimento margin-20px-bottom font-weight-700 md-width-100">
                            DEPOIMENTO DO FRANQUEADO
                        </h5>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3"></div>
                    <!-- start testimonial item -->
                        <div class="col-12 col-md-6 md-margin-four-bottom text-center sm-margin-twelve-bottom wow fadeInRight last-paragraph-no-margin">
                        <div>
                            <img src="{{asset('assets/site/images/michell.png')}}" alt="" >
                        </div>
                        <p class="mt-4">
                            Optei pela franquia da Imugi porque enxerguei a possibilidade de 
                            tornar-me um parceiro estratégico em uma marca que tem uma forma inovadora 
                            de trabalhar em um mercado em ascensão. Fiquei surpreendido com a qualidade 
                            do treinamento baseado nos manuais de ponto comercial, sistema, operação, gestão,
                            arquitetônico e implantação. O suporte da franqueadora é incrível
                        </p>
                        <span class="text-extra-dark-gray mt-4 font-weight-600 text-small text-uppercase d-block line-height-10 alt-font">MICHELL BEZERRA</span>
                        <span class="text-light-gray2 text-extra-small text-uppercase text-medium-gray">Franqueado - Unidade Macéio - AL</span>
                    </div>
                    <!-- end testimonial item -->
                </div> 
            </div>
        </section>
        <section class="wow fadeIn bem_vindo_img"  id="matricula" style="background-color:#7aba17;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-sm-6 col-lg-8 md-margin-50px-bottom sm-margin-30px-bottom">
                            <div class="md-no-padding-lr">
                                <h4 class="educacao text-white-2">
                                    Quer saber mais?
                                </h4>
                                <p class="obs_lead">
                                   Preencha o formulário abaixo para nossa <br> 
                                   equipe entrar em contrato para você
                                </p>
                                @if (count($errors) > 0)
                                                <div class="alert alert-danger">
                                                    <button type="button" class="close" data-dismiss="alert">×</button>
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                </div>
												@endif
												@if ($message = Session::get('success'))
												<div class="alert alert-success alert-block">
													<button type="button" class="close" data-dismiss="alert">×</button>
														<strong>{{ $message }}</strong>
												</div>
												@endif
                                    <form method="POST" action="{{route('contatoFranquia')}}">
                                    {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" class="form-control btn_lead" name="nome" placeholder="Insira seu nome e sobrenome">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control btn_lead" name="email" placeholder="Insira o seu E-mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="telefone form-control btn_lead" name="telefone" placeholder="Seu Celular com DDD">
                                        </div>
                                        <div class="form-group">
                                            <div style="float:right;">
                                                <input type="submit" class="btn_submit_franquia">
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            @include('layouts.site.footer')
 @endsection