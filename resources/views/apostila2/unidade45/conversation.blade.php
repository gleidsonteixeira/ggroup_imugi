@extends('layouts.template')
@section('titulo','Unit 45 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade45" data-etapa="conversation">
			<h3 class="barlow">UNIT 45</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 45/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>John: </b>Mine is gonna be an old gramdpa who loves to read fiction books. He was a
				physics teacher and knows how to manipulate the reality by changing some variables of
				physics. He can accelerate time or slow it. He can travel in time and because of that, he
				knows what is gonna happen. For example, if he knows that an airplane is going to fall
				down, he can manipulate the gravity at the time of collision and the accident is avoided.</p>
			<p><b>Akira: </b>My character is a forty-year old man who is able to change people’s minds when
				they have communication problems. He is able to speak all the languages in the world.
				Therefore, he is able to mediate any kind of conversation. From a simple argument
				between a couple, to a serious fight between nations. He is able to make people see the
				positive things of both sides and because of that, disagreements never happen.</p>
			<p><b>Gleen: </b>Wow guys. Awesome. I can’t wait to see it finished. Well, next class we go on ok.</p>
			<figure class="metade esquerda">
				<img src="{{ asset('assets/img/dominating/unit45/conversation1.png') }}" alt="Garotos festejando">
			</figure>
			<figure class="metade direita">
				<img src="{{ asset('assets/img/dominating/unit45/conversation2.png') }}" alt="Garotos festejando">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection
