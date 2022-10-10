@extends('layouts.template')
@section('titulo','Unit 9 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

	@include('layouts.menus.mSidebar')
    @include('layouts.header.mHeader')
    		
	<main>
		<!-- Conteúdo principal central -->
		<div class="dashboard">
			<div id="unidade" class="box" data-apostila="apostila1" data-unidade="unidade9" data-etapa="conversation">
				<h3 class="barlow">UNIT 09 - PROFESSOR ANA BEATRIZ</h3>
				<h5 class="barlow">2 - CONVERSATION</h5>
				<span class="play-audio">( Aperte o play )</span>
				<audio controls="" controlslist="nodownload" class="suave">
					<source src="{{ asset('assets/audio/unit9/conversation/conversation.ogg') }}" type="audio/ogg">
				</audio>
				<div class="clear"></div>
				<div class="espacamento">
					<p><b>Beatriz :</b>  Hello class! It is a pleasure to be your teacher for Photoshop and Graphic Design. My name is Ana Beatriz, but please, just call me Beatriz or Bia.</p>
					<p><b>Lucy :</b> Hey Bia! I’m Lucy. Where are you from?</p>
					<p><b>Beatriz :</b> HI there, Lucy! I was born in Rio de Janeiro, Brazil.</p>
					<p><b>Adam :</b> How old are you and what do you do?</p>
					<p><b>Beatriz :</b>  I’m a 24-year-old graphic designer and advertising graduate. I develop company logos, brands and product packaging. </p>
					<p><b>Nicolas:</b> Do you have a hobby, Ms. Beatriz?</p>
					<p><b>Beatriz:</b>  You don’t need to be formal, Nicolas! Call me Bia. And yes, I have a hobby. I love to draw and appreciate art!</p>
				</div>
				<figure>
					<img src="{{ asset('assets/img/playgo/unit9/ilust_09.jpg') }}" alt="Beatriz" class="img-e">
				</figure>
				<div class="video-pratica">
					<video poster="{{ asset('assets/portal/images/play-video.jpg') }}" controls="" controlslist="nodownload" disablepictureinpicture="" src="https://fpeduc.com/assets/videos/playgo9.mp4"></video>
				</div>
			</div>
		</div>
	</main>
	<script>
        activeMenu();
    </script>

@endsection
