@extends('layouts.template')
@section('titulo','Unit 48 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade48" data-etapa="conversation">
			<h3 class="barlow">UNIT 48</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 48/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen:</b> Good decision guys. Be smart. You can have a great result by doing it simple. In
				the future, you can try something different like Quentin Tarantino does in Pulp Fiction,
				or something more chaotic like in Butterfly Effect. Although you want to producesomething simple and interesting, you have to think not only about your point of view but
				also about the observer’s perception of the message. The more you can be in the in the
				observer’s position, the better you are going to connect with them.</p>
			<p><b>Akira:</b> I understand teacher. We have to think not only about the production of the
				movie but about the emotion we want to transmit. Good movies are able to captivate
				viewers as we saw in the animations we watched.</p>
			<p><b>Gleen:</b> That’s it. This is the game.</p>
			<br>
			<p>(to be continued)</p>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection