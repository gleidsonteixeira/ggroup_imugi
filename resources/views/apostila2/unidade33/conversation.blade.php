@extends('layouts.template')
@section('titulo','Unit 33 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade33" data-etapa="conversation">
			<h3 class="barlow">UNIT 33</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 33/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Laura:</b> Well guys. The classes were always a surprise for me. The level of engagement and
				contribution of everybody is awesome. You guys are extremely supportive and I could feel
				that in my work. I learn something and go straight to my office and use with my clients. Akira’s
				and john’s suggestions are simply fantastic. Thank you for being so patient with me and my
				nubie questions. Teacher , you are awesome as well. The conduction of the classes and the
				interaction you promote with your questions are insane</p>
			<p><b>John:</b> Guys, I have the same opinion. Classes are cool. The interaction is great.
				The opportunity for sharing knowledge is awesome. Well, everything is fantastic.
				One specific thing I liked a lot. The enthusiasm regarding Comic con. From now on, I won’t
				miss one event. It’s a living lab for anybody who wants to survive in this great heroes, comic
				books and movies universe.</p>
			<p><b>Gleen:</b> Great guys. That’s is for today. See you in the next class.</p>

			<figure class="umquarto">
				<img src="{{ asset('assets/img/dominating/unit33/conversation1.png') }}" alt="Garotos festejando">
			</figure>
			<figure class="umquarto">
				<img src="{{ asset('assets/img/dominating/unit33/conversation2.png') }}" alt="Garotos festejando">
			</figure>
			<figure class="umquarto">
				<img src="{{ asset('assets/img/dominating/unit33/conversation3.png') }}" alt="Garotos festejando">
			</figure>
			<figure class="umquarto">
				<img src="{{ asset('assets/img/dominating/unit33/conversation4.png') }}" alt="Garotos festejando">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection