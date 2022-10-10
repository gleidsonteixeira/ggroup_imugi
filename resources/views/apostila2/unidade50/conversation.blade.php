@extends('layouts.template')
@section('titulo','Unit 50 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade50" data-etapa="conversation">
			<h3 class="barlow">UNIT 50</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 50/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen: </b>Hello guys . How are you? What about your weekend ?</p>
			<p><b>Students: </b> We are ok teacher. It was just a regular weekend. Resting, watching something
				on <b>Tv</b>. Listening to music, well. We had a good time. </p>
			<p><b>Gleen: </b> Great guys! Anything called your attention from what you saw ?</p>
			<p><b>Akira: </b> Teacher, I watched Civil War again. You mentioned the movie in the last class, then
				I decided to see it again. I have followed both Dc Comics and marvel productions and
				they have improved year after year. I believe that, in every movie they release they bring
				an unexpected feature that makes the movie remarkable.</p>
			<p><b>Laura: </b>It’s mind-blowing teacher. You believe that they have already invented everything,
				and then, they come up with something new and we get crazy</p>
			<p>(to be continued)</p>
			<figure>
				<img src="{{ asset('assets/img/dominating/unit50/conversation.png') }}" alt="assistindo tv">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection