@extends('layouts.template')
@section('titulo','Unit 30 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade30" data-etapa="conversation">
				<h3 class="barlow">UNIT 30 - VIDEO EFFECTS</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit30/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Victor :</b>  What’s happening, guys? Listen, today we have something quite interesting to talk about. We’re gonna study video effects! Awesome, right? Well, do any of you have any knowledge about adding effects to video clips?</p>
					<p><b>Marcelo :</b>  Yeah, I kind of have an idea. I make comedy videos in my channel.</p>
					<p><b>Victor :</b> All right. And what can you tell us about it?</p>
					<p><b>Marcelo :</b> Well, I can say that it is really cool! That’s for sure. And you can do a lot of things with it like creating vintage videos using the black & white tool in the adjustment panel. You can play around with color balance such as brightness/contrast and vibrance. Basically, to make a long story short, you can use the adjustment panel to create amazing effects.</p>
				</div>				
				<figure>
					<img src="{{ asset('assets/img/playgo/unit30/ilust_30.jpg') }}" alt="Victor and Marcelo" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="{{ asset('assets/portal/images/play-video.jpg') }}"  controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo30.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
