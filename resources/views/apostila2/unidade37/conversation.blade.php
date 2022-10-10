@extends('layouts.template')
@section('titulo','Unit 37 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade37" data-etapa="conversation">
			<h3 class="barlow">UNIT 37</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 37/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Akira :</b> Well guys. Let me tell you what I could get from the animations I watched. The first
				thing is the evolution of the story. They are awesome. I watched short videos but the stories
				were great. So, we have to consider writing a very nice sequence for the video.
			</p>
			<p>
				<b>John :</b> Yeah. I realized that. The ones I watched were very objective. I really enjoyed watching all of them.
			</p>
			<p>
				<b>Laura :</b> Great guys. Just one thing that is important in my opinion. The references we’re
				using are great but we gotta be extremely original. We gotta avoid copying or using
				details we saw in the videos. What’s your opinion about that.
			</p>
			<p>
				<b>Students :</b> That’s a very good point Laura. We have the chance to learn more if we bring our own ideas. (to be continued).
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit37/conversation.png') }}" alt="estudos">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection