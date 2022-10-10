@extends('layouts.template')
@section('titulo','Unit 32 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade32" data-etapa="conversation">
				<h3 class="barlow">UNIT 32 - VICTOR’S REVIEW</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit32/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Victor :</b>  Hey class, this is our final lesson. You are all wonderful students and you will go far in life. All you need is dedication! To wrap up our lessons, we are going to do a little review today.</p>
					<p><b>Victor :</b>  Please, someone tell me what tool we can use to add animated effects to the video?</p>
					<p><b>Marcelo :</b> It’s the key frame! You can add it to any point of the video to add an effect and determine its duration.</p>
					<p><b>Victor :</b> Great! And where can you create effects for the videos?</p>
					<p><b>Laura :</b> You can create them in the adjustment panel?</p>
					<p><b>Victor :</b> Way to go! You see? You guys are brilliant!</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit32/ilust_32.jpg') }}" alt="Victor and Marcelo" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="{{ asset('assets/portal/images/play-video.jpg') }}"  controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo32.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	
	<script>
        activeMenu();
    </script>

@endsection
