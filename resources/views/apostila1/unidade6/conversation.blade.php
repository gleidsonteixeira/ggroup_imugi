@extends('layouts.template')
@section('titulo','Unit 6 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade6" data-etapa="conversation">
				<h3 class="barlow">UNIT 06 - Brush and Red Eye Correction</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit6/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Sophia :</b> Morning guys! Open your books and let’s talk about two new tools for touching up some details in your photos. They’re called Healing Brush and Red Eye Correction.</p>
					<p><b>Sophia :</b> What can we use these tools for?</p>
					<p><b>Kate :</b> Well, I don’t know about Healing Brush, but I imagine that Red Eye Correction tool is used to remove the red from your eyes in a picture. It is kind of obvious because of the name.</p>
					<p><b>Sophia :</b> That’s it, Kate. Good answer. What about the Healing Brush, guys?</p>
					<p><b>Carlos :</b> Sophia, I’m not exactly sure, but I think it is used for editing imperfections in the pictures. Am I right?</p>
					<p><b>Sophia :</b> You’re absolutely correct, Carlos! It is a very common tool used by many people to edit imperfections like acne and scars.</p>
				</div>
				<figure class="full">
					<img src="{{ asset('assets/img/playgo/unit6/ilust_06.jpg') }}" alt="Garotos festejando" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="{{ asset('assets/portal/images/play-video.jpg') }}" controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo6.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
