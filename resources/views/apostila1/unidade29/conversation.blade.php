@extends('layouts.template')
@section('titulo','Unit 29 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade29" data-etapa="conversation">
				<h3 class="barlow">UNIT 29 - KEY FRAME</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit29/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Leon :</b>  Professor, I was practicing video editing with my brother and in mine, the editions I made lasted the entire video. He didn’t have that problem because his were temporary and only lasted the time he wanted them to.</p>
					<p><b>Victor :</b>  Right, Leon. I think I got it. Well, I believe that the problem is that in yours, you didn’t use key frames, but your brother used it in his.</p>
					<p><b>Leon :</b> Ok, but what is a key frame?</p>
					<p><b>Victor :</b> Does anyone know what a key frame is?</p>
					<p><b>Laura :</b>  I do, professor! You can use it to set a beginning and an end to the edition. You need to use at least two key frames to create effects or to make changes in the clip, one to set the beginning and the other for the end.</p>
					<p><b>Victor :</b> Great answer, laura!</p>
					<p><b>Victor :</b> Thank you laura! You’re the best!</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit29/ilust_29.jpg') }}" alt="Leon, Laura and Victor" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="{{ asset('assets/portal/images/play-video.jpg') }}" controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo29.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
