@extends('layouts.template')
@section('titulo','Unit 13 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade13" data-etapa="conversation">
				<h3 class="barlow">UNIT 13 - LAYER STYLE</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit13/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Beatriz :</b> Hey guys! We have something really cool to talk about today. It’s called layer style. I know the name doesn’t sound very interesting, but the possibilities with this tool are vast.</p>
					<p><b>Lucy :</b> Bia, I used that tool before. Last year I wanted to create a totally customized flyer for my friend’s business. The layer style tool was perfect for the job. My friend loved it!</p>
					<p><b>Beatriz :</b>  Good to know that you know how to use this very important tool, lucy!</p>
					<p><b>ADAM :</b> But bia, what does it do exactly?</p>
					<p><b>Beatriz : </b> Basically, everything you can imagine! You can create 3d shapes, add borders, colors, textures, images, vectors and much more!</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit13/ilust_13.jpg') }}" alt="Beatriz, Lucy and Adan" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="{{ asset('assets/portal/images/play-video.jpg') }}"  controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo13.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
