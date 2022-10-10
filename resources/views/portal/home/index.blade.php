@extends('layouts.portal.template')

@section('titulo','Portal do Aluno | Home')

@section('conteudo')



@include('layouts.portal.menus.sidebar')

<div id="main-wrapper">

	<div id="main" class="ajaxable layout-wide">

        

        @include('layouts.portal.header')

        @if($aluno->turma == "")

		<div class="alert alert-warning" style="margin:0!important;">

            <strong>Atenção!</strong> Para acesso completo ao portal aguarde o prazo de até 48h.

        </div>

        @endif

        <div class="carousel slide">

			<div class="carousel-inner">

				<div class="item active">

					<a href="http://fpeduc.com/aluno-portal/{{ Auth::user()->name}}/{{ Auth::user()->email}}/{{ Auth::user()->matricula}}/@if($aluno->turma){{$aluno->turma->cod_unidade}}@else 0 @endif" target="_blank" style="background-color:#fff; margin-top:-20px;">

						<input type="image" src="{{asset('assets/portal/images/aovivo/aovivo.jpg')}}" alt="Submit" style="width:100%;">

					</a>

				</div>

			</div>

			<section class="be-section-pad clearfix" style="padding-bottom:60px; padding-top: 60px;  background-color: #ffffff;">

               	<div class="be-row be-wrap clear">

					<div class="one-half column-block ">

						<h3 class="century" style="margin-top: 50px; font-size: 40pt;">BEM VINDO A <br><strong style="font-weight: 1200;">  SEU PORTAL </strong></h3>

						<p style="font-size: 12pt; text-align: justify;">									 

								 Seguindo parâmetros internacionais de qualidade das empresas desenvolvedoras dos softwares, que são ministradas as aulas, foram confeccionadas apostilas interativas e exclusivas disponibilizadas no formato digital. Elas proporcionam autonomia para todos alunos e geram, com foco na sustentabilidade, através do Ecogreen uma econômia de toneladas de papeis anualmente.

					    </p>

					</div>

					<div class="one-half column-block " style="">

					    <div class="be-text-block be-animate scrollToFade" data-animation="fadeInDown">

							<p>

								<iframe width="560" height="315" src="https://www.youtube.com/embed/uf_m3lJ0F-M?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="width: 600px; height: 320px;"></iframe>

							</p>

						</div>

					</div>

				</div>

            </section>

			<div class="carousel slide">

				<section class="carousel-inner">

					<div class="item active">

					    <img src="{{asset('assets/portal/images/portal.png')}}" alt="Portal do Aluno">

					</div>

                </section>

                <section class="be-section-pad clearfix" style="padding-top:10px;padding-bottom:80px; background-color: #ffffff;">

               		<div class="be-row be-wrap clear">

						<div class="col-lg-12" style="margin-top: 90px;">

							<p class="introducao">

								 É com muita satisfação que recebemos você, nosso(a) novo(a) aluno(a)! Parabéns! Tenho certeza que você fez uma ótima escolha na Imugi Tecnologia e Educação e vamos compartilhar as próximas emoções e aprendizados. Iremos trabalhar para oferecer uma formação com excelência em Efeitos Visuais e obter a sua satisfação durante todo o curso. Você sairá preparado(a) para ingressar no Mercado de Trabalho do Design, pois além do conhecimento especível você terá benefícios exclusivos que darão um Up na sua carreira profissional. Agradecemos a confiança em nosso trabalho de prepará-lo para o futuro. Esteja certo de que faremos o máximo para sua formação completa. Seja Bem-Vindo!

							</p>

						</div>

					</div>

                </section>

                <section class="header-hero-section" id="hero-section">

                    <div class="hero-section-inner-wrap">

                        <div class="hero-section-inner">

                            <div id="myCarousel" class="carousel slide" data-ride="carousel">

                        <div class="carousel-inner">

                            <div class="item active">

                            <img src="{{asset('assets/portal/images/sucesso.jpg')}}" alt="Portal do Aluno">

                            </div>

                        </div>

                        </div>

                    </div>

                </section>	

                <section class="header-hero-section">

                    <div class="hero-section-inner-wrap">

                        <div class="hero-section-inner">

                            <div class="carousel slide">

                                <div class="carousel-inner">

                                    <div class="item active">

                                        <img src="{{asset('assets/portal/images/conhecendo.jpg')}}" alt="Portal do Aluno">

                                    </div>

                            </div>

                        </div>

                    </div>

                </section>	

               <section class="header-hero-section" id="hero-section" style="padding-top: ">

               	    <div class="header-hero-custom-section">

               		    <div class="hero-section-wrap be-section  full-no be-bg-cover be-bg-parallax  be-bg-overlay  clearfix" style="background: url('{{asset('assets/portal/images/bg.png')}}') no-repeat fixed center center; height: 520px !important;">

               			    <div class="section-overlay" style="background: #000000; -ms-filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=30);filter: alpha(opacity=20);-moz-opacity: 0.2;-khtml-opacity: 0.2;opacity: 0.2;">

               			</div>

               	        <div class="be-row be-wrap">

               	            <div class="hero-section-inner-wrap">

               		            <div class="hero-section-inner">

               			            <h2 style="text-align: right;">

                                        <span style="color: #000; font-size: 32pt;" id="depende">

                                            <strong> DEPENDE DE NÓS! </strong>

                                        </span>

               			            </h2>

               			            <div style="width: 400px; float: right;" id="sobre">

                                        <p style="font-size: 13pt; color: #000;">Caro aluno, acredite no seu potencial! Acredite no seu sonho e saiba que você está começando um curso voltado para o seu sucesso e será segmentado por etapas.</p>

                                        <p style="font-size: 12pt; color: #000; font-weight: bold;">Como Faço para ter acesso?</p>

                                        <ul style="color: #000;">

                                            <li><span class="motivos"> Não falte as aulas;</span></li>

                                            <li><span class="motivos">Estude e pratique;</span></li>

                                            <li><span class="motivos">Faça as atividades na aula em casa</span></li>

                                            <li><span class="motivos">Pergunte quando estiver com dúvidas</span></li>

                                            <li><span class="motivos">Aproveite todos os benefícios da Escola</span></li>

                                            <li><span class="motivos"> Divirta-se aprendendo</span></li>

                                            <li><span class="motivos">Acredite no seu sonho!</span></li>

                                        </ul>

               			            </div>

					            </div>

				            </div>

			            </div>

		            </div>

                </section>

            </div>	

	        <div class="be-section-pad clearfix" style="padding-top:10px;padding-bottom:60px; background-color: #ffffff;">

               	<div class="be-row be-wrap clear">

					<div class="col-lg-12" style="margin-top: 80px;">

						<div class="col-lg-6">

							<h1 style="float: right;">NOSSOS  <strong>CURSOS</strong></h1>

						</div>

						<div class="col-lg-6">

							<img src="{{asset('assets/portal/images/logo_curso/code_block.jpg')}}" style="width: 200px">

							<img src="{{asset('assets/portal/images/logo_curso/cg_fly.jpg')}}" style="width: 200px">

						</div>

					</div>

				</div>

            </div>

            <div class="carousel slide">

				<div class="carousel-inner">

					<div class="item active">

					      <img src="{{asset('assets/portal/images/footer.png')}}" alt="Portal do Aluno">

					</div>

				</div>

                <div class="be-section-pad clearfix" style="padding-top:10px;padding-bottom:10px; background-color: #ffffff;">

                    <div class="be-row be-wrap clear">

                        <div class="col-lg-12" style="margin-top: 90px;">

                            <p style="font-size: 14pt; text-align: justify;">

                                    A Imugi, pensando no atendimento de excelência para você aluno(a), temos o nosso setor exclusivo para atender todas as dificuldades que vier acontecer durante o seu curso. É uma Central de Relacionamento que estará resolvendo da melhor forma para dar continuidade

                                    no seu curso.

                            </p>

                        </div>

                    </div>

                </div>

               @include('layouts.portal.footer')

            </div>

            <a href="#" id="back-to-top"><i class="font-icon icon-up-open-big"></i></a>

        </div>

 

 @endsection