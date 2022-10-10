@extends('layouts.template')
@section('titulo','Unit 12 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade12" data-etapa="conversation">
				<h3 class="barlow">UNIT 12 - TYPE TOOL & STYLE PANEL</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit12/conversation/conversation.wav') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Nicolas :</b> Hey there, Medina! How are you?</p>
					<p><b>Medina :</b> Good morning, Nicolas! I’m doing ok. What about you?</p>
					<p><b>Nicolas :</b> Great! Thanks. Listen, I have a question for you. I am going to have a party for my birthday and I am making a banner for the event. The problem is that I don’t like the fonts available on Photoshop. Is it possible to create one?</p>
					<p><b>Medina :</b> Good question! Yes, it is possible, but it’s a little difficult. I recommend you download a custom font from the internet. After that, you can use the Horizontal Type Tool to select the font you downloaded.</p>
					<p><b>Nicolas : </b> Thank you so much, Medina! That helped a lot! I have just one more question for you. I want to make the font different. I want it to have a unique style. What can I do?</p>
					<p><b>Medina : </b> Well, you can click on the Style Panel and stylize the text with shadows, colors, textures, dimensions and more. You have many options to choose from.</p>
					<p><b>Nicolas : </b> All right! Thanks again.</p>
					<p><b>Medina : </b> You’re welcome.</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit12/ilust_12.jpg') }}" alt="Medina e Nicolas" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="{{ asset('assets/portal/images/play-video.jpg') }}" controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo12.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
