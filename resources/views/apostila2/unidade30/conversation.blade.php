@extends('layouts.template')
@section('titulo','Unit 30 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade30" data-etapa="conversation">
			<h3 class="barlow">UNIT 30</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 30/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> Hey you guys, what’s up? Is everything ok today? Today we are gonna continue
				the conversation we started last class ok. Would you like to start John.
			</p>
			<p>
				<b>John :</b> Yes, for sure teacher. I would like to say that I’m in love with the new magazine.
				After Comic Con things got clearer for me. Our editor prepared the briefing and I started
				working on it; The trip to new York was awesome. I have to say that it would be great to
				live and work in New York. The city is fantastic.
			</p>
			<p>
				<b>Gleen :</b> Great John. I agree with you. New York is a great place. For both professional
				and personal life. I also like San Francisco, but for sure I’d spend some time in NY. Spider man City. (to be continued)
			</p>
			<figure class="umterco">
				<img src="{{ asset('assets/img/dominating/unit30/conversation1.jpg') }}" alt="revista">
			</figure>

			<figure class="umterco">
				<img src="{{ asset('assets/img/dominating/unit30/conversation2.jpg') }}" alt="revista">
			</figure>

			<figure class="umterco">
				<img src="{{ asset('assets/img/dominating/unit30/conversation3.png') }}" alt="revista">
			</figure>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection