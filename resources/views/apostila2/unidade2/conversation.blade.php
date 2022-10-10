@extends('layouts.template')
@section('titulo','Unit 2 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade2" data-etapa="conversation">
			<h3 class="barlow">UNIT 02</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 2/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:32px">
				<b>Gleen:</b> Well, before we start, let’s introduce some of our new friends. Let me start
				myself. I’m Gleen Frey. I’m 34 years old. I’m from California and I am a graphic designer,
				animation specialist and teacher. Now, you guys are going to introduce your friends, not
				yourself. To do so, you have to interview them. We want to know, full name, age,
				Nationality and profession ok. Is that ok? Ok, 5 minutes for you to prepare your
				introduction about you friends.
			</p>
			<p><b>Gleen:</b> Ok, let’s start. Carlos, please, tell us about your friend.</p>
			<p><b>Carlos:</b> Ok. Hello guys. This is Laura. Her full name is Laura Smith. she’s 22 years old. She’s from England and she’s a video maker.</p>
			<p><b>Gleen:</b> Ok Laura, your turn now. Tell us about your friend.</p>
			<p><b>Laura:</b> Hey you guys, what’s up? This is John Myer. He is 19 years old. He’s from Canada and he’s a graphic designer.</p>
			<p><b>Gleen:</b> Great Laura. Now it’s Your turn John. John: Hello everybody, this is our new friend Akira Okubo. He is American but his family
				is from Japan. He’s 21 years old and he is game developer.</p>
			<p><b>Gleen:</b> Ok guys. Thanks for your help with our new friends. Welcome Laura, John and Akira. Feel comfortable to ask me any question ok.</p>
			<figure class="center-align" style="margin-top:16px">
				<img src="{{ asset('assets/img/dominating/unit2/conversation.png') }}" alt="bandeira reino unido">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection