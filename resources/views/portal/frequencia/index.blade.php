@extends('layouts.portal.template')

@section('titulo','Portal do Aluno | Frequencia / Reposição')

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

			<div class="header-hero-section"></div>

		<section id="content" class="no-sidebar-page">

		<div id="content-wrap" class="page-builder">

			<section id="page-content">

			<div class="clearfix">

				<div class="carousel slide">

					<div class="carousel-inner">

						<div class="item active">

							<img src="{{asset('assets/portal/images/alunos.jpg')}}" alt="Notas">

						</div>

					</div>

				</div>

			</div>	

				<div class="be-section-pad clearfix area-frequencia">

					<div class="be-row be-wrap clear">

						<div class="col-lg-6 espacamento-frequencia">

							<h1 class="font-34"><strong>Frequência</strong></h1>

							<span class="font-16">

									@foreach($alunos as $aluno)

											<strong> Aluno (a): {{$aluno->nome}}  <br>

											Turma: {{$aluno->turma}} <br>

											Unidade: {{$aluno->unidade}}

									@endforeach

							</span>

						</div>

						<div class="col-lg-6 mt-50">

							@foreach($frequencia as $freq)

							<p class="circle porcentagem-frequencia"><strong> {{$freq->per_presenca}}%</strong></p>

							@endforeach

						</div>

					</div>

				</div>

			</section>

		</div>

		 <div class="be-section  clearfix" data-headerscheme="background--dark">

			                    <div class="clearfix padding-100">

			                        <div class="col-md-2"></div>

			                            <div class="col-md-6 column-block" style="">

			                                <h3>Solicite sua <br>

						Reposição de Aula.</h3>

			                                <p>Preencha o formulário abaixo que entraremos em contato com você o mais rápido possível.</p>

			                                <div class="wpcf7">

			                                   <div class="span3">

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



												    <form method="post" action="{{url('enviar-frequencia')}}">

													{{csrf_field()}}

												    

													<label>Nome (*) </label>

												    <input type="text" name="nome" class="@error('nome') is-invalid @enderror" value="{{ old('nome') }}"  autofocus>

												    

													<label>Telefone (*)</label>

												    <input type="text" name="telefone" class="@error('telefone') is-invalid @enderror" value="{{ old('telefone') }}" autofocus>

							

												   	<label style="margin-top: 20px;">Email(*)</label>

												    <input type="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" autofocus>

												    

													<label style="margin-top: 20px;">Nº de Aulas Perdidas(*)</label>

													<input type="text" name="aula_perdida" class="@error('aula_perdida') is-invalid @enderror" value="{{ old('aula_perdida') }}"  autocomplete="aula_perdida" autofocus  maxlength="3">



													<label class="mt-20">Obs.:</label>

												   	<textarea name="mensagem" class="@error('mensagem') is-invalid @enderror" value="{{ old('mensagem') }}"  autocomplete="mensagem" autofocus>

												   		

												   	</textarea>

												    <input type="submit" value="Enviar"  class="btn_salvar">

												    </form>

												</div>

			                                </div>

			                            </div>

			                        

			                    </div>

			                </div>

			            </div>



			         </div>

					 @include('layouts.portal.footer')

	</div>

	

	</div>

	</div>

	<a href="" id="back-to-top"><i class="font-icon icon-up-open-big"></i></a>

</div>

@endsection