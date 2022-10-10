@extends('layouts.template')
@section('titulo','Unit 49 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade49" data-etapa="conversation">
			<h3 class="barlow">UNIT 49</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 49/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen:</b> Do you remember the animation I asked you to see. The one with the mouse
				reciting the bible. Both the animation itself and the emotion transmitted by the mouse
				were fantastic. The idealization of the scenario, the story, the voice synchronization as
				we said and ultimately, the unexpected outcome. I’m sure that nobody expected the
				mouse to preach to the cat. That was both surprising and funny.</p>
			<p><b>John:</b> Everything was thought beforehand to produce such effect. People in general are
				guided buy common sense and when something breaks this rule, we feel that something different was added to our lives.
				Remarkable movies do this with us. For example, nobody expected Spider man to appear in Civil War and take American Captain’s shield.
				That was unexpected and remarkable.</p>
			<p><b>Gleen:</b> Awesome guys. Fantastic observations and conclusions. Guys, that’s it for today.
				I see you guys in the next class ok.</p>

			<figure class="metade esquerda">
				<img src="{{ asset('assets/img/dominating/unit49/conversation1.png') }}" alt="jerry">
			</figure>
			<figure class="metade direita">
				<img src="{{ asset('assets/img/dominating/unit49/conversation2.png') }}" alt="tom">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection