@extends('layouts.template')
@section('titulo','Unit 27 | Conversation')
@section('conteudo')
<!-- WRAPPER ALL -->

@include('layouts.menus.mSidebar')
@include('layouts.header.mHeader')

<main>
	<!-- Conteúdo principal central -->
	<div class="dashboard">
		<div id="unidade" class="box" data-apostila="apostila2" data-unidade="unidade27" data-etapa="conversation">
			<h3 class="barlow">UNIT 27</h3>
			<h5 class="barlow">2 - CONVERSATION</h5>
			<span class="play-audio">( Aperte o play )</span>
			<audio controls="" controlslist="nodownload" class="suave">
				<source src="{{ asset('assets/audio/apostila2/UNIT 27/2. CONVERSATION/CONVERSATION.ogg') }}" type="audio/ogg">
			</audio>
			<p style="margin-top: 16px">
				<b>Gleen :</b> Hey you guys. What’s up.
			</p>
			<p>
				<b>Students :</b> Hey you teacher. Are you ok.
			</p>
			<p>
				<b>Akira :</b> By the way, you didn’t say anything about your ankle. Is it ok.
			</p>
			<p>
				<b>Gleen :</b> Yes, it is but I have to use some medicine because it’s not completely healed.
				Another thing is that I have to avoid long periods of time standing to prevent major
				injuries. But all in all everything is ok.
			</p>
			<p>
				<b>Jhon :</b> Do you have to continue with the physiotherapy teacher?
			</p>
			<p>
				<b>Gleen :</b> No, John. It’s not necessary anymore. Ok guys, let’s go on with the class. Tell me
				a bit about the jobs you are doing right now. (To be continued…)
			</p>
			<div style="margin-top: 36px">
				<figure>
					<img src="{{ asset('assets/img/dominating/unit27/conversation.png') }}" alt="medico e paciente">
				</figure>
			</div>
		</div>
	</div>
</main>

<script>
	activeMenu();
</script>

@endsection