@extends('layouts.template')
@section('titulo','Unit 53 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade53" data-etapa="conversation">
			<h3 class="barlow">UNIT 53</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 53/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> Hi guys , how’s everything? Are you ok?
			</p>
			<p>
				<b>Akira :</b> Cool, teacher. By the way, we were talking about Justice League. I watched it this
				weekend. It’s sick. The movie is awesome. I gotta say I got surprised positively with it. I
				was not expecting that. I couldn’t blink an eye till the end of the movie. I read that in its
				first week, they made millions of dollars around the world.
			</p>
			<p>
				<b>Gleen :</b> That’s it. The movie industry has been investing huge money for years to make
				their productions even more appealing and captivating. It’s one of the richest industries
				in the world and it makes millionaires from day to night. Some fortunes are extravagant
				and eccentric as somebody mentioned in one of our last classes. John Travolta’s house is
				connected to his private hangar. However we can’t believe that everybody is successful
				in this industry. Some anonymous actors and actresses have been working for a long
				period of time, and so far, have not gotten any success. This is the reality of this market.
				Besides being a really good professional, it’s necessary to be lucky to get a nice opportunity.
				(to be continued)
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit53/conversation.png') }}" alt="Familia">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection