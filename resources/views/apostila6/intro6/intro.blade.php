@extends('layouts.template')
@section('titulo','Video Edition | Inntroduction')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')

	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila6" data-unidade="intro6" data-etapa="intro">
				<div class="bem-vindo">
					<figure class="banner">
						<img src="{{ asset('assets/img/video_edition/intro/bg-intro.jpg') }}" alt="">
					</figure>
					<h3 class="barlow center-align">Seja Bem Vindo A Video Edition</h3>

					<div class="bem-vindo-conteudo">
						<p>O Adobe Premiere Pro CC é um sistema de edição de videos que oferece suporte às cameras e
                  tecnologias mais atuais com poderosas ferramentas e fáceis de usar que se integram perfeitamente com cada fonte de aquisição de vídeo.
						</p>

					</div>
					<div class="bem-vindo-video">
						<video controls="" controlslist="nodownload" disablepictureinpicture="" src="{{ asset('assets/video/intro_playgo.mp4') }}" style="width:100%;"></video>
					</div>
				</div>
			</div>
		</div>
	</main>

	<script>
        activeMenu();
    </script>
@endsection
