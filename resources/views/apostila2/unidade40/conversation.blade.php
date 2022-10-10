@extends('layouts.template')
@section('titulo','Unit 40 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade40" data-etapa="conversation">
			<h3 class="barlow">UNIT 40</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 40/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Glenn :</b> Great guys. Just a suggestion for you. There’s a blender animation on youtube
				that’s awesome to see some Synchronization of body language, and intonation. The
				animator was incredible. Try to find it. It’s a about a mouse which in trying to take a
				piece of cheese from a mouse trap that is very close to a cat. The funny thing is that the
				animator uses the script of pulp fiction when Samuel Jackson recites Ezequiel 25:17.
				Guys , it’s awesome.
			</p>
			<p>
				<b>Akira :</b> Wow teacher. This movie is very old.
			</p>
			<p>
				<b>Gleen :</b> Yes, it is. But for sure one of the best movies ever. The movie, which takes place
				in Los Angeles of the 90’s, won the Oscar of best screenplay. John Travolta, Samuel Jackson and Uma Thurman, won their Oscars too.
			</p>
			<p>
				<b>John :</b> Cool. I’ll watch the animation teacher and also I’ll try to see the movie. It seems to
				be very interesting.
			</p>
			<p>
				<b>Gleen :</b> it’s a cool movie guys. (to be continued)
			</p>
			<div style="margin-top: 36px">
				<iframe width="640" height="360" src="https://www.youtube.com/embed/N63vaUVQHoo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<div class="clear"></div>
				<figure style="margin-top:32px">
					<img src="{{ asset('assets/img/dominating/unit40/conversation.png') }}" alt="estudos">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection