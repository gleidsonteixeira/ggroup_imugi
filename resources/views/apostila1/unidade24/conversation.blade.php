@extends('layouts.template')
@section('titulo','Unit 24 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade24" data-etapa="conversation">
				<h3 class="barlow">UNIT 24 - ERASER TOOL</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit24/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Marcelo :</b> Teacher, i’m practicing my drawing on photoshop and i’m trying to make a face. It’s not so easy. There are many lines that I need to fix. I need to make these lines less aparent, but I don’t want to delete them completely because I would like to keep the original drawing for future reference.</p>
					<p><b>Sarah :</b>  I understand, Marcelo. There is a simple solution to your complex problem. Can anyone tell us what it is? </p>
					<p><b>Mariana :</b> Is it the eraser, sarah?</p>
					<p><b>Sarah :</b>  that’s right! However, you need to change the opacity of the eraser first. This way, the line is not entirely erased.</p>
					<p><b>Mariana :</b> Oh I see! Marcelo! Thanks, teacher! I’ll try that.</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit24/ilust_24.jpg') }}" alt="Marcelo, Sarah and Mariana" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="{{ asset('assets/portal/images/play-video.jpg') }}" controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo24.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
