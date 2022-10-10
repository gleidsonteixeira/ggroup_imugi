@extends('layouts.template')
@section('titulo','Unit 13 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade13" data-etapa="conversation">
			<h3 class="barlow">UNIT 13</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 13/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px"><b>Gleen :</b> Hey you guys. How are you?</p>
			<p><b>Students :</b> Hi teacher. Why are you walking this way? </p>
			<p><b>Gleen :</b> Well, I had a small accident yesterday. I twisted my ankle, feel down and hit my
				right knee on the floor. But I’m ok guys. I went to the orthopedics and it’s nothing
				serious. Let’s start the class?</p>
			<p><b>John :</b> Teacher, can I share something?</p>
			<p><b>Glenn :</b> Yes, of course. What´s up?</p>
			<p><b>John: </b>Do you remember I told you about the new magazine on movie making and
				games? Well, We are going to start working on it next month, after Comic-con. Next
				week I’m traveling to New York to visit a company specialized animation. They created GTA. One of
				the most famous games in the world.</p>
			<p><b>Akira: </b>Buddy, That’s awesome. Are you visiting Rockstar Games in New York? Cool John!
				They are great. Buy the way, I’ll bring you some material I have at home. I took a course
				with them last year.</p>
			<p><b>John: </b>Thanks Akira. I think I’ll need some help on this new job. Nice to know I can count
				on you buddy.</p>
			<p><b>Glenn: </b>Great guys. Congrats John. Anything you need, let us know ok. Well guys, that’s it
				for today. We continue in our next class. Bye. I Have some physiotherapy today.</p>
			<p><b>Students: </b>Ok teacher, taka care.</p>
			<figure>
				<img src="{{ asset('assets/img/dominating/unit13/conversation.jpg') }}" alt="deficiente">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection