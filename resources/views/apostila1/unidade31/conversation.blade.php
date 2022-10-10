@extends('layouts.template')
@section('titulo','Unit 31 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade31" data-etapa="conversation">
				<h3 class="barlow">UNIT 31 - VIDEO TRANSITION</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit31/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Victor :</b>  So guys, today we have one last tool to talk about. Can anyone tell me how you can transition one take of a clip to another?</p>
					<p><b>Stefany :</b>  Victor, I suppose you should use the transition effect tool.</p>
					<p><b>Victor :</b> There you go! It’s pretty intuitive, isn’t it? The name speaks for itself.</p>
					<p><b>Laura :</b> It’s a great tool because it has a bunch of effects for transitioning.</p>
					<p><b>Victor :</b> And where can you find this tool, laura?</p>
					<p><b>Laura :</b> It’s on the upper left of the timeline panel.</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit31/ilust_31.jpg') }}" alt="Victor and Stefany" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="{{ asset('assets/portal/images/play-video.jpg') }}"  controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo31.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
