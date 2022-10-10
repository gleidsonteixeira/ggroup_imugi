@extends('layouts.template')
@section('titulo','Photoshop | Inntroduction')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila5" data-unidade="intro5" data-etapa="intro">
				<div class="bem-vindo">
					<figure class="banner">
						<img src="{{ asset('assets/img/games_and_animation/intro/bg-intro.jpg') }}" alt="">
					</figure>
					<h3 class="barlow center-align">Seja Bem Vindo Ao Game and Animation</h3>

					<div class="bem-vindo-conteudo">
						<p>Nossa ferramenta para desbravar o mundo do 3D e suas animações será o Cinema 4d,
							software voltado para o desenvolvimento de objetos, texturizações, animações e renderização
							no ambiente virtual. Os jogos vem promovendo desenvolvimentos tecnológicos e sociais, bem
							como um profundo impacto na cultura jovem, modificando linguagens e mídias e criando
							mundos novos cheios de história e ação. Estudaremos um programa, mas todas as atividades
							realizadas nele são padrões em softwares de modelagem 3d.
						</p>
						<p>Sabendo a importância do conhecimento somático vamos usá-lo para explicar todas as
							partes ligadas a animação, com cuidados específicos para quando montarmos um vídeo 
							renderizando ou modelando animações e personagens para uso em jogos e animações 3d. Falaremos sobre
							criação, navegação, animação, anatomia, proporção, iluminação, cores, characteres,
							entre outros recursos explorados pelo programa para desenvolver nossas criações.
						</p>
						
					</div>
				</div>
			</div>
		</div>
	</main>

	<script>
        activeMenu();
    </script>
@endsection
