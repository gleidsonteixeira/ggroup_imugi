@extends('layouts.template')
@section('titulo','Unit 55 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade55" data-etapa="conversation">
			<h3 class="barlow">UNIT 55</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 55/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> Hello guys. How’s it going today? How’s everything with the production of the video.
				didn’t talk about it in the last two classes but it’s time to get back to it.
			</p>
			<p>
				<b>John :</b> Well teacher. We are still working on it but so far, everything is ok.
			</p>
			<p>
				<b>Akira :</b> I think that after the planning phase, the production is less complex. When we finished the script of the video we had already written everything about the characters.
			</p>
			<p>
				<b>Laura :</b> We had already tried to use all the knowledge we have when you told us about the
				way the movies are done. It was much easier to write the last lines of the script with all those tips.
			</p>
			<p>
				<b>Gleen :</b> Great guys. Good to know that. (to be continued)
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit55/conversation.png') }}" alt="estudos">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection