@extends('layouts.template')
@section('titulo','Unit 60 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade60" data-etapa="conversation">
			<h3 class="barlow">UNIT 60</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 60/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Akira :</b> Teacher, I get desperate very easily. Deadlines are a kind of pressure over me. I have to learn how to deal with this factor.
			</p>
			<p>
				<b>Gleen :</b> You’re not used to it yet, Don’t worry, you’ll get to manage everything. Just be open
				to understand that it is something extremely necessary if you want to have success in any
				area. If I had the chance to give an advice for all my students I would advise them to be prepared to deal with pressure for the rest of their lives.
			</p>
			<p>
				<b>Akira :</b> I’ll learn teacher. I believe that if worked closer to the panning department of my company I could learn to deal better with deadlines.
			</p>
			<p>
				<b>Gleen :</b> That’s a good idea to be in touch with this universe. (to be continued).
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit60/conversation.png') }}" alt="trabalho equipe">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection