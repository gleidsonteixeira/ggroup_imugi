@extends('layouts.template')
@section('titulo','Unit 41 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade41" data-etapa="conversation">
			<h3 class="barlow">UNIT 41</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 41/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen: </b>Hey you guys, what’s up? How’s everything? I hope everything is ok with you.
				Let’s start the class?</p>
			<p><b>Students: </b>Everything is ok teacher.</p>
			<p><b>Gleen: </b>Did you have time to watch the video I told you in the last class?</p>
			<p><b>Akira: </b>I saw it teacher. What a nice and funny video. I really enjoyed the synchronization
				you mentioned. We can see the movement of the mouse mouth.</p>
			<p><b>John: </b>Teacher, I saw Pulp Fiction as well. Guys, John Travolta is the actor whose house
				has an airport for his private airplane.</p>
			<p><b>Laura: </b>You’re kidding. Is this guy that rich?</p>
			<p><b>Gleen: </b>Rich? He is the actor whose fortune is over a billion dollars.
				Students: wow, that’s insane.</p>
			<p><b>Gleen: </b>Yes guys, acting is a good profession. Ok, let’s go on. (to be continued)</p>
			<figure>
				<img src="{{ asset('assets/img/dominating/unit41/conversation.png') }}" alt="Garotos festejando">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection