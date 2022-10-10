@extends('layouts.template')
@section('titulo','Unit 24 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade24" data-etapa="conversation">
			<h3 class="barlow">UNIT 24</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 24/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen:</b> How’s everything guys? Is everything ok with the new special organization of the
				class? Laura, were you able to set up the computer for us to use.</p>
			<p><b>Akira:</b> Teacher, I liked the position of the table but we won’t be able to get closer to the
				white board from the right side of the table.</p>
			<p><b>John:</b> No problem with that Akira, we are able to write on the board anyways.</p>
			<p><b>Laura:</b> Teacher. I’m almost done with the computer. I was not able to finish everything
				yesterday because the Installing CD was locked in the drawer. But don’t worry, I’ll be able
				to finish everything up to the end of the class.</p>
			<p><b>Gleen:</b> Ok guys, thanks for your help</p>

			<figure>
				<img src="{{ asset('assets/img/dominating/unit24/conversation.jpg') }}" alt="computação">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection