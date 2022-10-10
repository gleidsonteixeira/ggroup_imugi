@extends('layouts.site.template')
@section('titulo','Imugi Tecnologia e Educação')
@section('conteudo')
<section class="wow fadeIn bg_cota" style="background-image: url({{asset('assets/site/images/bg-socio-investidor.png')}}); background-repeat:no-repeat; background-size: cover; padding:50px 0px 50px 0px;">
<div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6 text-center md-margin-50px-bottom sm-margin-30px-bottom">
                            <div class="text-center text-lg-left md-no-padding-lr">
                                <img src="{{asset('assets/img/logo_imugi.png')}}" alt="" class="logo-land">
                                <div style="height:50px;"></div>
                                <h5 class="seja-socio text-white-2">
                                    SEJA NOSSO SÓCIO
                                    <div style="height:10px;"></div>
                                    <span class="titulo_2"> INVESTIDOR </span>
                                    
                                <p class="desc-investimento width-90 font-weight-300 md-width-100">
                                <span class="destaque-investimento"> Invista </span> R$ 23MIL <span class="destaque-investimento"> e tenha lucro <br>
                                 mensal de </span>  R$ 3.500,00
                                </p>
                                <div style="height:150px;"></div>
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col-xs-4 col-lg-4">
                            <div class="card lead-franquia">
                            
                                <div class="card-body">
                                    <p class="titulo_socio">Comece a Investir <br>
                                     <span class="sub_socio"> O jeito mais fácil de faturar $$$ </span>
                                    </p>
                                    
                                        
                                        <form method="POST" action="{{route('contatoSocio')}}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" required class="form-control btn_socio" name="nome" placeholder="Informe seu Nome e Sobrenome">
                                         </div>
                                        <div class="form-group">
                                            <input type="email" required class="form-control btn_socio" name="email" placeholder="Informe seu E-mail">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" required class="telefone form-control btn_socio" name="telefone" placeholder="Seu Celular com DDD">
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn_submit_socio btn-block" value="Quero Investir">
                                        </div>
                                    </form>
                                        <p class="obs_socio">Preencha o formulário para nossa <br>
equipe entrar em contato com você</p>
                                </div>
                              </div>
                        </div>
                        <img src="{{asset('assets/site/images/seta.png')}}" alt="" class="seta_socio">
                    </div>
                </div>
</section>

<section class="wow fadeIn pd-quem_somos" style="padding: 50px 0!important;">
                <div class="container"> 
                    <div class="row align-items-center">
                    <div class="col-12 col-lg-5 wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                                <div class="top_centro"></div>
                                <span  class="quem_somos_franquia">
                                    Quem Somos:
                                 </span>
                                <p class="mt-4 desc-somos">
                                Fazemos parte do Grupo Gracom  que possui mais de 10 anos administrando redes com escolas próprias e franqueadas por todas as regiões do Brasil.
                                </p>
                                </p>
                                <p class="mt-4 desc-somos">
A Imugi é uma escola de Tecnologia e Educação que utiliza uma metodologia de ensino única abordando interdisciplinarmente conteúdos das áreas de: Robótica, game, programação, inglês e computação gráfica. 
Um novo mundo cria novas oportunidades! 

                                </p>

                                <iframe width="500" height="315"  src="https://www.youtube.com/embed/ykNaUMOa_Jk" class="margin-30px-top margin-30px-bottom video_inst"></iframe>
                            </div>
                    </div>
                    <!-- start feature box -->
                    <div class="col-12 col-md-6 sm-margin-30px-bottom text-center text-md-left wow fadeInUp last-paragraph-no-margin" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp; padding-left:0px!important;">
                        <div class="row m-0">
                            <div class="col-12 col-lg-2 col-md-4 pl-0 sm-no-padding-lr float-left sm-margin-15px-bottom">
                            <img src="{{asset('assets/site/images/icones/franqueado.png')}}" alt="" class="img-franqueado">
                            </div>
                            <div class="col-12 col-lg-9 col-md-8 p-0">
                                <span class="margin-5px-bottom d-block  sm-margin-10px-bottom titulo-socio">O QUE É O SÓCIO INVESTIDOR?</span>
                            </div>
                            <p class="lg-width-100 desc-invest">Adquire no mínimo 10% de cota de uma unidade escolar no valor de R$23 mil reais, 
                                tendo a franqueadora como gestora e responsável pela prestação de contas <br>
