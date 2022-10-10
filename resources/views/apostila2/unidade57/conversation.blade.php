@extends('layouts.template')
@section('titulo','Unit 57 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade57" data-etapa="conversation">
			<h3 class="barlow">UNIT 57</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 57/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> Hey you guys, What’s up?
			</p>
			<p>
				<b>Students :</b> Everything is ok teacher, but we are a bit worried with the project. We are behind
				schedule and now we have to hurry up to finish on time. One of the points that will be considered, is the punctuality to hand in the project.
			</p>
			<p>
				<b>Gleen :</b> Ok, maybe I can help you with some ideas. Tell me how’s everything so far. What you
				have already done and what is still missing.
			</p>
			<p>
				<b>Akira :</b> Ok teacher. The script is finished. Laura has already checked it. John is preparing the
				scenarios. He will finish them until the next week. By then, I’ll have finished drawing the
				characters and I’ll also have tested them .
			</p>
			<p>
				<b>Gleen :</b> Guys , it’s not that bad (to be continued)
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit57/conversation.png') }}" alt="naruto">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection