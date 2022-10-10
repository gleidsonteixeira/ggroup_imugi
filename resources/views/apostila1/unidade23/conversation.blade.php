@extends('layouts.template')
@section('titulo','Unit 23 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade23" data-etapa="conversation">
				<h3 class="barlow">UNIT 23 - BRUSHES</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit23/conversation/completo.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Sarah :</b> Hey everyone! Today we’re gonna talk about the brush tool and what you can do with it.</p>
					<p><b>Sarah :</b> The brush is a very important tool in ilustration. It is like a pen or a pencil. Your creations are only limited by your creativity.</p>
					<p><b>Rafael :</b> Sarah, that tool sounds very basic. How does an ilustrator use it?</p>
					<p><b>Kylie :</b> Fael, it’s simple if you know it. But what many people who don’t use photoshop don’t know is that the brush has a variety of colors, textures, shapes, sizes and hardness.</p>
					<p><b>Sarah :</b> Exactly Kylie. So, it is basic, but you can do a lot with it.</p>
					<p><b>Rafael :</b> Got it! Thanks guys!</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit23/ilust_23.jpg') }}" alt="Sarah, Rafael and Kylie" class="img-e">
				</figure>
				<div class="video-pratica">
					<video controls="" poster="{{ asset('assets/portal/images/play-video.jpg') }}"  controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo23.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