e divisão dos lucros. 

 </p>
                        </div>
                    </div>
                </div>
            </section>
            <div style="height:80px;"></div>
            <section class="wow fadeIn bg_cota_img" style="background-image: url({{asset('assets/site/images/bg-land.png')}}); background-repeat:no-repeat; background-size: cover; padding:80px 0px;">
                <div class="container">
                    <div class="row">
                        <div class="md-margin-50px-bottom sm-margin-30px-bottom">
                            <div class="md-no-padding-lr">
                               <h2 class="titulo_cotas">
                                    Não cobramos taxa de <br>  Royalties e Publicidade
                                </h2>
                                <h4 class="desc-royalt">100% do faturamento é da unidade</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
            <section class="border-top border-color-extra-light-gray wow fadeIn" style="padding: 100px 0px 0px 0px!important;">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h5 class="text-uppercase diferenciais-land text-center  margin-20px-bottom font-weight-700 md-width-100">
                        DIFERENCIAIS <br> DA IMUGI
                        </h5>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="row margin-50px-top md-margin-70px-top sm-margin-50px-top">
                    <div class="col-lg-6 col-md-6  last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/razoes/1.png')}}" alt="" class="width-60 vantagens_suporte">
                            </div>
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais-item-land">UNIVERSIDADE <br> CORPORATIVA</h6>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 last-paragraph-no-margin wow fadeInUp">
                            <img src="{{asset('assets/site/images/razoes/2.png')}}" alt="" class="width-60 vantagens_suporte">
                            <div class="post-details">
                            <h6 class="mt-4 text-center diferenciais-item-land">ANÁLISE DE PONTO <br> COMERCIAL</h6>
                            </div>
                    </div>
                </div>
                <div class="row margin-50px-top md-margin-70px-top sm-margin-50px-top">
                    <div class="col-lg-6 col-md-6  last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/razoes/4.png')}}" alt="" class="width-60 vantagens_suporte">
                            </div>
                            <div class="post-details">
                                <h6 class="mt-4  text-center diferenciais-item-land">EQUIPE <br> MULTIDISCIPLINAR</h6>
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 last-paragraph-no-margin wow fadeInUp">
                            <img src="{{asset('assets/site/images/razoes/6.png')}}" alt="" class="width-60 vantagens_suporte">
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais-item-land">CONSULTOR DE <br> TREINAMENTOS</h6>
                            </div>
                    </div>
                </div>
                <div class="row margin-50px-top md-margin-70px-top sm-margin-50px-top">
                    <div class=" col-lg-6 col-md-6  last-paragraph-no-margin wow fadeInUp">
                        <div>
                            <div>
                                    <img src="{{asset('assets/site/images/razoes/3.png')}}" alt="" class="width-60 vantagens_suporte">
                            </div>
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais-item-land">MÉDIA DE <br> LUCRATIVIDADE</h6>
                              
                            </div>
                        </div>
                    </div>
                    <div class=" col-lg-6 col-md-6 last-paragraph-no-margin wow fadeInUp">
                            <img src="{{asset('assets/site/images/razoes/5.png')}}" alt="" class="width-60 vantagens_suporte">
                            <div class="post-details">
                                <h6 class="mt-4 text-center diferenciais-item-land">NÃO COBRAMOS <br>
ROYALTY E TAXA <br>
DE PUBLICIDADE</h6>
                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-center">
                        <h5 class="text-uppercase depoimentos margin-20px-bottom font-weight-700 md-width-100">
                            DEPOIMENTOS
                        </h5>
                    </div>
                </div>
                <div class="row">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
	<!-- Wrapper for carousel items -->
	 <div class="carousel-inner">		
		    <div class="carousel-item active">
			       <div class="img-box">
                        <img src="{{asset('assets/site/images/michell.png')}}" alt=""></div>
			            <p class="desc_depoimentos">Optei pela franquia da Imugi porque enxerguei a possibilidade de 
                            tornar-me um parceiro estratégico em uma marca que tem uma forma inovadora 
                            de trabalhar em um mercado em ascensão. Fiquei surpreendido com a qualidade 
                            do treinamento baseado nos manuais de ponto comercial, sistema, operação, gestão,
                            arquitetônico e implantação. O suporte da franqueadora é incrível</p>
            
                        <div class="sobre_dp_franqueado">MICHELL BEZERRA <br>
                        <span class="franquia">Franqueado - Unidade Macéio - AL </span>

                    </div>
		    </div>
            <div class="carousel-item">
			       <div class="img-box">
                        <img src="{{asset('assets/site/images/michell.png')}}" alt=""></div>
			            <p class="desc_depoimentos">Optei pela franquia da Imugi porque enxerguei a possibilidade de 
                            tornar-me um parceiro estratégico em uma marca que tem uma forma inovadora 
                            de trabalhar em um mercado em ascensão. Fiquei surpreendido com a qualidade 
                            do treinamento baseado nos manuais de ponto comercial, sistema, operação, gestão,
                            arquitetônico e implantação. O suporte da franqueadora é incrível</p>
            
                        <div class="sobre_dp_franqueado">MICHELL BEZERRA <br>
                        <span class="franquia">Franqueado - Unidade Macéio - AL </span>

                    </div>
		    </div>
            <div class="carousel-item">
			       <div class="img-box">
                        <img src="{{asset('assets/site/images/michell.png')}}" alt=""></div>
			            <p class="desc_depoimentos">Optei pela franquia da Imugi porque enxerguei a possibilidade de 
                            tornar-me um parceiro estratégico em uma marca que tem uma forma inovadora 
                            de trabalhar em um mercado em ascensão. Fiquei surpreendido com a qualidade 
                            do treinamento baseado nos manuais de ponto comercial, sistema, operação, gestão,
                            arquitetônico e implantação. O suporte da franqueadora é incrível</p>
            
                        <div class="sobre_dp_franqueado">MICHELL BEZERRA <br>
                        <span class="franquia">Franqueado - Unidade Macéio - AL </span>

                    </div>
		    </div>	
	</div>
	<!-- Carousel controls -->
	<a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
		<i class="fa fa-angle-left"></i>
	</a>
	<a class="carousel-control-next" href="#myCarousel" data-slide="next">
		<i class="fa fa-angle-right"></i>
	</a>
</div>
                   
                </div> 
            </div>
        </section>
        <section class="wow fadeIn bg_cota_img" style="background-image: url({{asset('assets/site/images/bg-land.png')}}); background-repeat:no-repeat; background-size: cover; padding: 80px 0px;">
                <div class="container">
                    <div class="row">
                        <div class="comece-faturar">
                            <div class="md-no-padding-lr">
                               <h2 class="faturar_escola">Comece a faturar com a Escola </h2>
                                <h4 class="titulo_franquia_cotista">
                                que mais Cresce <br> no Brasil
                                </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
            <section style="padding:10px 0px 0px 0px!important;">
            <div class="container-fluid position-relative">
                <div class="row align-items-center"> 
                    <div class="col-12 col-lg-6 text-center wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                        <img src="{{asset('assets/site/images/investimento2.png')}}" alt="" class="investimento">
                    </div>  
                </div>
            </div>
        </section>
 @endsection