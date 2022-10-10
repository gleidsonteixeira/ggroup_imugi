@extends('layouts.portal.template')

@section('titulo','Portal do Aluno | Material Didatico')

@section('conteudo')

@include('layouts.portal.menus.sidebar')

<div id="main-wrapper">

	<div id="main" class="ajaxable layout-wide">

        @include('layouts.portal.header')

		<div class="carousel slide">

			<div class="carousel-inner">

				<div class="item active">

				<a href="http://fpeduc.com/aluno-portal/{{ Auth::user()->name}}/{{ Auth::user()->email}}/{{ Auth::user()->matricula}}/@if($aluno->turma){{$aluno->turma->cod_unidade}}@else 0 @endif" target="_blank" style="background-color:#fff; margin-top:-20px;">

						<input type="image" src="{{asset('assets/portal/images/aovivo/aovivo.jpg')}}" alt="Submit" style="width:100%;">

					</a>

			</div>

			<div class="be-section-pad clearfix" style="padding-bottom:60px; padding-top: 60px;  background-color: #ffffff;">

               	<div class="be-row be-wrap clear">

					<div class="one-half column-block ">

						<h3 class="century" style="margin-top: 50px; font-size: 40pt;">BEM VINDO A <br><strong style="font-weight: 1200;">  SEU PORTAL </strong></h3>

						<p style="font-size: 12pt; text-align: justify;">									 

								 Seguindo parâmetros internacionais de qualidade das empresas desenvolvedoras dos softwares, que são ministradas as aulas, foram confeccionadas apostilas interativas e exclusivas disponibilizadas no formato digital. Elas proporcionam autonomia para todos alunos e geram, com foco na sustentabilidade, através do Ecogreen uma econômia de toneladas de papeis anualmente.

						</p>

					</div>

					<div class="one-half column-block">

						<div class="be-text-block be-animate scrollToFade" data-animation="fadeInDown">

							<p>	

							    <iframe width="560" height="315" src="https://www.youtube.com/embed/uf_m3lJ0F-M?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen style="width: 600px; height: 320px;"></iframe>

							</p>

						</div>

					</div>

				</div>

            </div>

			<div class="carousel slide">

				<div class="carousel-inner">

					<div class="item active">

						<a href="/acesso-material" title="clique para acessar seu material didático">

					    	<img src="{{asset('assets/portal/images/portal.jpg')}}" alt="Portal do Aluno">

						</a>

				</div>

			</div>

            <div class="header-hero-section" id="hero-section">

            <div class="header-hero-custom-section">

               	<div class="be-row be-wrap">

               	    <div class="hero-section-inner-wrap"></div>

                </div>	

               @include('layouts.portal.footer')

            </div>

        </div>

	    <a href="#" id="back-to-top"><i class="font-icon icon-up-open-big"></i></a>

        </div>

	</div>

  </div>

 @endsection

