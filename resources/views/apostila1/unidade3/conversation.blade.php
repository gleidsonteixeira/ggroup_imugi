@extends('layouts.template')
@section('titulo','Unit 3 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade3" data-etapa="conversation">
				<h3 class="barlow">UNIT 03 - PHOTOGRAPHY AND PHOTOSHOP</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit3/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Professor Sophia Jones :</b> Good morning Class! It is very nice to meet you all! I am Professor Sophia Jones, but please call me Sophia. I am originally from the United States. I’m 27 years old and I am a professional fashion photographer. My hobby is wildlife photography.</p>
					<p><b>Professor Sophia Jones :</b> Do you know why a photographer is teaching you a Photoshop class?</p>
					<p><b>Klaus :</b> Is it because you need Photoshop to edit your photos, teacher?</p>
					<p><b>Professor Sophia Jones :</b> Exactly Klaus! My work is published in magazines and websites, so it is very important for me to know how to use tools for editing.</p>
					<p><b>Katia :</b> Teacher, why do you prefer Photoshop to different programs?</p>
					<p><b>Professor Sophia Jones :</b> Good question, Katia! I choose to use Photoshop because it offers the most advanced and complete editing tools.</p>
				</div>
				<figure class="full">
					<img src="{{ asset('assets/img/playgo/unit3/ilust_03.jpg') }}" alt="Garotos festejando" class="img-e">
				</figure>
				<div class="video-pratica">
					<video controls="" poster="{{ asset('assets/portal/images/play-video.jpg') }}" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo3.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
