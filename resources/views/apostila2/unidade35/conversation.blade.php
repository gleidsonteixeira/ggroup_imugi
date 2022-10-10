@extends('layouts.template')
@section('titulo','Unit 35 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">

		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade35" data-etapa="conversation">
			<h3 class="barlow">UNIT 35</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>

			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 35/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top:16px"><b>Gleen:</b> Guys, I’ll give you some time to talk about the project ok. 15 minutes. Pretend
				this is a real project. You’re supposed to act as professional movie makers from now on,
				all right? Stt Great teacher. Ok. Let’s start.</p>
			<p><b>Akira:</b> Guys , in order to start, we could search for some references. Since we’re supposed to act as professionals, I believe that this would be the first step. Usually, when
				they want to start a project they go for information and later, after gathering as much as
				they can, they start brainstorming what to do. What do you think about it?</p>
			<p><b>John:</b> Awesome. What if we start watching at least 4 different animations. We would be
				in touch with real productions that could inspire us.
			</p>
			<p>
				<b>Laura</b>: That’s it. So let’s start ok. For the next week, we should watch at least 4 different
				animations and bring as many notes as we can.
			</p>
			<p><b>Gleen:</b> Great guys. See you I the next class ok.</p>

			<figure>
				<img src="{{ asset('assets/img/dominating/unit35/conversation.png') }}" alt="olhando tela">
			</figure>
		</div>
	</div>
</main>
<script>
	activeMenu();
</script>

@endsection