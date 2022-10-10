@extends('layouts.template')
@section('titulo','Unit 29 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade29" data-etapa="conversation">
			<h3 class="barlow">UNIT 29</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 29/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>John :</b> We do something similar in the magazine. In our case, we have just a channel on
				youtube and a page on facebook. The result is fantastic. We know what our readers
				want, because we check the social media constantly. Actually, we don’t check by
				ourselves. We hired a professional to do that. If you want to be efficient, you should
				find someone who knows what to do regarding Digital marketing.
			</p>
			<p>
				<b>Gleen :</b> Great. I didn’t know about all these possibilities.
			</p>
			<p>
				<b>Laura :</b> Yeah, there are many nice things in this area. From my experience, you ought
				to have somebody to take care of this area for you. You gotta be focused on producing
				based on the info this professional sends you. Have in mind that they are the specialists
				in digital marketing. Give up on doing everything by yourself, otherwise you get crazy.
			</p>
			<p>
				<b>Gleen :</b> Ok guys , next class we continue. John and Akira will talk a bit about their jobs
				ok. See you guys.
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit29/conversation.jpg') }}" alt="pensando grafico">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection