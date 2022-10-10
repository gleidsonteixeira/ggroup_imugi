@extends('layouts.template')
@section('titulo','Unit 19 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade19" data-etapa="conversation">
				<h3 class="barlow">UNIT 19 - TEXT FORMATING</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit19/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Marciel :</b> Professor Akira, I have a doubt. I am practicing by creating a test website. I noticed that the space between the letters are a little far apart. How can I make them be closer together?</p>
					<p><b>Akira :</b> I see. Well, there is a very simple solution to your problem. Does anyone know where we can find the tool to fix this the spacing in the letters?</p>
					<p><b>Roberto :</b> Marciel, you can use the character panel. First, you need to click on the text tool. After that, the panel will be on the top of the page on the right hand side.</p>
					<p><b>Marciel :</b> Great! Thanks, roberto!</p>
					<p><b>Akira :</b> It is good that you mentioned this problem, Marciel. It gives us the opportunity to explore more about the character panel. It has many utilities for text formatting.</p>
					<p><b>Akira :</b> In addition to changing the spacing between the letters, you can also adjust the size of the text, as well as make the lett ers bold, italic or underlined.</p>												
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit19/ilust_19.jpg') }}" alt="Garotos festejando" class="img-e">
				</figure>
				<div class="video-pratica">
					<video controls="" poster="{{ asset('assets/portal/images/play-video.jpg') }}"  controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo19.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
	</script>
	


@endsection
