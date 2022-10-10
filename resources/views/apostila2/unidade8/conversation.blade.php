@extends('layouts.template')
@section('titulo','Unit 8 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade8" data-etapa="conversation">
			<h3 class="barlow">UNIT 8</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 8/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> Hey you guys. How’s everything? I hope you are excited for our class today. The
				class is going to be mind blowing. First of all, thank you for sharing with us a little bit of
				your routine and how you guys develop you jobs. Sharing is the best way to grow as a
				professional. I’m very happy with your engagement. Well, let’s start the class. Guys,
				today I want to start asking you what are your preferences and why. For examples: What
				softwares you use and why do prefer them ok. Can you start Akira?
			</p>
			<p>
				<b>Akira :</b> Yes teacher. That’s ok for me. Let me talk about different languages. As a Game
				Developer, I have to know about some programming languages. For example: PHP, Java,
				SQL, Python and many others. My favorite one is Python .Python is as efficient as Java
				but It’s easier to learn how to use it and you can code with it faster. In my opinion, It’s
				more intuitive than the others. Java is more famous and more robust but, as I said before, Python is my best buddy when I have to code. Regarding price.
			</p>
			<p><b>Gleen :</b> ok Akira, Thanks for sharing. Laura and John, Can you bring your contributions next class?</p>
			<p>
				<b>Laura and John :</b> Of course, that’s ok for us.
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit8/conversation.png') }}" alt="linguagem programação">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection