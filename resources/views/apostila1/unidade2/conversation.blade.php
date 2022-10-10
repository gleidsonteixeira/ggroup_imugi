@extends('layouts.template')
@section('titulo','Unit 2 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade2" data-etapa="conversation">
				<h3 class="barlow">UNIT 02 - INTRODUCTION TO PHOTOSHOP</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit2/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<div class="espacamento">
					<p><b>Professor Ludemann :</b> HI everyone! Today is our second lesson. The subject today is Photoshop.</p>
					<p><b>Professor Ludemann :</b> The first version of this software was created in 1987 by two brothers. Their names are Thomas and John Knoll. Today, Photoshop is necessary in many professions. The word “Photoshop” is now a verb too!</p>
					<p><b>Professor Ludemann :</b>  Do any of you use Photoshop?</p>
					<p><b>João :</b>  I do, professor! I use it to edit my pictures because I am a photographer!</p>
					<p><b>Professor Ludemann :</b> Very good João! What about you, Bruna? Do you use Photoshop?</p>
					<p><b>Bruna :</b>  I do! I am a web designer. I need Photoshop to develop and edit layouts for sites.</p>
					<p><b>Professor Ludemann :</b> Thank you! You and João are great examples of the importance of Photoshop for professionals in the area of graphic design production.</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit2/unidade1.png') }}" alt="Garotos festejando" class="img-e">
				</figure>
				<div class="video-pratica">
					<video controls="" poster="{{ asset('assets/portal/images/play-video.jpg') }}" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo2.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
