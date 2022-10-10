@extends('layouts.template')
@section('titulo','Unit 58 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade58" data-etapa="conversation">
			<h3 class="barlow">UNIT 58</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 58/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> Great, then let’s check each item to see how I can help you. John, what do you need to finish the scenarios?
			</p>
			<p>
				<b>John :</b> Teacher, I’m working on the lighting. All the other things are ok. This is the only thing that is missing.
			</p>
			<p>
				<b>Gleen :</b> Great. This is the hardest part. The lighting phase needs time and attention. I believe
				that in the end of the project you will have been working on it for at least 30 percent of your time.
			</p>
			<p>
				<b>John :</b> That’s it teacher. A little bit more, I’d say. I have already spent two weeks on it but I
				believe that in one more week I’m done with it.
			</p>
			<p>
				<b>Gleen :</b> Great. John, in order to help Akira with the synchronization of the characterr with the
				scenario, you could send him the draft, so he could start marking the positions in the scenario. When you finish lighting, Akira will have finished marking the positions. Then you’ll need
				just to sync voice and add the background sound.
			</p>
			<p>
				<b>Akira and John :</b> Great teacher. Thanks.
			</p>
			<p>
				<b>Gleen :</b> Ok guys. That’s it for today. I see you in the next class ok.
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit58/conversation.png') }}" alt="ensinando">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection