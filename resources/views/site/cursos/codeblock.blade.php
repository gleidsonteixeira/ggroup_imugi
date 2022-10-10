@extends('layouts.site.template')
@section('titulo','Imugi Tecnologia e Educação')
@section('conteudo')
@include('layouts.site.menus.header')
<section class="wow fadeIn bem_vindo_img"  id="matricula" style="background-image: url({{asset('assets/site/images/bg-code.jpg')}}); background-repeat:no-repeat; background-position: center;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-6 text-center md-margin-50px-bottom sm-margin-30px-bottom">
                            <div class="text-center text-lg-left md-no-padding-lr">
                                <img src="{{asset('assets/site/images/logo-codeblock.png')}}" alt="" class="logo-curso">
                                
                            </div>
                        </div>
                        <div class="col-md-2"></div>
                        <div class="col-xs-4 col-lg-4">
                            <div class="card lead" style="z-index:400;">
                            
                                <div class="card-body">
                                    <p class="titulo_lead">Agende uma aula experimental <br> na escola mais próxima</p>
                                        
                                        <form method="POST" action="{{route('alunoContato')}}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <input type="text" required class="form-control btn_lead" name="nome" placeholder="Nome">
                                         </div>
                                        <div class="form-group">
                                            <input type="text" required class="telefone form-control btn_lead" name="telefone" placeholder="Telefone">
                                        </div>
                                        <div class="form-group">
                                        <select name="unidade" class = "btn_lead_select">
                                        <option value="--" selected>Escolha a imugi mais próxima ;)</option>
                                                <option value="Anápolis">Anápolis / GO</option>
                                                <option value="Arapiraca">Arapiraca / AL</option>
                                                <option value="Belém">Belém/ PA</option>
                                                <option value="Fortaleza Centro"> Fortaleza / CE </option>
                                                <option value=" Lauro de Freitas"> Lauro de Freitas / BA</option>
                                                <option value="Macéio">Macéio / AL</option>
                                                <option value="Manaus">Manaus / AM </option>
                                                <option value="Natal">Natal / RN </option>
                                                <option value="Fortaleza Messejana">Messejana / CE</option>
                                                <option value="São Luís">São Luís / MA</option>  
                                                <option value="Sorocaba">Sorocaba / SP</option>
                                                <option value="Teresina">Teresina / PI</option> 
                                                <option value="Vitória">Vitória / ES</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="submit" class="btn_submit_lead btn-block" value="Quero agendar minha aula">
                                        </div>
                                    </form>
                                        <p class="obs_lead">*Nossa equipe irá entrar em contato   para  marcar   o melhor dia e horário para agendar sua aula</p>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </section>
            <img src="{{asset('assets/site/images/seta.png')}}" alt="" class="seta">
            
        <section class="wow fadeIn bg_bvd" style="padding: 20px 0px!important;">
            <div class="container ">
                <div class="row">
                    <!-- start features box item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                       <img src="{{asset('assets/site/images/icones/modulos.png')}}" alt="" width="160">
                        <p class="">
                        3. Módulos
                        </p>
                    </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                          <img src="{{asset('assets/site/images/icones/calendario.png')}}" alt="" width="160">
                        <p class="">
                            32. Meses
                            </p>
                        </div>
                    <!-- end features box item -->
                    <!-- start features box item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                            <img src="{{asset('assets/site/images/icones/horas.png')}}" alt="" width="160">
                            <p class="">384. Horas</p>
                        </div>
                        <div class="col-12 col-lg-3 col-md-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                            <img src="{{asset('assets/site/images/icones/idade-minima.png')}}" alt="" width="160">
                            <p class="">Idade Mínima <br> 12 anos</p>
                        </div>
                    <!-- end features box item -->
                </div>
                <div style="height: 130px;"></div>
                <div class="row mb-4">
                    <div class="col-12 text-center wow fadeIn">
                    <h6 class="seja-bilingue"> Faça Inglês + Robótica</h6>
                        <h5>
                        Aprenda IA (Inteligência Artificial), através de projetos de automação <br> 
                        que serão propostos no decorrer do curso.
                        </h5>
                        <div class="divisao-cg"></div>
                    </div>
                </div>
                <div style="height: 140px;"></div>
                <div class="row align-items-center"> 
                    <div class="col-12 col-lg-5 md-margin-50px-bottom">
                         <h5 class="preparese">
                         Se prepare para <br>
o mercado de trabalho <br>
internacional
                       </h5>

                    </div>
                    <img src="{{asset('assets/site/images/modulos-robotica.png')}}" alt="" class="modulos" style="position:absolute; width:60%; right:0px;">
                </div>
                <div style="height: 100px;"></div>
            </div>
        </section>
        <!-- end information section -->
        <!-- start parallax feature box -->
        <div class="bg-light-gray">
        <section class="p-0 wow fadeIn" style="padding-top:80px!important;">
                <div class="container">
                    <div class="row"> 
                            <div class="col-12 col-lg-6 cover-background md-height-400px wow fadeInRight" style="background-image:url({{asset('assets/site/images/robotica.png')}});"></div>
                        <div class="col-12 col-lg-6 wow fadeInLeft padding-four-all md-padding-eight-all md-padding-15px-lr sm-padding-50px-tb">
                            <div class="row m-0">
                                <div class="col-12 col-xl-12 margin-six-bottom lg-margin-six-bottom md-margin-30px-bottom sm-no-margin-bottom">
                                 <h2 class="titulo-curso">Robótica e Programação</h2>
                                 <p class="mt-4">
                                 O curso oferece e disponibiliza ao estudante recursos para o ensino da robótica de forma criativa, eficiente e significativa, através
de uma plataforma profissional de prototipagem (Arduino), atrelado ao conhecimento de
eletrônica para robótica e linguagens de
programação
em blocos e em texto.

                                    </p>
                                    <p>
                                        
Construindo assim o processo de ensino
e aprendizagem baseado nos três pilares
da robótica: Mecânica, Eletrônica e Lógica
de Programação, estimulando os estudantes
a criar, estabelecer, propor e adaptar
tecnologias visando a participação
de competições de robótica.
                                    </p>
                                    <a class="btn_curso_sobre text-white" href="#matricula">Quero Agendar Minha Aula</a>
                                </div>
                            </div>
                        </div> 
                    </div>
                </div>
            </section>
            
        <section class="p-0 wow fadeIn" style="padding:60px 0px!important;">
            <div class="container">
                <div class="row"> 
                    <div class="col-12 col-lg-6 wow fadeInLeft padding-four-all md-padding-eight-all md-padding-15px-lr sm-padding-50px-tb">
                        <div class="row m-0">
                            <div class="col-12 col-xl-10 code_b margin-six-bottom lg-margin-six-bottom md-margin-30px-bottom sm-no-margin-bottom">
                                    <h1 class="titulo-curso">Língua Inglesa</h1>
                                    <p class="mt-4">
                                    Inglês é a lingua mais falada do mundo por não nativos. 70% das empresas 
                                    internacionais do Brasil buscam profissionais que falem 
                                    inglês podendo oferecer salário 30% a 50% maior ao daqueles sem o idioma.
                                         </p>
                                         <a class="btn_curso_sobre text-white" href="#matricula">Quero Agendar Minha Aula</a>
                                         <!-- end feature box item -->
                            </div>
                        </div>
                    </div> 
                    <div class="col-12 col-lg-6 cover-background md-height-400px wow fadeInRight" style="background-image:url({{asset('assets/site/images/ingles.png')}})"></div>
                </div>
            </div>
        </section>
        </div>
        <section class="wow fadeIn" style="padding:10px 0px 0px 0px!important;">
                <div class="container"> 
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-5 text-center wow fadeInLeft">
                                <img src="{{asset('assets/site/images/aluno.png')}}" alt="" class="w-100">
                        </div> 
                        <div class="col-12 col-lg-7 wow fadeInRight last-paragraph-no-margin" data-wow-delay="0.2s">
                            <div class="padding-eight-lr text-center text-lg-left sm-no-padding w-100">
                                <span  class="faca-imugi">
                                Faça a Escolha <br> 
                                Certa! Tecnologia <br>
                                e Educação
                                 </span>
                                 <h4 class="mercado-trabalho">Mercado de Trabalho: </h4>
                                <p class="mt-4 text-justify center desc-mercado">
                                Quadrinhos, Infografia, Diagramação, Publicidade, Ilustração, Fotografia, Moda, Arte Final, Impressão, Artes Gráficas, Direção de Arte, Design Gráfico, Web Design, Animação 2D, Web Publish,
                                 Modelagem e Animação 3D, Texturização, Cinema e TV, Composição, Edição Audiovisual, Design de Gamers.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <img src="{{asset('assets/site/images/divisor.png')}}" alt="" class="w-100">
            <section class="wow fadeIn bg_bvd" style="padding: 130px 0px 80px 0px!important; background-color:#FBFBFB;">
            <div class="container ">
            <div class="row mb-4">
                    <div class="col-12 text-center wow fadeIn">
                        <h5 class="text-uppercase depoimentos">
                        Quais os diferenciais do curso?
                        </h5>
                    </div>
                </div>
                <div class="row">
                    <!-- start features box item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                       <img src="{{asset('assets/site/images/icones/material-didatico.png')}}" alt="" width="160">
                       <div class="titulo_diferenciais margin-5px-bottom mt-4">Material Didático</div>
                        <p class="">
                        Altamente tecnológico
                        e sempre atualizado por professores atuantes no mercado.

                        </p>
                    </div>
                    <!-- end features box item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                       <img src="{{asset('assets/site/images/icones/central-estagio.png')}}" alt="" width="160">
                       <div class="titulo_diferenciais margin-5px-bottom mt-4">Central de Estágios</div>
                        <p class="">
                        Realiza uma ponte entre nossos alunos
e o mercado de trabalho.

                        </p>
                    </div>
                    <!-- start features box item -->
                    <div class="col-12 col-lg-3 col-md-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                       <img src="{{asset('assets/site/images/icones/aprimorar.png')}}" alt="" width="160">
                       <div class="titulo_diferenciais margin-5px-bottom mt-4">Programa Aprimorar</div>
                        <p class="">
                        Cronograma de palestras extracurriculares com contéudos necessários para uma carreira profissional abordados  interdisciplinarmente.

                        </p>
                    </div>
                    <div class="col-12 col-lg-3 col-md-6 text-center md-margin-50px-bottom sm-margin-30px-bottom wow fadeInUp last-paragraph-no-margin">
                       <img src="{{asset('assets/site/images/icones/reposicao.png')}}" alt="" width="160">
                       <div class="titulo_diferenciais margin-5px-bottom mt-4">Reposição de Aulas</div>
                        <p class="">
                        Os alunos receberão aulas
de reposição para faltas justificadas e todo um acompanhamento pedagógico no decorrer do curso.

                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="wow fadeIn" style="background-image: url({{asset('assets/site/images/depoimentos.png')}}); background-repeat:no-repeat; background-position: bottom; background-position-x: top; padding:50px 0px;">
            <div class="container">
                
                <div class="row position-relative margin-100px-top md-margin-70px-top sm-margin-50px-top">
                    <div class="swiper-container swiper-pagination-bottom black-move blog-slider swiper-three-slides">
                        <div class="swiper-wrapper">
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                                <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                    <p class="md-margin-15px-bottom sm-margin-20px-bottom"> A escola é maravilhosa e possui ótimos professores.</p>
                                    <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">ANA VITÓRIA</span>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                                <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                    <p class="md-margin-15px-bottom sm-margin-20px-bottom">Ambiente agradável e tecnológico com ótimos cursos.</p>
                                    <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">PEDRO HENRIQUE</span>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                            <!-- start testimonial item -->
                            <div class="col-12 col-lg-4 col-md-6 swiper-slide md-margin-four-bottom">
                                <div class="margin-half-all bg-white box-shadow-light text-center padding-fourteen-all sm-padding-30px-all">
                                    <p class="md-margin-15px-bottom sm-margin-20px-bottom">Referência em curso de inglês com computação gráfica,
                                        uma experiência que transformou minha vida profissional.</p>
                                    <span class="text-extra-dark-gray text-small text-uppercase d-block line-height-10 alt-font font-weight-600">VITOR RODRIGUES</span>
                                </div>
                            </div>
                            <!-- end testimonial item -->
                        </div>                        
                        <div class="swiper-pagination swiper-pagination-three-slides h-auto"></div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.site.footer')
 @endsection